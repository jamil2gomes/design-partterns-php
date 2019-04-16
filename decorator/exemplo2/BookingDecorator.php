<?php

abstract class BookingDecorator implements Booking{

    protected $booking;

    function __construct(Booking $booking){
        $this->booking = $booking;
    }
}