<?php

interface Booking{
    
    public function calculatePrice(): int;

    public function getDescription(): string;
}