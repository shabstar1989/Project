<?php

namespace App;

use Illuminate\Support\Facades\App;
use ReflectionClass;

class CommandBus
{
    public function handle($command)
    {
        // resolve handler
        $reflection = new ReflectionClass($command);
        $Chenge_class_name = str_replace("Command", "Handler", $reflection->getShortName());
        $handlerName2 = str_replace($reflection->getShortName(), $Chenge_class_name, $reflection->getName());
        $handlerName3 = str_replace("Commands", "Handlers", $handlerName2);
        // dd($reflection, $Chenge_class_name, $handlerName2, $handlerName3);
        $handler = App::make($handlerName3);
        // invoke handler
        $handler($command);
    }
}
