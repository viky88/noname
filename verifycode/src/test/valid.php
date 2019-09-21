<?php
session_start();
$code = $_GET['code'];
if ($code && $data = $_SESSION['verify_code']) {
    if ($code == $data['text']) {
        echo 'success';
        exit();
    }
}
echo 'error';