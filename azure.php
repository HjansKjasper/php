<?php

$conn = mysqli_init(); mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($conn, "hans-kasper.mysql.database.azure.com", "hanskasper", "Spisdatamaskin!", "Kjasperboka_db", 3306, MYSQLI_CLIENT_SSL);


?>