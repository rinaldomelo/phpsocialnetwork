<?php

$db_conx = mysqli_connect("phpsocialnetwork.rinaldomelo.com", "rinaldomelo72", "phpsocialnetwork", "phpsocialnetwork");

if (mysqli_connect_errno()) {
    
    echo mysqli_connect_error();
    exit();
} else {
    
    echo "Success";
}
?>