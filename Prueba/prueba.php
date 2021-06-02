<?php
if(isset($_POST['number'])) {
   $number = $_POST['number'];
   $intentos = $_POST['intentos'] + 1;
} else {
   $intentos = 0;
   $number = rand(1,1000);
}
?>