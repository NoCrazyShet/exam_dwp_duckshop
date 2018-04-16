<?php
require("constants.php");
//creating a mysql connection;
$connection = new PDO("mysql:host=" . DB_SERVER . "; 
                            dbname=" . DB_NAME,
                            DB_USER,
                            DB_PASS,

                            array(  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                    PDO::ATTR_PERSISTENT=>false)
);
