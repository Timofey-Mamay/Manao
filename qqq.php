<?php
include 'strong.php';




$db = new SimpleXMLElement($xmlstr);



echo htmlentities((string) $db->users->name);
echo htmlentities((string) $db->users->login);
echo htmlentities((string) $db->users->password);


$str = 'яблоко';

if (md5($str) === '1afa148eb41f2e7103f21410bf48346c') {
    echo "Вам зеленое или красное яблоко?";
}
?>