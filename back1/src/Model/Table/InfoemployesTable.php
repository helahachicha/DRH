<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infoemployes Model
 *
 * @property \App\Model\Table\PostesTable&\Cake\ORM\Association\BelongsTo $Postes
 *
 * @method \App\Model\Entity\Infoemploye newEmptyEntity()
 * @method \App\Model\Entity\Infoemploye newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infoemploye[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infoemploye get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infoemploye findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infoemploye patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infoemploye[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infoemploye|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infoemploye saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infoemploye[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoemploye[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoemploye[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoemploye[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfoemployesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('infoemployes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Postes', [
            'foreignKey' => 'poste_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nomprenom')
            ->maxLength('nomprenom', 255)
            ->requirePresence('nomprenom', 'create')
            ->notEmptyString('nomprenom');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 255)
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->integer('telprof')
            ->requirePresence('telprof', 'create')
            ->notEmptyString('telprof');

        $validator
            ->integer('telpersonnel')
            ->requirePresence('telpersonnel', 'create')
            ->notEmptyString('telpersonnel');

        $validator
            ->integer('contact')
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact');

        $validator
            ->scalar('mailprof')
            ->maxLength('mailprof', 255)
            ->requirePresence('mailprof', 'create')
            ->notEmptyString('mailprof');

        $validator
            ->scalar('mailpersonnel')
            ->maxLength('mailpersonnel', 255)
            ->requirePresence('mailpersonnel', 'create')
            ->notEmptyString('mailpersonnel');

        $validator
            ->scalar('servicetravail')
            ->maxLength('servicetravail', 255)
            ->requirePresence('servicetravail', 'create')
            ->notEmptyString('servicetravail');

        $validator
            ->integer('poste_id')
            ->notEmptyString('poste_id');

        $validator
            ->dateTime('datenaissance')
            ->requirePresence('datenaissance', 'create')
            ->notEmptyDateTime('datenaissance');

        $validator
            ->scalar('lieu')
            ->maxLength('lieu', 255)
            ->requirePresence('lieu', 'create')
            ->notEmptyString('lieu');

        $validator
            ->scalar('nationnalite')
            ->maxLength('nationnalite', 255)
            ->requirePresence('nationnalite', 'create')
            ->notEmptyString('nationnalite');

        $validator
            ->integer('cin')
            ->requirePresence('cin', 'create')
            ->notEmptyString('cin');

        $validator
            ->scalar('delivreea')
            ->maxLength('delivreea', 255)
            ->requirePresence('delivreea', 'create')
            ->notEmptyString('delivreea');

        $validator
            ->dateTime('datedelivrance')
            ->requirePresence('datedelivrance', 'create')
            ->notEmptyDateTime('datedelivrance');

        $validator
            ->scalar('permis')
            ->maxLength('permis', 255)
            ->requirePresence('permis', 'create')
            ->notEmptyString('permis');

        $validator
            ->dateTime('datepermis')
            ->requirePresence('datepermis', 'create')
            ->notEmptyDateTime('datepermis');

        $validator
            ->scalar('logement')
            ->maxLength('logement', 255)
            ->requirePresence('logement', 'create')
            ->notEmptyString('logement');

        $validator
            ->scalar('moytransport')
            ->maxLength('moytransport', 255)
            ->requirePresence('moytransport', 'create')
            ->notEmptyString('moytransport');

        $validator
            ->time('estimatransport')
            ->requirePresence('estimatransport', 'create')
            ->notEmptyTime('estimatransport');

        $validator
            ->scalar('etatsociale')
            ->maxLength('etatsociale', 255)
            ->requirePresence('etatsociale', 'create')
            ->notEmptyString('etatsociale');

        $validator
            ->scalar('dateetatsociale')
            ->maxLength('dateetatsociale', 255)
            ->requirePresence('dateetatsociale', 'create')
            ->notEmptyString('dateetatsociale');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('poste_id', 'Postes'), ['errorField' => 'poste_id']);

        return $rules;
    }
}
