<?php
//stores the URL the request is sent to
//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($_SERVER['REQUEST_METHOD'] === "GET") {
  echo( "<p>Data you submitted</p>");
  $get_array =  $_GET;
  foreach($get_array as $key=>$val){
      if (!empty($val)) {
    echo $key . ': ' . $val . '<br>';
      }
  }
}
?>