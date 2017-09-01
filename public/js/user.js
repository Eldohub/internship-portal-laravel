/*
* GLOBAL VARS
*/
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); //For all POST Requests


//get the ID
function grabUserID(id) {
	//share to global/window
	user_id = id;
}



/*
* This function saves the daily entry
*/
function saveEntry(){
	
	$.LoadingOverlay("show");

	$.ajax({
	    url : "/admin/papers/unpublished/preview",
	    type: "POST",
    	dataType: 'JSON',
	    data : {
	    	_token: CSRF_TOKEN,
	        uID: user_id,
	    },
	    success: function(response)
	    {	
	    	$.LoadingOverlay("hide");
	        //Successful, reload the current page
	        if (response.status == "success") {
	        	//Echo out first then reload
	        	swal(
				  'User entry saved!',
				  response.msg,
				  'success'
				)
				//console.log(response.data)

	        	reloadPage();
	        } 
	    },
	    error: function (jqXHR, textStatus, errorThrown)
	    {
	    	$.LoadingOverlay("hide");
	    	//Incase of transmission failure
	        if (textStatus == "error") {
	        	errorProcessing();
	        }
	    }
	});	

}



/*
* Error message upon failed request
*/
function errorProcessing() {
	//alert(errorThrown);
	swal(
	  'Error!',
	  'There was a problem processing your request. Kindly try again after sometime.',
	  'error'
	)
}

/*
* Reloads the requesting page
*/
function reloadPage() {
	setTimeout(function(){
	   window.location.reload(true);
	}, 1000);
}