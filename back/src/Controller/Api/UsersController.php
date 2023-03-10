<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Http\Exception\UnauthorizedException;

/**
 * Users Controller
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Token');
    }
    public function login()
    {
         $this->request->allowMethod(['post', 'put']);

     /* format data */
     if (1 == 1) {
        // $querry=$this->request->getData();
        // $data=json_decode($querry['data']); 
       $data=$this->request->getData();

    }

        /* vérifier l'existance des données */
        if (1 == 1) {
            if ((!isset($data["email"]) or !$this->issetVerification($data["email"])) or (!isset($data["password"]) or !$this->issetVerification($data["password"]))) {
                throw new UnauthorizedException("Veuillez vérifier votre email ou votre mot de passe.");
            }
        }


        /* detect auth method */
        if(1==1){
            /* try to find the user */
            $user = $this->Users->find('all', [
                'conditions' => [
                    'email' => $data["email"],
                ],
                'contain'=> [
                    'Roles'
                ]
 
            ])->First();
      //   debug($user);die; 

            if (!isset($user) or !$this->issetVerification($user)) {
                throw new UnauthorizedException("name n'est liée à aucun compte Partenaire.");
            }
        }

        /* vérifier la mot de passe */
        if (1 == 1) {
            $postedPassword = $data["password"];
            $userPassword = $user->password;

            /* verify password matching */
            $match = $this->Users->checkPassword($postedPassword, $userPassword);
            if ($match == false) {
                throw new UnauthorizedException("Veuillez vérifier votre mot de passe.");
            }
        }

        /* correct informtion */
        if ($match == true) {
            $JWT = $this->Token->createToken($user);


            $this->set([
                'success' => true,
                'data' => [
                    'token' => $JWT,
                ],
                '_serialize' => ['success', 'data']
            ]);
        }
    }

   
    /****** Mini Actions ******/

    /**
     * verify isset and not empty entity
     *
     * @Input: entity  *Required
     *
     * @Output: true or false
     */
    public function issetVerification($entity = null){

        if(isset($entity) and !empty($entity) and $entity != null and $entity != 'null' and $entity != 'NaN' and $entity != 'undefined'){
            return true;
        }
        return false;
    }
    
    public function logout()
    {
      $this->Flash->success('Au revoir');
       return $this->redirect($this->Auth->logout());
    }
}
