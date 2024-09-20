<?php

class Controller
{
    public function view($file_name, $parameter = [])
    {
        $parameter = extract($parameter);
        require_once __DIR__.'/../views/'.$file_name.'.php';
    }
}
