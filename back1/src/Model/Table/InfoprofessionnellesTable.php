<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infoprofessionnelles Model
 *
 * @property \App\Model\Table\ActiviteloisirfrsTable&\Cake\ORM\Association\HasMany $Activiteloisirfrs
 * @property \App\Model\Table\CasmariagesTable&\Cake\ORM\Association\HasMany $Casmariages
 * @property \App\Model\Table\EnfantsTable&\Cake\ORM\Association\HasMany $Enfants
 * @property \App\Model\Table\ExpprofessionnellesTable&\Cake\ORM\Association\HasMany $Expprofessionnelles
 * @property \App\Model\Table\FormacademiquesTable&\Cake\ORM\Association\HasMany $Formacademiques
 * @property \App\Model\Table\FormacomplementairesTable&\Cake\ORM\Association\HasMany $Formacomplementaires
 * @property \App\Model\Table\InfopersonnellesTable&\Cake\ORM\Association\HasMany $Infopersonnelles
 * @property \App\Model\Table\LanguesTable&\Cake\ORM\Association\HasMany $Langues
 * @property \App\Model\Table\PointsTable&\Cake\ORM\Association\HasMany $Points
 *
 * @method \App\Model\Entity\Infoprofessionnelle newEmptyEntity()
 * @method \App\Model\Entity\Infoprofessionnelle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoprofessionnelle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfoprofessionnellesTable extends Table
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

        $this->setTable('infoprofessionnelles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Activiteloisirfrs', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Casmariages', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Enfants', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Expprofessionnelles', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Formacademiques', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Formacomplementaires', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Infopersonnelles', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Langues', [
            'foreignKey' => 'infoprofessionnelle_id',
        ]);
        $this->hasMany('Points', [
            'foreignKey' => 'infoprofessionnelle_id',
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
            ->integer('telprofessionnel')
            ->requirePresence('telprofessionnel', 'create')
            ->notEmptyString('telprofessionnel');

        $validator
            ->integer('telpersonnel')
            ->requirePresence('telpersonnel', 'create')
            ->notEmptyString('telpersonnel');

        $validator
            ->integer('contact')
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact');

        $validator
            ->scalar('mailprofessionnel')
            ->maxLength('mailprofessionnel', 255)
            ->requirePresence('mailprofessionnel', 'create')
            ->notEmptyString('mailprofessionnel');

        $validator
            ->scalar('mailpersonnel')
            ->maxLength('mailpersonnel', 255)
            ->requirePresence('mailpersonnel', 'create')
            ->notEmptyString('mailpersonnel');

        $validator
            ->scalar('service')
            ->maxLength('service', 255)
            ->requirePresence('service', 'create')
            ->notEmptyString('service');

        $validator
            ->scalar('poste')
            ->maxLength('poste', 255)
            ->requirePresence('poste', 'create')
            ->notEmptyString('poste');

        return $validator;
    }
}
