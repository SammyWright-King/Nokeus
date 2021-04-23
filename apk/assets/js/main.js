$(document).ready(function() {
  "use strict";

  PageLoad();

  $('.avatar').on('click', function() {
      //$('.chat-content').addClass('mobile-active');
      //return false;
    });

  $('.back-chat-div').on('click', function() {
    $('.chat-content').removeClass('mobile-active');
    return false;
  });
 

  $('.fab').on('click', function() {
    $(this).toggleClass('open');
    $('.option').toggleClass('open');
    $('.close').toggleClass('open');
  })

  $('#floating-button').on('click', function() {
    $(this).closest('#container-floating').toggleClass('is-opened');
    $('.nds').removeClass('is-opened');
    $('body').toggleClass('is-blur');
  })

    $('.nds').on('click', function() {
      $('.nds').not(this).removeClass('is-opened');
      $(this).toggleClass('is-opened');
    })

  $('.emoji-bttn').on('click', function() {
      $('.emoji-wrap').toggleClass('active');
      return false;
  });

  $('#sidebar-right').on('click', function() {
      $('.perspective').addClass('animate');
      return false;
  });
  $('#close-sidebar').on('click', function() {
      $('.perspective').removeClass('animate');
      return false;
  });

  $('.add').on('click', function() {
      if ($(this).prev().val() < 3) {
        $(this).prev().val(+$(this).prev().val() + 1);
      }
  });
  $('.sub').on('click', function() {
      if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
      }
  });

  $('[data-toggle="tooltip"]').tooltip()

  
  $('.shop-categoris').owlCarousel({
      loop:false,
      margin:0,
      nav:false,
      autoplay:false,  
      dots:false,
      items:5
  })

  $('.special-slider').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:false,  
      dots:false,
      items:2
    })
  $('.food-cat').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:false,  
      dots:false,
      items:3  
  })
 

  var $owl = $('.item-category-link')

  $owl.children().each( function( index ) {
    $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
  });

  $owl.owlCarousel({
    center: true,
    loop: true,
    items: 4,
    autoWidth:true,
    dots:false,
  });

  $(document).on('click', '.owl-item>div.item.text-left', function() {
    var data_tab = $(this).find('h4').attr('data-profile');
     
        $('.profile-content-tab').removeClass('active-tab');
        $('#'+data_tab).addClass('active-tab');
    
    var $speed = 300; 
    $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
  });

  $('.travel-slider').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:false,  
      dots:false,
      items:2
       
  })
  $('.single-product').owlCarousel({
      loop:true,
      margin:0,
      nav:true,
      autoplay:false,  
      dots:true,
      items:1       
  })
  $('.item-banner').owlCarousel({
      loop:false,
      margin:10,
      nav:false,
      autoplay:false,  
      dots:false,
      items:2
       
    })

  $('.slider-0').owlCarousel({
      loop:false,
      margin:5,
      nav:false,
      autoplay:false,  
      dots:false,
      responsive:{
          0:{
              items:6
          },
          600:{
              items:6
          },
          1000:{
              items:6
          },
          1400:{
              items:3
          }
      }
  })

  var owlslide_1 = $('.slider-1')
    owlslide_1.owlCarousel({
      loop:false,
      margin:0,
      nav:false,
      autoplay:false,  
      mouseDrag:true,  
      touchDrag:true,  
      dots:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
    })

    $('.start-tour,.next-tour').on('click', function() {
      owlslide_1.trigger('next.owl.carousel');
    });
  
  
  
});

function PageLoad() {
  jQuery(window).on("load", function(){
        setInterval(function(){ 
            $('.preloader-wrap').fadeOut(300);
        }, 400);
        setInterval(function(){ 
            $('body').addClass('loaded');
        }, 600); 
  });
}

function LinkClick(url){
  $(".link-preloader").show();
  $("#bucket").load(url, function(){
    $(".link-preloader").hide();
  });
}

function newPage(url){
  $(".link-preloader").show();
  $('#search-results').html('');
  $("#perspective").load(url, function(){
    $(".link-preloader").hide();
  });
}

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
	
	$("#posts").html("<figure style='text-align:center' ><img src='images/loading.gif' style='width:50px' /></figure>").load("back/feed.php");
	$("#userProducts").html("<figure style='text-align:center' ><img src='images/loading.gif' style='width:50px' /></figure>").load("back/user_products.php");
	
	$("select.category").change(function(){
	var selectedCategory = $(this).children("option:selected").val();

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

function comment(entry) {
	var comment_id = entry.id;
	var com_id = '.comment-display' + comment_id;
	if($(com_id).css('display') == 'none'){
		$(com_id).show();
	}else {
		$(com_id).hide();
	}	
}
		
function submitcomment(entry){
	var comment_post_id = entry.id;
	var sketch = '#' + comment_post_id + 'C';
	var content = $(sketch).val();
				   
	var loading = '.loading' + comment_post_id;
	$.ajax({
		url: 'back/add_comment.php',
		type: 'post',
		data: {
			'content': content,
			'comment_post_id': comment_post_id
		},
		beforeSend: function(){
			$(loading).show();
		},
		success: function(response){
							
			if(response=='S') {
					window.location = "login.php";
			}else {
				var sketch = '#' + comment_post_id + 'C';
				var counter = '#counter' + comment_post_id;
				var counter_value = $(counter).text();
				var counter_value = Number(counter_value)+1;
				var pendid = '.comment-reload' + comment_post_id;
				$(pendid).prepend(response);
				$(sketch).val(" ");
				$(counter).html(counter_value);
				$(loading).hide();							
			}
		}
	});
}

function delet(entry) {
	var del_id = entry.id;
	var loader = '.loader'+del_id;
	$.ajax(
	{
		url: 'index.php?del=' + del_id,
		type: "get",
		beforeSend: function(){
			$(loader).show();
		}
	})
	.done(function(data){
		var del_remove = "#" + del_id;
		$(loader).hide();
		$(del_remove).remove();
	})
	.fail(function(jqXHR, ajaxOptions, thrownError){
		alert('Loading');
	});
}
				
function edit(entry) {
	var edit_id = entry.id;
	var loader = '.loader'+edit_id;
	$.ajax(
		{
			url: 'index.php?edit=' + edit_id,
			type: "get",
			beforeSend: function(){
				$(loader).show();
			}
		})
	.done(function(data){
		var edit_remove = "#" + edit_id;
		var edit_show = ".post-edit" + edit_id;
		$(loader).hide();
		$(edit_remove).hide();
		$(edit_show).show();
	})
	.fail(function(jqXHR, ajaxOptions, thrownError){
		alert('Loading');
	});
}				
				
function editcom(entry){
	var comment_post_id = entry.id;
	var sketch = '#' + comment_post_id + 'C';
	var content = $(sketch).val();
				   
	var loadings = '.loadings' + comment_post_id;
		$.ajax({
			url: 'back/edit_comment.php',
			type: 'post',
			data: {
				'edit_content': content,
				'comment_post_id': comment_post_id
			},
			beforeSend: function(){
				$(loadings).show();
			},
			success: function(response){
				var sketch = '#' + comment_post_id + 'C';
				var removeedit = '.post-edit' + comment_post_id;
				$(sketch).val(" ");
				$(removeedit).html(response)
				$(loadings).hide();
		}
	});	
}

function find() {
	var search = $("#search").val()
	$("#search-container").show();

	$.ajax(
		{
			url: 'back/search_brand.php?search=' + search,
			type: "get",
			beforeSend: function(){
				$('.searchloader').show();
				$('#search-results').html('');
				$('#search-results').prepend('<a href="#" > <h6 class="last-arrow"><span class="ti-search mr-2"></span> '+search+' </h6> </a>');
			}
		})
		.done(function(data){
			$('.searchloader').hide();
			$('#search-results').html(data);
			$('#search-results').prepend('<a href="#" > <h6 class="last-arrow"><span class="ti-search mr-2"></span> '+search+' </h6> </a>');
			
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			$('#DialogError').modal('show');
			$('#errorMessage').html(thrownError);
		});
}

function edit() {
	
	var business = $("#business").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var name = $("#name").val();
	var rcnumber = $("#rcnumber").val();
	var facebook = $("#facebook").val();
	var instagram = $("#instagram").val();
	var linkedin = $("#linkedin").val();
	var twitter = $("#twitter").val();
	var address = $("#address").val();
	var about = $("#about").val();

	$.ajax(
		{
			url: 'back/update_profile.php?business='+business+'&email='+email+'&phone='+phone+'&name='+name+'&rcnumber='+rcnumber+'&facebook='+facebook+'&instagram='+instagram+'&linkedin='+linkedin+'&twitter='+twitter+'&address='+address+'&about='+about,
			type: "get",
			beforeSend: function(){
				$("#submit-button").html('Submitting <img src="images/loading.gif" style="width:20px" />');
			}
		})
		.done(function(data){
			if(data=='F') {
				$('#DialogError').modal('show');
				$('#errorMessage').html(data);
			}else {
				$('#success').modal('show');
				$('#errorMessage').html('Profile Updated');
			}
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			$('#DialogError').modal('show');
			$('#errorMessage').html(thrownError);
		});
	
}

function preview_image() {
	var total_file=document.getElementById("upload_file").files.length;
	$('#upload_video').attr('disabled', 'disabled');
	for(var i=0;i<total_file;i++){
				 
		$('#file_preview').append("<div class='img-content'><img src='"+URL.createObjectURL(event.target.files[i])+"' id='img' >  <span class='closeimg' id='closeimg" + i + "' style='cursor:pointer' > <i class='fa fa-close' style='background-color:red;border-radius:50%;padding:3px' ></i> </span>  </div>");
		$('#imageinput').hide();
		$('#uploadbuttons').prepend("<label id='imageinput' ><button class='btn btn-info btn-block' style='float:left' > <i class='ti-camera'></i> Photo </button> <input type='file' class='form-control form-control-lg' name='file[]' type='file' id='upload_file' style='display:none' onchange='preview_image()' accept='image/*,.jpg,.gif,.png,.jpeg' multiple ></label>");
				 
		$("#closeimg" + i + "").click(function() {
			$(this).parent().attr("src", '');
			$(this).parent().remove();
		});		 
	}
}

function preview_video() {
	var total_file=document.getElementById("upload_video").files.length;
	$('#upload_file').attr('disabled', 'disabled');
	for(var i=0;i<total_file;i++){
		var file_src = event.target.files[i].name;
		var file_extension = file_src.split('.').pop();
		$('#file_preview').append("<div class='img-content'><video controls autoplay id='img' ><source src='"+URL.createObjectURL(event.target.files[i])+"' >Your browser does not support video.</video> <span class='closeimg' id='closeimg" + i + "' style='cursor:pointer' > <i class='fa fa-close' style='background-color:red;border-radius:50%;padding:3px' ></i> </span>  </div>");
	}
}

function reveal(entry) {
	var chat_id = entry.id;
	var display_id = '#W'+chat_id;
	$(display_id).addClass('mobile-active');
}

function send_message(entry) {
	var chat_id = entry.id;
	var send_content = $("#send_content"+chat_id).val();
	var receiver = $("#receiver"+chat_id).val();
	var sender = $("#sender").val();
	
	$.ajax(
		{
			url: 'back/send_message.php?message_content='+send_content+'&receiver='+receiver+'&chat_id='+chat_id+'&sender='+sender,
			type: "get",
			beforeSend: function(){
				$("#A"+chat_id).append('<div class="message-item outgoing-message"><div class="message-wrap"> '+ send_content +' </div></div>');
				$("#send_content"+chat_id).val(" ");
			}
		})
		.done(function(data){
			
			
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			$('#DialogError').modal('show');
			$('#errorMessage').html('Message Failed');
		});
	
}



 
 

