<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formacademiques Controller
 *
 * @method \App\Model\Entity\Formacademique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormacademiquesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $formacademiques = $this->paginate($this->Formacademiques);

        $this->set(compact('formacademiques'));
    }

    /**
     * View method
     *
     * @param string|null $id Formacademique id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formacademique = $this->Formacademiques->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('formacademique'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formacademique = $this->Formacademiques->newEmptyEntity();
        if ($this->request->is('post')) {
            $formacademique = $this->Formacademiques->patchEntity($formacademique, $this->request->getData());
            if ($this->Formacademiques->save($formacademique)) {
                $this->Flash->success(__('The formacademique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formacademique could not be saved. Please, try again.'));
        }
        $this->set(compact('formacademique'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Formacademique id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formacademique = $this->Formacademiques->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formacademique = $this->Formacademiques->patchEntity($formacademique, $this->request->getData());
            if ($this->Formacademiques->save($formacademique)) {
                $this->Flash->success(__('The formacademique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formacademique could not be saved. Please, try again.'));
        }
        $this->set(compact('formacademique'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Formacademique id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formacademique = $this->Formacademiques->get($id);
        if ($this->Formacademiques->delete($formacademique)) {
            $this->Flash->success(__('The formacademique has been deleted.'));
        } else {
            $this->Flash->error(__('The formacademique could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
