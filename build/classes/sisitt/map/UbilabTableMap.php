<?php



/**
 * This class defines the structure of the 'encuempr_ubilab' table.
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
class UbilabTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.UbilabTableMap';

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
        $this->setName('encuempr_ubilab');
        $this->setPhpName('Ubilab');
        $this->setClassname('Ubilab');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdEncuesta', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('numpro', 'NumPro', 'ENUM', false, 20, null);
        $this->getColumn('numpro', false)->setValueSet(array (
  0 => '0',
  1 => '1a5',
  2 => '6a10',
  3 => '11a15',
  4 => 'mas15',
));
        $this->addColumn('numegre', 'NumEgre', 'ENUM', false, 20, null);
        $this->getColumn('numegre', false)->setValueSet(array (
  0 => '0',
  1 => '1a5',
  2 => '6a10',
  3 => '11a15',
  4 => 'mas15',
));
        $this->addColumn('congruencia', 'Congruencia', 'ENUM', false, 20, null);
        $this->getColumn('congruencia', false)->setValueSet(array (
  0 => 'ninguna',
  1 => 'ligeramente',
  2 => 'medianamente',
  3 => 'completamente',
));
        $this->addColumn('carrera1', 'Carrera1', 'VARCHAR', true, 50, null);
        $this->addColumn('carrera2', 'Carrera2', 'VARCHAR', true, 50, null);
        $this->addColumn('carrera3', 'Carrera3', 'VARCHAR', true, 50, null);
        $this->addColumn('carrera4', 'Carrera4', 'VARCHAR', true, 50, null);
        $this->addColumn('carrera5', 'Carrera5', 'VARCHAR', true, 50, null);
        $this->addColumn('carrera6', 'Carrera6', 'VARCHAR', true, 50, null);
        $this->addColumn('requisito1', 'Requisito1', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito2', 'Requisito2', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito3', 'Requisito3', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito4', 'Requisito4', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito5', 'Requisito5', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito6', 'Requisito6', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito7', 'Requisito7', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito8', 'Requisito8', 'BOOLEAN', false, 1, null);
        $this->addColumn('requisito9', 'Requisito9', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('carrera1', 'required', 'propel.validator.RequiredValidator', '', 'El campo carrera 1 no puede ser vacío');
        $this->addValidator('carrera1', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre de la carrera no puede ser menor a 3 caracteres');
        $this->addValidator('carrera1', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre de la carrera no puede ser mayor a 100 caracteres');
        $this->addValidator('carrera2', 'required', 'propel.validator.RequiredValidator', '', 'El campo carrera 2 no puede ser vacío');
        $this->addValidator('carrera2', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre de la carrera no puede ser menor a 3 caracteres');
        $this->addValidator('carrera2', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre de la carrera no puede ser mayor a 100 caracteres');
        $this->addValidator('carrera3', 'required', 'propel.validator.RequiredValidator', '', 'El campo carrera 3 no puede ser vacío');
        $this->addValidator('carrera3', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre de la carrera no puede ser menor a 3 caracteres');
        $this->addValidator('carrera3', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre de la carrera no puede ser mayor a 100 caracteres');
        $this->addValidator('carrera4', 'required', 'propel.validator.RequiredValidator', '', 'El campo carrera 4 no puede ser vacío');
        $this->addValidator('carrera4', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre de la carrera no puede ser menor a 3 caracteres');
        $this->addValidator('carrera4', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre de la carrera no puede ser mayor a 100 caracteres');
        $this->addValidator('carrera5', 'required', 'propel.validator.RequiredValidator', '', 'El campo carrera 5 no puede ser vacío');
        $this->addValidator('carrera5', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre de la carrera no puede ser menor a 3 caracteres');
        $this->addValidator('carrera5', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre de la carrera no puede ser mayor a 100 caracteres');
        $this->addValidator('carrera6', 'required', 'propel.validator.RequiredValidator', '', 'El campo carrera 6 no puede ser vacío');
        $this->addValidator('carrera6', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre de la carrera no puede ser menor a 3 caracteres');
        $this->addValidator('carrera6', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre de la carrera no puede ser mayor a 100 caracteres');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
    } // buildRelations()

} // UbilabTableMap
