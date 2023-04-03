<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Activiteloisirfrs Controller
 *
 * @method \App\Model\Entity\Activiteloisirfr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActiviteloisirfrsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $activiteloisirfrs = $this->paginate($this->Activiteloisirfrs);

        $this->set(compact('activiteloisirfrs'));
    }

    /**
     * View method
     *
     * @param string|null $id Activiteloisirfr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activiteloisirfr = $this->Activiteloisirfrs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('activiteloisirfr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activiteloisirfr = $this->Activiteloisirfrs->newEmptyEntity();
        if ($this->request->is('post')) {
            $activiteloisirfr = $this->Activiteloisirfrs->patchEntity($activiteloisirfr, $this->request->getData());
            if ($this->Activiteloisirfrs->save($activiteloisirfr)) {
                $this->Flash->success(__('The activiteloisirfr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activiteloisirfr could not be saved. Please, try again.'));
        }
        $this->set(compact('activiteloisirfr'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activiteloisirfr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activiteloisirfr = $this->Activiteloisirfrs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activiteloisirfr = $this->Activiteloisirfrs->patchEntity($activiteloisirfr, $this->request->getData());
            if ($this->Activiteloisirfrs->save($activiteloisirfr)) {
                $this->Flash->success(__('The activiteloisirfr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activiteloisirfr could not be saved. Please, try again.'));
        }
        $this->set(compact('activiteloisirfr'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activiteloisirfr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activiteloisirfr = $this->Activiteloisirfrs->get($id);
        if ($this->Activiteloisirfrs->delete($activiteloisirfr)) {
            $this->Flash->success(__('The activiteloisirfr has been deleted.'));
        } else {
            $this->Flash->error(__('The activiteloisirfr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
