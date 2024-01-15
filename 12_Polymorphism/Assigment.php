<?php

interface phone
{
    function call_recording();
}

class Android implements phone
{
    public function call_recording()
    {
        echo "Allowed" . PHP_EOL;
    }
}
class Ios implements phone
{
    public function call_recording()
    {
        echo "Not Allowed".PHP_EOL;
    }
}
