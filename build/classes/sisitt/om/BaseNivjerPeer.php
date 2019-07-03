<?php


/**
 * Base static class for performing query and update operations on the 'encuempr_nivjer' table.
 *
 *
 *
 * @package propel.generator.sisitt.om
 */
abstract class BaseNivjerPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sisitt';

    /** the table name for this class */
    const TABLE_NAME = 'encuempr_nivjer';

    /** the related Propel class for this table */
    const OM_CLASS = 'Nivjer';

    /** the related TableMap class for this table */
    const TM_CLASS = 'NivjerTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 27;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 27;

    /** the column name for the id field */
    const ID = 'encuempr_nivjer.id';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'encuempr_nivjer.idusuario';

    /** the column name for the agromandosu field */
    const AGROMANDOSU = 'encuempr_nivjer.agromandosu';

    /** the column name for the agromandoin field */
    const AGROMANDOIN = 'encuempr_nivjer.agromandoin';

    /** the column name for the agrosupervisor field */
    const AGROSUPERVISOR = 'encuempr_nivjer.agrosupervisor';

    /** the column name for the agrotecnico field */
    const AGROTECNICO = 'encuempr_nivjer.agrotecnico';

    /** the column name for the agrootro field */
    const AGROOTRO = 'encuempr_nivjer.agrootro';

    /** the column name for the igemandosu field */
    const IGEMANDOSU = 'encuempr_nivjer.igemandosu';

    /** the column name for the igemandoin field */
    const IGEMANDOIN = 'encuempr_nivjer.igemandoin';

    /** the column name for the igesupervisor field */
    const IGESUPERVISOR = 'encuempr_nivjer.igesupervisor';

    /** the column name for the igetecnico field */
    const IGETECNICO = 'encuempr_nivjer.igetecnico';

    /** the column name for the igeotro field */
    const IGEOTRO = 'encuempr_nivjer.igeotro';

    /** the column name for the biomandosu field */
    const BIOMANDOSU = 'encuempr_nivjer.biomandosu';

    /** the column name for the biomandoin field */
    const BIOMANDOIN = 'encuempr_nivjer.biomandoin';

    /** the column name for the biosupervisor field */
    const BIOSUPERVISOR = 'encuempr_nivjer.biosupervisor';

    /** the column name for the biotecnico field */
    const BIOTECNICO = 'encuempr_nivjer.biotecnico';

    /** the column name for the biootro field */
    const BIOOTRO = 'encuempr_nivjer.biootro';

    /** the column name for the adminmandosu field */
    const ADMINMANDOSU = 'encuempr_nivjer.adminmandosu';

    /** the column name for the adminmandoin field */
    const ADMINMANDOIN = 'encuempr_nivjer.adminmandoin';

    /** the column name for the adminsupervisor field */
    const ADMINSUPERVISOR = 'encuempr_nivjer.adminsupervisor';

    /** the column name for the admintecnico field */
    const ADMINTECNICO = 'encuempr_nivjer.admintecnico';

    /** the column name for the adminotro field */
    const ADMINOTRO = 'encuempr_nivjer.adminotro';

    /** the column name for the infomandosu field */
    const INFOMANDOSU = 'encuempr_nivjer.infomandosu';

    /** the column name for the infomandoin field */
    const INFOMANDOIN = 'encuempr_nivjer.infomandoin';

    /** the column name for the infosupervisor field */
    const INFOSUPERVISOR = 'encuempr_nivjer.infosupervisor';

    /** the column name for the infotecnico field */
    const INFOTECNICO = 'encuempr_nivjer.infotecnico';

    /** the column name for the infootro field */
    const INFOOTRO = 'encuempr_nivjer.infootro';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Nivjer objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Nivjer[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. NivjerPeer::$fieldNames[NivjerPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta', 'IdUsuario', 'Agromandosu', 'Agromandoin', 'Agrosupervisor', 'Agrotecnico', 'Agrootro', 'Igemandosu', 'Igemandoin', 'Igesupervisor', 'Igetecnico', 'Igeotro', 'Biomandosu', 'Biomandoin', 'Biosupervisor', 'Biotecnico', 'Biootro', 'Adminmandosu', 'Adminmandoin', 'Adminsupervisor', 'Admintecnico', 'Adminotro', 'Infomandosu', 'Infomandoin', 'Infosupervisor', 'Infotecnico', 'Infootro', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta', 'idUsuario', 'agromandosu', 'agromandoin', 'agrosupervisor', 'agrotecnico', 'agrootro', 'igemandosu', 'igemandoin', 'igesupervisor', 'igetecnico', 'igeotro', 'biomandosu', 'biomandoin', 'biosupervisor', 'biotecnico', 'biootro', 'adminmandosu', 'adminmandoin', 'adminsupervisor', 'admintecnico', 'adminotro', 'infomandosu', 'infomandoin', 'infosupervisor', 'infotecnico', 'infootro', ),
        BasePeer::TYPE_COLNAME => array (NivjerPeer::ID, NivjerPeer::IDUSUARIO, NivjerPeer::AGROMANDOSU, NivjerPeer::AGROMANDOIN, NivjerPeer::AGROSUPERVISOR, NivjerPeer::AGROTECNICO, NivjerPeer::AGROOTRO, NivjerPeer::IGEMANDOSU, NivjerPeer::IGEMANDOIN, NivjerPeer::IGESUPERVISOR, NivjerPeer::IGETECNICO, NivjerPeer::IGEOTRO, NivjerPeer::BIOMANDOSU, NivjerPeer::BIOMANDOIN, NivjerPeer::BIOSUPERVISOR, NivjerPeer::BIOTECNICO, NivjerPeer::BIOOTRO, NivjerPeer::ADMINMANDOSU, NivjerPeer::ADMINMANDOIN, NivjerPeer::ADMINSUPERVISOR, NivjerPeer::ADMINTECNICO, NivjerPeer::ADMINOTRO, NivjerPeer::INFOMANDOSU, NivjerPeer::INFOMANDOIN, NivjerPeer::INFOSUPERVISOR, NivjerPeer::INFOTECNICO, NivjerPeer::INFOOTRO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IDUSUARIO', 'AGROMANDOSU', 'AGROMANDOIN', 'AGROSUPERVISOR', 'AGROTECNICO', 'AGROOTRO', 'IGEMANDOSU', 'IGEMANDOIN', 'IGESUPERVISOR', 'IGETECNICO', 'IGEOTRO', 'BIOMANDOSU', 'BIOMANDOIN', 'BIOSUPERVISOR', 'BIOTECNICO', 'BIOOTRO', 'ADMINMANDOSU', 'ADMINMANDOIN', 'ADMINSUPERVISOR', 'ADMINTECNICO', 'ADMINOTRO', 'INFOMANDOSU', 'INFOMANDOIN', 'INFOSUPERVISOR', 'INFOTECNICO', 'INFOOTRO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'idusuario', 'agromandosu', 'agromandoin', 'agrosupervisor', 'agrotecnico', 'agrootro', 'igemandosu', 'igemandoin', 'igesupervisor', 'igetecnico', 'igeotro', 'biomandosu', 'biomandoin', 'biosupervisor', 'biotecnico', 'biootro', 'adminmandosu', 'adminmandoin', 'adminsupervisor', 'admintecnico', 'adminotro', 'infomandosu', 'infomandoin', 'infosupervisor', 'infotecnico', 'infootro', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. NivjerPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta' => 0, 'IdUsuario' => 1, 'Agromandosu' => 2, 'Agromandoin' => 3, 'Agrosupervisor' => 4, 'Agrotecnico' => 5, 'Agrootro' => 6, 'Igemandosu' => 7, 'Igemandoin' => 8, 'Igesupervisor' => 9, 'Igetecnico' => 10, 'Igeotro' => 11, 'Biomandosu' => 12, 'Biomandoin' => 13, 'Biosupervisor' => 14, 'Biotecnico' => 15, 'Biootro' => 16, 'Adminmandosu' => 17, 'Adminmandoin' => 18, 'Adminsupervisor' => 19, 'Admintecnico' => 20, 'Adminotro' => 21, 'Infomandosu' => 22, 'Infomandoin' => 23, 'Infosupervisor' => 24, 'Infotecnico' => 25, 'Infootro' => 26, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta' => 0, 'idUsuario' => 1, 'agromandosu' => 2, 'agromandoin' => 3, 'agrosupervisor' => 4, 'agrotecnico' => 5, 'agrootro' => 6, 'igemandosu' => 7, 'igemandoin' => 8, 'igesupervisor' => 9, 'igetecnico' => 10, 'igeotro' => 11, 'biomandosu' => 12, 'biomandoin' => 13, 'biosupervisor' => 14, 'biotecnico' => 15, 'biootro' => 16, 'adminmandosu' => 17, 'adminmandoin' => 18, 'adminsupervisor' => 19, 'admintecnico' => 20, 'adminotro' => 21, 'infomandosu' => 22, 'infomandoin' => 23, 'infosupervisor' => 24, 'infotecnico' => 25, 'infootro' => 26, ),
        BasePeer::TYPE_COLNAME => array (NivjerPeer::ID => 0, NivjerPeer::IDUSUARIO => 1, NivjerPeer::AGROMANDOSU => 2, NivjerPeer::AGROMANDOIN => 3, NivjerPeer::AGROSUPERVISOR => 4, NivjerPeer::AGROTECNICO => 5, NivjerPeer::AGROOTRO => 6, NivjerPeer::IGEMANDOSU => 7, NivjerPeer::IGEMANDOIN => 8, NivjerPeer::IGESUPERVISOR => 9, NivjerPeer::IGETECNICO => 10, NivjerPeer::IGEOTRO => 11, NivjerPeer::BIOMANDOSU => 12, NivjerPeer::BIOMANDOIN => 13, NivjerPeer::BIOSUPERVISOR => 14, NivjerPeer::BIOTECNICO => 15, NivjerPeer::BIOOTRO => 16, NivjerPeer::ADMINMANDOSU => 17, NivjerPeer::ADMINMANDOIN => 18, NivjerPeer::ADMINSUPERVISOR => 19, NivjerPeer::ADMINTECNICO => 20, NivjerPeer::ADMINOTRO => 21, NivjerPeer::INFOMANDOSU => 22, NivjerPeer::INFOMANDOIN => 23, NivjerPeer::INFOSUPERVISOR => 24, NivjerPeer::INFOTECNICO => 25, NivjerPeer::INFOOTRO => 26, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IDUSUARIO' => 1, 'AGROMANDOSU' => 2, 'AGROMANDOIN' => 3, 'AGROSUPERVISOR' => 4, 'AGROTECNICO' => 5, 'AGROOTRO' => 6, 'IGEMANDOSU' => 7, 'IGEMANDOIN' => 8, 'IGESUPERVISOR' => 9, 'IGETECNICO' => 10, 'IGEOTRO' => 11, 'BIOMANDOSU' => 12, 'BIOMANDOIN' => 13, 'BIOSUPERVISOR' => 14, 'BIOTECNICO' => 15, 'BIOOTRO' => 16, 'ADMINMANDOSU' => 17, 'ADMINMANDOIN' => 18, 'ADMINSUPERVISOR' => 19, 'ADMINTECNICO' => 20, 'ADMINOTRO' => 21, 'INFOMANDOSU' => 22, 'INFOMANDOIN' => 23, 'INFOSUPERVISOR' => 24, 'INFOTECNICO' => 25, 'INFOOTRO' => 26, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'idusuario' => 1, 'agromandosu' => 2, 'agromandoin' => 3, 'agrosupervisor' => 4, 'agrotecnico' => 5, 'agrootro' => 6, 'igemandosu' => 7, 'igemandoin' => 8, 'igesupervisor' => 9, 'igetecnico' => 10, 'igeotro' => 11, 'biomandosu' => 12, 'biomandoin' => 13, 'biosupervisor' => 14, 'biotecnico' => 15, 'biootro' => 16, 'adminmandosu' => 17, 'adminmandoin' => 18, 'adminsupervisor' => 19, 'admintecnico' => 20, 'adminotro' => 21, 'infomandosu' => 22, 'infomandoin' => 23, 'infosupervisor' => 24, 'infotecnico' => 25, 'infootro' => 26, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
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
        $toNames = NivjerPeer::getFieldNames($toType);
        $key = isset(NivjerPeer::$fieldKeys[$fromType][$name]) ? NivjerPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(NivjerPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, NivjerPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return NivjerPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. NivjerPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(NivjerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(NivjerPeer::ID);
            $criteria->addSelectColumn(NivjerPeer::IDUSUARIO);
            $criteria->addSelectColumn(NivjerPeer::AGROMANDOSU);
            $criteria->addSelectColumn(NivjerPeer::AGROMANDOIN);
            $criteria->addSelectColumn(NivjerPeer::AGROSUPERVISOR);
            $criteria->addSelectColumn(NivjerPeer::AGROTECNICO);
            $criteria->addSelectColumn(NivjerPeer::AGROOTRO);
            $criteria->addSelectColumn(NivjerPeer::IGEMANDOSU);
            $criteria->addSelectColumn(NivjerPeer::IGEMANDOIN);
            $criteria->addSelectColumn(NivjerPeer::IGESUPERVISOR);
            $criteria->addSelectColumn(NivjerPeer::IGETECNICO);
            $criteria->addSelectColumn(NivjerPeer::IGEOTRO);
            $criteria->addSelectColumn(NivjerPeer::BIOMANDOSU);
            $criteria->addSelectColumn(NivjerPeer::BIOMANDOIN);
            $criteria->addSelectColumn(NivjerPeer::BIOSUPERVISOR);
            $criteria->addSelectColumn(NivjerPeer::BIOTECNICO);
            $criteria->addSelectColumn(NivjerPeer::BIOOTRO);
            $criteria->addSelectColumn(NivjerPeer::ADMINMANDOSU);
            $criteria->addSelectColumn(NivjerPeer::ADMINMANDOIN);
            $criteria->addSelectColumn(NivjerPeer::ADMINSUPERVISOR);
            $criteria->addSelectColumn(NivjerPeer::ADMINTECNICO);
            $criteria->addSelectColumn(NivjerPeer::ADMINOTRO);
            $criteria->addSelectColumn(NivjerPeer::INFOMANDOSU);
            $criteria->addSelectColumn(NivjerPeer::INFOMANDOIN);
            $criteria->addSelectColumn(NivjerPeer::INFOSUPERVISOR);
            $criteria->addSelectColumn(NivjerPeer::INFOTECNICO);
            $criteria->addSelectColumn(NivjerPeer::INFOOTRO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.agromandosu');
            $criteria->addSelectColumn($alias . '.agromandoin');
            $criteria->addSelectColumn($alias . '.agrosupervisor');
            $criteria->addSelectColumn($alias . '.agrotecnico');
            $criteria->addSelectColumn($alias . '.agrootro');
            $criteria->addSelectColumn($alias . '.igemandosu');
            $criteria->addSelectColumn($alias . '.igemandoin');
            $criteria->addSelectColumn($alias . '.igesupervisor');
            $criteria->addSelectColumn($alias . '.igetecnico');
            $criteria->addSelectColumn($alias . '.igeotro');
            $criteria->addSelectColumn($alias . '.biomandosu');
            $criteria->addSelectColumn($alias . '.biomandoin');
            $criteria->addSelectColumn($alias . '.biosupervisor');
            $criteria->addSelectColumn($alias . '.biotecnico');
            $criteria->addSelectColumn($alias . '.biootro');
            $criteria->addSelectColumn($alias . '.adminmandosu');
            $criteria->addSelectColumn($alias . '.adminmandoin');
            $criteria->addSelectColumn($alias . '.adminsupervisor');
            $criteria->addSelectColumn($alias . '.admintecnico');
            $criteria->addSelectColumn($alias . '.adminotro');
            $criteria->addSelectColumn($alias . '.infomandosu');
            $criteria->addSelectColumn($alias . '.infomandoin');
            $criteria->addSelectColumn($alias . '.infosupervisor');
            $criteria->addSelectColumn($alias . '.infotecnico');
            $criteria->addSelectColumn($alias . '.infootro');
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
        $criteria->setPrimaryTableName(NivjerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NivjerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(NivjerPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Nivjer
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = NivjerPeer::doSelect($critcopy, $con);
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
        return NivjerPeer::populateObjects(NivjerPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            NivjerPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(NivjerPeer::DATABASE_NAME);

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
     * @param Nivjer $obj A Nivjer object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEncuesta();
            } // if key === null
            NivjerPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Nivjer object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Nivjer) {
                $key = (string) $value->getIdEncuesta();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Nivjer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(NivjerPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Nivjer Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(NivjerPeer::$instances[$key])) {
                return NivjerPeer::$instances[$key];
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
        foreach (NivjerPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        NivjerPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to encuempr_nivjer
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
        $cls = NivjerPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = NivjerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = NivjerPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NivjerPeer::addInstanceToPool($obj, $key);
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
     * @return array (Nivjer object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = NivjerPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = NivjerPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + NivjerPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NivjerPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            NivjerPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(NivjerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NivjerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NivjerPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NivjerPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

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
     * Selects a collection of Nivjer objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Nivjer objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NivjerPeer::DATABASE_NAME);
        }

        NivjerPeer::addSelectColumns($criteria);
        $startcol = NivjerPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(NivjerPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NivjerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NivjerPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NivjerPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NivjerPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Nivjer) to $obj2 (Usuario)
                $obj2->addNivjer($obj1);

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
        $criteria->setPrimaryTableName(NivjerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NivjerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NivjerPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NivjerPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

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
     * Selects a collection of Nivjer objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Nivjer objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NivjerPeer::DATABASE_NAME);
        }

        NivjerPeer::addSelectColumns($criteria);
        $startcol2 = NivjerPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NivjerPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NivjerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NivjerPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NivjerPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NivjerPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Nivjer) to the collection in $obj2 (Usuario)
                $obj2->addNivjer($obj1);
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
        return Propel::getDatabaseMap(NivjerPeer::DATABASE_NAME)->getTable(NivjerPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseNivjerPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseNivjerPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \NivjerTableMap());
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
        return NivjerPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Nivjer or Criteria object.
     *
     * @param      mixed $values Criteria or Nivjer object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Nivjer object
        }

        if ($criteria->containsKey(NivjerPeer::ID) && $criteria->keyContainsValue(NivjerPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.NivjerPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(NivjerPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Nivjer or Criteria object.
     *
     * @param      mixed $values Criteria or Nivjer object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(NivjerPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(NivjerPeer::ID);
            $value = $criteria->remove(NivjerPeer::ID);
            if ($value) {
                $selectCriteria->add(NivjerPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(NivjerPeer::TABLE_NAME);
            }

        } else { // $values is Nivjer object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(NivjerPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the encuempr_nivjer table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(NivjerPeer::TABLE_NAME, $con, NivjerPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NivjerPeer::clearInstancePool();
            NivjerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Nivjer or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Nivjer object or primary key or array of primary keys
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
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            NivjerPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Nivjer) { // it's a model object
            // invalidate the cache for this single object
            NivjerPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NivjerPeer::DATABASE_NAME);
            $criteria->add(NivjerPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                NivjerPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(NivjerPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            NivjerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Nivjer object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Nivjer $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(NivjerPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(NivjerPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::AGROMANDOSU))
            $columns[NivjerPeer::AGROMANDOSU] = $obj->getAgromandosu();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::AGROMANDOIN))
            $columns[NivjerPeer::AGROMANDOIN] = $obj->getAgromandoin();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::AGROSUPERVISOR))
            $columns[NivjerPeer::AGROSUPERVISOR] = $obj->getAgrosupervisor();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::AGROTECNICO))
            $columns[NivjerPeer::AGROTECNICO] = $obj->getAgrotecnico();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::AGROOTRO))
            $columns[NivjerPeer::AGROOTRO] = $obj->getAgrootro();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::INFOMANDOSU))
            $columns[NivjerPeer::INFOMANDOSU] = $obj->getInfomandosu();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::INFOMANDOIN))
            $columns[NivjerPeer::INFOMANDOIN] = $obj->getInfomandoin();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::INFOSUPERVISOR))
            $columns[NivjerPeer::INFOSUPERVISOR] = $obj->getInfosupervisor();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::INFOTECNICO))
            $columns[NivjerPeer::INFOTECNICO] = $obj->getInfotecnico();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::INFOOTRO))
            $columns[NivjerPeer::INFOOTRO] = $obj->getInfootro();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::IGEMANDOIN))
            $columns[NivjerPeer::IGEMANDOIN] = $obj->getIgemandoin();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::IGEMANDOIN))
            $columns[NivjerPeer::IGEMANDOIN] = $obj->getIgemandoin();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::IGESUPERVISOR))
            $columns[NivjerPeer::IGESUPERVISOR] = $obj->getIgesupervisor();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::IGETECNICO))
            $columns[NivjerPeer::IGETECNICO] = $obj->getIgetecnico();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::IGEOTRO))
            $columns[NivjerPeer::IGEOTRO] = $obj->getIgeotro();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::ADMINMANDOSU))
            $columns[NivjerPeer::ADMINMANDOSU] = $obj->getAdminmandosu();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::ADMINMANDOIN))
            $columns[NivjerPeer::ADMINMANDOIN] = $obj->getAdminmandoin();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::ADMINSUPERVISOR))
            $columns[NivjerPeer::ADMINSUPERVISOR] = $obj->getAdminsupervisor();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::ADMINTECNICO))
            $columns[NivjerPeer::ADMINTECNICO] = $obj->getAdmintecnico();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::ADMINOTRO))
            $columns[NivjerPeer::ADMINOTRO] = $obj->getAdminotro();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::BIOMANDOSU))
            $columns[NivjerPeer::BIOMANDOSU] = $obj->getBiomandosu();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::BIOMANDOIN))
            $columns[NivjerPeer::BIOMANDOIN] = $obj->getBiomandoin();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::BIOSUPERVISOR))
            $columns[NivjerPeer::BIOSUPERVISOR] = $obj->getBiosupervisor();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::BIOTECNICO))
            $columns[NivjerPeer::BIOTECNICO] = $obj->getBiotecnico();

        if ($obj->isNew() || $obj->isColumnModified(NivjerPeer::BIOOTRO))
            $columns[NivjerPeer::BIOOTRO] = $obj->getBiootro();

        }

        return BasePeer::doValidate(NivjerPeer::DATABASE_NAME, NivjerPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Nivjer
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = NivjerPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(NivjerPeer::DATABASE_NAME);
        $criteria->add(NivjerPeer::ID, $pk);

        $v = NivjerPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Nivjer[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(NivjerPeer::DATABASE_NAME);
            $criteria->add(NivjerPeer::ID, $pks, Criteria::IN);
            $objs = NivjerPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseNivjerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNivjerPeer::buildTableMap();

