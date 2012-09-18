<?php

include "../lib/phpqrcode.php";

QRcode::png($_GET["id"], false, "H", 10, 2);	

?>