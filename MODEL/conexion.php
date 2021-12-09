<?php
try {
    $con = new PDO("mysql:host=localhost:8889;dbname=AGENDA_WEB","root","root",
array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
} catch (Exception $e) {
    echo "hay un error".$e->getMessage();
    //throw $th;
}
?>