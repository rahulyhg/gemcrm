<?php
$id = $_POST['id'];
$from = $_POST['from'];
include 'dbconnect.php';
$to = $_POST['to'];
if ($from == '') {
    $from = date("08/30/1994");
}
if ($to == '') {
    $to = date("m/d/Y");
}
$from = date('Y-m-d', strtotime($from));
$to = date('Y-m-d', strtotime($to));
if ($id == '0') {
    $q = "select * from tbl_enquiry where date(enq_created_on) between '$from' and '$to'";
}
if ($id == 1) {
    $q = "select * from tbl_enquiry where date(enq_created_on) between '$from' and '$to'";
}
if ($id == 2) {
    $q = "select * from tbl_enquiry where enq_status='New' and  date(enq_created_on) between '$from' and '$to'";
}
if ($id == 3) {
    $q = "select * from tbl_enquiry where enq_status='Pending' and  date(enq_created_on) between '$from' and '$to'";
}
if ($id == 4) {
    $q = "select * from tbl_enquiry where enq_status='Process' and date(enq_created_on) between '$from' and '$to'";
}
if ($id == 5) {
    $q = "select * from tbl_enquiry  where enq_status='Completed' and date(enq_created_on) between '$from' and '$to'";
}
if ($id == 6) {
    $q = "select * from tbl_enquiry where enq_status='Dropped' and date(enq_created_on) between '$from' and '$to'";
} else {
    $q = "select * from tbl_enquiry where date(enq_created_on) between '$from' and '$to'";
}
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Enquiries.xls");
?>
<style>
    table>th{
        border:1px solid #000;
    }
</style>

<table class="" id="example-2" style="margin-left: 26px;  width: 95%;border:1px solid #000">
    <thead>
        <tr style="border:1px solid #000">
            <th>S.No</th>
            <th> Regsitered by</th>
            <th>Enquiry Number</th>  
            <th>Status </th>
            <th>Enquiry Product</th>
            <th>Enquiry alloted to</th>    												   
            <th>Customer Name</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Phone No</th>
            <th>Contact Person Name</th>
            <th>Contact Person Phone No</th>
            <th>Email Id</th>
            <th>Add On Email Id</th>
            <th>Add On Email Id</th>
            <th>Add On Email Id</th>
            <th>Enquiry Created On</th>
            <th>Enquiry Completed On</th>


        </tr>
    </thead>

    <tbody>
        <?php
        $sno = "0";
        $result = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_array($result)) {
            $usercode = $row['enq_created_by'];
$sno=$sno + 1;
            $comp_attending_date = $row['enq_created_on'];

            $qs = "SELECT * FROM `tbl_user` WHERE `user_code`='$usercode'";
            $ress = mysqli_query($conn, $qs);
            $rows = mysqli_fetch_array($ress);
            $emp_name = $rows['user_name'];
            $ser_eng_code = $row['enq_alloted_to'];
            if ($ser_eng_code == '') {
                $empname = "NA";
            } else {
          $qst = "SELECT * FROM `tbl_user` WHERE `user_code`='$ser_eng_code'";
                $resst = mysqli_query($conn, $qst);
                $rowst = mysqli_fetch_array($resst);
                  $empname = $rowst['user_name'];
            }
            $id = $row['enq_product_series'];
            $qst = mysqli_fetch_array(mysqli_query($conn, "select * from tbl_product_group where product_id='$id'"));
            ?>
            <tr style="border:1px solid #000">
                <td><?php echo $sno; ?></td>
                <td><?php echo $emp_name ?></td>
                <td><?php echo $row['enq_no']; ?></td>
                <td><?php echo $row['enq_status']; ?></td>
                <td><?php echo $qst['product_group_name']; ?></td>
                <td><?php echo $empname; ?></td>
                <td><?php echo $row['enq_company_name']; ?></td>
                <td><?php echo $row['enq_company_address']; ?></td>
                <td><?php echo $row['enq_company_pincode']; ?></td>
                <td><?php echo $row['enq_company_phn_no']; ?></td>
                <td><?php echo $row['enq_contact_person_name']; ?></td>
                <td><?php echo $row['enq_contact_person_phone_no']; ?></td>
                <td><?php echo $row['enq_company_email']; ?></td>
                <td><?php echo $row['enq_addon_email1']; ?></td>
                <td><?php echo $row['enq_addon_email2']; ?></td>
                <td><?php echo $row['enq_addon_email3']; ?></td>
                <td><?php echo $row['enq_created_on']; ?></td>
<td><?php echo $row['enq_completed_on']; ?></td>
            </tr>
            </tr>

        <?php } ?>
    </tbody>
</table>

