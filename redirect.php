<?php
$ean = $_GET['ean'];

if ($ean == '859200519856') {
    header("Location: https://yourwebsite.com/birthday");
    exit();
} else {
    echo "Invalid EAN-13 code.";
}
?>
