
function deletecampaign(id){
 var result= confirm ("Are you sure for delete?");
	 //alert(id);
	 if(result)
	 {
		// alert('sss');
		  $.ajax({
                    type: "POST",
                    url: 'campaign_delete.php',
                    data: {
            id: id,
            
        },
		 success: function(data)
    {   
    alert(data);
   // alert("Category is Updated Successfully");    
           
    location.reload();
    },
		
                   
                });
		
	 }
	 
	
}
