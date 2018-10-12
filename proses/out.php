<?php
session_start();
unset($_SESSION['admin']);
header("location:../login.php?login=logout_berhasil");