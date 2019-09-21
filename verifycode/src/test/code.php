<?php
require_once "../VerifyCode.php";

$verify = new VerifyCode(VerifyCode::TYPE_IMG);
$verify->show();
$data = $verify->getData();
session_start();
$_SESSION['verify_code'] = $data;