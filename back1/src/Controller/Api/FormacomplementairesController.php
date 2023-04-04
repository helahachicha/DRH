<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formacomplementaires Controller
 *
 * @method \App\Model\Entity\Formacomplementaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormacomplementairesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $formacomplementaires = $this->paginate($this->Formacomplementaires);

        $this->set(compact('formacomplementaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Formacomplementaire id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formacomplementaire = $this->Formacomplementaires->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('formacomplementaire'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formacomplementaire = $this->Formacomplementaires->newEmptyEntity();
        if ($this->request->is('post')) {
            $formacomplementaire = $this->Formacomplementaires->patchEntity($formacomplementaire, $this->request->getData());
            if ($this->Formacomplementaires->save($formacomplementaire)) {
                $this->Flash->success(__('The formacomplementaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formacomplementaire could not be saved. Please, try again.'));
        }
        $this->set(compact('formacomplementaire'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Formacomplementaire id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formacomplementaire = $this->Formacomplementaires->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formacomplementaire = $this->Formacomplementaires->patchEntity($formacomplementaire, $this->request->getData());
            if ($this->Formacomplementaires->save($formacomplementaire)) {
                $this->Flash->success(__('The formacomplementaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formacomplementaire could not be saved. Please, try again.'));
        }
        $this->set(compact('formacomplementaire'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Formacomplementaire id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formacomplementaire = $this->Formacomplementaires->get($id);
        if ($this->Formacomplementaires->delete($formacomplementaire)) {
            $this->Flash->success(__('The formacomplementaire has been deleted.'));
        } else {
            $this->Flash->error(__('The formacomplementaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
