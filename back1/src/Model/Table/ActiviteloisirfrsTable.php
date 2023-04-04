<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activiteloisirfrs Model
 *
 * @property \App\Model\Table\InfoprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Infoprofessionnelles
 *
 * @method \App\Model\Entity\Activiteloisirfr newEmptyEntity()
 * @method \App\Model\Entity\Activiteloisirfr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisirfr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisirfr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisirfr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisirfr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Activiteloisirfr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActiviteloisirfrsTable extends Table
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

        $this->setTable('activiteloisirfrs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Infoprofessionnelles', [
            'foreignKey' => 'infoprofessionnelle_id',
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
            ->scalar('activitesportive')
            ->maxLength('activitesportive', 255)
            ->requirePresence('activitesportive', 'create')
            ->notEmptyString('activitesportive');

        $validator
            ->scalar('lequelsport')
            ->maxLength('lequelsport', 255)
            ->requirePresence('lequelsport', 'create')
            ->notEmptyString('lequelsport');

        $validator
            ->scalar('activitecreative')
            ->maxLength('activitecreative', 255)
            ->requirePresence('activitecreative', 'create')
            ->notEmptyString('activitecreative');

        $validator
            ->scalar('lequelcreative')
            ->maxLength('lequelcreative', 255)
            ->requirePresence('lequelcreative', 'create')
            ->notEmptyString('lequelcreative');

        $validator
            ->scalar('activiteinventivite')
            ->maxLength('activiteinventivite', 255)
            ->requirePresence('activiteinventivite', 'create')
            ->notEmptyString('activiteinventivite');

        $validator
            ->scalar('activitecorporelle')
            ->maxLength('activitecorporelle', 255)
            ->requirePresence('activitecorporelle', 'create')
            ->notEmptyString('activitecorporelle');

        $validator
            ->scalar('jeureflexion')
            ->maxLength('jeureflexion', 255)
            ->requirePresence('jeureflexion', 'create')
            ->notEmptyString('jeureflexion');

        $validator
            ->scalar('exerceractivite')
            ->maxLength('exerceractivite', 255)
            ->requirePresence('exerceractivite', 'create')
            ->notEmptyString('exerceractivite');

        $validator
            ->scalar('pourquoiexercer')
            ->maxLength('pourquoiexercer', 255)
            ->requirePresence('pourquoiexercer', 'create')
            ->notEmptyString('pourquoiexercer');

        $validator
            ->scalar('salledesport')
            ->maxLength('salledesport', 255)
            ->requirePresence('salledesport', 'create')
            ->notEmptyString('salledesport');

        $validator
            ->scalar('joursdispo')
            ->maxLength('joursdispo', 255)
            ->requirePresence('joursdispo', 'create')
            ->notEmptyString('joursdispo');

        $validator
            ->scalar('critereenfance')
            ->maxLength('critereenfance', 255)
            ->requirePresence('critereenfance', 'create')
            ->notEmptyString('critereenfance');

        $validator
            ->scalar('beaumoment')
            ->requirePresence('beaumoment', 'create')
            ->notEmptyString('beaumoment');

        $validator
            ->scalar('mauvaismoment')
            ->requirePresence('mauvaismoment', 'create')
            ->notEmptyString('mauvaismoment');

        $validator
            ->scalar('activitebenevolat')
            ->maxLength('activitebenevolat', 255)
            ->requirePresence('activitebenevolat', 'create')
            ->notEmptyString('activitebenevolat');

        $validator
            ->scalar('lequelbenevolat')
            ->maxLength('lequelbenevolat', 255)
            ->requirePresence('lequelbenevolat', 'create')
            ->notEmptyString('lequelbenevolat');

        $validator
            ->scalar('lieuact')
            ->maxLength('lieuact', 255)
            ->requirePresence('lieuact', 'create')
            ->notEmptyString('lieuact');

        $validator
            ->scalar('exercezactivite')
            ->maxLength('exercezactivite', 255)
            ->requirePresence('exercezactivite', 'create')
            ->notEmptyString('exercezactivite');

        $validator
            ->integer('infoprofessionnelle_id')
            ->notEmptyString('infoprofessionnelle_id');

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
        $rules->add($rules->existsIn('infoprofessionnelle_id', 'Infoprofessionnelles'), ['errorField' => 'infoprofessionnelle_id']);

        return $rules;
    }
}
