<?php
session_start();
if(isset($_SESSION['email'])) {
// ----------------------------------CONTENT HERE---------------------------------- //
    echo '<script>window.location.replace("./beranda.php");</script>';
// ----------------------------------CONTENT HERE---------------------------------- //

} else {
    echo '<script>window.location.replace("./login.php");</script>';
}
?>