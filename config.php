<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','');
define('DB_PASSWORD','');
define('DB_NAME','ATEAM');


$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


IF($link === flase) {

DIE("error: cOULD NOT CONNECT. " .MYSQLI_CONNECTT_ERROR());

}

?>
