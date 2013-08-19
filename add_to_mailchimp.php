<?php

// dependencies


require_once 'mailchimp-api-class/MCAPI.class.php';
require_once 'mailchimp-api-class/config.inc.php';
 
// get the variables
$name = $_GET['name'];
$email = $_GET['email'];

$apikey = 'INSERT API KEY HERE';
$listId = 'INSERT LIST ID HERE';

$api = new MCAPI($apikey);
 
$merge_vars = array('EMAIL'=>$email, 'FNAME'=>$name);
$retval = $api->listSubscribe( $listId, $email, $merge_vars, "html", false, false, false, true);
 
if($retval){
  echo 'success';
}
if ($api->errorCode){
  echo "Unable to load listSubscribe()!\n";
  echo "\tCode=".$api->errorCode."\n";
  echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Returned: ".$retval."\n";
}