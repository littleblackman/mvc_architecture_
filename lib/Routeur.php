<?php


class Routeur
{

    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }


    public function renderControlleur()
    {

        $path = $this->request;

        if(file_exists(CONTROLLER.'/'.$path.'.php'))
        {
            include(CONTROLLER.'/'.$path.'.php');
        }
    }


}