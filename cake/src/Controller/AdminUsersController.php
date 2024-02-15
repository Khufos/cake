<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AdminUsers Controller
 *
 */
class AdminUsersController extends AppController
{

    public function users(){
        var_dump("Funcionou! Users");
        die();
    }


    public function show($arg1){
        var_dump('List user with id ' . $arg1);
        die();
    }

}
