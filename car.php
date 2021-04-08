<?php


class Car extends Vehicle
{
    private static $instance;
    private $year;

    public function __construct($name = 'car name', $year = 2000)
    {
        parent::__construct($name, 'car');
        $this->year = $year; 
    }

    public function ShowInfo()
    {
        parent::ShowInfo();
        echo "Year: $this->year.";
    }

    public function setYear($year)
    {
        $this->year = $year;
        
    }
}
