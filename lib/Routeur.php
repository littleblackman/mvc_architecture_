<?php


class Routeur
{

    private $request;

    private  $paths = array (
                            'homepage.html' => array('controlleur' => 'homepage', 'action' => 'actionAccueil')
                            );

    public function __construct($request)
    {
        $this->request = $request;
    }


    public function renderControlleur()
    {

        $path = $this->request;


        if(array_key_exists($path, $this->paths)) {
            $controlleur = $this->paths[$path]['controlleur'];
            $action = $this->paths[$path]['action'];

            $ctrl = new $controlleur;
            $ctrl->$action();

        } else {
            echo '404'; exit;
        }


    }


}