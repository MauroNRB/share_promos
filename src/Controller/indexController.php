<?php

namespace App\Controller;

use App\Entity\ConstInfo;

/**
 * @author Mauro Ribeiro
 * @since 2020-06-09
 */
class indexController extends Controller
{
    public function show()
    {
        return parent::show(ConstInfo::INDEX_HTML);
    }
}