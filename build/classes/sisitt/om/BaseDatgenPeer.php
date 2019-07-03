<?php


/**
 * Base static class for performing query and update operations on the 'encuempr_datgen' table.
 *
 *
 *
 * @package propel.generator.sisitt.om
 */
abstract class BaseDatgenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sisitt';

    /** the table name for this class */
    const TABLE_NAME = 'encuempr_datgen';

    /** the related Propel class for this table */
    const OM_CLASS = 'Datgen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DatgenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the id field */
    const ID = 'encuempr_datgen.id';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'encuempr_datgen.idusuario';

    /** the column name for the nombre field */
    const NOMBRE = 'encuempr_datgen.nombre';

    /** the column name for the direccion field */
    const DIRECCION = 'encuempr_datgen.direccion';

    /** the column name for the ciudad field */
    const CIUDAD = 'encuempr_datgen.ciudad';

    /** the column name for the correo field */
    const CORREO = 'encuempr_datgen.correo';

    /** the column name for the telefono field */
    const TELEFONO = 'encuempr_datgen.telefono';

    /** the column name for the tipo field */
    const TIPO = 'encuempr_datgen.tipo';

    /** the column name for the tamano field */
    const TAMANO = 'encuempr_datgen.tamano';

    /** the column name for the actividad1 field */
    const ACTIVIDAD1 = 'encuempr_datgen.actividad1';

    /** the column name for the actividad2 field */
    const ACTIVIDAD2 = 'encuempr_datgen.actividad2';

    /** the column name for the actividad3 field */
    const ACTIVIDAD3 = 'encuempr_datgen.actividad3';

    /** the column name for the actividad4 field */
    const ACTIVIDAD4 = 'encuempr_datgen.actividad4';

    /** the column name for the actividad5 field */
    const ACTIVIDAD5 = 'encuempr_datgen.actividad5';

    /** the column name for the actividad6 field */
    const ACTIVIDAD6 = 'encuempr_datgen.actividad6';

    /** the column name for the actividad7 field */
    const ACTIVIDAD7 = 'encuempr_datgen.actividad7';

    /** the column name for the actividad8 field */
    const ACTIVIDAD8 = 'encuempr_datgen.actividad8';

    /** the column name for the actividad9 field */
    const ACTIVIDAD9 = 'encuempr_datgen.actividad9';

    /** the column name for the actividad10 field */
    const ACTIVIDAD10 = 'encuempr_datgen.actividad10';

    /** the column name for the actividad11 field */
    const ACTIVIDAD11 = 'encuempr_datgen.actividad11';

    /** the column name for the actividad12 field */
    const ACTIVIDAD12 = 'encuempr_datgen.actividad12';

    /** the column name for the actividad13 field */
    const ACTIVIDAD13 = 'encuempr_datgen.actividad13';

    /** the column name for the actividad14 field */
    const ACTIVIDAD14 = 'encuempr_datgen.actividad14';

    /** the column name for the actividad15 field */
    const ACTIVIDAD15 = 'encuempr_datgen.actividad15';

    /** the column name for the actividad16 field */
    const ACTIVIDAD16 = 'encuempr_datgen.actividad16';

    /** the column name for the actividad17 field */
    const ACTIVIDAD17 = 'encuempr_datgen.actividad17';

    /** the column name for the actividad18 field */
    const ACTIVIDAD18 = 'encuempr_datgen.actividad18';

    /** the column name for the actividad19 field */
    const ACTIVIDAD19 = 'encuempr_datgen.actividad19';

    /** the column name for the actividad20 field */
    const ACTIVIDAD20 = 'encuempr_datgen.actividad20';

    /** The enumerated values for the tipo field */
    const TIPO_PUBLICA = 'publica';
    const TIPO_PRIVADA = 'privada';
    const TIPO_SOCIAL = 'social';

    /** The enumerated values for the tamano field */
    const TAMANO_MICRO = 'micro';
    const TAMANO_PEQUENA = 'pequena';
    const TAMANO_MEDIANA = 'mediana';
    const TAMANO_GRANDE = 'grande';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Datgen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Datgen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DatgenPeer::$fieldNames[DatgenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta', 'IdUsuario', 'Nombre', 'Direccion', 'Ciudad', 'Correo', 'Telefono', 'Tipo', 'Tamano', 'Actividad1', 'Actividad2', 'Actividad3', 'Actividad4', 'Actividad5', 'Actividad6', 'Actividad7', 'Actividad8', 'Actividad9', 'Actividad10', 'Actividad11', 'Actividad12', 'Actividad13', 'Actividad14', 'Actividad15', 'Actividad16', 'Actividad17', 'Actividad18', 'Actividad19', 'Actividad20', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta', 'idUsuario', 'nombre', 'direccion', 'ciudad', 'correo', 'telefono', 'tipo', 'tamano', 'actividad1', 'actividad2', 'actividad3', 'actividad4', 'actividad5', 'actividad6', 'actividad7', 'actividad8', 'actividad9', 'actividad10', 'actividad11', 'actividad12', 'actividad13', 'actividad14', 'actividad15', 'actividad16', 'actividad17', 'actividad18', 'actividad19', 'actividad20', ),
        BasePeer::TYPE_COLNAME => array (DatgenPeer::ID, DatgenPeer::IDUSUARIO, DatgenPeer::NOMBRE, DatgenPeer::DIRECCION, DatgenPeer::CIUDAD, DatgenPeer::CORREO, DatgenPeer::TELEFONO, DatgenPeer::TIPO, DatgenPeer::TAMANO, DatgenPeer::ACTIVIDAD1, DatgenPeer::ACTIVIDAD2, DatgenPeer::ACTIVIDAD3, DatgenPeer::ACTIVIDAD4, DatgenPeer::ACTIVIDAD5, DatgenPeer::ACTIVIDAD6, DatgenPeer::ACTIVIDAD7, DatgenPeer::ACTIVIDAD8, DatgenPeer::ACTIVIDAD9, DatgenPeer::ACTIVIDAD10, DatgenPeer::ACTIVIDAD11, DatgenPeer::ACTIVIDAD12, DatgenPeer::ACTIVIDAD13, DatgenPeer::ACTIVIDAD14, DatgenPeer::ACTIVIDAD15, DatgenPeer::ACTIVIDAD16, DatgenPeer::ACTIVIDAD17, DatgenPeer::ACTIVIDAD18, DatgenPeer::ACTIVIDAD19, DatgenPeer::ACTIVIDAD20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IDUSUARIO', 'NOMBRE', 'DIRECCION', 'CIUDAD', 'CORREO', 'TELEFONO', 'TIPO', 'TAMANO', 'ACTIVIDAD1', 'ACTIVIDAD2', 'ACTIVIDAD3', 'ACTIVIDAD4', 'ACTIVIDAD5', 'ACTIVIDAD6', 'ACTIVIDAD7', 'ACTIVIDAD8', 'ACTIVIDAD9', 'ACTIVIDAD10', 'ACTIVIDAD11', 'ACTIVIDAD12', 'ACTIVIDAD13', 'ACTIVIDAD14', 'ACTIVIDAD15', 'ACTIVIDAD16', 'ACTIVIDAD17', 'ACTIVIDAD18', 'ACTIVIDAD19', 'ACTIVIDAD20', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'idusuario', 'nombre', 'direccion', 'ciudad', 'correo', 'telefono', 'tipo', 'tamano', 'actividad1', 'actividad2', 'actividad3', 'actividad4', 'actividad5', 'actividad6', 'actividad7', 'actividad8', 'actividad9', 'actividad10', 'actividad11', 'actividad12', 'actividad13', 'actividad14', 'actividad15', 'actividad16', 'actividad17', 'actividad18', 'actividad19', 'actividad20', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DatgenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta' => 0, 'IdUsuario' => 1, 'Nombre' => 2, 'Direccion' => 3, 'Ciudad' => 4, 'Correo' => 5, 'Telefono' => 6, 'Tipo' => 7, 'Tamano' => 8, 'Actividad1' => 9, 'Actividad2' => 10, 'Actividad3' => 11, 'Actividad4' => 12, 'Actividad5' => 13, 'Actividad6' => 14, 'Actividad7' => 15, 'Actividad8' => 16, 'Actividad9' => 17, 'Actividad10' => 18, 'Actividad11' => 19, 'Actividad12' => 20, 'Actividad13' => 21, 'Actividad14' => 22, 'Actividad15' => 23, 'Actividad16' => 24, 'Actividad17' => 25, 'Actividad18' => 26, 'Actividad19' => 27, 'Actividad20' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta' => 0, 'idUsuario' => 1, 'nombre' => 2, 'direccion' => 3, 'ciudad' => 4, 'correo' => 5, 'telefono' => 6, 'tipo' => 7, 'tamano' => 8, 'actividad1' => 9, 'actividad2' => 10, 'actividad3' => 11, 'actividad4' => 12, 'actividad5' => 13, 'actividad6' => 14, 'actividad7' => 15, 'actividad8' => 16, 'actividad9' => 17, 'actividad10' => 18, 'actividad11' => 19, 'actividad12' => 20, 'actividad13' => 21, 'actividad14' => 22, 'actividad15' => 23, 'actividad16' => 24, 'actividad17' => 25, 'actividad18' => 26, 'actividad19' => 27, 'actividad20' => 28, ),
        BasePeer::TYPE_COLNAME => array (DatgenPeer::ID => 0, DatgenPeer::IDUSUARIO => 1, DatgenPeer::NOMBRE => 2, DatgenPeer::DIRECCION => 3, DatgenPeer::CIUDAD => 4, DatgenPeer::CORREO => 5, DatgenPeer::TELEFONO => 6, DatgenPeer::TIPO => 7, DatgenPeer::TAMANO => 8, DatgenPeer::ACTIVIDAD1 => 9, DatgenPeer::ACTIVIDAD2 => 10, DatgenPeer::ACTIVIDAD3 => 11, DatgenPeer::ACTIVIDAD4 => 12, DatgenPeer::ACTIVIDAD5 => 13, DatgenPeer::ACTIVIDAD6 => 14, DatgenPeer::ACTIVIDAD7 => 15, DatgenPeer::ACTIVIDAD8 => 16, DatgenPeer::ACTIVIDAD9 => 17, DatgenPeer::ACTIVIDAD10 => 18, DatgenPeer::ACTIVIDAD11 => 19, DatgenPeer::ACTIVIDAD12 => 20, DatgenPeer::ACTIVIDAD13 => 21, DatgenPeer::ACTIVIDAD14 => 22, DatgenPeer::ACTIVIDAD15 => 23, DatgenPeer::ACTIVIDAD16 => 24, DatgenPeer::ACTIVIDAD17 => 25, DatgenPeer::ACTIVIDAD18 => 26, DatgenPeer::ACTIVIDAD19 => 27, DatgenPeer::ACTIVIDAD20 => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IDUSUARIO' => 1, 'NOMBRE' => 2, 'DIRECCION' => 3, 'CIUDAD' => 4, 'CORREO' => 5, 'TELEFONO' => 6, 'TIPO' => 7, 'TAMANO' => 8, 'ACTIVIDAD1' => 9, 'ACTIVIDAD2' => 10, 'ACTIVIDAD3' => 11, 'ACTIVIDAD4' => 12, 'ACTIVIDAD5' => 13, 'ACTIVIDAD6' => 14, 'ACTIVIDAD7' => 15, 'ACTIVIDAD8' => 16, 'ACTIVIDAD9' => 17, 'ACTIVIDAD10' => 18, 'ACTIVIDAD11' => 19, 'ACTIVIDAD12' => 20, 'ACTIVIDAD13' => 21, 'ACTIVIDAD14' => 22, 'ACTIVIDAD15' => 23, 'ACTIVIDAD16' => 24, 'ACTIVIDAD17' => 25, 'ACTIVIDAD18' => 26, 'ACTIVIDAD19' => 27, 'ACTIVIDAD20' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'idusuario' => 1, 'nombre' => 2, 'direccion' => 3, 'ciudad' => 4, 'correo' => 5, 'telefono' => 6, 'tipo' => 7, 'tamano' => 8, 'actividad1' => 9, 'actividad2' => 10, 'actividad3' => 11, 'actividad4' => 12, 'actividad5' => 13, 'actividad6' => 14, 'actividad7' => 15, 'actividad8' => 16, 'actividad9' => 17, 'actividad10' => 18, 'actividad11' => 19, 'actividad12' => 20, 'actividad13' => 21, 'actividad14' => 22, 'actividad15' => 23, 'actividad16' => 24, 'actividad17' => 25, 'actividad18' => 26, 'actividad19' => 27, 'actividad20' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        DatgenPeer::TIPO => array(
            DatgenPeer::TIPO_PUBLICA,
            DatgenPeer::TIPO_PRIVADA,
            DatgenPeer::TIPO_SOCIAL,
        ),
        DatgenPeer::TAMANO => array(
            DatgenPeer::TAMANO_MICRO,
            DatgenPeer::TAMANO_PEQUENA,
            DatgenPeer::TAMANO_MEDIANA,
            DatgenPeer::TAMANO_GRANDE,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = DatgenPeer::getFieldNames($toType);
        $key = isset(DatgenPeer::$fieldKeys[$fromType][$name]) ? DatgenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DatgenPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, DatgenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DatgenPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return DatgenPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = DatgenPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = DatgenPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. DatgenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DatgenPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(DatgenPeer::ID);
            $criteria->addSelectColumn(DatgenPeer::IDUSUARIO);
            $criteria->addSelectColumn(DatgenPeer::NOMBRE);
            $criteria->addSelectColumn(DatgenPeer::DIRECCION);
            $criteria->addSelectColumn(DatgenPeer::CIUDAD);
            $criteria->addSelectColumn(DatgenPeer::CORREO);
            $criteria->addSelectColumn(DatgenPeer::TELEFONO);
            $criteria->addSelectColumn(DatgenPeer::TIPO);
            $criteria->addSelectColumn(DatgenPeer::TAMANO);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD1);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD2);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD3);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD4);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD5);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD6);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD7);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD8);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD9);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD10);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD11);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD12);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD13);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD14);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD15);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD16);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD17);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD18);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD19);
            $criteria->addSelectColumn(DatgenPeer::ACTIVIDAD20);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.nombre');
            $criteria->addSelectColumn($alias . '.direccion');
            $criteria->addSelectColumn($alias . '.ciudad');
            $criteria->addSelectColumn($alias . '.correo');
            $criteria->addSelectColumn($alias . '.telefono');
            $criteria->addSelectColumn($alias . '.tipo');
            $criteria->addSelectColumn($alias . '.tamano');
            $criteria->addSelectColumn($alias . '.actividad1');
            $criteria->addSelectColumn($alias . '.actividad2');
            $criteria->addSelectColumn($alias . '.actividad3');
            $criteria->addSelectColumn($alias . '.actividad4');
            $criteria->addSelectColumn($alias . '.actividad5');
            $criteria->addSelectColumn($alias . '.actividad6');
            $criteria->addSelectColumn($alias . '.actividad7');
            $criteria->addSelectColumn($alias . '.actividad8');
            $criteria->addSelectColumn($alias . '.actividad9');
            $criteria->addSelectColumn($alias . '.actividad10');
            $criteria->addSelectColumn($alias . '.actividad11');
            $criteria->addSelectColumn($alias . '.actividad12');
            $criteria->addSelectColumn($alias . '.actividad13');
            $criteria->addSelectColumn($alias . '.actividad14');
            $criteria->addSelectColumn($alias . '.actividad15');
            $criteria->addSelectColumn($alias . '.actividad16');
            $criteria->addSelectColumn($alias . '.actividad17');
            $criteria->addSelectColumn($alias . '.actividad18');
            $criteria->addSelectColumn($alias . '.actividad19');
            $criteria->addSelectColumn($alias . '.actividad20');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatgenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatgenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DatgenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Datgen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DatgenPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return DatgenPeer::populateObjects(DatgenPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DatgenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DatgenPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Datgen $obj A Datgen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEncuesta();
            } // if key === null
            DatgenPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Datgen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Datgen) {
                $key = (string) $value->getIdEncuesta();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Datgen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DatgenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Datgen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DatgenPeer::$instances[$key])) {
                return DatgenPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (DatgenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DatgenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to encuempr_datgen
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = DatgenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DatgenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DatgenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DatgenPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Datgen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DatgenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DatgenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DatgenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DatgenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DatgenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Gets the SQL value for Tipo ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getTipoSqlValue($enumVal)
    {
        return DatgenPeer::getSqlValueForEnum(DatgenPeer::TIPO, $enumVal);
    }

    /**
     * Gets the SQL value for Tamano ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getTamanoSqlValue($enumVal)
    {
        return DatgenPeer::getSqlValueForEnum(DatgenPeer::TAMANO, $enumVal);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Usuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatgenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatgenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatgenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatgenPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Datgen objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datgen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatgenPeer::DATABASE_NAME);
        }

        DatgenPeer::addSelectColumns($criteria);
        $startcol = DatgenPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(DatgenPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatgenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatgenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DatgenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatgenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Datgen) to $obj2 (Usuario)
                $obj2->addDatgen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DatgenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DatgenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DatgenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DatgenPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Datgen objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Datgen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DatgenPeer::DATABASE_NAME);
        }

        DatgenPeer::addSelectColumns($criteria);
        $startcol2 = DatgenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DatgenPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DatgenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DatgenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DatgenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DatgenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Usuario rows

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Datgen) to the collection in $obj2 (Usuario)
                $obj2->addDatgen($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(DatgenPeer::DATABASE_NAME)->getTable(DatgenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDatgenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDatgenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DatgenTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return DatgenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Datgen or Criteria object.
     *
     * @param      mixed $values Criteria or Datgen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Datgen object
        }

        if ($criteria->containsKey(DatgenPeer::ID) && $criteria->keyContainsValue(DatgenPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DatgenPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DatgenPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Datgen or Criteria object.
     *
     * @param      mixed $values Criteria or Datgen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DatgenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DatgenPeer::ID);
            $value = $criteria->remove(DatgenPeer::ID);
            if ($value) {
                $selectCriteria->add(DatgenPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DatgenPeer::TABLE_NAME);
            }

        } else { // $values is Datgen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DatgenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the encuempr_datgen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DatgenPeer::TABLE_NAME, $con, DatgenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DatgenPeer::clearInstancePool();
            DatgenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Datgen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Datgen object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DatgenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Datgen) { // it's a model object
            // invalidate the cache for this single object
            DatgenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DatgenPeer::DATABASE_NAME);
            $criteria->add(DatgenPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DatgenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DatgenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DatgenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Datgen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Datgen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DatgenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DatgenPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::NOMBRE))
            $columns[DatgenPeer::NOMBRE] = $obj->getNombre();

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::DIRECCION))
            $columns[DatgenPeer::DIRECCION] = $obj->getDireccion();

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::CIUDAD))
            $columns[DatgenPeer::CIUDAD] = $obj->getCiudad();

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::CORREO))
            $columns[DatgenPeer::CORREO] = $obj->getCorreo();

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::TELEFONO))
            $columns[DatgenPeer::TELEFONO] = $obj->getTelefono();

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::TIPO))
            $columns[DatgenPeer::TIPO] = $obj->getTipo();

        if ($obj->isNew() || $obj->isColumnModified(DatgenPeer::TAMANO))
            $columns[DatgenPeer::TAMANO] = $obj->getTamano();

        }

        return BasePeer::doValidate(DatgenPeer::DATABASE_NAME, DatgenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Datgen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DatgenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DatgenPeer::DATABASE_NAME);
        $criteria->add(DatgenPeer::ID, $pk);

        $v = DatgenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Datgen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DatgenPeer::DATABASE_NAME);
            $criteria->add(DatgenPeer::ID, $pks, Criteria::IN);
            $objs = DatgenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDatgenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDatgenPeer::buildTableMap();

