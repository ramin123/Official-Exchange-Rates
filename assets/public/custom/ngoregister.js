$(document).ready(function(){

$("#estabDate").datepicker();


$("#ngoLogo").fileinput({
	      overwriteInitial: true,
		    maxFileSize: 2500,
		    showClose: false,
		    showCaption: false,
		    browseLabel: '',
		    removeLabel: '',
		    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
		    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
		    removeTitle: 'Cancel or reset changes',
		    elErrorContainer: '#kv-avatar-errors-1',
		    msgErrorClass: 'alert alert-block alert-danger',
		    defaultPreviewContent: '<img src="assets/images/photo_default.png" alt="Profile Image" style="width:100%;">',
		    layoutTemplates: {main2: '{preview} {remove} {browse}'},								    
	  		allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"]
			});

$("#resetbtn").unbind('click').bind('click', function(){
	$("input[type='text']").val("");
$("select").val("");
$(".fileinput-remove-button").click();

$(".text-danger").remove();
$(".form-group").removeClass('has-error').removeClass('has-success');

	return false;

});


$("#ngoRegForm").unbind('submit').bind('submit', function(){

	$(".text-danger").remove();
        $(".form-group").removeClass('has-error').removeClass('has-success');

var ngoName=$("#ngoName").val();

var ngoLogo=$("#ngoLogo").val();
var ngoAbbreviation=$("#ngoAbbreviation").val();
var hqAdd=$("#hqAdd").val();
var localAdd=$("#localAdd").val();
var responsibleName=$("#responsibleName").val();
var responsibleAdd=$("#responsibleAdd").val();
var Email=$("#Email").val();
var phone=$("#phone").val();
var regNumber=$("#regNumber").val();
var estabDate=$("#estabDate").val();
var estabPlace=$("#estabPlace").val();
var genObj=$("#genObj").val();
var countryObj=$("#countryObj").val();
var Mission=$("#Mission").val();
var Vision=$("#Vision").val();

	if(ngoLogo==""){
				$("#ngoLogo").closest('.center-block').after('<p class="text-danger">Logo image required!</p>');
				$("#ngoLogo").closest('.form-group').addClass('has-error');


		}else{
			    $("#ngoLogo").find('.text-danger').remove();
				$("#ngoLogo").closest('.form-group').addClass('has-success');


		}


		if(ngoName==""){
				$("#ngoName").after('<p class="text-danger">NGO name required!</p>');
				$("#ngoName").closest('.form-group').addClass('has-error');


		}else{
			    $("#ngoName").find('.text-danger').remove();
				$("#ngoName").closest('.form-group').addClass('has-success');


		}

		if(ngoAbbreviation==""){
				$("#ngoAbbreviation").after('<p class="text-danger">NGO name abbreviation required!</p>');
				$("#ngoAbbreviation").closest('.form-group').addClass('has-error');


		}else{
			    $("#ngoAbbreviation").find('.text-danger').remove();
				$("#ngoAbbreviation").closest('.form-group').addClass('has-success');


		}


if(hqAdd==""){
				$("#hqAdd").after('<p class="text-danger">HQ address required!</p>');
				$("#hqAdd").closest('.form-group').addClass('has-error');


		}else{
			    $("#hqAdd").find('.text-danger').remove();
				$("#hqAdd").closest('.form-group').addClass('has-success');


		}


if(localAdd==""){
				$("#localAdd").after('<p class="text-danger">Local address required!</p>');
				$("#localAdd").closest('.form-group').addClass('has-error');


		}else{
			    $("#localAdd").find('.text-danger').remove();
				$("#localAdd").closest('.form-group').addClass('has-success');


		}

if(responsibleName==""){
				$("#responsibleName").after('<p class="text-danger">Responsible name required!</p>');
				$("#responsibleName").closest('.form-group').addClass('has-error');


		}else{
			    $("#responsibleName").find('.text-danger').remove();
				$("#responsibleName").closest('.form-group').addClass('has-success');


		}

if(responsibleAdd==""){
				$("#responsibleAdd").after('<p class="text-danger">Responsible address required!</p>');
				$("#responsibleAdd").closest('.form-group').addClass('has-error');


		}else{
			    $("#responsibleAdd").find('.text-danger').remove();
				$("#responsibleAdd").closest('.form-group').addClass('has-success');


		}

if(Email==""){
				$("#Email").after('<p class="text-danger">Email required!</p>');
				$("#Email").closest('.form-group').addClass('has-error');


		}else{
			    $("#Email").find('.text-danger').remove();
				$("#Email").closest('.form-group').addClass('has-success');


		}

if(phone==""){
				$("#phone").after('<p class="text-danger">Phone number required!</p>');
				$("#phone").closest('.form-group').addClass('has-error');


		}else{
			    $("#phone").find('.text-danger').remove();
				$("#phone").closest('.form-group').addClass('has-success');


		}

if(regNumber==""){
				$("#regNumber").after('<p class="text-danger">Ministry Reg number required!</p>');
				$("#regNumber").closest('.form-group').addClass('has-error');


		}else{
			    $("#regNumber").find('.text-danger').remove();
				$("#regNumber").closest('.form-group').addClass('has-success');


		}

if(estabDate==""){
				$("#estabDate").after('<p class="text-danger">Establis date required!</p>');
				$("#estabDate").closest('.form-group').addClass('has-error');


		}else{
			    $("#estabDate").find('.text-danger').remove();
				$("#estabDate").closest('.form-group').addClass('has-success');


		}

if(estabPlace==""){
				$("#estabPlace").after('<p class="text-danger">Establish place required!</p>');
				$("#estabPlace").closest('.form-group').addClass('has-error');


		}else{
			    $("#estabPlace").find('.text-danger').remove();
				$("#estabPlace").closest('.form-group').addClass('has-success');


		}
if(genObj==""){
				$("#genObj").after('<p class="text-danger">General Objectives required!</p>');
				$("#genObj").closest('.form-group').addClass('has-error');


		}else{
			    $("#genObj").find('.text-danger').remove();
				$("#genObj").closest('.form-group').addClass('has-success');


		}
if(countryObj==""){
				$("#countryObj").after('<p class="text-danger">Objectives in Afghanistan required!</p>');
				$("#countryObj").closest('.form-group').addClass('has-error');


		}else{
			    $("#countryObj").find('.text-danger').remove();
				$("#countryObj").closest('.form-group').addClass('has-success');


		}
if(Mission==""){
				$("#Mission").after('<p class="text-danger">Mission required!</p>');
				$("#Mission").closest('.form-group').addClass('has-error');


		}else{
			    $("#Mission").find('.text-danger').remove();
				$("#Mission").closest('.form-group').addClass('has-success');


		}

		if(Vision==""){
				$("#Vision").after('<p class="text-danger">Vission required!</p>');
				$("#Vision").closest('.form-group').addClass('has-error');


		}else{
			    $("#Vision").find('.text-danger').remove();
				$("#Vision").closest('.form-group').addClass('has-success');


		}

		if( ngoLogo && ngoName && ngoAbbreviation && hqAdd && localAdd && responsibleName && responsibleAdd && Email && phone && estabPlace && estabDate && regNumber && genObj && countryObj && Mission && Vision){
		
				var form=$(this);
	var formData= new FormData(this);

			$.ajax({
				url: form.attr('action'),
				type: form.attr('method'),
				data: formData,
				dataType:'json',
				cache:false,
				contentType:false,
				processData:false,
				success:function(response){
				if(response.success==true){
					
					$(".text-danger").remove();
					$(".form-group").removeClass('has-error').removeClass('has-success');
					 $("input[type='text']").val("");
					 $("input[type='email']").val("");
					$("select").val("");
					$(".fileinput-remove-button").click();

				
						$("html, body, div.ngoRegMessages").animate({scrollTop: '0'},100);

						$('.ngoRegMessages').html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
          '</div>');

  	  			$(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert
				}

}


			});


		}
		// end of complete filling the form


	return false;
});
// end of form submition function



}); 
// end of ready function