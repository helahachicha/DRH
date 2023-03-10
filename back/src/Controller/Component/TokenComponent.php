<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Core\Configure;
use Firebase\JWT\JWT;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\UnauthorizedException;
/**
 * Token component
 */
class TokenComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /****** Main Actions ******/

    /**
     * create Token
     *
     * @Input: user(id [int]) *Required
     *
     *
     * @Output: token
     */
    public function createToken($user=NULL){

        $token = JWT::encode(
            [
                'id'=>$user->id,
                'name'=>$user->name,
                'role' => $user->role->label,
                'iss'=>'Kusa-api',
            //    'exp' =>  strtotime("+30 minutes", time())
            ],Configure::read('ApiGeneraleSecure')
        );
        return $token;
    }

    public function verifyToken($token=NULL ){
        /* load dependencies */
        $this->User = TableRegistry::get('Users');

        $alog=array('HS256');
        $tokenContent = JWT::decode($token,Configure::read('ApiGeneraleSecure'),$alog);
        $userMail=$tokenContent->email;
        $postedSk=$tokenContent->sk;
        /* if not valid data */
        if(!isset($userMail) or empty($userMail) or !isset($postedSk) or empty($postedSk)){
            throw new UnauthorizedException('not authorized');
        }

        $user= $this->User->findByEmail($userMail)->First();

        /* si l'utilisateur n'existe pas */
        if(!isset($user) or empty($user)){
            throw new UnauthorizedException('not authorized');
        }

        $sk =  base64_encode($user->password.Configure::read('ApiPasswordSecure'));

        /* verify sk */
        if($postedSk != $sk){
            throw new UnauthorizedException('not authorized');
        }else{
            $info= [];

            $role=$this->User->Roles->find('all',['conditions'=>['id'=>$user->role_id]])->First();

            $info['id']=$user->id;
            $info['role']=$role->label;
            return  $info;
        }

    }




}