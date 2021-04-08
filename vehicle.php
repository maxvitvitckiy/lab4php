<?php


class Vehicle
{
    private static $instance;
    protected $name;
    protected $vehicle_type;

    public function __construct($name = 'name', $vehicle_type = 'vehicle')
    {
        $this->name = $name;
        $this->vehicle_type = $vehicle_type;
    }

    public function ShowInfo()
    {
        echo "Name: $this->name. Vehicle type: $this->vehicle_type. ";
    }

    public function SetName($name)
    {
        $this->name = $name;
    }

    public static function CreateInstance($name = 'name', $vehicle_type = 'vehicle')
    {
        if(self::$instance) {
            return self::$instance;
        }
        else {
            return self::$instance = new self($name, $vehicle_type);
        }
    }
}