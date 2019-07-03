<?php



/**
 * This class defines the structure of the 'encuempr_datgen' table.
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
class DatgenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.DatgenTableMap';

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
        $this->setName('encuempr_datgen');
        $this->setPhpName('Datgen');
        $this->setClassname('Datgen');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdEncuesta', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('nombre', 'Nombre', 'VARCHAR', true, 50, null);
        $this->addColumn('direccion', 'Direccion', 'VARCHAR', true, 100, null);
        $this->addColumn('ciudad', 'Ciudad', 'VARCHAR', true, 250, null);
        $this->addColumn('correo', 'Correo', 'VARCHAR', true, 200, null);
        $this->addColumn('telefono', 'Telefono', 'VARCHAR', true, 150, null);
        $this->addColumn('tipo', 'Tipo', 'ENUM', false, 20, null);
        $this->getColumn('tipo', false)->setValueSet(array (
  0 => 'publica',
  1 => 'privada',
  2 => 'social',
));
        $this->addColumn('tamano', 'Tamano', 'ENUM', false, 20, null);
        $this->getColumn('tamano', false)->setValueSet(array (
  0 => 'micro',
  1 => 'pequena',
  2 => 'mediana',
  3 => 'grande',
));
        $this->addColumn('actividad1', 'Actividad1', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad2', 'Actividad2', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad3', 'Actividad3', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad4', 'Actividad4', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad5', 'Actividad5', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad6', 'Actividad6', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad7', 'Actividad7', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad8', 'Actividad8', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad9', 'Actividad9', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad10', 'Actividad10', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad11', 'Actividad11', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad12', 'Actividad12', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad13', 'Actividad13', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad14', 'Actividad14', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad15', 'Actividad15', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad16', 'Actividad16', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad17', 'Actividad17', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad18', 'Actividad18', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad19', 'Actividad19', 'BOOLEAN', false, 1, null);
        $this->addColumn('actividad20', 'Actividad20', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('nombre', 'required', 'propel.validator.RequiredValidator', '', 'El campo nombre no puede ser vacío');
        $this->addValidator('nombre', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre no puede ser menor a 3 caracteres');
        $this->addValidator('nombre', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre no puede ser mayor a 100 caracteres');
        $this->addValidator('direccion', 'required', 'propel.validator.RequiredValidator', '', 'El campo dirección no puede ser vacío');
        $this->addValidator('direccion', 'minLength', 'propel.validator.MinLengthValidator', '3', 'La dirección no puede ser menor a 3 caracteres');
        $this->addValidator('direccion', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'La dirección no puede ser mayor a 100 caracteres');
        $this->addValidator('ciudad', 'required', 'propel.validator.RequiredValidator', '', 'El campo ciudad no puede ser vacío');
        $this->addValidator('ciudad', 'minLength', 'propel.validator.MinLengthValidator', '3', 'La ciudad no puede ser menor a 3 caracteres');
        $this->addValidator('ciudad', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'La ciudad no puede ser mayor a 100 caracteres');
        $this->addValidator('correo', 'required', 'propel.validator.RequiredValidator', '', 'El CORREO ELECTRÓNICO no puede ser vacío.');
        $this->addValidator('correo', 'unique', 'propel.validator.UniqueValidator', '', 'El CORREO ELECTRÓNICO ya se encuentra registrado.');
        $this->addValidator('correo', 'match', 'propel.validator.MatchValidator', '/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/', 'Ingrese un CORREO ELECTRÓNICO válido.');
        $this->addValidator('telefono', 'required', 'propel.validator.RequiredValidator', '', 'El campo teléfono no puede ser vacío');
        $this->addValidator('tipo', 'required', 'propel.validator.RequiredValidator', '', 'El campo tipo no puede ser vacío');
        $this->addValidator('tamano', 'required', 'propel.validator.RequiredValidator', '', 'El campo tamaño no puede ser vacío');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
    } // buildRelations()

} // DatgenTableMap
