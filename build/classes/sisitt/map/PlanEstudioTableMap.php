<?php



/**
 * This class defines the structure of the 'planestudio' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.sisitt.map
 */
class PlanEstudioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.PlanEstudioTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('planestudio');
        $this->setPhpName('PlanEstudio');
        $this->setClassname('PlanEstudio');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdPlanEstudio', 'INTEGER', true, 20, null);
        $this->addColumn('nombreplaestudio', 'NombrePlanEstudio', 'VARCHAR', true, 200, null);
        // validators
        $this->addValidator('nombreplaestudio', 'required', 'propel.validator.RequiredValidator', '', 'El campo nombre de plan de estudio no puede ser vacío');
        $this->addValidator('nombreplaestudio', 'minLength', 'propel.validator.MinLengthValidator', '10', 'El nombre de plan de estudios no puede ser menor a 2 caracteres');
        $this->addValidator('nombreplaestudio', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'El nombre de plan de estudios no puede ser mayor a 200 caracteres');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::ONE_TO_MANY, array('id' => 'plan_id', ), null, null, 'Usuarios');
    } // buildRelations()

} // PlanEstudioTableMap
