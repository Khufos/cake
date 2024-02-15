<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * About Controller
 *
 */
class AboutController extends AppController
{
//----------------------------//
    public function index(){
        $nome = 'iago Joseph';
        $age = '14';
//----------------------------//
        $this->set(compact('nome','age'));
        return $this->render('index','master');

    }
}
