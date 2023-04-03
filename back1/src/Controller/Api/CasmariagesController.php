<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Casmariages Controller
 *
 * @method \App\Model\Entity\Casmariage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CasmariagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $casmariages = $this->paginate($this->Casmariages);

        $this->set(compact('casmariages'));
    }

    /**
     * View method
     *
     * @param string|null $id Casmariage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $casmariage = $this->Casmariages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('casmariage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $casmariage = $this->Casmariages->newEmptyEntity();
        if ($this->request->is('post')) {
            $casmariage = $this->Casmariages->patchEntity($casmariage, $this->request->getData());
            if ($this->Casmariages->save($casmariage)) {
                $this->Flash->success(__('The casmariage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The casmariage could not be saved. Please, try again.'));
        }
        $this->set(compact('casmariage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Casmariage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $casmariage = $this->Casmariages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $casmariage = $this->Casmariages->patchEntity($casmariage, $this->request->getData());
            if ($this->Casmariages->save($casmariage)) {
                $this->Flash->success(__('The casmariage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The casmariage could not be saved. Please, try again.'));
        }
        $this->set(compact('casmariage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Casmariage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $casmariage = $this->Casmariages->get($id);
        if ($this->Casmariages->delete($casmariage)) {
            $this->Flash->success(__('The casmariage has been deleted.'));
        } else {
            $this->Flash->error(__('The casmariage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
