$(document).ready(function(){
	//uploaded close
	$('.mess').click(function(){
		$('#uploader').show();
		$('#massage').show();
		$('#upload').hide();
	});
	//second uploader
	$('#img').click(function(){
		$('#uploaded').show();
		$('#upload').show();
		$('#uploder').hide();
		$('#row2').hide();
		$('#row3').hide();
		$('#row2').hide();
		$('#row4').hide();
		$('#row1').hide();
	});
	$('#edit').click(function(){
		$('#uploaded').show();
		$('#row1').show();
		$('#upload').hide();
		$('#row3').hide();
		$('#row2').hide();
		$('#row4').hide();
	});
	$('#btnrow2').click(function(){
		$('#uploaded').show();
		$('#row2').show();
		$('#upload').hide();
		$('#row1').hide();
		$('#row3').hide();
		$('#row4').hide();
	});
	$('#btnrow3').click(function(){
		$('#uploaded').show();
		$('#row3').show();
		$('#upload').hide();
		$('#row1').hide();
		$('#row2').hide();
		$('#row4').hide();
	});
	$('#career').click(function(){
		$('#uploaded').show();
		$('#row4').show();
		$('#upload').hide();
		$('#row1').hide();
		$('#row2').hide();
		$('#row3').hide();
	});
	$('#span').click(function(){
		$('#uploaded').show();
		$('#row5').show();
		$('#upload').hide();
		$('#row1').hide();
		$('#row2').hide();
		$('#row3').hide();
		$('#row4').hide();
	});
	$('.closed').click(function(){
		$('#uploaded').hide();
	});
	$('.clrs').click(function(){
		$('#uploaded').hide();
		$('#row').hide();
		$('#row1').hide();
		$('#row3').hide();
		$('#row4').hide();
		$('#row2').hide();
		$('#row').hide();
	});
	$('#more').click(function(){
		$('#uploadedss').show();
		$('#uploadss').show();
	});
	$('#btn').click(function(){
		$('#down').slideDown(1000);
		$('#btn').hide(1000);
	});
	$('#btn_eject').click(function(){
		$('#down').slideUp(1000);
		$('#btn').show(1000);
	});
	$('.search').click(function(){
		$('#search').slideDown(1000);
	});
	$('.minus').click(function(){
		$('#search').slideUp(1000);
	});
});
//jquery prevent default
$('#submit').on('click',function(e){
	preventDefault(e);
	
});