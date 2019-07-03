<?php



/**
 * This class defines the structure of the 'encuempr_nivjer' table.
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
class NivjerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.NivjerTableMap';

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
        $this->setName('encuempr_nivjer');
        $this->setPhpName('Nivjer');
        $this->setClassname('Nivjer');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdEncuesta', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('agromandosu', 'Agromandosu', 'INTEGER', true, 20, null);
        $this->addColumn('agromandoin', 'Agromandoin', 'INTEGER', true, 20, null);
        $this->addColumn('agrosupervisor', 'Agrosupervisor', 'INTEGER', true, 20, null);
        $this->addColumn('agrotecnico', 'Agrotecnico', 'INTEGER', true, 20, null);
        $this->addColumn('agrootro', 'Agrootro', 'INTEGER', true, 20, null);
        $this->addColumn('igemandosu', 'Igemandosu', 'INTEGER', true, 20, null);
        $this->addColumn('igemandoin', 'Igemandoin', 'INTEGER', true, 20, null);
        $this->addColumn('igesupervisor', 'Igesupervisor', 'INTEGER', true, 20, null);
        $this->addColumn('igetecnico', 'Igetecnico', 'INTEGER', true, 20, null);
        $this->addColumn('igeotro', 'Igeotro', 'INTEGER', true, 20, null);
        $this->addColumn('biomandosu', 'Biomandosu', 'INTEGER', true, 20, null);
        $this->addColumn('biomandoin', 'Biomandoin', 'INTEGER', true, 20, null);
        $this->addColumn('biosupervisor', 'Biosupervisor', 'INTEGER', true, 20, null);
        $this->addColumn('biotecnico', 'Biotecnico', 'INTEGER', true, 20, null);
        $this->addColumn('biootro', 'Biootro', 'INTEGER', true, 20, null);
        $this->addColumn('adminmandosu', 'Adminmandosu', 'INTEGER', true, 20, null);
        $this->addColumn('adminmandoin', 'Adminmandoin', 'INTEGER', true, 20, null);
        $this->addColumn('adminsupervisor', 'Adminsupervisor', 'INTEGER', true, 20, null);
        $this->addColumn('admintecnico', 'Admintecnico', 'INTEGER', true, 20, null);
        $this->addColumn('adminotro', 'Adminotro', 'INTEGER', true, 20, null);
        $this->addColumn('infomandosu', 'Infomandosu', 'INTEGER', true, 20, null);
        $this->addColumn('infomandoin', 'Infomandoin', 'INTEGER', true, 20, null);
        $this->addColumn('infosupervisor', 'Infosupervisor', 'INTEGER', true, 20, null);
        $this->addColumn('infotecnico', 'Infotecnico', 'INTEGER', true, 20, null);
        $this->addColumn('infootro', 'Infootro', 'INTEGER', true, 20, null);
        // validators
        $this->addValidator('agromandosu', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando superior de agronomía no puede ser vacío');
        $this->addValidator('agromandosu', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('agromandoin', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando intermedio de agronomía no puede ser vacío');
        $this->addValidator('agromandoin', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('agrosupervisor', 'required', 'propel.validator.RequiredValidator', '', 'El campo supervisor o equivalente de agronomía no puede ser vacío');
        $this->addValidator('agrosupervisor', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('agrotecnico', 'required', 'propel.validator.RequiredValidator', '', 'El campo técnivo o auxiliar de agronomía no puede ser vacío');
        $this->addValidator('agrotecnico', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('agrootro', 'required', 'propel.validator.RequiredValidator', '', 'El campo otro de agronomía no puede ser vacío');
        $this->addValidator('agrootro', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('infomandosu', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando superior de informática no puede ser vacío');
        $this->addValidator('infomandosu', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('infomandoin', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando intermedio de informática no puede ser vacío');
        $this->addValidator('infomandoin', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('infosupervisor', 'required', 'propel.validator.RequiredValidator', '', 'El campo supervisor o equivalente de informática no puede ser vacío');
        $this->addValidator('infosupervisor', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('infotecnico', 'required', 'propel.validator.RequiredValidator', '', 'El campo técnivo o auxiliar de informática no puede ser vacío');
        $this->addValidator('infotecnico', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('infootro', 'required', 'propel.validator.RequiredValidator', '', 'El campo otro de informática no puede ser vacío');
        $this->addValidator('infootro', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('igemandoin', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando superior de gestión empresarial no puede ser vacío');
        $this->addValidator('igemandoin', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('igemandoin', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando intermedio de gestión empresarial no puede ser vacío');
        $this->addValidator('igemandoin', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('igesupervisor', 'required', 'propel.validator.RequiredValidator', '', 'El campo supervisor o equivalente de gestión empresarial no puede ser vacío');
        $this->addValidator('igesupervisor', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('igetecnico', 'required', 'propel.validator.RequiredValidator', '', 'El campo técnivo o auxiliar de gestión empresarial no puede ser vacío');
        $this->addValidator('igetecnico', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('igeotro', 'required', 'propel.validator.RequiredValidator', '', 'El campo otro de gestión empresarial no puede ser vacío');
        $this->addValidator('igeotro', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('adminmandosu', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando superior de administración no puede ser vacío');
        $this->addValidator('adminmandosu', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('adminmandoin', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando intermedio de administración no puede ser vacío');
        $this->addValidator('adminmandoin', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('adminsupervisor', 'required', 'propel.validator.RequiredValidator', '', 'El campo supervisor o equivalente de administración no puede ser vacío');
        $this->addValidator('adminsupervisor', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('admintecnico', 'required', 'propel.validator.RequiredValidator', '', 'El campo técnivo o auxiliar de administración no puede ser vacío');
        $this->addValidator('admintecnico', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('adminotro', 'required', 'propel.validator.RequiredValidator', '', 'El campo otro de administración no puede ser vacío');
        $this->addValidator('adminotro', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('biomandosu', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando superior de biología no puede ser vacío');
        $this->addValidator('biomandosu', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('biomandoin', 'required', 'propel.validator.RequiredValidator', '', 'El campo mando intermedio de biología no puede ser vacío');
        $this->addValidator('biomandoin', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('biosupervisor', 'required', 'propel.validator.RequiredValidator', '', 'El campo supervisor o equivalente de biología no puede ser vacío');
        $this->addValidator('biosupervisor', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('biotecnico', 'required', 'propel.validator.RequiredValidator', '', 'El campo técnivo o auxiliar de biología no puede ser vacío');
        $this->addValidator('biotecnico', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
        $this->addValidator('biootro', 'required', 'propel.validator.RequiredValidator', '', 'El campo otro de biología no puede ser vacío');
        $this->addValidator('biootro', 'minValue', 'propel.validator.MinValueValidator', '0', 'El número no puede ser menor a 0');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
    } // buildRelations()

} // NivjerTableMap
