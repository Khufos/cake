<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * User Controller
 *
 */
class UserController extends AppController
{
    public function index(){
        var_dump('Está funcionando!');
        die();
    }

    public function show(){
        var_dump("SHOW is now! roter user");
        die();
    }
}
