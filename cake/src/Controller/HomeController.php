<?php



namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Home Controller
 *
 */
class HomeController extends AppController
{


    public function index()
    {
        // $tablePosts= TableRegistry::getTableLocator()->get('Posts');
        // $query = $tablePosts->find()->contain(['Users']);

        $tableUsers = TableRegistry::getTableLocator()->get('Users');
        $query= $tableUsers->find()->contain(['Posts']);


        $users = $this->paginate($query,['limit'=> 3]);

    



        
        // $tableRoles = TableRegistry::getTableLocator()->get('Roles');
        // $roles = $tableRoles->find()->contain(['Abilities']);
        // var_dump($posts);
        // die();

        // $users = $tableUsers->query()->where(['id >' => 5]);
        // $saved = $tableUsers->query()->update(['firstname', 'lastName', 'email', 'password'])->values([
        //     'firstname' => 'Joao',
        //     'lastName' => 'Santos',
        //     'email' => 'emunoel@gmail.com',
        //     'password' => password_hash('123', PASSWORD_DEFAULT)
        // ])->execute();

        

        // var_dump($users);
        // die();
        // $users = $tableUsers->find()->where()->limit(10)->orderByAsc('id');

        //Isso é um insert com entity e table
        // $userEntity = $tableUsers->newEmptyEntity();
        // $userEntity->firstname= 'Alexandre';
        // $userEntity->lastName= 'cardoso';
        // $userEntity->email='gasparsinho@gmail.com';
        // $userEntity->password = password_hash('123', PASSWORD_DEFAULT);
        // $saved = $tableUsers->save($userEntity);
        // var_dump($saved);
        //Isso aqui é um updated passsando o id 

        // $userEntity = $tableUsers->newEmptyEntity();
        // $userEntity->id = 22;
        // $userEntity->firstname= 'Saulo';
        // $userEntity->lastName= 'cardoso';
        // $userEntity->email='gasparsinho@gmail.com';
        // $userEntity->password = password_hash('123', PASSWORD_DEFAULT);
        // $saved = $tableUsers->save($userEntity);
        // var_dump($saved);


        $this->set(compact('users'));


        //var_dump($users);

        return $this->render('index', 'master');
    }
}
