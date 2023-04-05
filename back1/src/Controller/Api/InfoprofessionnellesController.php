<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infoprofessionnelles Controller
 *
 * @method \App\Model\Entity\Infoprofessionnelle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoprofessionnellesController extends AppController
{
    public function insertInfoprofessionnelle()
    {
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create coutformaexternes entity */
        if (1==1){
        $coutformaexternes = $this->Coutformaexternes->newEmptyEntity();
        $coutformaexternes->daten = isset($data['daten_radio']) ? $data['daten_radio'] : $data['daten_text'];
        $coutformaexternes->tocoformadt = isset($data['tocoformadt_radio']) ? $data['tocoformadt_radio'] : $data['tocoformadt_text'];
        $coutformaexternes->locaespace = isset($data['locaespace_radio']) ? $data['locaespace_radio'] : $data['locaespace_text'];
        $coutformaexternes->comax = isset($data['comax_radio']) ? $data['comax_radio'] : $data['comax_text'];
        $coutformaexternes->tocout = isset($data['tocout_radio']) ? $data['tocout_radio'] : $data['tocout_text'];
        $coutformaexternes->chargeto = isset($data['chargeto_radio']) ? $data['chargeto_radio'] : $data['chargeto_text'];

            $this->Coutformaexternes->save($coutformaexternes); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    }

}
