<?php
if(!defined('LIVE')) DEFINE('LIVE', false);

DEFINE('CONTACT_EMAIL', 'youngeric@gmail.com');
DEFINE('SUPPORT_EMAIL', 'youngeric@gmail.com');
DEFINE('ADMIN_EMAIL', 'youngeric@gmail.com');

DEFINE('APPNAME', 'byp');
DEFINE('BASEPATH', $_SERVER['DOCUMENT_ROOT'] . '/' . APPNAME);
DEFINE('BASEURL', 'http://localhost' . '/' . APPNAME);

session_start();
// defined('BASEPATH') OR exit('No direct script access allowed');

function custom_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {
  $message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";
  $message += "<pre>" . print_r(debug_backtrace(), 1) . "</pre>\n";
  // $message += "<pre>" . print_r($e_vars, 1) . "</pre>";
  if(!LIVE) {
    echo '<div class="alert alert-danger">' . nl2br($message) . '</div>';
  } else {
    // error_log($message, 0); // system log
    error_log($message, 1, SUPPORT_EMAIL, "From:" . ADMIN_EMAIL); // email error
    if($e_number != E_NOTICE) {
      echo '<div class="alert alert-danger">A system error occurred. We apologize for this.</div>';
    }
  }
}

// apply error
set_error_handlder('custom_error_handler');
