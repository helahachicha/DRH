<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Expprofessionnelles Controller
 *
 * @method \App\Model\Entity\Expprofessionnelle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpprofessionnellesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $expprofessionnelles = $this->paginate($this->Expprofessionnelles);

        $this->set(compact('expprofessionnelles'));
    }

    /**
     * View method
     *
     * @param string|null $id Expprofessionnelle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expprofessionnelle = $this->Expprofessionnelles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('expprofessionnelle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expprofessionnelle = $this->Expprofessionnelles->newEmptyEntity();
        if ($this->request->is('post')) {
            $expprofessionnelle = $this->Expprofessionnelles->patchEntity($expprofessionnelle, $this->request->getData());
            if ($this->Expprofessionnelles->save($expprofessionnelle)) {
                $this->Flash->success(__('The expprofessionnelle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expprofessionnelle could not be saved. Please, try again.'));
        }
        $this->set(compact('expprofessionnelle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expprofessionnelle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expprofessionnelle = $this->Expprofessionnelles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expprofessionnelle = $this->Expprofessionnelles->patchEntity($expprofessionnelle, $this->request->getData());
            if ($this->Expprofessionnelles->save($expprofessionnelle)) {
                $this->Flash->success(__('The expprofessionnelle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expprofessionnelle could not be saved. Please, try again.'));
        }
        $this->set(compact('expprofessionnelle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expprofessionnelle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expprofessionnelle = $this->Expprofessionnelles->get($id);
        if ($this->Expprofessionnelles->delete($expprofessionnelle)) {
            $this->Flash->success(__('The expprofessionnelle has been deleted.'));
        } else {
            $this->Flash->error(__('The expprofessionnelle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
