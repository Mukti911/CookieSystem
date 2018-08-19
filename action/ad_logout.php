<?php
session_start();
session_destroy();
header("Location:../login.php?notice=logout");

?>