<?php 
session_start();

sesso_unset();
session_destroy();

header("Location: index.php");
