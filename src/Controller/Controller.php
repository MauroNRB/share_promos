<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\ConstInfo;

abstract class Controller extends AbstractController
{
    public function show($html = ConstInfo::INDEX_HTML, $array = array())
    {
        return $this->render($html, $array);
    }

    public  function showRouter($router = ConstInfo::INDEX_URL, $array = array())
    {

    }
}