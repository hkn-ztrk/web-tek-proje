<!DOCTYPE html>

<?php
    $mail = preg_split("/@/", $_POST["girilenMail"]);
    $giren = $mail[0];

    if ($giren != "g191210075" || $giren != "G191210075"){
        <form action="index.php" method="post">
            
        </form>
    }

?>