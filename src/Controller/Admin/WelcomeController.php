<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */ 
class WelcomeController extends AppController
{
    public function index()
    {
        $user = $this->Auth->user();
        $this->set(compact('user'));
    }
}
