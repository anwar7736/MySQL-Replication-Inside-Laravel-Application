<?php
interface VehicleInterface{
    public function start();
    public function stop();
}

class Car implements VehicleInterface{
    public function start()
    {
        echo "Car is started";
    }
    public function stop()
    {
        echo "Car is stopped";
    }
}

class Bike implements VehicleInterface{
    public function start()
    {
        echo "Bike is started";
    }
    public function stop()
    {
        echo "Bike is stopped";
    }
}

class MyClass{
    protected $object;
    function __construct(&$name)
    {
        echo $name = "Sujon\n";
        // $this->object = $object;
        // $this->object->start();
        // echo "\n";
        // $this->object->stop();
    }
}

$name = "Anwar";
echo $name."\n";
new MyClass($name);
echo $name."\n";
