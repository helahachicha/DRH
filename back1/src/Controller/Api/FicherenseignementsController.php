<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Ficherenseignements Controller
 *
 * @method \App\Model\Entity\Ficherenseignement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FicherenseignementsController extends AppController
{
    /**
     * addFicherenseignement
     *
     * @Input:
     *         data:
     *          datefr (date) *Required
     *          npagefr (int) *Required
     *          nomprenomfr (String) *Required
     *          adressefr (String) *Required
     *          telprofefr (int) *Required
     *          telpersofr (int) *Required
     *          cantactcasurgfr (String) *Required
     *      	mailprofefr (String) *Required
     *      	mailpersfr (String) *Required
     *          servicetrafr (String) *Required
     *          postefr (int) *Required
     *          datenaifr (date) *Required
     *          lieufr (String) *Required
     *          nationalitefr (String) *Required
     * 	        ncinfr (int) *Required
     *          ncindelivreefr (String) *Required
     *          ncinlefr (date) *Required
     *          ouipermisfr (String) *Required
     *          tempsdotramfr (int) *Required
     *          tempsdotrahfr (int) *Required
     *          ouimdquandfr (String) *Required
     * 	        ouisallesportfr (String) *Required
     *          critereenfancefr (String) *Required
     *          beaumomentfr (String) *Required
     *          mauvaismometfr (String) *Required
     *          pointforcefr (String) *Required
     *          pointameliorefr (String) *Required
     *          npepouxfr (String) *Required
     *          datnaiepfr (date) *Required 
     *          niveauetudepfr (String) *Required
     *      	fonctionepfr (String) *Required
     *      	salaireepfr (float) *Required
     *          etatepouxfr (String) *Required
     *          specialitefr1 (String) *Required
     *          specialitefr2 (String) *Required
     *          specialitefr3(String) *Required
     *          specialitefr4 (String) *Required
     *          anneefr1 (year) *Required
     *          anneefr2 (year) *Required
     *          anneefr3 (year) *Required
     *      	anneefr4 (year) *Required
     *      	etablissfr1 (String) *Required
     *          etablissfr2 (String) *Required
     *          etablissfr3 (String) *Required
     *          etablissfr4 (String) *Required
     *          ouiactbenefr (String) *Required
     *          lieuactbenefr (String) *Required
     * @Output: data : success message
     */
    public function addFicherenseignement(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create ficherenseignements entity */
        if (1==1){
            $ficherenseignements = $this->Ficherenseignements->newEmptyEntity();
            $ficherenseignements->datefr=$data->datefr;  
            $ficherenseignements->npagefr=$data->npagefr;  
            $ficherenseignements->nomprenomfr=$data->nomprenomfr;  
            $ficherenseignements->adressefr=$data->adressefr;  
            $ficherenseignements->telprofefr=$data->telprofefr ;  
            $ficherenseignements->telpersofr=$data->telpersofr ;  
            $ficherenseignements->cantactcasurgfr=$data->cantactcasurgfr ;  
            $ficherenseignements->mailprofefr=$data->mailprofefr;  
            $ficherenseignements->mailpersfr=$data->mailpersfr ;  
            $ficherenseignements->servicetrafr=$data->servicetrafr;  
            $ficherenseignements->postefr=$data->postefr;  
            $ficherenseignements->datenaifr=$data->datenaifr;  
            $ficherenseignements->lieufr=$data->lieufr;  
            $ficherenseignements->nationalitefr=$data->nationalitefr;  
            $ficherenseignements->ncinfr=$data->ncinfr ;  
            $ficherenseignements->ncindelivreefr=$data->ncindelivreefr;  
            $ficherenseignements->ncinlefr=$data->ncinlefr ;  
            $ficherenseignements->ouipermisfr=$data->ouipermisfr;  
            $ficherenseignements->tempsdotramfr=$data->tempsdotramfr;  
            $ficherenseignements->tempsdotrahfr=$data->tempsdotrahfr;  
            $ficherenseignements->ouimdquandfr=$data->ouimdquandfr;  
            $ficherenseignements->ouisallesportfr=$data->ouisallesportfr;  
            $ficherenseignements->critereenfancefr=$data->critereenfancefr ;  
            $ficherenseignements->beaumomentfr=$data->beaumomentfr;  
            $ficherenseignements->mauvaismometfr=$data->mauvaismometfr;  
            $ficherenseignements->pointforcefr=$data->pointforcefr;
            $ficherenseignements->pointameliorefr=$data->pointameliorefr;  
            $ficherenseignements->npepouxfr=$data->npepouxfr;  
            $ficherenseignements->datnaiepfr=$data->datnaiepfr ;  
            $ficherenseignements->niveauetudepfr=$data->niveauetudepfr ;  
            $ficherenseignements->fonctionepfr=$data->fonctionepfr ; 
            $ficherenseignements->salaireepfr=$data->salaireepfr;  
            $ficherenseignements->etatepouxfr=$data->etatepouxfr;  
            $ficherenseignements->specialitefr1=$data->specialitefr1;  
            $ficherenseignements->specialitefr2=$data->specialitefr2;  
            $ficherenseignements->specialitefr3=$data->specialitefr3 ;  
            $ficherenseignements->specialitefr4=$data->specialitefr4 ;  
            $ficherenseignements->anneefr1=$data->anneefr1 ;  
            $ficherenseignements->anneefr2=$data->anneefr2;  
            $ficherenseignements->anneefr3=$data->anneefr3;  
            $ficherenseignements->anneefr4=$data->anneefr4;  
            $ficherenseignements->etablissfr1=$data->etablissfr1;  
            $ficherenseignements->etablissfr2=$data->etablissfr2;  
            $ficherenseignements->etablissfr3=$data->etablissfr3;  
            $ficherenseignements->etablissfr4=$data->etablissfr4;  
            $ficherenseignements->ouiactbenefr=$data->ouiactbenefr ;  
            $ficherenseignements->lieuactbenefr=$data->lieuactbenefr ; 

            $this->Ficherenseignements->save($ficherenseignements); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editFicherenseignement
     *
     * @Input:
     *         data:
     *          datefr (date) *Required
     *          npagefr (int) *Required
     *          nomprenomfr (String) *Required
     *          adressefr (String) *Required
     *          telprofefr (int) *Required
     *          telpersofr (int) *Required
     *          cantactcasurgfr (String) *Required
     *      	mailprofefr (String) *Required
     *      	mailpersfr (String) *Required
     *          servicetrafr (String) *Required
     *          postefr (int) *Required
     *          datenaifr (date) *Required
     *          lieufr (String) *Required
     *          nationalitefr (String) *Required
     * 	        ncinfr (int) *Required
     *          ncindelivreefr (String) *Required
     *          ncinlefr (date) *Required
     *          ouipermisfr (String) *Required
     *          tempsdotramfr (int) *Required
     *          tempsdotrahfr (int) *Required
     *          ouimdquandfr (String) *Required
     * 	        ouisallesportfr (String) *Required
     *          critereenfancefr (String) *Required
     *          beaumomentfr (String) *Required
     *          mauvaismometfr (String) *Required
     *          pointforcefr (String) *Required
     *          pointameliorefr (String) *Required
     *          npepouxfr (String) *Required
     *          datnaiepfr (date) *Required 
     *          niveauetudepfr (String) *Required
     *      	fonctionepfr (String) *Required
     *      	salaireepfr (float) *Required
     *          etatepouxfr (String) *Required
     *          specialitefr1 (String) *Required
     *          specialitefr2 (String) *Required
     *          specialitefr3(String) *Required
     *          specialitefr4 (String) *Required
     *          anneefr1 (year) *Required
     *          anneefr2 (year) *Required
     *          anneefr3 (year) *Required
     *      	anneefr4 (year) *Required
     *      	etablissfr1 (String) *Required
     *          etablissfr2 (String) *Required
     *          etablissfr3 (String) *Required
     *          etablissfr4 (String) *Required
     *          ouiactbenefr (String) *Required
     *          lieuactbenefr (String) *Required
     *         
     * @Output: data : success message
     */
    public function editFicherenseignement(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $ficherenseignements=$this->Ficherenseignements->get($id);
         /* create ficherenseignements entity */
        
        if (1==1){
            $ficherenseignements->datefr=$data->datefr;  
            $ficherenseignements->npagefr=$data->npagefr;  
            $ficherenseignements->nomprenomfr=$data->nomprenomfr;  
            $ficherenseignements->adressefr=$data->adressefr;  
            $ficherenseignements->telprofefr=$data->telprofefr ;  
            $ficherenseignements->telpersofr=$data->telpersofr ;  
            $ficherenseignements->cantactcasurgfr=$data->cantactcasurgfr ;  
            $ficherenseignements->mailprofefr=$data->mailprofefr;  
            $ficherenseignements->mailpersfr=$data->mailpersfr ;  
            $ficherenseignements->servicetrafr=$data->servicetrafr;  
            $ficherenseignements->postefr=$data->postefr;  
            $ficherenseignements->datenaifr=$data->datenaifr;  
            $ficherenseignements->lieufr=$data->lieufr;  
            $ficherenseignements->nationalitefr=$data->nationalitefr;  
            $ficherenseignements->ncinfr=$data->ncinfr ;  
            $ficherenseignements->ncindelivreefr=$data->ncindelivreefr;  
            $ficherenseignements->ncinlefr=$data->ncinlefr ;  
            $ficherenseignements->ouipermisfr=$data->ouipermisfr;  
            $ficherenseignements->tempsdotramfr=$data->tempsdotramfr;  
            $ficherenseignements->tempsdotrahfr=$data->tempsdotrahfr;  
            $ficherenseignements->ouimdquandfr=$data->ouimdquandfr;  
            $ficherenseignements->ouisallesportfr=$data->ouisallesportfr;  
            $ficherenseignements->critereenfancefr=$data->critereenfancefr ;  
            $ficherenseignements->beaumomentfr=$data->beaumomentfr;  
            $ficherenseignements->mauvaismometfr=$data->mauvaismometfr;  
            $ficherenseignements->pointforcefr=$data->pointforcefr;
            $ficherenseignements->pointameliorefr=$data->pointameliorefr;  
            $ficherenseignements->npepouxfr=$data->npepouxfr;  
            $ficherenseignements->datnaiepfr=$data->datnaiepfr ;  
            $ficherenseignements->niveauetudepfr=$data->niveauetudepfr ;  
            $ficherenseignements->fonctionepfr=$data->fonctionepfr ; 
            $ficherenseignements->salaireepfr=$data->salaireepfr;  
            $ficherenseignements->etatepouxfr=$data->etatepouxfr;  
            $ficherenseignements->specialitefr1=$data->specialitefr1;  
            $ficherenseignements->specialitefr2=$data->specialitefr2;  
            $ficherenseignements->specialitefr3=$data->specialitefr3 ;  
            $ficherenseignements->specialitefr4=$data->specialitefr4 ;  
            $ficherenseignements->anneefr1=$data->anneefr1 ;  
            $ficherenseignements->anneefr2=$data->anneefr2;  
            $ficherenseignements->anneefr3=$data->anneefr3;  
            $ficherenseignements->anneefr4=$data->anneefr4;  
            $ficherenseignements->etablissfr1=$data->etablissfr1;  
            $ficherenseignements->etablissfr2=$data->etablissfr2;  
            $ficherenseignements->etablissfr3=$data->etablissfr3;  
            $ficherenseignements->etablissfr4=$data->etablissfr4;  
            $ficherenseignements->ouiactbenefr=$data->ouiactbenefr ;  
            $ficherenseignements->lieuactbenefr=$data->lieuactbenefr ;  

            $this->Ficherenseignements->save($ficherenseignements); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllFicherenseignement
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFicherenseignement()
    {

        /* search */
        $ficherenseignements = $this->Ficherenseignements->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $ficherenseignements,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getFicherenseignement
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getFicherenseignement(){
 
         $id = $this->request->getQuery('id');
         /* search */
          
         if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
            if(!is_numeric($id)){
                throw new UnauthorizedException('Id is not Valid');
            }
        }

 
         $ficherenseignements = $this->Ficherenseignements->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
           // debug($ficherenseignements);die;

         if(empty($ficherenseignements)){
             throw new UnauthorizedException('Ficherenseignements not found');
         }
 
         /*send result */
         $this->set([
             'success' => true,
             'data' => $ficherenseignements,
             '_serialize' => ['success', 'data']
         ]);
     }
}
