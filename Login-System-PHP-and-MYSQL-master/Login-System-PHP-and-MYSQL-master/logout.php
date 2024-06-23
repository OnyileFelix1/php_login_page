<?php 
session_start();

sess_unset();
session_destroy();

header("Location: index.php");
