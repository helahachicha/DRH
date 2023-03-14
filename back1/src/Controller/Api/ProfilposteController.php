<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposte Controller
 *
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilposteController extends AppController
{
    /**
    * getAllProfilposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilposte()
    {

        /* search */
        $profilposte = $this->Profilposte->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilposte,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilposte
     *
     * @Input:
     *         data:
     *          ct (String) 
     *          contenuct (String) 
     *          co (String)
     *          gt (int) 
     *          nivvisegt (String) 
     *          isuivigt (String) 
     *          cc (String) 
     *      	ge (String) 
     *      	au (String) 
     *          po (String) 
     *          ci (int) 
     *          nivviseci (int) 
     *          isuivici	 (DateTime) 
     *          tc (String) 
     * 	        nivvisetc (String) 
     *          isuivitc (String) 
     *          rp (String) 
     *          nivviserp (String) 
     *          isuivirp (String) 
     *          se (int) 
     *          nivvisese (String) 
     *          isuivise (String) 
     *          dr (int) 
     *          contenudroit (String) 
     *          dev (String) 
     *          contenudev (int) 
     *          validation (String) 
     *          fonc (String) 
     *          np (String) 
     *          fonc1 (int) 
     *          np1 (String) 
     *          fonc2 (String) 
     *          np2 (String) 

     *         
     *         
     * @Output: data : success message
     */
    public function editProfilposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilposte=$this->Profilposte->get($id);
         /* create formaexternes entity */
        
        if (1==1){
            $formaexternes->ct=$data->ct;  
            $formaexternes->contenuct=$data->contenuct;  
            $formaexternes->co=$data->co;  
            $formaexternes->gt=$data->gt;  
            $formaexternes->nivvisegt=$data->nivvisegt;  
            $formaexternes->isuivigt=$data->isuivigt;  
            $formaexternes->cc=$data->cc;  
            $formaexternes->ge=$data->ge;  
            $formaexternes->au=$data->au;  
            $formaexternes->po=$data->po;  
            $formaexternes->ci=$data->ci;  
            $formaexternes->nivviseci=$data->nivviseci;  
            $formaexternes->isuivici=$data->isuivici;  
            $formaexternes->tc=$data->tc;  
            $formaexternes->nivvisetc=$data->nivvisetc;  
            $formaexternes->isuivitc=$data->isuivitc;  
            $formaexternes->rp=$data->rp;  
            $formaexternes->nivviserp=$data->nivviserp;  
            $formaexternes->isuivirp=$data->isuivirp;  
            $formaexternes->se=$data->se;  
            $formaexternes->nivvisese=$data->nivvisese;  
            $formaexternes->isuivise=$data->isuivise;  
            $formaexternes->dr=$data->dr;  
            $formaexternes->contenudroit=$data->contenudroit;  
            $formaexternes->dev=$data->dev;  
            $formaexternes->contenudev=$data->contenudev;  
            $formaexternes->validation=$data->validation;  
            $formaexternes->fonc=$data->fonc;  
            $formaexternes->np=$data->np;  
            $formaexternes->fonc1=$data->fonc1;  
            $formaexternes->np1=$data->np1;  
            $formaexternes->fonc2=$data->fonc2;  
            $formaexternes->np2=$data->np2;  

            $this->Profilposte->save($profilposte); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }
}
