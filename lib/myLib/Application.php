<?php
abstract class Application
{
    private $name;
    
    abstract public function run();
    public function getName()
    {
        return $this->name;
    }
}