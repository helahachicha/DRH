<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoriedes Model
 *
 * @property \App\Model\Table\InfogencatppsTable&\Cake\ORM\Association\HasMany $Infogencatpps
 * @property \App\Model\Table\InterimsTable&\Cake\ORM\Association\HasMany $Interims
 * @property \App\Model\Table\SupervisionsTable&\Cake\ORM\Association\HasMany $Supervisions
 *
 * @method \App\Model\Entity\Categoriede newEmptyEntity()
 * @method \App\Model\Entity\Categoriede newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriede[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriede get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoriede findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Categoriede patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriede[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriede|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriede saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriede[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoriede[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoriede[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoriede[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriedesTable extends Table
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

        $this->setTable('categoriedes');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Infogencatpps', [
            'foreignKey' => 'categoriede_id',
        ]);
        $this->hasMany('Interims', [
            'foreignKey' => 'categoriede_id',
        ]);
        $this->hasMany('Supervisions', [
            'foreignKey' => 'categoriede_id',
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
            ->scalar('label')
            ->maxLength('label', 255)
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

        return $validator;
    }
}
