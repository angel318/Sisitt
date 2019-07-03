<?php



/**
 * This class defines the structure of the 'permiso' table.
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
class PermisoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.PermisoTableMap';

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
        $this->setName('permiso');
        $this->setPhpName('Permiso');
        $this->setClassname('Permiso');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdPermiso', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('modulo', 'Modulo', 'VARCHAR', true, 200, null);
        $this->addColumn('acceso', 'Acceso', 'ENUM', true, 5, null);
        $this->getColumn('acceso', false)->setValueSet(array (
  0 => 'no',
  1 => 'si',
));
        $this->addColumn('tipo', 'Tipo', 'ENUM', true, 5, null);
        $this->getColumn('tipo', false)->setValueSet(array (
  0 => 'Usuario',
  1 => 'Administrador',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
    } // buildRelations()

} // PermisoTableMap
