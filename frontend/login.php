<?php
require_once "../config.php";
doesUserHavePermission("login", true, false, false);

require_once "../includes/header.php";
require_once "../includes/nav.php";

if(isset($_GET['logout'])){
    session_destroy();
    redirectToPage("login");
}else{
    if(isUserLoggedIn() == true){
require_once "../includes/error.php";
redirectToPage("dashboard");
//startError(200, "Alread logged in", "You'r already logged in");
    }
}
?>
<div class="login-background">
    <img src="assets/img/achtergrond.png" alt="" />
</div>
<form class="box" id="loginForm" attr-action="login" attr-type="login">
    <h1 style="font-family: Bahnschrift; color: #FFF;">Inloggen</h1>
    <div class="login-status" id="loginFormResponseMessage"></div>
    <input class="inputfield" type="text" name="username" placeholder="Gebruikersnaam">
    <p></p>
    <input class="inputfield" type="password" name="password" placeholder="Wachtwoord">
    <p></p>
    <input class="login" type="submit" name="" value="Inloggen" onclick="requestForForm('loginForm')">
    <p></p>
    <a>Wachtwoord vergeten?</a>
</form>
<?php
require_once "../includes/footer.php";
