<?php



/**
 * This class defines the structure of the 'volantes' table.
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
class VolanteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.VolanteTableMap';

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
        $this->setName('volantes');
        $this->setPhpName('Volante');
        $this->setClassname('Volante');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdVolante', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('carrera', 'Carrera', 'ENUM', false, 20, null);
        $this->getColumn('carrera', false)->setValueSet(array (
  0 => 'todas',
  1 => 'biologia',
  2 => 'administracion',
  3 => 'informatica',
  4 => 'ige',
  5 => 'agronomia',
  6 => 'tic',
));
        $this->addColumn('fecha', 'Fecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('descripcion', 'Descripcion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('cargo', 'Cargo', 'VARCHAR', true, 100, null);
        $this->addColumn('direccion', 'Direccion', 'VARCHAR', true, 100, null);
        $this->addColumn('foto', 'Foto', 'VARCHAR', true, 300, null);
        $this->addColumn('telefono1', 'Telefono1', 'VARCHAR', true, 150, null);
        $this->addColumn('telefono2', 'Telefono2', 'VARCHAR', true, 150, null);
        $this->addColumn('estatus', 'Estatus', 'ENUM', true, 10, null);
        $this->getColumn('estatus', false)->setValueSet(array (
  0 => 'ocupado',
  1 => 'disponible',
));
        // validators
        $this->addValidator('cargo', 'required', 'propel.validator.RequiredValidator', '', 'El nombre del puesto o actividad no puede ser vacío');
        $this->addValidator('cargo', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nobre del puesto o actividad no puede ser menor a 3 caracteres');
        $this->addValidator('cargo', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El Nobre del puesto o actividad no puede ser mayor a 100 caracteres');
        $this->addValidator('telefono1', 'required', 'propel.validator.RequiredValidator', '', 'El campo de telefono 1 no puede ser vacío');
        $this->addValidator('telefono2', 'required', 'propel.validator.RequiredValidator', '', 'El campo de telefono 2 no puede ser vacío');
        $this->addValidator('descripcion', 'required', 'propel.validator.RequiredValidator', '', 'La descripción del puesto o actividad no puede ser vacío');
        $this->addValidator('descripcion', 'minLength', 'propel.validator.MinLengthValidator', '3', 'La descripción del puesto o actividad no puede ser menor a 3 caracteres');
        $this->addValidator('descripcion', 'maxLength', 'propel.validator.MaxLengthValidator', '1000', 'La descripción del puesto o actividad no puede ser mayor a 1000 caracteres');
        $this->addValidator('direccion', 'required', 'propel.validator.RequiredValidator', '', 'El campo de informacion de contacto no puede ser vacío');
        $this->addValidator('direccion', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El campo de informacion de contacto no puede ser menor a 3 caracteres');
        $this->addValidator('direccion', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El campo de informacion de contacto no puede ser mayor a 100 caracteres');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
        $this->addRelation('Candidato', 'Candidato', RelationMap::ONE_TO_MANY, array('id' => 'idvolante', ), null, null, 'Candidatos');
    } // buildRelations()

} // VolanteTableMap
