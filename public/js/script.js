	  $(function(){ 
	  	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	  });
	  $(document).on("click", "#deleteauthordialog", function ()
	  {
     		var authorId = $(this).data('id');
     		$("#authorid").val( authorId );
     		var authorName = $(this).data('name');
     		$("#showauthorname").val(authorName);

	  });
	  $(document).on("click", "#deletegenredialog", function ()
	  {
     		var genreId = $(this).data('id');
     		$("#genreid").val( genreId );
     		var genreName = $(this).data('name');
     		$("#showgenrename").val(genreName);

	  });
	  $(document).on("click", "#deletecustomerdialog", function ()
	  {
     		var customerId = $(this).data('id');
     		$("#customerid").val( customerId );
     		var customerName = $(this).data('name');
     		$("#showcustomername").val(customerName);

	  });
	  
	  
	$('.login_message a').click(function(){
   		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});
	
	var $input = $("#author");
	$input.typeahead({
  	source: authors,
  	autoSelect: true,
  	afterSelect: function(item) {
			  	$("#authorhidden").val(item.id); 
    }
	});
	$input.change(function() {
  	var current = $input.typeahead("getActive");
  	if (current) {
	    if (current.name == $input.val()) {
    	} else {
    	}
  	} else {
  	}
	});
	
