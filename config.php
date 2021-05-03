<?php

/**
 * Configuration for database connection
 *
 */

$host       = "ass2.mysql.database.azure.com";
$username   = "erda@ass2";
$password   = "Danihipya123";
$dbname     = "ass2";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
 ?>
