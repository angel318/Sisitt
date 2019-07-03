<?php


/**
 * Base static class for performing query and update operations on the 'encuempr_comlab' table.
 *
 *
 *
 * @package propel.generator.sisitt.om
 */
abstract class BasecomlabPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'sisitt';

    /** the table name for this class */
    const TABLE_NAME = 'encuempr_comlab';

    /** the related Propel class for this table */
    const OM_CLASS = 'comlab';

    /** the related TableMap class for this table */
    const TM_CLASS = 'comlabTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the id field */
    const ID = 'encuempr_comlab.id';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'encuempr_comlab.idusuario';

    /** the column name for the conflictos field */
    const CONFLICTOS = 'encuempr_comlab.conflictos';

    /** the column name for the ortografia field */
    const ORTOGRAFIA = 'encuempr_comlab.ortografia';

    /** the column name for the procesos field */
    const PROCESOS = 'encuempr_comlab.procesos';

    /** the column name for the equipo field */
    const EQUIPO = 'encuempr_comlab.equipo';

    /** the column name for the admintiempo field */
    const ADMINTIEMPO = 'encuempr_comlab.admintiempo';

    /** the column name for the seguridadpersonal field */
    const SEGURIDADPERSONAL = 'encuempr_comlab.seguridadpersonal';

    /** the column name for the facilidadpalabra field */
    const FACILIDADPALABRA = 'encuempr_comlab.facilidadpalabra';

    /** the column name for the gestionproyectos field */
    const GESTIONPROYECTOS = 'encuempr_comlab.gestionproyectos';

    /** the column name for the puntualidad field */
    const PUNTUALIDAD = 'encuempr_comlab.puntualidad';

    /** the column name for the normas field */
    const NORMAS = 'encuempr_comlab.normas';

    /** the column name for the integracion field */
    const INTEGRACION = 'encuempr_comlab.integracion';

    /** the column name for the innovacion field */
    const INNOVACION = 'encuempr_comlab.innovacion';

    /** the column name for the negociacion field */
    const NEGOCIACION = 'encuempr_comlab.negociacion';

    /** the column name for the abstraccion field */
    const ABSTRACCION = 'encuempr_comlab.abstraccion';

    /** the column name for the decisiones field */
    const DECISIONES = 'encuempr_comlab.decisiones';

    /** the column name for the adaptacion field */
    const ADAPTACION = 'encuempr_comlab.adaptacion';

    /** the column name for the otras field */
    const OTRAS = 'encuempr_comlab.otras';

    /** the column name for the desempeniolaboral field */
    const DESEMPENIOLABORAL = 'encuempr_comlab.desempeniolaboral';

    /** the column name for the mejoras field */
    const MEJORAS = 'encuempr_comlab.mejoras';

    /** the column name for the sugerencias field */
    const SUGERENCIAS = 'encuempr_comlab.sugerencias';

    /** the column name for the nombres field */
    const NOMBRES = 'encuempr_comlab.nombres';

    /** the column name for the puesto field */
    const PUESTO = 'encuempr_comlab.puesto';

    /** the column name for the correo field */
    const CORREO = 'encuempr_comlab.correo';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of comlab objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array comlab[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. comlabPeer::$fieldNames[comlabPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta', 'IdUsuario', 'Conflictos', 'Ortografia', 'Procesos', 'Equipo', 'Admintiempo', 'Seguridadpersonal', 'Felicidadpalabra', 'Gestionproyectos', 'Puntualidad', 'Normas', 'Integracion', 'Innovacion', 'Negociacion', 'Abstraccion', 'Decisiones', 'Adaptacion', 'Otras', 'Desempeniolaboral', 'Mejoras', 'Sugerencias', 'Nombres', 'Puesto', 'Correo', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta', 'idUsuario', 'conflictos', 'ortografia', 'procesos', 'equipo', 'admintiempo', 'seguridadpersonal', 'felicidadpalabra', 'gestionproyectos', 'puntualidad', 'normas', 'integracion', 'innovacion', 'negociacion', 'abstraccion', 'decisiones', 'adaptacion', 'otras', 'desempeniolaboral', 'mejoras', 'sugerencias', 'nombres', 'puesto', 'correo', ),
        BasePeer::TYPE_COLNAME => array (comlabPeer::ID, comlabPeer::IDUSUARIO, comlabPeer::CONFLICTOS, comlabPeer::ORTOGRAFIA, comlabPeer::PROCESOS, comlabPeer::EQUIPO, comlabPeer::ADMINTIEMPO, comlabPeer::SEGURIDADPERSONAL, comlabPeer::FACILIDADPALABRA, comlabPeer::GESTIONPROYECTOS, comlabPeer::PUNTUALIDAD, comlabPeer::NORMAS, comlabPeer::INTEGRACION, comlabPeer::INNOVACION, comlabPeer::NEGOCIACION, comlabPeer::ABSTRACCION, comlabPeer::DECISIONES, comlabPeer::ADAPTACION, comlabPeer::OTRAS, comlabPeer::DESEMPENIOLABORAL, comlabPeer::MEJORAS, comlabPeer::SUGERENCIAS, comlabPeer::NOMBRES, comlabPeer::PUESTO, comlabPeer::CORREO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IDUSUARIO', 'CONFLICTOS', 'ORTOGRAFIA', 'PROCESOS', 'EQUIPO', 'ADMINTIEMPO', 'SEGURIDADPERSONAL', 'FACILIDADPALABRA', 'GESTIONPROYECTOS', 'PUNTUALIDAD', 'NORMAS', 'INTEGRACION', 'INNOVACION', 'NEGOCIACION', 'ABSTRACCION', 'DECISIONES', 'ADAPTACION', 'OTRAS', 'DESEMPENIOLABORAL', 'MEJORAS', 'SUGERENCIAS', 'NOMBRES', 'PUESTO', 'CORREO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'idusuario', 'conflictos', 'ortografia', 'procesos', 'equipo', 'admintiempo', 'seguridadpersonal', 'facilidadpalabra', 'gestionproyectos', 'puntualidad', 'normas', 'integracion', 'innovacion', 'negociacion', 'abstraccion', 'decisiones', 'adaptacion', 'otras', 'desempeniolaboral', 'mejoras', 'sugerencias', 'nombres', 'puesto', 'correo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. comlabPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEncuesta' => 0, 'IdUsuario' => 1, 'Conflictos' => 2, 'Ortografia' => 3, 'Procesos' => 4, 'Equipo' => 5, 'Admintiempo' => 6, 'Seguridadpersonal' => 7, 'Felicidadpalabra' => 8, 'Gestionproyectos' => 9, 'Puntualidad' => 10, 'Normas' => 11, 'Integracion' => 12, 'Innovacion' => 13, 'Negociacion' => 14, 'Abstraccion' => 15, 'Decisiones' => 16, 'Adaptacion' => 17, 'Otras' => 18, 'Desempeniolaboral' => 19, 'Mejoras' => 20, 'Sugerencias' => 21, 'Nombres' => 22, 'Puesto' => 23, 'Correo' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEncuesta' => 0, 'idUsuario' => 1, 'conflictos' => 2, 'ortografia' => 3, 'procesos' => 4, 'equipo' => 5, 'admintiempo' => 6, 'seguridadpersonal' => 7, 'felicidadpalabra' => 8, 'gestionproyectos' => 9, 'puntualidad' => 10, 'normas' => 11, 'integracion' => 12, 'innovacion' => 13, 'negociacion' => 14, 'abstraccion' => 15, 'decisiones' => 16, 'adaptacion' => 17, 'otras' => 18, 'desempeniolaboral' => 19, 'mejoras' => 20, 'sugerencias' => 21, 'nombres' => 22, 'puesto' => 23, 'correo' => 24, ),
        BasePeer::TYPE_COLNAME => array (comlabPeer::ID => 0, comlabPeer::IDUSUARIO => 1, comlabPeer::CONFLICTOS => 2, comlabPeer::ORTOGRAFIA => 3, comlabPeer::PROCESOS => 4, comlabPeer::EQUIPO => 5, comlabPeer::ADMINTIEMPO => 6, comlabPeer::SEGURIDADPERSONAL => 7, comlabPeer::FACILIDADPALABRA => 8, comlabPeer::GESTIONPROYECTOS => 9, comlabPeer::PUNTUALIDAD => 10, comlabPeer::NORMAS => 11, comlabPeer::INTEGRACION => 12, comlabPeer::INNOVACION => 13, comlabPeer::NEGOCIACION => 14, comlabPeer::ABSTRACCION => 15, comlabPeer::DECISIONES => 16, comlabPeer::ADAPTACION => 17, comlabPeer::OTRAS => 18, comlabPeer::DESEMPENIOLABORAL => 19, comlabPeer::MEJORAS => 20, comlabPeer::SUGERENCIAS => 21, comlabPeer::NOMBRES => 22, comlabPeer::PUESTO => 23, comlabPeer::CORREO => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IDUSUARIO' => 1, 'CONFLICTOS' => 2, 'ORTOGRAFIA' => 3, 'PROCESOS' => 4, 'EQUIPO' => 5, 'ADMINTIEMPO' => 6, 'SEGURIDADPERSONAL' => 7, 'FACILIDADPALABRA' => 8, 'GESTIONPROYECTOS' => 9, 'PUNTUALIDAD' => 10, 'NORMAS' => 11, 'INTEGRACION' => 12, 'INNOVACION' => 13, 'NEGOCIACION' => 14, 'ABSTRACCION' => 15, 'DECISIONES' => 16, 'ADAPTACION' => 17, 'OTRAS' => 18, 'DESEMPENIOLABORAL' => 19, 'MEJORAS' => 20, 'SUGERENCIAS' => 21, 'NOMBRES' => 22, 'PUESTO' => 23, 'CORREO' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'idusuario' => 1, 'conflictos' => 2, 'ortografia' => 3, 'procesos' => 4, 'equipo' => 5, 'admintiempo' => 6, 'seguridadpersonal' => 7, 'facilidadpalabra' => 8, 'gestionproyectos' => 9, 'puntualidad' => 10, 'normas' => 11, 'integracion' => 12, 'innovacion' => 13, 'negociacion' => 14, 'abstraccion' => 15, 'decisiones' => 16, 'adaptacion' => 17, 'otras' => 18, 'desempeniolaboral' => 19, 'mejoras' => 20, 'sugerencias' => 21, 'nombres' => 22, 'puesto' => 23, 'correo' => 24, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $toNames = comlabPeer::getFieldNames($toType);
        $key = isset(comlabPeer::$fieldKeys[$fromType][$name]) ? comlabPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(comlabPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, comlabPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return comlabPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. comlabPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(comlabPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(comlabPeer::ID);
            $criteria->addSelectColumn(comlabPeer::IDUSUARIO);
            $criteria->addSelectColumn(comlabPeer::CONFLICTOS);
            $criteria->addSelectColumn(comlabPeer::ORTOGRAFIA);
            $criteria->addSelectColumn(comlabPeer::PROCESOS);
            $criteria->addSelectColumn(comlabPeer::EQUIPO);
            $criteria->addSelectColumn(comlabPeer::ADMINTIEMPO);
            $criteria->addSelectColumn(comlabPeer::SEGURIDADPERSONAL);
            $criteria->addSelectColumn(comlabPeer::FACILIDADPALABRA);
            $criteria->addSelectColumn(comlabPeer::GESTIONPROYECTOS);
            $criteria->addSelectColumn(comlabPeer::PUNTUALIDAD);
            $criteria->addSelectColumn(comlabPeer::NORMAS);
            $criteria->addSelectColumn(comlabPeer::INTEGRACION);
            $criteria->addSelectColumn(comlabPeer::INNOVACION);
            $criteria->addSelectColumn(comlabPeer::NEGOCIACION);
            $criteria->addSelectColumn(comlabPeer::ABSTRACCION);
            $criteria->addSelectColumn(comlabPeer::DECISIONES);
            $criteria->addSelectColumn(comlabPeer::ADAPTACION);
            $criteria->addSelectColumn(comlabPeer::OTRAS);
            $criteria->addSelectColumn(comlabPeer::DESEMPENIOLABORAL);
            $criteria->addSelectColumn(comlabPeer::MEJORAS);
            $criteria->addSelectColumn(comlabPeer::SUGERENCIAS);
            $criteria->addSelectColumn(comlabPeer::NOMBRES);
            $criteria->addSelectColumn(comlabPeer::PUESTO);
            $criteria->addSelectColumn(comlabPeer::CORREO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.conflictos');
            $criteria->addSelectColumn($alias . '.ortografia');
            $criteria->addSelectColumn($alias . '.procesos');
            $criteria->addSelectColumn($alias . '.equipo');
            $criteria->addSelectColumn($alias . '.admintiempo');
            $criteria->addSelectColumn($alias . '.seguridadpersonal');
            $criteria->addSelectColumn($alias . '.facilidadpalabra');
            $criteria->addSelectColumn($alias . '.gestionproyectos');
            $criteria->addSelectColumn($alias . '.puntualidad');
            $criteria->addSelectColumn($alias . '.normas');
            $criteria->addSelectColumn($alias . '.integracion');
            $criteria->addSelectColumn($alias . '.innovacion');
            $criteria->addSelectColumn($alias . '.negociacion');
            $criteria->addSelectColumn($alias . '.abstraccion');
            $criteria->addSelectColumn($alias . '.decisiones');
            $criteria->addSelectColumn($alias . '.adaptacion');
            $criteria->addSelectColumn($alias . '.otras');
            $criteria->addSelectColumn($alias . '.desempeniolaboral');
            $criteria->addSelectColumn($alias . '.mejoras');
            $criteria->addSelectColumn($alias . '.sugerencias');
            $criteria->addSelectColumn($alias . '.nombres');
            $criteria->addSelectColumn($alias . '.puesto');
            $criteria->addSelectColumn($alias . '.correo');
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
        $criteria->setPrimaryTableName(comlabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            comlabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(comlabPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return comlab
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = comlabPeer::doSelect($critcopy, $con);
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
        return comlabPeer::populateObjects(comlabPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            comlabPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(comlabPeer::DATABASE_NAME);

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
     * @param comlab $obj A comlab object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEncuesta();
            } // if key === null
            comlabPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A comlab object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof comlab) {
                $key = (string) $value->getIdEncuesta();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or comlab object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(comlabPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return comlab Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(comlabPeer::$instances[$key])) {
                return comlabPeer::$instances[$key];
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
        foreach (comlabPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        comlabPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to encuempr_comlab
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
        $cls = comlabPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = comlabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = comlabPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                comlabPeer::addInstanceToPool($obj, $key);
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
     * @return array (comlab object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = comlabPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = comlabPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + comlabPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = comlabPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            comlabPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(comlabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            comlabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(comlabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(comlabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

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
     * Selects a collection of comlab objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of comlab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(comlabPeer::DATABASE_NAME);
        }

        comlabPeer::addSelectColumns($criteria);
        $startcol = comlabPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(comlabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = comlabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = comlabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = comlabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                comlabPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (comlab) to $obj2 (Usuario)
                $obj2->addcomlab($obj1);

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
        $criteria->setPrimaryTableName(comlabPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            comlabPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(comlabPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(comlabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

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
     * Selects a collection of comlab objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of comlab objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(comlabPeer::DATABASE_NAME);
        }

        comlabPeer::addSelectColumns($criteria);
        $startcol2 = comlabPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(comlabPeer::IDUSUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = comlabPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = comlabPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = comlabPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                comlabPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (comlab) to the collection in $obj2 (Usuario)
                $obj2->addcomlab($obj1);
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
        return Propel::getDatabaseMap(comlabPeer::DATABASE_NAME)->getTable(comlabPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasecomlabPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasecomlabPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \comlabTableMap());
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
        return comlabPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a comlab or Criteria object.
     *
     * @param      mixed $values Criteria or comlab object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from comlab object
        }

        if ($criteria->containsKey(comlabPeer::ID) && $criteria->keyContainsValue(comlabPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.comlabPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(comlabPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a comlab or Criteria object.
     *
     * @param      mixed $values Criteria or comlab object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(comlabPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(comlabPeer::ID);
            $value = $criteria->remove(comlabPeer::ID);
            if ($value) {
                $selectCriteria->add(comlabPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(comlabPeer::TABLE_NAME);
            }

        } else { // $values is comlab object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(comlabPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the encuempr_comlab table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(comlabPeer::TABLE_NAME, $con, comlabPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            comlabPeer::clearInstancePool();
            comlabPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a comlab or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or comlab object or primary key or array of primary keys
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
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            comlabPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof comlab) { // it's a model object
            // invalidate the cache for this single object
            comlabPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(comlabPeer::DATABASE_NAME);
            $criteria->add(comlabPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                comlabPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(comlabPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            comlabPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given comlab object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param comlab $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(comlabPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(comlabPeer::TABLE_NAME);

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

        if ($obj->isNew() || $obj->isColumnModified(comlabPeer::MEJORAS))
            $columns[comlabPeer::MEJORAS] = $obj->getMejoras();

        if ($obj->isNew() || $obj->isColumnModified(comlabPeer::SUGERENCIAS))
            $columns[comlabPeer::SUGERENCIAS] = $obj->getSugerencias();

        if ($obj->isNew() || $obj->isColumnModified(comlabPeer::NOMBRES))
            $columns[comlabPeer::NOMBRES] = $obj->getNombres();

        if ($obj->isNew() || $obj->isColumnModified(comlabPeer::PUESTO))
            $columns[comlabPeer::PUESTO] = $obj->getPuesto();

        if ($obj->isNew() || $obj->isColumnModified(comlabPeer::CORREO))
            $columns[comlabPeer::CORREO] = $obj->getCorreo();

        }

        return BasePeer::doValidate(comlabPeer::DATABASE_NAME, comlabPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return comlab
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = comlabPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(comlabPeer::DATABASE_NAME);
        $criteria->add(comlabPeer::ID, $pk);

        $v = comlabPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return comlab[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(comlabPeer::DATABASE_NAME);
            $criteria->add(comlabPeer::ID, $pks, Criteria::IN);
            $objs = comlabPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasecomlabPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasecomlabPeer::buildTableMap();

