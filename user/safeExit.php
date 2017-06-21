<?php
session_unset();
session_destroy();
header("Location: http://localhost/phpdemo/QQZONE/index.php");
?>