<?php

namespace src\Controller;

use Tourbillon\Controller\Controller;

/**
 * Description of IndexController
 *
 * @author gjean
 */
class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('index.tpl');
    }
}
