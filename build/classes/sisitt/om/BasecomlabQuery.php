<?php


/**
 * Base class that represents a query for the 'encuempr_comlab' table.
 *
 *
 *
 * @method comlabQuery orderByIdEncuesta($order = Criteria::ASC) Order by the id column
 * @method comlabQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method comlabQuery orderByConflictos($order = Criteria::ASC) Order by the conflictos column
 * @method comlabQuery orderByOrtografia($order = Criteria::ASC) Order by the ortografia column
 * @method comlabQuery orderByProcesos($order = Criteria::ASC) Order by the procesos column
 * @method comlabQuery orderByEquipo($order = Criteria::ASC) Order by the equipo column
 * @method comlabQuery orderByAdmintiempo($order = Criteria::ASC) Order by the admintiempo column
 * @method comlabQuery orderBySeguridadpersonal($order = Criteria::ASC) Order by the seguridadpersonal column
 * @method comlabQuery orderByFelicidadpalabra($order = Criteria::ASC) Order by the facilidadpalabra column
 * @method comlabQuery orderByGestionproyectos($order = Criteria::ASC) Order by the gestionproyectos column
 * @method comlabQuery orderByPuntualidad($order = Criteria::ASC) Order by the puntualidad column
 * @method comlabQuery orderByNormas($order = Criteria::ASC) Order by the normas column
 * @method comlabQuery orderByIntegracion($order = Criteria::ASC) Order by the integracion column
 * @method comlabQuery orderByInnovacion($order = Criteria::ASC) Order by the innovacion column
 * @method comlabQuery orderByNegociacion($order = Criteria::ASC) Order by the negociacion column
 * @method comlabQuery orderByAbstraccion($order = Criteria::ASC) Order by the abstraccion column
 * @method comlabQuery orderByDecisiones($order = Criteria::ASC) Order by the decisiones column
 * @method comlabQuery orderByAdaptacion($order = Criteria::ASC) Order by the adaptacion column
 * @method comlabQuery orderByOtras($order = Criteria::ASC) Order by the otras column
 * @method comlabQuery orderByDesempeniolaboral($order = Criteria::ASC) Order by the desempeniolaboral column
 * @method comlabQuery orderByMejoras($order = Criteria::ASC) Order by the mejoras column
 * @method comlabQuery orderBySugerencias($order = Criteria::ASC) Order by the sugerencias column
 * @method comlabQuery orderByNombres($order = Criteria::ASC) Order by the nombres column
 * @method comlabQuery orderByPuesto($order = Criteria::ASC) Order by the puesto column
 * @method comlabQuery orderByCorreo($order = Criteria::ASC) Order by the correo column
 *
 * @method comlabQuery groupByIdEncuesta() Group by the id column
 * @method comlabQuery groupByIdUsuario() Group by the idusuario column
 * @method comlabQuery groupByConflictos() Group by the conflictos column
 * @method comlabQuery groupByOrtografia() Group by the ortografia column
 * @method comlabQuery groupByProcesos() Group by the procesos column
 * @method comlabQuery groupByEquipo() Group by the equipo column
 * @method comlabQuery groupByAdmintiempo() Group by the admintiempo column
 * @method comlabQuery groupBySeguridadpersonal() Group by the seguridadpersonal column
 * @method comlabQuery groupByFelicidadpalabra() Group by the facilidadpalabra column
 * @method comlabQuery groupByGestionproyectos() Group by the gestionproyectos column
 * @method comlabQuery groupByPuntualidad() Group by the puntualidad column
 * @method comlabQuery groupByNormas() Group by the normas column
 * @method comlabQuery groupByIntegracion() Group by the integracion column
 * @method comlabQuery groupByInnovacion() Group by the innovacion column
 * @method comlabQuery groupByNegociacion() Group by the negociacion column
 * @method comlabQuery groupByAbstraccion() Group by the abstraccion column
 * @method comlabQuery groupByDecisiones() Group by the decisiones column
 * @method comlabQuery groupByAdaptacion() Group by the adaptacion column
 * @method comlabQuery groupByOtras() Group by the otras column
 * @method comlabQuery groupByDesempeniolaboral() Group by the desempeniolaboral column
 * @method comlabQuery groupByMejoras() Group by the mejoras column
 * @method comlabQuery groupBySugerencias() Group by the sugerencias column
 * @method comlabQuery groupByNombres() Group by the nombres column
 * @method comlabQuery groupByPuesto() Group by the puesto column
 * @method comlabQuery groupByCorreo() Group by the correo column
 *
 * @method comlabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method comlabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method comlabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method comlabQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method comlabQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method comlabQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method comlab findOne(PropelPDO $con = null) Return the first comlab matching the query
 * @method comlab findOneOrCreate(PropelPDO $con = null) Return the first comlab matching the query, or a new comlab object populated from the query conditions when no match is found
 *
 * @method comlab findOneByIdUsuario(int $idusuario) Return the first comlab filtered by the idusuario column
 * @method comlab findOneByConflictos(int $conflictos) Return the first comlab filtered by the conflictos column
 * @method comlab findOneByOrtografia(int $ortografia) Return the first comlab filtered by the ortografia column
 * @method comlab findOneByProcesos(int $procesos) Return the first comlab filtered by the procesos column
 * @method comlab findOneByEquipo(int $equipo) Return the first comlab filtered by the equipo column
 * @method comlab findOneByAdmintiempo(int $admintiempo) Return the first comlab filtered by the admintiempo column
 * @method comlab findOneBySeguridadpersonal(int $seguridadpersonal) Return the first comlab filtered by the seguridadpersonal column
 * @method comlab findOneByFelicidadpalabra(int $facilidadpalabra) Return the first comlab filtered by the facilidadpalabra column
 * @method comlab findOneByGestionproyectos(int $gestionproyectos) Return the first comlab filtered by the gestionproyectos column
 * @method comlab findOneByPuntualidad(int $puntualidad) Return the first comlab filtered by the puntualidad column
 * @method comlab findOneByNormas(int $normas) Return the first comlab filtered by the normas column
 * @method comlab findOneByIntegracion(int $integracion) Return the first comlab filtered by the integracion column
 * @method comlab findOneByInnovacion(int $innovacion) Return the first comlab filtered by the innovacion column
 * @method comlab findOneByNegociacion(int $negociacion) Return the first comlab filtered by the negociacion column
 * @method comlab findOneByAbstraccion(int $abstraccion) Return the first comlab filtered by the abstraccion column
 * @method comlab findOneByDecisiones(int $decisiones) Return the first comlab filtered by the decisiones column
 * @method comlab findOneByAdaptacion(int $adaptacion) Return the first comlab filtered by the adaptacion column
 * @method comlab findOneByOtras(int $otras) Return the first comlab filtered by the otras column
 * @method comlab findOneByDesempeniolaboral(int $desempeniolaboral) Return the first comlab filtered by the desempeniolaboral column
 * @method comlab findOneByMejoras(string $mejoras) Return the first comlab filtered by the mejoras column
 * @method comlab findOneBySugerencias(string $sugerencias) Return the first comlab filtered by the sugerencias column
 * @method comlab findOneByNombres(string $nombres) Return the first comlab filtered by the nombres column
 * @method comlab findOneByPuesto(string $puesto) Return the first comlab filtered by the puesto column
 * @method comlab findOneByCorreo(string $correo) Return the first comlab filtered by the correo column
 *
 * @method array findByIdEncuesta(int $id) Return comlab objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return comlab objects filtered by the idusuario column
 * @method array findByConflictos(int $conflictos) Return comlab objects filtered by the conflictos column
 * @method array findByOrtografia(int $ortografia) Return comlab objects filtered by the ortografia column
 * @method array findByProcesos(int $procesos) Return comlab objects filtered by the procesos column
 * @method array findByEquipo(int $equipo) Return comlab objects filtered by the equipo column
 * @method array findByAdmintiempo(int $admintiempo) Return comlab objects filtered by the admintiempo column
 * @method array findBySeguridadpersonal(int $seguridadpersonal) Return comlab objects filtered by the seguridadpersonal column
 * @method array findByFelicidadpalabra(int $facilidadpalabra) Return comlab objects filtered by the facilidadpalabra column
 * @method array findByGestionproyectos(int $gestionproyectos) Return comlab objects filtered by the gestionproyectos column
 * @method array findByPuntualidad(int $puntualidad) Return comlab objects filtered by the puntualidad column
 * @method array findByNormas(int $normas) Return comlab objects filtered by the normas column
 * @method array findByIntegracion(int $integracion) Return comlab objects filtered by the integracion column
 * @method array findByInnovacion(int $innovacion) Return comlab objects filtered by the innovacion column
 * @method array findByNegociacion(int $negociacion) Return comlab objects filtered by the negociacion column
 * @method array findByAbstraccion(int $abstraccion) Return comlab objects filtered by the abstraccion column
 * @method array findByDecisiones(int $decisiones) Return comlab objects filtered by the decisiones column
 * @method array findByAdaptacion(int $adaptacion) Return comlab objects filtered by the adaptacion column
 * @method array findByOtras(int $otras) Return comlab objects filtered by the otras column
 * @method array findByDesempeniolaboral(int $desempeniolaboral) Return comlab objects filtered by the desempeniolaboral column
 * @method array findByMejoras(string $mejoras) Return comlab objects filtered by the mejoras column
 * @method array findBySugerencias(string $sugerencias) Return comlab objects filtered by the sugerencias column
 * @method array findByNombres(string $nombres) Return comlab objects filtered by the nombres column
 * @method array findByPuesto(string $puesto) Return comlab objects filtered by the puesto column
 * @method array findByCorreo(string $correo) Return comlab objects filtered by the correo column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BasecomlabQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasecomlabQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'sisitt';
        }
        if (null === $modelName) {
            $modelName = 'comlab';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new comlabQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   comlabQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return comlabQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof comlabQuery) {
            return $criteria;
        }
        $query = new comlabQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   comlab|comlab[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = comlabPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 comlab A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEncuesta($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 comlab A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `conflictos`, `ortografia`, `procesos`, `equipo`, `admintiempo`, `seguridadpersonal`, `facilidadpalabra`, `gestionproyectos`, `puntualidad`, `normas`, `integracion`, `innovacion`, `negociacion`, `abstraccion`, `decisiones`, `adaptacion`, `otras`, `desempeniolaboral`, `mejoras`, `sugerencias`, `nombres`, `puesto`, `correo` FROM `encuempr_comlab` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new comlab();
            $obj->hydrate($row);
            comlabPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return comlab|comlab[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|comlab[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(comlabPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(comlabPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEncuesta(1234); // WHERE id = 1234
     * $query->filterByIdEncuesta(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdEncuesta(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdEncuesta(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idEncuesta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByIdEncuesta($idEncuesta = null, $comparison = null)
    {
        if (is_array($idEncuesta)) {
            $useMinMax = false;
            if (isset($idEncuesta['min'])) {
                $this->addUsingAlias(comlabPeer::ID, $idEncuesta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEncuesta['max'])) {
                $this->addUsingAlias(comlabPeer::ID, $idEncuesta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::ID, $idEncuesta, $comparison);
    }

    /**
     * Filter the query on the idusuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE idusuario = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE idusuario IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE idusuario >= 12
     * $query->filterByIdUsuario(array('max' => 12)); // WHERE idusuario <= 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(comlabPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(comlabPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the conflictos column
     *
     * Example usage:
     * <code>
     * $query->filterByConflictos(1234); // WHERE conflictos = 1234
     * $query->filterByConflictos(array(12, 34)); // WHERE conflictos IN (12, 34)
     * $query->filterByConflictos(array('min' => 12)); // WHERE conflictos >= 12
     * $query->filterByConflictos(array('max' => 12)); // WHERE conflictos <= 12
     * </code>
     *
     * @param     mixed $conflictos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByConflictos($conflictos = null, $comparison = null)
    {
        if (is_array($conflictos)) {
            $useMinMax = false;
            if (isset($conflictos['min'])) {
                $this->addUsingAlias(comlabPeer::CONFLICTOS, $conflictos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($conflictos['max'])) {
                $this->addUsingAlias(comlabPeer::CONFLICTOS, $conflictos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::CONFLICTOS, $conflictos, $comparison);
    }

    /**
     * Filter the query on the ortografia column
     *
     * Example usage:
     * <code>
     * $query->filterByOrtografia(1234); // WHERE ortografia = 1234
     * $query->filterByOrtografia(array(12, 34)); // WHERE ortografia IN (12, 34)
     * $query->filterByOrtografia(array('min' => 12)); // WHERE ortografia >= 12
     * $query->filterByOrtografia(array('max' => 12)); // WHERE ortografia <= 12
     * </code>
     *
     * @param     mixed $ortografia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByOrtografia($ortografia = null, $comparison = null)
    {
        if (is_array($ortografia)) {
            $useMinMax = false;
            if (isset($ortografia['min'])) {
                $this->addUsingAlias(comlabPeer::ORTOGRAFIA, $ortografia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ortografia['max'])) {
                $this->addUsingAlias(comlabPeer::ORTOGRAFIA, $ortografia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::ORTOGRAFIA, $ortografia, $comparison);
    }

    /**
     * Filter the query on the procesos column
     *
     * Example usage:
     * <code>
     * $query->filterByProcesos(1234); // WHERE procesos = 1234
     * $query->filterByProcesos(array(12, 34)); // WHERE procesos IN (12, 34)
     * $query->filterByProcesos(array('min' => 12)); // WHERE procesos >= 12
     * $query->filterByProcesos(array('max' => 12)); // WHERE procesos <= 12
     * </code>
     *
     * @param     mixed $procesos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByProcesos($procesos = null, $comparison = null)
    {
        if (is_array($procesos)) {
            $useMinMax = false;
            if (isset($procesos['min'])) {
                $this->addUsingAlias(comlabPeer::PROCESOS, $procesos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($procesos['max'])) {
                $this->addUsingAlias(comlabPeer::PROCESOS, $procesos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::PROCESOS, $procesos, $comparison);
    }

    /**
     * Filter the query on the equipo column
     *
     * Example usage:
     * <code>
     * $query->filterByEquipo(1234); // WHERE equipo = 1234
     * $query->filterByEquipo(array(12, 34)); // WHERE equipo IN (12, 34)
     * $query->filterByEquipo(array('min' => 12)); // WHERE equipo >= 12
     * $query->filterByEquipo(array('max' => 12)); // WHERE equipo <= 12
     * </code>
     *
     * @param     mixed $equipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByEquipo($equipo = null, $comparison = null)
    {
        if (is_array($equipo)) {
            $useMinMax = false;
            if (isset($equipo['min'])) {
                $this->addUsingAlias(comlabPeer::EQUIPO, $equipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($equipo['max'])) {
                $this->addUsingAlias(comlabPeer::EQUIPO, $equipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::EQUIPO, $equipo, $comparison);
    }

    /**
     * Filter the query on the admintiempo column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmintiempo(1234); // WHERE admintiempo = 1234
     * $query->filterByAdmintiempo(array(12, 34)); // WHERE admintiempo IN (12, 34)
     * $query->filterByAdmintiempo(array('min' => 12)); // WHERE admintiempo >= 12
     * $query->filterByAdmintiempo(array('max' => 12)); // WHERE admintiempo <= 12
     * </code>
     *
     * @param     mixed $admintiempo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByAdmintiempo($admintiempo = null, $comparison = null)
    {
        if (is_array($admintiempo)) {
            $useMinMax = false;
            if (isset($admintiempo['min'])) {
                $this->addUsingAlias(comlabPeer::ADMINTIEMPO, $admintiempo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admintiempo['max'])) {
                $this->addUsingAlias(comlabPeer::ADMINTIEMPO, $admintiempo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::ADMINTIEMPO, $admintiempo, $comparison);
    }

    /**
     * Filter the query on the seguridadpersonal column
     *
     * Example usage:
     * <code>
     * $query->filterBySeguridadpersonal(1234); // WHERE seguridadpersonal = 1234
     * $query->filterBySeguridadpersonal(array(12, 34)); // WHERE seguridadpersonal IN (12, 34)
     * $query->filterBySeguridadpersonal(array('min' => 12)); // WHERE seguridadpersonal >= 12
     * $query->filterBySeguridadpersonal(array('max' => 12)); // WHERE seguridadpersonal <= 12
     * </code>
     *
     * @param     mixed $seguridadpersonal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterBySeguridadpersonal($seguridadpersonal = null, $comparison = null)
    {
        if (is_array($seguridadpersonal)) {
            $useMinMax = false;
            if (isset($seguridadpersonal['min'])) {
                $this->addUsingAlias(comlabPeer::SEGURIDADPERSONAL, $seguridadpersonal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seguridadpersonal['max'])) {
                $this->addUsingAlias(comlabPeer::SEGURIDADPERSONAL, $seguridadpersonal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::SEGURIDADPERSONAL, $seguridadpersonal, $comparison);
    }

    /**
     * Filter the query on the facilidadpalabra column
     *
     * Example usage:
     * <code>
     * $query->filterByFelicidadpalabra(1234); // WHERE facilidadpalabra = 1234
     * $query->filterByFelicidadpalabra(array(12, 34)); // WHERE facilidadpalabra IN (12, 34)
     * $query->filterByFelicidadpalabra(array('min' => 12)); // WHERE facilidadpalabra >= 12
     * $query->filterByFelicidadpalabra(array('max' => 12)); // WHERE facilidadpalabra <= 12
     * </code>
     *
     * @param     mixed $felicidadpalabra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByFelicidadpalabra($felicidadpalabra = null, $comparison = null)
    {
        if (is_array($felicidadpalabra)) {
            $useMinMax = false;
            if (isset($felicidadpalabra['min'])) {
                $this->addUsingAlias(comlabPeer::FACILIDADPALABRA, $felicidadpalabra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($felicidadpalabra['max'])) {
                $this->addUsingAlias(comlabPeer::FACILIDADPALABRA, $felicidadpalabra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::FACILIDADPALABRA, $felicidadpalabra, $comparison);
    }

    /**
     * Filter the query on the gestionproyectos column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionproyectos(1234); // WHERE gestionproyectos = 1234
     * $query->filterByGestionproyectos(array(12, 34)); // WHERE gestionproyectos IN (12, 34)
     * $query->filterByGestionproyectos(array('min' => 12)); // WHERE gestionproyectos >= 12
     * $query->filterByGestionproyectos(array('max' => 12)); // WHERE gestionproyectos <= 12
     * </code>
     *
     * @param     mixed $gestionproyectos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByGestionproyectos($gestionproyectos = null, $comparison = null)
    {
        if (is_array($gestionproyectos)) {
            $useMinMax = false;
            if (isset($gestionproyectos['min'])) {
                $this->addUsingAlias(comlabPeer::GESTIONPROYECTOS, $gestionproyectos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gestionproyectos['max'])) {
                $this->addUsingAlias(comlabPeer::GESTIONPROYECTOS, $gestionproyectos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::GESTIONPROYECTOS, $gestionproyectos, $comparison);
    }

    /**
     * Filter the query on the puntualidad column
     *
     * Example usage:
     * <code>
     * $query->filterByPuntualidad(1234); // WHERE puntualidad = 1234
     * $query->filterByPuntualidad(array(12, 34)); // WHERE puntualidad IN (12, 34)
     * $query->filterByPuntualidad(array('min' => 12)); // WHERE puntualidad >= 12
     * $query->filterByPuntualidad(array('max' => 12)); // WHERE puntualidad <= 12
     * </code>
     *
     * @param     mixed $puntualidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByPuntualidad($puntualidad = null, $comparison = null)
    {
        if (is_array($puntualidad)) {
            $useMinMax = false;
            if (isset($puntualidad['min'])) {
                $this->addUsingAlias(comlabPeer::PUNTUALIDAD, $puntualidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puntualidad['max'])) {
                $this->addUsingAlias(comlabPeer::PUNTUALIDAD, $puntualidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::PUNTUALIDAD, $puntualidad, $comparison);
    }

    /**
     * Filter the query on the normas column
     *
     * Example usage:
     * <code>
     * $query->filterByNormas(1234); // WHERE normas = 1234
     * $query->filterByNormas(array(12, 34)); // WHERE normas IN (12, 34)
     * $query->filterByNormas(array('min' => 12)); // WHERE normas >= 12
     * $query->filterByNormas(array('max' => 12)); // WHERE normas <= 12
     * </code>
     *
     * @param     mixed $normas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByNormas($normas = null, $comparison = null)
    {
        if (is_array($normas)) {
            $useMinMax = false;
            if (isset($normas['min'])) {
                $this->addUsingAlias(comlabPeer::NORMAS, $normas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normas['max'])) {
                $this->addUsingAlias(comlabPeer::NORMAS, $normas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::NORMAS, $normas, $comparison);
    }

    /**
     * Filter the query on the integracion column
     *
     * Example usage:
     * <code>
     * $query->filterByIntegracion(1234); // WHERE integracion = 1234
     * $query->filterByIntegracion(array(12, 34)); // WHERE integracion IN (12, 34)
     * $query->filterByIntegracion(array('min' => 12)); // WHERE integracion >= 12
     * $query->filterByIntegracion(array('max' => 12)); // WHERE integracion <= 12
     * </code>
     *
     * @param     mixed $integracion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByIntegracion($integracion = null, $comparison = null)
    {
        if (is_array($integracion)) {
            $useMinMax = false;
            if (isset($integracion['min'])) {
                $this->addUsingAlias(comlabPeer::INTEGRACION, $integracion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($integracion['max'])) {
                $this->addUsingAlias(comlabPeer::INTEGRACION, $integracion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::INTEGRACION, $integracion, $comparison);
    }

    /**
     * Filter the query on the innovacion column
     *
     * Example usage:
     * <code>
     * $query->filterByInnovacion(1234); // WHERE innovacion = 1234
     * $query->filterByInnovacion(array(12, 34)); // WHERE innovacion IN (12, 34)
     * $query->filterByInnovacion(array('min' => 12)); // WHERE innovacion >= 12
     * $query->filterByInnovacion(array('max' => 12)); // WHERE innovacion <= 12
     * </code>
     *
     * @param     mixed $innovacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByInnovacion($innovacion = null, $comparison = null)
    {
        if (is_array($innovacion)) {
            $useMinMax = false;
            if (isset($innovacion['min'])) {
                $this->addUsingAlias(comlabPeer::INNOVACION, $innovacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($innovacion['max'])) {
                $this->addUsingAlias(comlabPeer::INNOVACION, $innovacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::INNOVACION, $innovacion, $comparison);
    }

    /**
     * Filter the query on the negociacion column
     *
     * Example usage:
     * <code>
     * $query->filterByNegociacion(1234); // WHERE negociacion = 1234
     * $query->filterByNegociacion(array(12, 34)); // WHERE negociacion IN (12, 34)
     * $query->filterByNegociacion(array('min' => 12)); // WHERE negociacion >= 12
     * $query->filterByNegociacion(array('max' => 12)); // WHERE negociacion <= 12
     * </code>
     *
     * @param     mixed $negociacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByNegociacion($negociacion = null, $comparison = null)
    {
        if (is_array($negociacion)) {
            $useMinMax = false;
            if (isset($negociacion['min'])) {
                $this->addUsingAlias(comlabPeer::NEGOCIACION, $negociacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($negociacion['max'])) {
                $this->addUsingAlias(comlabPeer::NEGOCIACION, $negociacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::NEGOCIACION, $negociacion, $comparison);
    }

    /**
     * Filter the query on the abstraccion column
     *
     * Example usage:
     * <code>
     * $query->filterByAbstraccion(1234); // WHERE abstraccion = 1234
     * $query->filterByAbstraccion(array(12, 34)); // WHERE abstraccion IN (12, 34)
     * $query->filterByAbstraccion(array('min' => 12)); // WHERE abstraccion >= 12
     * $query->filterByAbstraccion(array('max' => 12)); // WHERE abstraccion <= 12
     * </code>
     *
     * @param     mixed $abstraccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByAbstraccion($abstraccion = null, $comparison = null)
    {
        if (is_array($abstraccion)) {
            $useMinMax = false;
            if (isset($abstraccion['min'])) {
                $this->addUsingAlias(comlabPeer::ABSTRACCION, $abstraccion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abstraccion['max'])) {
                $this->addUsingAlias(comlabPeer::ABSTRACCION, $abstraccion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::ABSTRACCION, $abstraccion, $comparison);
    }

    /**
     * Filter the query on the decisiones column
     *
     * Example usage:
     * <code>
     * $query->filterByDecisiones(1234); // WHERE decisiones = 1234
     * $query->filterByDecisiones(array(12, 34)); // WHERE decisiones IN (12, 34)
     * $query->filterByDecisiones(array('min' => 12)); // WHERE decisiones >= 12
     * $query->filterByDecisiones(array('max' => 12)); // WHERE decisiones <= 12
     * </code>
     *
     * @param     mixed $decisiones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByDecisiones($decisiones = null, $comparison = null)
    {
        if (is_array($decisiones)) {
            $useMinMax = false;
            if (isset($decisiones['min'])) {
                $this->addUsingAlias(comlabPeer::DECISIONES, $decisiones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($decisiones['max'])) {
                $this->addUsingAlias(comlabPeer::DECISIONES, $decisiones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::DECISIONES, $decisiones, $comparison);
    }

    /**
     * Filter the query on the adaptacion column
     *
     * Example usage:
     * <code>
     * $query->filterByAdaptacion(1234); // WHERE adaptacion = 1234
     * $query->filterByAdaptacion(array(12, 34)); // WHERE adaptacion IN (12, 34)
     * $query->filterByAdaptacion(array('min' => 12)); // WHERE adaptacion >= 12
     * $query->filterByAdaptacion(array('max' => 12)); // WHERE adaptacion <= 12
     * </code>
     *
     * @param     mixed $adaptacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByAdaptacion($adaptacion = null, $comparison = null)
    {
        if (is_array($adaptacion)) {
            $useMinMax = false;
            if (isset($adaptacion['min'])) {
                $this->addUsingAlias(comlabPeer::ADAPTACION, $adaptacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adaptacion['max'])) {
                $this->addUsingAlias(comlabPeer::ADAPTACION, $adaptacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::ADAPTACION, $adaptacion, $comparison);
    }

    /**
     * Filter the query on the otras column
     *
     * Example usage:
     * <code>
     * $query->filterByOtras(1234); // WHERE otras = 1234
     * $query->filterByOtras(array(12, 34)); // WHERE otras IN (12, 34)
     * $query->filterByOtras(array('min' => 12)); // WHERE otras >= 12
     * $query->filterByOtras(array('max' => 12)); // WHERE otras <= 12
     * </code>
     *
     * @param     mixed $otras The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByOtras($otras = null, $comparison = null)
    {
        if (is_array($otras)) {
            $useMinMax = false;
            if (isset($otras['min'])) {
                $this->addUsingAlias(comlabPeer::OTRAS, $otras['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otras['max'])) {
                $this->addUsingAlias(comlabPeer::OTRAS, $otras['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::OTRAS, $otras, $comparison);
    }

    /**
     * Filter the query on the desempeniolaboral column
     *
     * Example usage:
     * <code>
     * $query->filterByDesempeniolaboral(1234); // WHERE desempeniolaboral = 1234
     * $query->filterByDesempeniolaboral(array(12, 34)); // WHERE desempeniolaboral IN (12, 34)
     * $query->filterByDesempeniolaboral(array('min' => 12)); // WHERE desempeniolaboral >= 12
     * $query->filterByDesempeniolaboral(array('max' => 12)); // WHERE desempeniolaboral <= 12
     * </code>
     *
     * @param     mixed $desempeniolaboral The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByDesempeniolaboral($desempeniolaboral = null, $comparison = null)
    {
        if (is_array($desempeniolaboral)) {
            $useMinMax = false;
            if (isset($desempeniolaboral['min'])) {
                $this->addUsingAlias(comlabPeer::DESEMPENIOLABORAL, $desempeniolaboral['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($desempeniolaboral['max'])) {
                $this->addUsingAlias(comlabPeer::DESEMPENIOLABORAL, $desempeniolaboral['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(comlabPeer::DESEMPENIOLABORAL, $desempeniolaboral, $comparison);
    }

    /**
     * Filter the query on the mejoras column
     *
     * Example usage:
     * <code>
     * $query->filterByMejoras('fooValue');   // WHERE mejoras = 'fooValue'
     * $query->filterByMejoras('%fooValue%'); // WHERE mejoras LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mejoras The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByMejoras($mejoras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mejoras)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mejoras)) {
                $mejoras = str_replace('*', '%', $mejoras);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(comlabPeer::MEJORAS, $mejoras, $comparison);
    }

    /**
     * Filter the query on the sugerencias column
     *
     * Example usage:
     * <code>
     * $query->filterBySugerencias('fooValue');   // WHERE sugerencias = 'fooValue'
     * $query->filterBySugerencias('%fooValue%'); // WHERE sugerencias LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sugerencias The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterBySugerencias($sugerencias = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sugerencias)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sugerencias)) {
                $sugerencias = str_replace('*', '%', $sugerencias);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(comlabPeer::SUGERENCIAS, $sugerencias, $comparison);
    }

    /**
     * Filter the query on the nombres column
     *
     * Example usage:
     * <code>
     * $query->filterByNombres('fooValue');   // WHERE nombres = 'fooValue'
     * $query->filterByNombres('%fooValue%'); // WHERE nombres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByNombres($nombres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombres)) {
                $nombres = str_replace('*', '%', $nombres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(comlabPeer::NOMBRES, $nombres, $comparison);
    }

    /**
     * Filter the query on the puesto column
     *
     * Example usage:
     * <code>
     * $query->filterByPuesto('fooValue');   // WHERE puesto = 'fooValue'
     * $query->filterByPuesto('%fooValue%'); // WHERE puesto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $puesto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByPuesto($puesto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($puesto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $puesto)) {
                $puesto = str_replace('*', '%', $puesto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(comlabPeer::PUESTO, $puesto, $comparison);
    }

    /**
     * Filter the query on the correo column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreo('fooValue');   // WHERE correo = 'fooValue'
     * $query->filterByCorreo('%fooValue%'); // WHERE correo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function filterByCorreo($correo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $correo)) {
                $correo = str_replace('*', '%', $correo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(comlabPeer::CORREO, $correo, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 comlabQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(comlabPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(comlabPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   comlab $comlab Object to remove from the list of results
     *
     * @return comlabQuery The current query, for fluid interface
     */
    public function prune($comlab = null)
    {
        if ($comlab) {
            $this->addUsingAlias(comlabPeer::ID, $comlab->getIdEncuesta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
