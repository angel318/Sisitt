<?php


/**
 * Base static class for performing query and update operations on the 'usuario' table.
 *
 *
 *
 * @package propel.generator.sisitt.om
 */
abstract class BaseUsuarioPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sisitt';

    /** the table name for this class */
    const TABLE_NAME = 'usuario';

    /** the related Propel class for this table */
    const OM_CLASS = 'Usuario';

    /** the related TableMap class for this table */
    const TM_CLASS = 'UsuarioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the id field */
    const ID = 'usuario.id';

    /** the column name for the matricula field */
    const MATRICULA = 'usuario.matricula';

    /** the column name for the correo field */
    const CORREO = 'usuario.correo';

    /** the column name for the contrasena field */
    const CONTRASENA = 'usuario.contrasena';

    /** the column name for the nombres field */
    const NOMBRES = 'usuario.nombres';

    /** the column name for the apellidop field */
    const APELLIDOP = 'usuario.apellidop';

    /** the column name for the apellidom field */
    const APELLIDOM = 'usuario.apellidom';

    /** the column name for the curp field */
    const CURP = 'usuario.curp';

    /** the column name for the rfc field */
    const RFC = 'usuario.rfc';

    /** the column name for the telefono field */
    const TELEFONO = 'usuario.telefono';

    /** the column name for the plan_id field */
    const PLAN_ID = 'usuario.plan_id';

    /** the column name for the contacto_id field */
    const CONTACTO_ID = 'usuario.contacto_id';

    /** the column name for the estatus field */
    const ESTATUS = 'usuario.estatus';

    /** the column name for the tipo field */
    const TIPO = 'usuario.tipo';

    /** the column name for the genero field */
    const GENERO = 'usuario.genero';

    /** the column name for the nacimiento field */
    const NACIMIENTO = 'usuario.nacimiento';

    /** the column name for the foto field */
    const FOTO = 'usuario.foto';

    /** The enumerated values for the estatus field */
    const ESTATUS_INACTIVO = 'inactivo';
    const ESTATUS_ACTIVO = 'activo';

    /** The enumerated values for the tipo field */
    const TIPO_ESTUDIANTE = 'Estudiante';
    const TIPO_FORANEO = 'Foraneo';
    const TIPO_PERSONAL = 'Personal';

    /** The enumerated values for the genero field */
    const GENERO_MASCULINO = 'Masculino';
    const GENERO_FEMENINO = 'Femenino';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Usuario objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Usuario[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. UsuarioPeer::$fieldNames[UsuarioPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdUsuario', 'Matricula', 'Correo', 'Contrasena', 'Nombres', 'ApellidoPaterno', 'ApellidoMaterno', 'Curp', 'Rfc', 'Telefono', 'PlanId', 'ContactoId', 'Estatus', 'Tipo', 'Genero', 'Nacimiento', 'Foto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idUsuario', 'matricula', 'correo', 'contrasena', 'nombres', 'apellidoPaterno', 'apellidoMaterno', 'curp', 'rfc', 'telefono', 'planId', 'contactoId', 'estatus', 'tipo', 'genero', 'nacimiento', 'foto', ),
        BasePeer::TYPE_COLNAME => array (UsuarioPeer::ID, UsuarioPeer::MATRICULA, UsuarioPeer::CORREO, UsuarioPeer::CONTRASENA, UsuarioPeer::NOMBRES, UsuarioPeer::APELLIDOP, UsuarioPeer::APELLIDOM, UsuarioPeer::CURP, UsuarioPeer::RFC, UsuarioPeer::TELEFONO, UsuarioPeer::PLAN_ID, UsuarioPeer::CONTACTO_ID, UsuarioPeer::ESTATUS, UsuarioPeer::TIPO, UsuarioPeer::GENERO, UsuarioPeer::NACIMIENTO, UsuarioPeer::FOTO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'MATRICULA', 'CORREO', 'CONTRASENA', 'NOMBRES', 'APELLIDOP', 'APELLIDOM', 'CURP', 'RFC', 'TELEFONO', 'PLAN_ID', 'CONTACTO_ID', 'ESTATUS', 'TIPO', 'GENERO', 'NACIMIENTO', 'FOTO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'matricula', 'correo', 'contrasena', 'nombres', 'apellidop', 'apellidom', 'curp', 'rfc', 'telefono', 'plan_id', 'contacto_id', 'estatus', 'tipo', 'genero', 'nacimiento', 'foto', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. UsuarioPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdUsuario' => 0, 'Matricula' => 1, 'Correo' => 2, 'Contrasena' => 3, 'Nombres' => 4, 'ApellidoPaterno' => 5, 'ApellidoMaterno' => 6, 'Curp' => 7, 'Rfc' => 8, 'Telefono' => 9, 'PlanId' => 10, 'ContactoId' => 11, 'Estatus' => 12, 'Tipo' => 13, 'Genero' => 14, 'Nacimiento' => 15, 'Foto' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idUsuario' => 0, 'matricula' => 1, 'correo' => 2, 'contrasena' => 3, 'nombres' => 4, 'apellidoPaterno' => 5, 'apellidoMaterno' => 6, 'curp' => 7, 'rfc' => 8, 'telefono' => 9, 'planId' => 10, 'contactoId' => 11, 'estatus' => 12, 'tipo' => 13, 'genero' => 14, 'nacimiento' => 15, 'foto' => 16, ),
        BasePeer::TYPE_COLNAME => array (UsuarioPeer::ID => 0, UsuarioPeer::MATRICULA => 1, UsuarioPeer::CORREO => 2, UsuarioPeer::CONTRASENA => 3, UsuarioPeer::NOMBRES => 4, UsuarioPeer::APELLIDOP => 5, UsuarioPeer::APELLIDOM => 6, UsuarioPeer::CURP => 7, UsuarioPeer::RFC => 8, UsuarioPeer::TELEFONO => 9, UsuarioPeer::PLAN_ID => 10, UsuarioPeer::CONTACTO_ID => 11, UsuarioPeer::ESTATUS => 12, UsuarioPeer::TIPO => 13, UsuarioPeer::GENERO => 14, UsuarioPeer::NACIMIENTO => 15, UsuarioPeer::FOTO => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'MATRICULA' => 1, 'CORREO' => 2, 'CONTRASENA' => 3, 'NOMBRES' => 4, 'APELLIDOP' => 5, 'APELLIDOM' => 6, 'CURP' => 7, 'RFC' => 8, 'TELEFONO' => 9, 'PLAN_ID' => 10, 'CONTACTO_ID' => 11, 'ESTATUS' => 12, 'TIPO' => 13, 'GENERO' => 14, 'NACIMIENTO' => 15, 'FOTO' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'matricula' => 1, 'correo' => 2, 'contrasena' => 3, 'nombres' => 4, 'apellidop' => 5, 'apellidom' => 6, 'curp' => 7, 'rfc' => 8, 'telefono' => 9, 'plan_id' => 10, 'contacto_id' => 11, 'estatus' => 12, 'tipo' => 13, 'genero' => 14, 'nacimiento' => 15, 'foto' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        UsuarioPeer::ESTATUS => array(
            UsuarioPeer::ESTATUS_INACTIVO,
            UsuarioPeer::ESTATUS_ACTIVO,
        ),
        UsuarioPeer::TIPO => array(
            UsuarioPeer::TIPO_ESTUDIANTE,
            UsuarioPeer::TIPO_FORANEO,
            UsuarioPeer::TIPO_PERSONAL,
        ),
        UsuarioPeer::GENERO => array(
            UsuarioPeer::GENERO_MASCULINO,
            UsuarioPeer::GENERO_FEMENINO,
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
        $toNames = UsuarioPeer::getFieldNames($toType);
        $key = isset(UsuarioPeer::$fieldKeys[$fromType][$name]) ? UsuarioPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(UsuarioPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, UsuarioPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return UsuarioPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return UsuarioPeer::$enumValueSets;
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
        $valueSets = UsuarioPeer::getValueSets();

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
        $values = UsuarioPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. UsuarioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(UsuarioPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(UsuarioPeer::ID);
            $criteria->addSelectColumn(UsuarioPeer::MATRICULA);
            $criteria->addSelectColumn(UsuarioPeer::CORREO);
            $criteria->addSelectColumn(UsuarioPeer::CONTRASENA);
            $criteria->addSelectColumn(UsuarioPeer::NOMBRES);
            $criteria->addSelectColumn(UsuarioPeer::APELLIDOP);
            $criteria->addSelectColumn(UsuarioPeer::APELLIDOM);
            $criteria->addSelectColumn(UsuarioPeer::CURP);
            $criteria->addSelectColumn(UsuarioPeer::RFC);
            $criteria->addSelectColumn(UsuarioPeer::TELEFONO);
            $criteria->addSelectColumn(UsuarioPeer::PLAN_ID);
            $criteria->addSelectColumn(UsuarioPeer::CONTACTO_ID);
            $criteria->addSelectColumn(UsuarioPeer::ESTATUS);
            $criteria->addSelectColumn(UsuarioPeer::TIPO);
            $criteria->addSelectColumn(UsuarioPeer::GENERO);
            $criteria->addSelectColumn(UsuarioPeer::NACIMIENTO);
            $criteria->addSelectColumn(UsuarioPeer::FOTO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.matricula');
            $criteria->addSelectColumn($alias . '.correo');
            $criteria->addSelectColumn($alias . '.contrasena');
            $criteria->addSelectColumn($alias . '.nombres');
            $criteria->addSelectColumn($alias . '.apellidop');
            $criteria->addSelectColumn($alias . '.apellidom');
            $criteria->addSelectColumn($alias . '.curp');
            $criteria->addSelectColumn($alias . '.rfc');
            $criteria->addSelectColumn($alias . '.telefono');
            $criteria->addSelectColumn($alias . '.plan_id');
            $criteria->addSelectColumn($alias . '.contacto_id');
            $criteria->addSelectColumn($alias . '.estatus');
            $criteria->addSelectColumn($alias . '.tipo');
            $criteria->addSelectColumn($alias . '.genero');
            $criteria->addSelectColumn($alias . '.nacimiento');
            $criteria->addSelectColumn($alias . '.foto');
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
        $criteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Usuario
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = UsuarioPeer::doSelect($critcopy, $con);
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
        return UsuarioPeer::populateObjects(UsuarioPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            UsuarioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

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
     * @param Usuario $obj A Usuario object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdUsuario();
            } // if key === null
            UsuarioPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Usuario object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Usuario) {
                $key = (string) $value->getIdUsuario();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Usuario object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(UsuarioPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Usuario Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(UsuarioPeer::$instances[$key])) {
                return UsuarioPeer::$instances[$key];
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
        foreach (UsuarioPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        UsuarioPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to usuario
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
        $cls = UsuarioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = UsuarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = UsuarioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UsuarioPeer::addInstanceToPool($obj, $key);
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
     * @return array (Usuario object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = UsuarioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + UsuarioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UsuarioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            UsuarioPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Gets the SQL value for Estatus ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getEstatusSqlValue($enumVal)
    {
        return UsuarioPeer::getSqlValueForEnum(UsuarioPeer::ESTATUS, $enumVal);
    }

    /**
     * Gets the SQL value for Tipo ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getTipoSqlValue($enumVal)
    {
        return UsuarioPeer::getSqlValueForEnum(UsuarioPeer::TIPO, $enumVal);
    }

    /**
     * Gets the SQL value for Genero ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getGeneroSqlValue($enumVal)
    {
        return UsuarioPeer::getSqlValueForEnum(UsuarioPeer::GENERO, $enumVal);
    }


    /**
     * Returns the number of rows matching criteria, joining the related PlanEstudio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPlanEstudio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuarioPeer::PLAN_ID, PlanEstudioPeer::ID, $join_behavior);

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
     * Selects a collection of Usuario objects pre-filled with their PlanEstudio objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPlanEstudio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuarioPeer::DATABASE_NAME);
        }

        UsuarioPeer::addSelectColumns($criteria);
        $startcol = UsuarioPeer::NUM_HYDRATE_COLUMNS;
        PlanEstudioPeer::addSelectColumns($criteria);

        $criteria->addJoin(UsuarioPeer::PLAN_ID, PlanEstudioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = UsuarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuarioPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PlanEstudioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PlanEstudioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PlanEstudioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PlanEstudioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Usuario) to $obj2 (PlanEstudio)
                $obj2->addUsuario($obj1);

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
        $criteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuarioPeer::PLAN_ID, PlanEstudioPeer::ID, $join_behavior);

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
     * Selects a collection of Usuario objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuarioPeer::DATABASE_NAME);
        }

        UsuarioPeer::addSelectColumns($criteria);
        $startcol2 = UsuarioPeer::NUM_HYDRATE_COLUMNS;

        PlanEstudioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PlanEstudioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(UsuarioPeer::PLAN_ID, PlanEstudioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = UsuarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuarioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined PlanEstudio rows

            $key2 = PlanEstudioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = PlanEstudioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PlanEstudioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PlanEstudioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Usuario) to the collection in $obj2 (PlanEstudio)
                $obj2->addUsuario($obj1);
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
        return Propel::getDatabaseMap(UsuarioPeer::DATABASE_NAME)->getTable(UsuarioPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseUsuarioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseUsuarioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \UsuarioTableMap());
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
        return UsuarioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Usuario or Criteria object.
     *
     * @param      mixed $values Criteria or Usuario object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Usuario object
        }

        if ($criteria->containsKey(UsuarioPeer::ID) && $criteria->keyContainsValue(UsuarioPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UsuarioPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Usuario or Criteria object.
     *
     * @param      mixed $values Criteria or Usuario object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(UsuarioPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(UsuarioPeer::ID);
            $value = $criteria->remove(UsuarioPeer::ID);
            if ($value) {
                $selectCriteria->add(UsuarioPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);
            }

        } else { // $values is Usuario object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the usuario table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(UsuarioPeer::TABLE_NAME, $con, UsuarioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UsuarioPeer::clearInstancePool();
            UsuarioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Usuario or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Usuario object or primary key or array of primary keys
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            UsuarioPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Usuario) { // it's a model object
            // invalidate the cache for this single object
            UsuarioPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
            $criteria->add(UsuarioPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                UsuarioPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            UsuarioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Usuario object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Usuario $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(UsuarioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(UsuarioPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::MATRICULA))
            $columns[UsuarioPeer::MATRICULA] = $obj->getMatricula();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::CORREO))
            $columns[UsuarioPeer::CORREO] = $obj->getCorreo();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::CONTRASENA))
            $columns[UsuarioPeer::CONTRASENA] = $obj->getContrasena();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::NOMBRES))
            $columns[UsuarioPeer::NOMBRES] = $obj->getNombres();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::APELLIDOP))
            $columns[UsuarioPeer::APELLIDOP] = $obj->getApellidoPaterno();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::APELLIDOM))
            $columns[UsuarioPeer::APELLIDOM] = $obj->getApellidoMaterno();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::CURP))
            $columns[UsuarioPeer::CURP] = $obj->getCurp();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::RFC))
            $columns[UsuarioPeer::RFC] = $obj->getRfc();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::TELEFONO))
            $columns[UsuarioPeer::TELEFONO] = $obj->getTelefono();

        if ($obj->isNew() || $obj->isColumnModified(UsuarioPeer::NACIMIENTO))
            $columns[UsuarioPeer::NACIMIENTO] = $obj->getNacimiento();

        }

        return BasePeer::doValidate(UsuarioPeer::DATABASE_NAME, UsuarioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Usuario
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
        $criteria->add(UsuarioPeer::ID, $pk);

        $v = UsuarioPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Usuario[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
            $criteria->add(UsuarioPeer::ID, $pks, Criteria::IN);
            $objs = UsuarioPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseUsuarioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUsuarioPeer::buildTableMap();

