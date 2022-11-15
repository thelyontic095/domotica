<?php
  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect('aws-sa-east-1.connect.psdb.cloud','6wdvk6i9e7u0bz9o9241','pscale_pw_c7RfDvR5olnE1rAS7MKR3EC1dyvdABbM84dfxfNqUFd','domotica');


if ($mysqli->connect_error) {
    echo 'not connected to the database';
} else {
    echo "Connected successfully";
}
?>
