<?php

require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();

$response = array();

if(isset($_REQUEST['enq_no']) && isset($_REQUEST['companyname'])&& isset($_REQUEST['email'])&& isset($_REQUEST['address'])&& isset($_REQUEST['pin'])&& isset($_REQUEST['phone_no'])&&isset($_REQUEST['contact_person']) && isset($_REQUEST['contact_person_phone']) && isset($_REQUEST['enq_through'])  && isset($_REQUEST['enq_desc'])&&isset($_REQUEST['status'])&&isset($_REQUEST['user'])){

$cpname=$_REQUEST['contact_person'];
$company_name=$_REQUEST['companyname'];
	$Date = date('Y-m-d H:i:s');
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$pin=$_REQUEST['pin'];
$phone_no=$_REQUEST['phone_no'];
$enq_desc=$_REQUEST['enq_desc'];
$contact_person_phone=$_REQUEST['contact_person_phone'];
$status=$_REQUEST['status'];
$enq_no=$_REQUEST['enq_no'];
$Date = date('Y-m-d H:i:s');
$enq_no=$_REQUEST['enq_no'];
$user=$_REQUEST['user'];
$ga=$_REQUEST['ga'];
if($_REQUEST['status']=='New Quotation'){
	$quotationnno="SELECT  `quotation_no` FROM  `tbl_quotation` WHERE quotation_status='1' ORDER BY  `quotation_no` DESC";


	$result1 = mysqli_query($db->connect(),$quotationnno);
$row1 = mysqli_fetch_array($result1);
$qno=$row1['quotation_no']+1;
//price1
if($_REQUEST['pro_price']!=''){

    $pro_group=$_REQUEST['pro_group'];
     $pro_model=$_REQUEST['pro_model'];
     $pro_model_no=$_REQUEST['pro_model_no']; 
     $pro_model_type=$_REQUEST['pro_model_type'];
     $pro_qty=$_REQUEST['pro_qty']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price']; 
   $priceadds=$_REQUEST['price_add'];
 $tax=$_REQUEST['tax1'];
 $vat=$_REQUEST['tax2'];
 $excise=$_REQUEST['tax3'];
 $erection=$_REQUEST['erection'];
 $delivery=$_REQUEST['delivery'];
 $freight_terms=$_REQUEST['freight_terms'];
if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);




$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`,`created_by`,`quotation_vattax`,`quotation_excise`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$user','$vat','$excise','$erection','$freight_terms','$delivery')";	

	$result = mysqli_query($db->connect(),$Q);
	$response["success"] = 1;


}
//price2
if($_REQUEST['pro_price2']!=''){

    $pro_group=$_REQUEST['pro_group2'];
     $pro_model=$_REQUEST['pro_model2'];
     $pro_model_no=$_REQUEST['pro_model_no2']; 
     $pro_model_type=$_REQUEST['pro_model_type2'];
     $pro_qty=$_REQUEST['pro_qty2']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price2']; 
   $priceadds=$_REQUEST['price_add2'];
 $tax=$_REQUEST['tax1'];
 $vat=$_REQUEST['tax2'];
 $excise=$_REQUEST['tax3'];
 $erection=$_REQUEST['erection'];
 $delivery=$_REQUEST['delivery'];
 $freight_terms=$_REQUEST['freight_terms'];
if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);





$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`,`created_by`,`quotation_vattax`,`quotation_excise`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$user','$vat','$excise','$erection','$freight_terms','$delivery')";	
	$result = mysqli_query($db->connect(),$Q);
	$response["success2"] = 1;

}
//price3
if($_REQUEST['pro_price3']!=''){

     $pro_group=$_REQUEST['pro_group3'];
     $pro_model=$_REQUEST['pro_model3'];
     $pro_model_no=$_REQUEST['pro_model_no3']; 
     $pro_model_type=$_REQUEST['pro_model_type3'];
     $pro_qty=$_REQUEST['pro_qty3']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price3']; 
  $tax=$_REQUEST['tax1'];
 $vat=$_REQUEST['tax2'];
 $excise=$_REQUEST['tax3'];
 $erection=$_REQUEST['erection'];
 $delivery=$_REQUEST['delivery'];
 $freight_terms=$_REQUEST['freight_terms'];
   $priceadds=$_REQUEST['price_add3'];
 
if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);

$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`,`created_by`,`quotation_vattax`,`quotation_excise`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$user','$vat','$excise','$erection','$freight_terms','$delivery')";	$result = mysqli_query($db->connect(),$Q);	
$response["success3"] = 1;


}
if($_REQUEST['pro_price4']!=''){

  $pro_group=$_REQUEST['pro_group4'];
     $pro_model=$_REQUEST['pro_model4'];
     $pro_model_no=$_REQUEST['pro_model_no4']; 
     $pro_model_type=$_REQUEST['pro_model_type4'];
     $pro_qty=$_REQUEST['pro_qty4']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price4']; 
 $erection=$_REQUEST['erection'];
 $delivery=$_REQUEST['delivery'];
 $freight_terms=$_REQUEST['freight_terms'];
   $priceadds=$_REQUEST['price_add4'];
 $tax=$_REQUEST['tax1'];
 $vat=$_REQUEST['tax2'];
 $excise=$_REQUEST['tax3'];

if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);



$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`,`created_by`,`quotation_vattax`,`quotation_excise`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$user','$vat','$excise','$erection','$freight_terms','$delivery')";		
	$result = mysqli_query($db->connect(),$Q);	$response["success4"] = 1;


}
if($_REQUEST['pro_price5']!=''){

    $pro_group=$_REQUEST['pro_group5'];
     $pro_model=$_REQUEST['pro_model5'];
     $pro_model_no=$_REQUEST['pro_model_no5']; 
     $pro_model_type=$_REQUEST['pro_model_type5'];
     $pro_qty=$_REQUEST['pro_qty5']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price5']; 
   $priceadds=$_REQUEST['price_add5'];
 $tax=$_REQUEST['tax1'];
 $vat=$_REQUEST['tax2'];
 $excise=$_REQUEST['tax3'];
 $erection=$_REQUEST['erection'];
 $delivery=$_REQUEST['delivery'];
 $freight_terms=$_REQUEST['freight_terms'];
if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);
$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`,`created_by`,`quotation_vattax`,`quotation_excise`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$user','$vat','$excise','$erection','$freight_terms','$delivery')";		
	$result = mysqli_query($db->connect(),$Q);	$response["success5"] = 1;


}
if($_REQUEST['pro_price6']!=''){

     $pro_group=$_REQUEST['pro_group6'];
     $pro_model=$_REQUEST['pro_model6'];
     $pro_model_no=$_REQUEST['pro_model_no6']; 
     $pro_model_type=$_REQUEST['pro_model_type6'];
     $pro_qty=$_REQUEST['pro_qty6']; 
     $discount=$_REQUEST['discount']; 
     $pro_price=$_REQUEST['pro_price6']; 
   $priceadds=$_REQUEST['price_add6'];
 $tax=$_REQUEST['tax1'];
 $vat=$_REQUEST['tax2'];
 $excise=$_REQUEST['tax3'];
 $erection=$_REQUEST['erection'];
 $delivery=$_REQUEST['delivery'];
 $freight_terms=$_REQUEST['freight_terms'];
if($priceadds!='' && $priceadds!='0'){
$percent=($priceadds/100)*$pro_price;
$pro_price=$pro_price+$percent;
}
 $pro_price=round($pro_price);




$Q="INSERT INTO `tbl_quotation`(`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`,`attach_ga`,`tax`,`created_by`,`quotation_vattax`,`quotation_excise`,`quotation_erection`,`quotation_freight`,`quotation_deleivery`) VALUES ('','$qno','$enq_no','$pro_group','$pro_model','$pro_model_no','$pro_model_type','$pro_qty','$pro_price','$discount','$Date','1','$ga','$tax','$user','$vat','$excise','$erection','$freight_terms','$delivery')";	
	$result = mysqli_query($db->connect(),$Q);	
$response["success6"] = 1;


}
$response["quotation_no"] =$qno;

$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_process_quotation_no`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$qno','$Date')";
	$result3 = mysqli_query($db->connect(),$sql3);	

$response["quotation_no"] =$qno;
 $response["notification"] = "Quotation created successfully ";
    echo json_encode($response);


}
else if($_REQUEST['status']=='Appointment'){

 $date=$_REQUEST['date'];
     $time=$_REQUEST['time'];
     $appointment_through=$_REQUEST['appointment_through']; 
     $appointment_location=$_REQUEST['appointment_location'];
     $appointment_description=$_REQUEST['appointment_description']; 
	$Date = date('Y-m-d H:i:s');

       $user=$_REQUEST['user']; 
 $sql="INSERT INTO `tbl_appointment`(`appointment_id`, `appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`,`appointment_company_name`, `appointment_through`, `appointment_location`, `appointment_description`, `appointment_created_on`, `appointment_status`) VALUES ('','$date','$time',$user,'$cpname','$company_name','$appointment_through','$appointment_location','$appointment_description','$Date','1')";

$result1=mysqli_query($db->connect(),$sql);
  $ids_query = mysqli_query($db->connect(),"select appointment_id from tbl_appointment order by appointment_id desc");
$ids_fetch=mysqli_fetch_array($ids_query);
 $ids=$ids_fetch['appointment_id'];
$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_process_appointment_id`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$ids','$Date')";

mysqli_query($db->connect(),$sql3);
$response["success"] = 1;
    $response["notification"] = "Appointment created successfully ";
    echo json_encode($response);


}
else if($_REQUEST['status']=='Call With TL'){

   $enq_nos='Enquiry No';

$enq_nos.=$enq_no;

       $user=$_REQUEST['user']; 

	 $sql = "INSERT INTO `tbl_task`(`task_name`, `task_assigned_by`, `task_assigned_to`, `task_about`, `task_report_description`, `task_created_on`, `task_closed_on`, `task_status`) VALUES('$enq_nos','$user','1002','enquiry','$enq_desc','$Date','','0')";
$res = mysqli_query($db->connect(),$sql);
      $ids_query = mysqli_query($db->connect(),"select task_id from tbl_task order by task_id desc");
$ids_fetch=mysqli_fetch_array($ids_query);
 $ids=$ids_fetch['task_id'];

$sql3="INSERT INTO `tbl_enq_process`(`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_task_id`, `enq_process_update_on`) VALUES ('','$enq_no','$status','$enq_desc','$ids','$Date')";
	$result3 = mysqli_query($db->connect(),$sql3);	
$response["success"] = 1;
    $response["notification"] = "Task created successfully ";
    echo json_encode($response);
}
$email=$_REQUEST['email'];
$addon_email=$_REQUEST['addon_email'];
$addon_email2=$_REQUEST['addon_email2'];
$addon_email3=$_REQUEST['addon_email3'];
$address=$_REQUEST['address'];
$pin=$_REQUEST['pin'];
$phone_no=$_REQUEST['phone_no'];
$enq_desc=$_REQUEST['enq_desc'];
$contact_person_phone=$_REQUEST['contact_person_phone'];
$status=$_REQUEST['status'];
$sql2="UPDATE `tbl_enquiry` SET `enq_company_email`='$email',`enq_addon_email1`='$addon_email',`enq_addon_email2`='$addon_email2',`enq_addon_email3`='$addon_email3',`enq_company_phn_no`='$phone_no',`enq_company_address`='$address',`enq_company_pincode`='$pin',`enq_contact_person_phone_no`='$contact_person_phone',`enq_description`='enq_desc',`enq_status`='Process' where `enq_no`='$enq_no'";
  $result2=mysqli_query($db->connect(),$sql2);

}
else{
  $response["success"] = 0;
    $response["notification"] = "Campaign Data Not Found";
    echo json_encode($response);
}



?>