<?php

/* Este código foi tirado do site 
   https://designpatternsphp.readthedocs.io/en/latest/Structural/Decorator/README.html
   para fins de aprendizado
*/


function chamaClasse($nome){
    require_once $nome.".php";
}
spl_autoload_register("chamaClasse");


$booking = new DoubleRoomBooking();
$booking->calculatePrice(); // returns 40
$booking->getDescription(); // returns 'you got a double room'

//============================================

$booking = new DoubleRoomBooking();
$booking = new WiFi($booking);

$booking->calculatePrice(); // returns 42 
$booking->getDescription(); // returns 'you got a double room with wifi'

//============================================

$booking = new DoubleRoomBooking();
$booking = new WiFi($booking);
$booking = new ExtraBed($booking);

$booking->calculatePrice(); // returns 72
$booking->getDescription(); // returns 'you got a double room with wifi with extra bed'

