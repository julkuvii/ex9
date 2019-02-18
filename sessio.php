<?php
session_start();
$_SESSION['fn']='Jim';
$_SESSION['ln']='Smith';

echo $_SESSION['fn'].' '.$_SESSION['ln'];
?>