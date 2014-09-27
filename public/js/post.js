$(document).ready(function(){

	// New Post
	$("#create_post").click(function(e) {
        var post_name = $("#post_name").val();
        var post_text = $("#post_text").val();
        if (post_name.length > 0 && 
        	post_text.length > 0) {
	        
	        var conf = confirm("Are you sure?");
	        e.preventDefault();
	        if(conf) {
				var form =$("#form_new_post");
			
				//Authorized
				appendInfoForm(form,'authorized',true);
				
				form.submit();
	        }
	    } else {
	    	alert("The post must have a name and text");
	    }
    });

	// Edit post
	$("#modify_post").click(function(e) {
        var post_name = $("#post_name").val();
        var post_text = $("#post_text").val();
        if (post_name.length > 0 && 
        	post_text.length > 0) {
	        
	        var conf = confirm("Are you sure?");
	        e.preventDefault();
	        if(conf) {
				var form =$("#form_modify_post");
			
				//Authorized
				appendInfoForm(form,'authorized',true);
				
				form.submit();
	        }
	    } else {
	    	alert("The post must have a name and text");
	    }
    });
	
	// Delete
	$(".delete_post").click(function(e) {
        var conf = confirm("Are you sure?");
        e.preventDefault();
        if(conf) {
        	var post_id = $(this).parent().attr("id");
			var form =$("#form_delete_post");
			
			appendInfoForm(form,'id',post_id);
			
			//Authorized
			appendInfoForm(form,'authorized',true);
			
			//Return page
			appendInfoForm(form,'return_page','home');

			form.submit();
        }
    });
});