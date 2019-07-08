<?php
session_start();

$_SESSION = [];
header('Location: /board_object/index.php');
exit;