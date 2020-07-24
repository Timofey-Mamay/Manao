<?php
include 'strong.php';



    $log =$_POST['log'];
    $pass=$_POST['pass'];



$db = new SimpleXMLElement($xmlstr);

if ((string) $db->users->login == $log && (string) $db->users->password == $pass) {
    header("Location: main.php");
}
else
{
	header("Location: no.php");
}

// echo htmlentities((string) $db->users->name);
?>