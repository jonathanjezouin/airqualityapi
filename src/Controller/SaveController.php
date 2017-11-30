<?php
use AQIAPI\Http\Response;

namespace AQIAPI\Controller;

class SaveController {


    function getToto (): Response
    {
        $response = new Response;
        
        $response->addHeader(
            "Content-Type",
            "application/json;charset=utf8"
        );
        
        $foo = new stdClass;
        $foo->message = "Hello";
        
        $response->setBody(json_encode($foo));
        
        return $response;
        
        
        
    }
  
}