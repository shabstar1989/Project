<?php

namespace App;

use Illuminate\Support\Facades\App;
use ReflectionClass;

class QueryBus
{
    public function handle($query)
    {
        // resolve handler
        $reflection = new ReflectionClass($query);
        $handlerName1 = str_replace("Query", "Repository", $reflection->getShortName());
        $handlerName2 = str_replace($reflection->getShortName(), $handlerName1, $reflection->getName());
        $handlerName3 = str_replace("Queries", "Repositories", $handlerName2);
        $Repositories = App::make($handlerName3);

        // invoke handler
        return $Repositories($query);

    }
}
