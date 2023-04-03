<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Enfants Controller
 *
 * @method \App\Model\Entity\Enfant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnfantsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $enfants = $this->paginate($this->Enfants);

        $this->set(compact('enfants'));
    }

    /**
     * View method
     *
     * @param string|null $id Enfant id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enfant = $this->Enfants->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('enfant'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enfant = $this->Enfants->newEmptyEntity();
        if ($this->request->is('post')) {
            $enfant = $this->Enfants->patchEntity($enfant, $this->request->getData());
            if ($this->Enfants->save($enfant)) {
                $this->Flash->success(__('The enfant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enfant could not be saved. Please, try again.'));
        }
        $this->set(compact('enfant'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enfant id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enfant = $this->Enfants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enfant = $this->Enfants->patchEntity($enfant, $this->request->getData());
            if ($this->Enfants->save($enfant)) {
                $this->Flash->success(__('The enfant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enfant could not be saved. Please, try again.'));
        }
        $this->set(compact('enfant'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enfant id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enfant = $this->Enfants->get($id);
        if ($this->Enfants->delete($enfant)) {
            $this->Flash->success(__('The enfant has been deleted.'));
        } else {
            $this->Flash->error(__('The enfant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
