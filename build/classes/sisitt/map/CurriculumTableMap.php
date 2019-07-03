<?php



/**
 * This class defines the structure of the 'curriculums' table.
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
class CurriculumTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.CurriculumTableMap';

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
        $this->setName('curriculums');
        $this->setPhpName('Curriculum');
        $this->setClassname('Curriculum');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('documento', 'Documento', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('documento', 'minLength', 'propel.validator.MinLengthValidator', '4', 'El campo de informacion de contacto no puede ser menor a 3 caracteres');
        $this->addValidator('documento', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El campo de informacion de contacto no puede ser mayor a 100 caracteres');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
    } // buildRelations()

} // CurriculumTableMap
