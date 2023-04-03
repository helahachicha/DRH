<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infopersonnelles Controller
 *
 * @method \App\Model\Entity\Infopersonnelle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfopersonnellesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $infopersonnelles = $this->paginate($this->Infopersonnelles);

        $this->set(compact('infopersonnelles'));
    }

    /**
     * View method
     *
     * @param string|null $id Infopersonnelle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $infopersonnelle = $this->Infopersonnelles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('infopersonnelle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $infopersonnelle = $this->Infopersonnelles->newEmptyEntity();
        if ($this->request->is('post')) {
            $infopersonnelle = $this->Infopersonnelles->patchEntity($infopersonnelle, $this->request->getData());
            if ($this->Infopersonnelles->save($infopersonnelle)) {
                $this->Flash->success(__('The infopersonnelle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The infopersonnelle could not be saved. Please, try again.'));
        }
        $this->set(compact('infopersonnelle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Infopersonnelle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $infopersonnelle = $this->Infopersonnelles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infopersonnelle = $this->Infopersonnelles->patchEntity($infopersonnelle, $this->request->getData());
            if ($this->Infopersonnelles->save($infopersonnelle)) {
                $this->Flash->success(__('The infopersonnelle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The infopersonnelle could not be saved. Please, try again.'));
        }
        $this->set(compact('infopersonnelle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Infopersonnelle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $infopersonnelle = $this->Infopersonnelles->get($id);
        if ($this->Infopersonnelles->delete($infopersonnelle)) {
            $this->Flash->success(__('The infopersonnelle has been deleted.'));
        } else {
            $this->Flash->error(__('The infopersonnelle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
