<?php
define("ROOT", realpath(dirname(__FILE__)."/../../"));
define("DB_OPTIONS", Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
define("DRIVER", getenv("DRIVER"));
