
function login() {
	var email = $("#email").val();
	var userPassword = $("#password").val();
	
	if(email==='') {
		$("#error").modal('show');
		$("#errorMessage").html('Enter Email');
		return;
	}
	
	if(userPassword==='') {
		$("#error").modal('show');
		$("#errorMessage").html('Enter Password');
		return;
	}
		   
	$.ajax({
		url: 'back/entry.php',
		type: 'post',
		data: {
			'login': 'YES',
			'email': email,
			'password': userPassword
		},
		beforeSend: function(){
			$("#entry").html('<img src="images/loading.gif" style="width:20px" />');
		},
		success: function(response){
			$('.circle').hide();
			if(response=='E') {
				$("#error").modal('show');
				$("#errorMessage").html('Invalid Email');
				$("#entry").html('Login');
			}
			if(response=='P') {
				$("#error").modal('show');
				$("#errorMessage").html('Invalid Password');
				$("#entry").html('Login');
			}
			if(response=='S') {
				window.location.replace("index.php");
			}
		}
	});	
}

	
$(document).ready(function(){

	$("select.currency").change(function(){
	var selectedCategory = $(this).children("option:selected").val();
	//alert(selectedCategory);
	
	/*
	$.ajax(
		{
			url: 'back/category_feed.php?category=' + selectedCategory,
			type: "get",
			beforeSend: function(){
			$("#posts").html("<figure style='text-align:center' ><img src='images/loading.gif' style='width:50px' /></figure>");				
			}
		})
		.done(function(data){
			if(data=='E') {
				$('#DialogError').modal('show');
				$('#errorMessage').html('No Posts in '+selectedCategory+'');
				$("#posts").html("<figure style='text-align:center' ><img src='images/loading.gif' style='width:50px' /></figure>").load("back/feed.php");			
			}else {
				$("#posts").html(data);
			}
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			$('#DialogError').modal('show');
			$('#errorMessage').html(thrownError);
			$("#posts").html("<figure style='text-align:center' ><img src='images/loading.gif' style='width:50px' /></figure>").load("back/feed.php");
		});
	*/
				
		});
});

function share(entry) {
	var share_id = entry.id;
	var sh_id = '.share-display' + share_id;
	var com_id = '.comment-display' + share_id;
	if($(sh_id).css('display') == 'none'){
		$(sh_id).show();
		$(com_id).hide();
	}else {
		$(sh_id).hide();
	}		
}
