<?php
session_start();
session_destroy();
echo "<script>alert('logout successfully');window.location.href='login.php';</script>";
?>