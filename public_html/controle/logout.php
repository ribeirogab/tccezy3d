<?php
session_start();
session_destroy();
if (isset($_GET["log"])) {
    header("Location: ../pa-admin.php");
} else {
    header("Location: ../home.php");
}
?>