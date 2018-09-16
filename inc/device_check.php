<?php

function is_Mobile() {

	$dev_txt = what_device();

	if($dev_txt == "iPhone" || $dev_txt == "iphoneAPP" || $dev_txt == "iPad" || $dev_txt == "iPod" || $dev_txt == "Android" || $dev_txt == "AndroidAPP" || $dev_txt == "Android_tablet" || $dev_txt == "Android_Chrome" || $dev_txt == "WebOS" || $dev_txt == "Blackberry" || $dev_txt == "rimtablet" || $dev_txt == "Mobile"){

		return true;

	}else{

		return false;

	}

}



function is_ios() {

	$dev_txt = what_device();

	if($dev_txt == "iPhone" || $dev_txt == "iphoneAPP" || $dev_txt == "iPad"){

		return true;

	}else{

		return false;

	}

}

function is_iphoneAPP() {

	$dev_txt = what_device();

	if($dev_txt == "iphoneAPP"){

		return true;

	}else{

		return false;

	}

}

function is_Android() {

	$dev_txt = what_device();

	if($dev_txt == "Android" || $dev_txt == "AndroidAPP" || $dev_txt == "Android_tablet"){

		return true;

	}else{

		return false;

	}

}

function is_AndroidApp() {

	$dev_txt = what_device();

	if($dev_txt == "AndroidAPP"){

		return true;

	}else{

		return false;

	}

}



function is_Chrome() {

	$dev_txt = what_device();

	if($dev_txt == "Chrome"){

		return true;

	}else{

		return false;

	}

}



function what_device() {

	$iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");

	$iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");

	$iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");

	if (stripos($_SERVER['HTTP_USER_AGENT'], "AndroidAPP")) {
		$AndroidAPP = true;
        $iphoneAPP = false;
	} else if (stripos($_SERVER['HTTP_USER_AGENT'], "Android") && stripos($_SERVER['HTTP_USER_AGENT'], "Mobile")) {
		$Android = true;
        $iphoneAPP = false;
	} else if (stripos($_SERVER['HTTP_USER_AGENT'], "Android")) {
		$Android = false;
		$AndroidTablet = true;
        $iphoneAPP = false;
	} else if ($_SERVER['HTTP_USER_AGENT'] == "iphoneAPP") {
        $Android = false;
		$AndroidTablet = false;
        $iphoneAPP = true;
    } else if (stripos($_SERVER['HTTP_USER_AGENT'], "iphoneAPP")) {
        $Android = false;
		$AndroidTablet = false;
        $iphoneAPP = true;
    } else {
		$Android = false;
		$AndroidTablet = false;
        $iphoneAPP = false;
	}

	$WebOS = stripos($_SERVER['HTTP_USER_AGENT'], "WebOS");

	$Blackberry = stripos($_SERVER['HTTP_USER_AGENT'], "Blackberry");

	$RimTablet = stripos($_SERVER['HTTP_USER_AGENT'], "RIM Tablet");

	$Chrome = stripos($_SERVER['HTTP_USER_AGENT'], "Chrome");

	$Mobile = stripos($_SERVER['HTTP_USER_AGENT'], "Mobile");


	//do something with this information

	$device_txt = "error";

    if ($iphoneAPP) {

        $device_txt = "iphoneAPP";

    } else if ($iPod || $iPhone) {

		$device_txt = "iPhone";

	} else if ($iPad) {

		$device_txt = "iPad";

	} else if ($AndroidAPP) {

		$device_txt = "AndroidAPP";

	} else if ($Android) {

		$device_txt = "Android";

	} else if ($AndroidTablet) {

		$device_txt = "Android_tablet";

	} else if ($Mobile) {

		$device_txt = "Mobile";

	} else if ($Blackberry) {

		$device_txt = "Blackberry";

	} else if ($Chrome) {

		$device_txt = "Chrome";

	} else if ($WebOS) {

		$device_txt = "WebOS";

	} else if ($RimTablet) {

		$device_txt = "rimtablet";

	} else {

		$device_txt = "";

	}

	return $device_txt;

}
?>
