<?php
    require_once("../includes/permanents/session.php");
    require_once("../includes/permanents/functions.php");

    if(logged_in()) {
        redirect_to("mordorPage.php");
    }
    ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
<?php
if(!empty($_GET['loginStatus'])) {
    if($_GET['loginStatus']=='incorrect'){
        echo "<p>Your password/email combination seems to be incorrect. <br>Please try again</p>";
        $_GET['loginStatus']= '';
    }
    else if($_GET['loginStatus']=='logout') {
        echo "<p>You are logged out</p>";
        $_GET['loginStatus'] = '';
    }
}
?>
<h2>Please login</h2>
<form action="../includes/controllers/loginController.php" method="post">
    Username:
    <input type="text" name="eMail" maxlength="30" value=""/>
    Password:
    <input type="password" name="password" maxlength="30" value="" >
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
