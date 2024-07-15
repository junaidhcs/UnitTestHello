<?php

namespace Mytask\UnitTestHello\TestingClass;

class Hellofail
{
    public function greet($name)
    {
         return "Hello, " . $name; // Bug: This method should append "!" at the end
       // return "Hello, " . $name . "!"; // Fixed: Added "!" at the end
    }
}
