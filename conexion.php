<?php

define("DB_USER","root");
define("DB_PASSWORD", "");
define("DB_HOST","localhost");
define("DB_NAME", "bd_restaurante");

$con =mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$con) {
	 trigger_error("error al conectar ".mysqli_connect_error());

}

