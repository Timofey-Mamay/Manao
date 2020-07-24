<?php
$xml= new DomDocument("1.0", "UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("db.xml");
if (!$xml)
{
    $db = $xml->createElement("db");
    $xml->appendChild($db);
}
else
{
    $db=$xml->firstChild;
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $log = $_POST['log'];
    (md5($pass)) == $_POST['pass'];

$users=$xml->createElement("users");
$db->appendChild($users);
$name=$xml->createElement("name", $name);
$users->appendChild($name);
$email=$xml->createElement("email", $email);
$users->appendChild($email);
$log=$xml->createElement("login", $log);
$users->appendChild($log);
$pass=$xml->createElement("password", $pass);
$users->appendChild($pass);
// echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("db.xml");
header("Location: index.php");
}
?>