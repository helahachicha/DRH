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
        if ($this->request->is('post')) {
            $this->request->allowMethod(['post']);

            $this->request->validate([
                'daten' => 'required',
                'lieu' => 'required',
                'nationalite' => 'required',
                'ncin' => 'required',
                'delivreecin' => 'required',
                'datecin' => 'required',
                'permis' => 'required',
                'datepermis' => 'required',
                'logement' => 'required',
                'moyentransport' => 'required',
                'heure' => 'required',
                'minute' => 'required',
                'situationfamiliale' => 'required',
                'datemariedivorce' => 'required',
            ]);

            $user = $this->Infoprofessionnelles->newEmptyEntity();

            $user->daten = $this->request->getData('daten');
            $user->lieu = $this->request->getData('lieu');
            $user->nationalite = $this->request->getData('nationalite');
            $user->ncin = $this->request->getData('ncin');
            $user->delivreecin = $this->request->getData('delivreecin');
            $user->datecin = $this->request->getData('datecin');
            $user->permis = json_encode($this->request->getData('permis'));
            $user->datepermis = $this->request->getData('datepermis');
            $user->logement= json_encode($this->request->getData('logement'));
            $user->moyentransport = json_encode($this->request->getData('moyentransport'));
            $user->heure = $this->request->getData('heure');
            $user->minute = $this->request->getData('minute');
            $user->situationfamiliale= json_encode($this->request->getData('situationfamiliale'));
            $user->datemariedivorce = $this->request->getData('datemariedivorce');

            if ($this->Infoprofessionnelles->save($user)) {
                $this->Flash->success(__('Information professionnelle ajoutée avec succès.'));
            } else {
                $this->Flash->error(__('Erreur: l\'informationn professionnelle n\'a pas été ajoutée. Veuillez réessayer.'));
            }

            return $this->redirect(['action' => 'index']);
        }
    }

}
