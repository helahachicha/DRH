<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Souscompetences Controller
 *
 * @property \App\Model\Table\SouscompetencesTable $Souscompetences
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscompetencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Competences'],
        ];
        $souscompetences = $this->paginate($this->Souscompetences);

        $this->set(compact('souscompetences'));
    }

    /**
     * View method
     *
     * @param string|null $id Souscompetence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $souscompetence = $this->Souscompetences->get($id, [
            'contain' => ['Competences', 'Indicateursuivis'],
        ]);

        $this->set(compact('souscompetence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $souscompetence = $this->Souscompetences->newEmptyEntity();
        if ($this->request->is('post')) {
            $souscompetence = $this->Souscompetences->patchEntity($souscompetence, $this->request->getData());
            if ($this->Souscompetences->save($souscompetence)) {
                $this->Flash->success(__('The souscompetence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscompetence could not be saved. Please, try again.'));
        }
        $competences = $this->Souscompetences->Competences->find('list', ['limit' => 200])->all();
        $this->set(compact('souscompetence', 'competences'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Souscompetence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $souscompetence = $this->Souscompetences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $souscompetence = $this->Souscompetences->patchEntity($souscompetence, $this->request->getData());
            if ($this->Souscompetences->save($souscompetence)) {
                $this->Flash->success(__('The souscompetence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscompetence could not be saved. Please, try again.'));
        }
        $competences = $this->Souscompetences->Competences->find('list', ['limit' => 200])->all();
        $this->set(compact('souscompetence', 'competences'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Souscompetence id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $souscompetence = $this->Souscompetences->get($id);
        if ($this->Souscompetences->delete($souscompetence)) {
            $this->Flash->success(__('The souscompetence has been deleted.'));
        } else {
            $this->Flash->error(__('The souscompetence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
