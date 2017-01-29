<?php 


function css_index() {
	$ara = array("file" => '../M_css/M_home.css',
				 "code" => '');
	return $ara;
}
function css_while() {
	$ara = array("code" => '#main {font-family: Helvetica,Arial,sans-serif;}#rotatingDiv {display: block;margin: 32px auto;height:30px;width:30px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:8px solid rgba(0,0,0,.20);border-right:8px solid rgba(0,0,0,.20);border-bottom:8px solid rgba(0,0,0,.20);border-top:8px solid rgba(33,128,192,1);border-radius:100%;}@keyframes rotation {from {transform: rotate(0deg);}to {transform: rotate(359deg);}}@-webkit-keyframes rotation {from {-webkit-transform: rotate(0deg);}to {-webkit-transform: rotate(359deg);}}@-moz-keyframes rotation {from {-moz-transform: rotate(0deg);}to {-moz-transform: rotate(359deg);}}@-o-keyframes rotation {from {-o-transform: rotate(0deg);}to {-o-transform: rotate(359deg);}}h3 {font-size:1.4em; margin:0 0 0 0; line-height:normal;}');
	return $ara;
}
function css_perso() {
	$ara = array("file" => 'M/main2.css',
				 "code" => '');
	return $ara;
}
function css_pay() {
	$ara = array("file" => 'M/main2.css',
				 "code" => '#ccbox{background:transparent url("M/cards.png");margin:0 0 10px 0;padding:0 0 0 150px;width:0;height:23px;overflow:hidden; padding-left:150px;}');
	return $ara;
}?>