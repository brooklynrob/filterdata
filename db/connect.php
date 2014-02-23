<?php

$connect = mysql_connect("localhost", "root", "relay123") or die(mysql_error());

mysql_select_db("testdb", $connect) or die(mysql_error());



?>