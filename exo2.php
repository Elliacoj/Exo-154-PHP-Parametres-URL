<?php

if(!isset($_GET['iteration'])) {
    header('location: index.php?error=1');
}
else {
    for($x = 0; $x < $_GET['iteration']; $x++) {
        echo "Hello world <br>";
    }
}