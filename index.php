<?php

echo "GIT - Test<br>";
echo "Modifica. Vediamo se arriva su da sola";

try {
    $user = 'pgmd';
    $pass = 'pgmdpmgd!';

    $dbh = new PDO('mysql:host=192.168.10.25;dbname=pentaho', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
