<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Unit extends \Codeception\Module
{
    public function _before(\Codeception\TestInterface $test)
    {
        date_default_timezone_set("Europe/Copenhagen");
    }
}
