<?php
    require_once("session.php");
    require_once("connection.php");
    require_once("functions.php");
    if (isset($_POST['eMail']) || isset($_POST['password'])) {
        $eMail = trim(htmlspecialchars($_POST['eMail']));
        $pass = trim(htmlspecialchars($_POST['password']));
        if (isset($_POST['submit'])){
            $stmt = $connection->query("SELECT COUNT(userID), userID, eMail, password FROM admin WHERE eMail = '{$eMail}' LIMIT 1");
            $storedUser = $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt == 1) {
            if(password_verify($pass, $storedUser['password'])) {
                $_SESSION['userID'] = $storedUser['userID'];
                $_SESSION['eMail'] = $storedUser['eMail'];
                redirect_to('../mordorPage.php');
            }
            else {
                redirect_to('../loginPage.php?loginStatus=incorrect');
            }
        }}
        else {
            redirect_to('../loginPage.php?loginStatus=logout');
        }
    }