<?php


/**
 * Base static class for performing query and update operations on the 'encuempr_ubilab' table.
 *
 *
 *
 * @package propel.generator.sisitt.om
 */
abstract class BaseUbilabPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sisitt';

    /** the table name for this class */
    const TABLE_NAME = 'encuempr_ubilab';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ubilab';

    /** the related TableMap class for this table */
    const TM_CLASS = 'UbilabTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the id field */
    const ID = 'encuempr_ubilab.id';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'encuempr_ubilab.idusuario';

    /** the column name for the numpro field */
    const NUMPRO = 'encuempr_ubilab.numpro';

    /** the column name for the numegre field */
    const NUMEGRE = 'encuempr_ubilab.numegre';

    /** the column name for the congruencia field */
    const CONGRUENCIA = 'encuempr_ubilab.congruencia';

    /** the column name for the carrera1 field */
    const CARRERA1 = 'encuempr_ubilab.carrera1';

    /** the column name for the carrera2 field */
    const CARRERA2 = 'encuempr_ubilab.carrera2';

    /** the column name for the carrera3 field */
    const CARRERA3 = 'encuempr_ubilab.carrera3';

    /** the column name for the carrera4 field */
    const CARRERA4 = 'encuempr_ubilab.carrera4';

    /** the column name for the carrera5 field */
    const CARRERA5 = 'encuempr_ubilab.carrera5';

    /** the column name for the carrera6 field */
    const CARRERA6 = 'encuempr_ubilab.carrera6';

    /** the column name for the requisito1 field */
    const REQUISITO1 = 'encuempr_ubilab.requisito1';

    /** the column name for the requisito2 field */
    const REQUISITO2 = 'encuempr_ubilab.requisito2';

    /** the column name for the requisito3 field */
    const REQUISITO3 = 'encuempr_ubilab.requisito3';

    /** the column name for the requisito4 field */
    const REQUISITO4 = 'encuempr_ubilab.requisito4';

    /** the column name for the requisito5 field */
    const REQUISITO5 = 'encuempr_ubilab.requisito5';

    /** the column name for the requisito6 field */
    const REQUISITO6 = 'encuempr_ubilab.requisito6';

    /** the column name for the requisito7 field */
    const REQUISITO7 = 'encuempr_ubilab.requisito7';

    /** the column name for the requisito8 field */
    const REQUISITO8 = 'encuempr_ubilab.requisito8';

    /** the column name for the requisito9 field */
    const REQUISITO9 = 'encuempr_ubilab.requisito9';

    /** The enumerated values for the numpro field */
    const NUMPRO_0 = '0';
    const NUMPRO_1A5 = '1a5';
    const NUMPRO_6A10 = '6a10';
    const NUMPRO_11A15 = '11a15';
    const NUMPRO_MAS15 = 'mas15';

    /** The enumerated values for the numegre field */
    const NUMEGRE_0 = '0';
    const NUMEGRE_1A5 = '1a5';
    const NUMEGRE_6A10 = '6a10';
    const NUMEGRE_11A15 = '11a15';
    const NUMEGRE_MAS15 = 'mas15';

    /** The enumerated values for the congruencia field */
    const CONGRUENCIA_NINGUNA = 'ninguna';
    const CONGRUENCIA_LIGERAMENTE = 'ligeramente';
    const CONGRUENCIA_MEDIANAMENTE = 'medianamente';
    const CONGRUENCIA_COMPLETAMENTE = 'completamente';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ubilab objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ubilab[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. UbilabPeer::$fieldNames[UbilabPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta', 'IdUsuario', 'NumPro', 'NumEgre', 'Congruencia', 'Carrera1', 'Carrera2', 'Carrera3', 'Carrera4', 'Carrera5', 'Carrera6', 'Requisito1', 'Requisito2', 'Requisito3', 'Requisito4', 'Requisito5', 'Requisito6', 'Requisito7', 'Requisito8', 'Requisito9', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta', 'idUsuario', 'numPro', 'numEgre', 'congruencia', 'carrera1', 'carrera2', 'carrera3', 'carrera4', 'carrera5', 'carrera6', 'requisito1', 'requisito2', 'requisito3', 'requisito4', 'requisito5', 'requisito6', 'requisito7', 'requisito8', 'requisito9', ),
        BasePeer::TYPE_COLNAME => array (UbilabPeer::ID, UbilabPeer::IDUSUARIO, UbilabPeer::NUMPRO, UbilabPeer::NUMEGRE, UbilabPeer::CONGRUENCIA, UbilabPeer::CARRERA1, UbilabPeer::CARRERA2, UbilabPeer::CARRERA3, UbilabPeer::CARRERA4, UbilabPeer::CARRERA5, UbilabPeer::CARRERA6, UbilabPeer::REQUISITO1, UbilabPeer::REQUISITO2, UbilabPeer::REQUISITO3, UbilabPeer::REQUISITO4, UbilabPeer::REQUISITO5, UbilabPeer::REQUISITO6, UbilabPeer::REQUISITO7, UbilabPeer::REQUISITO8, UbilabPeer::REQUISITO9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IDUSUARIO', 'NUMPRO', 'NUMEGRE', 'CONGRUENCIA', 'CARRERA1', 'CARRERA2', 'CARRERA3', 'CARRERA4', 'CARRERA5', 'CARRERA6', 'REQUISITO1', 'REQUISITO2', 'REQUISITO3', 'REQUISITO4', 'REQUISITO5', 'REQUISITO6', 'REQUISITO7', 'REQUISITO8', 'REQUISITO9', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'idusuario', 'numpro', 'numegre', 'congruencia', 'carrera1', 'carrera2', 'carrera3', 'carrera4', 'carrera5', 'carrera6', 'requisito1', 'requisito2', 'requisito3', 'requisito4', 'requisito5', 'requisito6', 'requisito7', 'requisito8', 'requisito9', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. UbilabPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta' => 0, 'IdUsuario' => 1, 'NumPro' => 2, 'NumEgre' => 3, 'Congruencia' => 4, 'Carrera1' => 5, 'Carrera2' => 6, 'Carrera3' => 7, 'Carrera4' => 8, 'Carrera5' => 9, 'Carrera6' => 10, 'Requisito1' => 11, 'Requisito2' => 12, 'Requisito3' => 13, 'Requisito4' => 14, 'Requisito5' => 15, 'Requisito6' => 16, 'Requisito7' => 17, 'Requisito8' => 18, 'Requisito9' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta' => 0, 'idUsuario' => 1, 'numPro' => 2, 'numEgre' => 3, 'congruencia' => 4, 'carrera1' => 5, 'carrera2' => 6, 'carrera3' => 7, 'carrera4' => 8, 'carrera5' => 9, 'carrera6' => 10, 'requisito1' => 11, 'requisito2' => 12, 'requisito3' => 13, 'requisito4' => 14, 'requisito5' => 15, 'requisito6' => 16, 'requisito7' => 17, 'requisito8' => 18, 'requisito9' => 19, ),
        BasePeer::TYPE_COLNAME => array (UbilabPeer::ID => 0, UbilabPeer::IDUSUARIO => 1, UbilabPeer::NUMPRO => 2, UbilabPeer::NUMEGRE => 3, UbilabPeer::CONGRUENCIA => 4, UbilabPeer::CARRERA1 => 5, UbilabPeer::CARRERA2 => 6, UbilabPeer::CARRERA3 => 7, UbilabPeer::CARRERA4 => 8, UbilabPeer::CARRERA5 => 9, UbilabPeer::CARRERA6 => 10, UbilabPeer::REQUISITO1 => 11, UbilabPeer::REQUISITO2 => 12, UbilabPeer::REQUISITO3 => 13, UbilabPeer::REQUISITO4 => 14, UbilabPeer::REQUISITO5 => 15, UbilabPeer::REQUISITO6 => 16, UbilabPeer::REQUISITO7 => 17, UbilabPeer::REQUISITO8 => 18, UbilabPeer::REQUISITO9 => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IDUSUARIO' => 1, 'NUMPRO' => 2, 'NUMEGRE' => 3, 'CONGRUENCIA' => 4, 'CARRERA1' => 5, 'CARRERA2' => 6, 'CARRERA3' => 7, 'CARRERA4' => 8, 'CARRERA5' => 9, 'CARRERA6' => 10, 'REQUISITO1' => 11, 'REQUISITO2' => 12, 'REQUISITO3' => 13, 'REQUISITO4' => 14, 'REQUISITO5' => 15, 'REQUISITO6' => 16, 'REQUISITO7' => 17, 'REQUISITO8' => 18, 'REQUISITO9' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'idusuario' => 1, 'numpro' => 2, 'numegre' => 3, 'congruencia' => 4, 'carrera1' => 5, 'carrera2' => 6, 'carrera3' => 7, 'carrera4' => 8, 'carrera5' => 9, 'carrera6' => 10, 'requisito1' => 11, 'requisito2' => 12, 'requisito3' => 13, 'requisito4' => 14, 'requisito5' => 15, 'requisito6' => 16, 'requisito7' => 17, 'requisito8' => 18, 'requisito9' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        UbilabPeer::NUMPRO => array(
            UbilabPeer::NUMPRO_0,
            UbilabPeer::NUMPRO_1A5,
            UbilabPeer::NUMPRO_6A10,
            UbilabPeer::NUMPRO_11A15,
            UbilabPeer::NUMPRO_MAS15,
        ),
        UbilabPeer::NUMEGRE => array(
            UbilabPeer::NUMEGRE_0,
            UbilabPeer::NUMEGRE_1A5,
            UbilabPeer::NUMEGRE_6A10,
            UbilabPeer::NUMEGRE_11A15,
            UbilabPeer::NUMEGRE_MAS15,
        ),
        UbilabPeer::CONGRUENCIA => array(
            UbilabPeer::CONGRUENCIA_NINGUNA,
            UbilabPeer::CONGRUENCIA_LIGERAMENTE,
            UbilabPeer::CONGRUENCIA_MEDIANAMENTE,
            UbilabPeer::CONGRUENCIA_COMPLETAMENTE,
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
        $toNames = UbilabPeer::getFieldNames($toType);
        $key = isset(UbilabPeer::$fieldKeys[$fromType][$name]) ? UbilabPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(UbilabPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, UbilabPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return UbilabPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return UbilabPeer::$enumValueSets;
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
        $valueSets = UbilabPeer::getValueSets();

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
        $values = UbilabPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. UbilabPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(UbilabPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(UbilabPeer::ID);
            $criteria->addSelectColumn(UbilabPeer::IDUSUARIO);
            $criteria->addSelectColumn(UbilabPeer::NUMPRO);
            $criteria->addSelectColumn(UbilabPeer::NUMEGRE);
            $criteria->addSelectColumn(UbilabPeer::CONGRUENCIA);
            $criteria->addSelectColumn(UbilabPeer::CARRERA1);
            $criteria->addSelectColumn(UbilabPeer::CARRERA2);
            $criteria->addSelectColumn(UbilabPeer::CARRERA3);
            $criteria->addSelectColumn(UbilabPeer::CARRERA4);
            $criteria->addSelectColumn(UbilabPeer::CARRERA5);
            $criteria->addSelectColumn(UbilabPeer::CARRERA6);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO1);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO2);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO3);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO4);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO5);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO6);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO7);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO8);
            $criteria->addSelectColumn(UbilabPeer::REQUISITO9);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.numpro');
            $criteria->addSelectColumn($alias . '.numegre');
            $criteria->addSelectColumn($alias . '.congruencia');
            $criteria->addSelectColumn($alias . '.carrera1');
            $criteria->addSelectColumn($alias . '.carrera2');
            $criteria->addSelectColumn($alias . '.carrera3');
            $criteria->addSelectColumn($alias . '.carrera4');
            $criteria->addSelectColumn($alias . '.carrera5');
            $criteria->addSelectColumn($alias . '.carrera6');
            $criteria->addSelectColumn($alias . '.requisito1');
            $criteria->addSelectColumn($alias . '.requisito2');
            $criteria->addSelectColumn($alias . '.requisito3');
            $criteria->addSelectColumn($alias . '.requisito4');
            $criteria->addSelectColumn($alias . '.requisito5');
            $criteria->addSelectColumn($alias . '.requisito6');
            $criteria->addSelectColumn($alias . '.requisito7');
            $criteria->addSelectColumn($alias . '.requisito8');
            $criteria->addSelectColumn($alias . '.requisito9');
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
        $criteria->setPrimaryTableName(UbilabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UbilabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(UbilabPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ubilab
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = UbilabPeer::doSelect($critcopy, $con);
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
        return UbilabPeer::populateObjects(UbilabPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            UbilabPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(UbilabPeer::DATABASE_NAME);

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
     * @param Ubilab $obj A Ubilab object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEncuesta();
            } // if key === null
            UbilabPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ubilab object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ubilab) {
                $key = (string) $value->getIdEncuesta();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ubilab object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(UbilabPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ubilab Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(UbilabPeer::$instances[$key])) {
                return UbilabPeer::$instances[$key];
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
        foreach (UbilabPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        UbilabPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to encuempr_ubilab
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
        $cls = UbilabPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = UbilabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = UbilabPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UbilabPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ubilab object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = UbilabPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = UbilabPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + UbilabPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UbilabPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            UbilabPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Gets the SQL value for NumPro ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getNumProSqlValue($enumVal)
    {
        return UbilabPeer::getSqlValueForEnum(UbilabPeer::NUMPRO, $enumVal);
    }

    /**
     * Gets the SQL value for NumEgre ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getNumEgreSqlValue($enumVal)
    {
        return UbilabPeer::getSqlValueForEnum(UbilabPeer::NUMEGRE, $enumVal);
    }

    /**
     * Gets the SQL value for Congruencia ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getCongruenciaSqlValue($enumVal)
    {
        return UbilabPeer::getSqlValueForEnum(UbilabPeer::CONGRUENCIA, $enumVal);
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
        $criteria->setPrimaryTableName(UbilabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UbilabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UbilabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UbilabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

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
     * Selects a collection of Ubilab objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ubilab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UbilabPeer::DATABASE_NAME);
        }

        UbilabPeer::addSelectColumns($criteria);
        $startcol = UbilabPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(UbilabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UbilabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UbilabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = UbilabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UbilabPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ubilab) to $obj2 (Usuario)
                $obj2->addUbilab($obj1);

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
        $criteria->setPrimaryTableName(UbilabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UbilabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UbilabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UbilabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

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
     * Selects a collection of Ubilab objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ubilab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UbilabPeer::DATABASE_NAME);
        }

        UbilabPeer::addSelectColumns($criteria);
        $startcol2 = UbilabPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(UbilabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UbilabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UbilabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = UbilabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UbilabPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ubilab) to the collection in $obj2 (Usuario)
                $obj2->addUbilab($obj1);
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
        return Propel::getDatabaseMap(UbilabPeer::DATABASE_NAME)->getTable(UbilabPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseUbilabPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseUbilabPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \UbilabTableMap());
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
        return UbilabPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ubilab or Criteria object.
     *
     * @param      mixed $values Criteria or Ubilab object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ubilab object
        }

        if ($criteria->containsKey(UbilabPeer::ID) && $criteria->keyContainsValue(UbilabPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UbilabPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(UbilabPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ubilab or Criteria object.
     *
     * @param      mixed $values Criteria or Ubilab object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(UbilabPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(UbilabPeer::ID);
            $value = $criteria->remove(UbilabPeer::ID);
            if ($value) {
                $selectCriteria->add(UbilabPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(UbilabPeer::TABLE_NAME);
            }

        } else { // $values is Ubilab object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(UbilabPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the encuempr_ubilab table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(UbilabPeer::TABLE_NAME, $con, UbilabPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UbilabPeer::clearInstancePool();
            UbilabPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ubilab or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ubilab object or primary key or array of primary keys
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
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            UbilabPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ubilab) { // it's a model object
            // invalidate the cache for this single object
            UbilabPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UbilabPeer::DATABASE_NAME);
            $criteria->add(UbilabPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                UbilabPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(UbilabPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            UbilabPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ubilab object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ubilab $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(UbilabPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(UbilabPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(UbilabPeer::CARRERA1))
            $columns[UbilabPeer::CARRERA1] = $obj->getCarrera1();

        if ($obj->isNew() || $obj->isColumnModified(UbilabPeer::CARRERA2))
            $columns[UbilabPeer::CARRERA2] = $obj->getCarrera2();

        if ($obj->isNew() || $obj->isColumnModified(UbilabPeer::CARRERA3))
            $columns[UbilabPeer::CARRERA3] = $obj->getCarrera3();

        if ($obj->isNew() || $obj->isColumnModified(UbilabPeer::CARRERA4))
            $columns[UbilabPeer::CARRERA4] = $obj->getCarrera4();

        if ($obj->isNew() || $obj->isColumnModified(UbilabPeer::CARRERA5))
            $columns[UbilabPeer::CARRERA5] = $obj->getCarrera5();

        if ($obj->isNew() || $obj->isColumnModified(UbilabPeer::CARRERA6))
            $columns[UbilabPeer::CARRERA6] = $obj->getCarrera6();

        }

        return BasePeer::doValidate(UbilabPeer::DATABASE_NAME, UbilabPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ubilab
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = UbilabPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(UbilabPeer::DATABASE_NAME);
        $criteria->add(UbilabPeer::ID, $pk);

        $v = UbilabPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ubilab[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(UbilabPeer::DATABASE_NAME);
            $criteria->add(UbilabPeer::ID, $pks, Criteria::IN);
            $objs = UbilabPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseUbilabPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUbilabPeer::buildTableMap();

