<?php


/**
 * Base class that represents a query for the 'volantes' table.
 *
 *
 *
 * @method VolanteQuery orderByIdVolante($order = Criteria::ASC) Order by the id column
 * @method VolanteQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method VolanteQuery orderByCarrera($order = Criteria::ASC) Order by the carrera column
 * @method VolanteQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method VolanteQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method VolanteQuery orderByCargo($order = Criteria::ASC) Order by the cargo column
 * @method VolanteQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method VolanteQuery orderByFoto($order = Criteria::ASC) Order by the foto column
 * @method VolanteQuery orderByTelefono1($order = Criteria::ASC) Order by the telefono1 column
 * @method VolanteQuery orderByTelefono2($order = Criteria::ASC) Order by the telefono2 column
 * @method VolanteQuery orderByEstatus($order = Criteria::ASC) Order by the estatus column
 *
 * @method VolanteQuery groupByIdVolante() Group by the id column
 * @method VolanteQuery groupByIdUsuario() Group by the idusuario column
 * @method VolanteQuery groupByCarrera() Group by the carrera column
 * @method VolanteQuery groupByFecha() Group by the fecha column
 * @method VolanteQuery groupByDescripcion() Group by the descripcion column
 * @method VolanteQuery groupByCargo() Group by the cargo column
 * @method VolanteQuery groupByDireccion() Group by the direccion column
 * @method VolanteQuery groupByFoto() Group by the foto column
 * @method VolanteQuery groupByTelefono1() Group by the telefono1 column
 * @method VolanteQuery groupByTelefono2() Group by the telefono2 column
 * @method VolanteQuery groupByEstatus() Group by the estatus column
 *
 * @method VolanteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VolanteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VolanteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VolanteQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method VolanteQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method VolanteQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method VolanteQuery leftJoinCandidato($relationAlias = null) Adds a LEFT JOIN clause to the query using the Candidato relation
 * @method VolanteQuery rightJoinCandidato($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Candidato relation
 * @method VolanteQuery innerJoinCandidato($relationAlias = null) Adds a INNER JOIN clause to the query using the Candidato relation
 *
 * @method Volante findOne(PropelPDO $con = null) Return the first Volante matching the query
 * @method Volante findOneOrCreate(PropelPDO $con = null) Return the first Volante matching the query, or a new Volante object populated from the query conditions when no match is found
 *
 * @method Volante findOneByIdUsuario(int $idusuario) Return the first Volante filtered by the idusuario column
 * @method Volante findOneByCarrera(int $carrera) Return the first Volante filtered by the carrera column
 * @method Volante findOneByFecha(string $fecha) Return the first Volante filtered by the fecha column
 * @method Volante findOneByDescripcion(string $descripcion) Return the first Volante filtered by the descripcion column
 * @method Volante findOneByCargo(string $cargo) Return the first Volante filtered by the cargo column
 * @method Volante findOneByDireccion(string $direccion) Return the first Volante filtered by the direccion column
 * @method Volante findOneByFoto(string $foto) Return the first Volante filtered by the foto column
 * @method Volante findOneByTelefono1(string $telefono1) Return the first Volante filtered by the telefono1 column
 * @method Volante findOneByTelefono2(string $telefono2) Return the first Volante filtered by the telefono2 column
 * @method Volante findOneByEstatus(int $estatus) Return the first Volante filtered by the estatus column
 *
 * @method array findByIdVolante(int $id) Return Volante objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Volante objects filtered by the idusuario column
 * @method array findByCarrera(int $carrera) Return Volante objects filtered by the carrera column
 * @method array findByFecha(string $fecha) Return Volante objects filtered by the fecha column
 * @method array findByDescripcion(string $descripcion) Return Volante objects filtered by the descripcion column
 * @method array findByCargo(string $cargo) Return Volante objects filtered by the cargo column
 * @method array findByDireccion(string $direccion) Return Volante objects filtered by the direccion column
 * @method array findByFoto(string $foto) Return Volante objects filtered by the foto column
 * @method array findByTelefono1(string $telefono1) Return Volante objects filtered by the telefono1 column
 * @method array findByTelefono2(string $telefono2) Return Volante objects filtered by the telefono2 column
 * @method array findByEstatus(int $estatus) Return Volante objects filtered by the estatus column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseVolanteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVolanteQuery object.
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
            $modelName = 'Volante';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VolanteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VolanteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VolanteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VolanteQuery) {
            return $criteria;
        }
        $query = new VolanteQuery(null, null, $modelAlias);

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
     * @return   Volante|Volante[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VolantePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VolantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Volante A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdVolante($key, $con = null)
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
     * @return                 Volante A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `carrera`, `fecha`, `descripcion`, `cargo`, `direccion`, `foto`, `telefono1`, `telefono2`, `estatus` FROM `volantes` WHERE `id` = :p0';
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
            $obj = new Volante();
            $obj->hydrate($row);
            VolantePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Volante|Volante[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Volante[]|mixed the list of results, formatted by the current formatter
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
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VolantePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VolantePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVolante(1234); // WHERE id = 1234
     * $query->filterByIdVolante(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdVolante(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdVolante(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idVolante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByIdVolante($idVolante = null, $comparison = null)
    {
        if (is_array($idVolante)) {
            $useMinMax = false;
            if (isset($idVolante['min'])) {
                $this->addUsingAlias(VolantePeer::ID, $idVolante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVolante['max'])) {
                $this->addUsingAlias(VolantePeer::ID, $idVolante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolantePeer::ID, $idVolante, $comparison);
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
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(VolantePeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(VolantePeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolantePeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the carrera column
     *
     * @param     mixed $carrera The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByCarrera($carrera = null, $comparison = null)
    {
        if (is_scalar($carrera)) {
            $carrera = VolantePeer::getSqlValueForEnum(VolantePeer::CARRERA, $carrera);
        } elseif (is_array($carrera)) {
            $convertedValues = array();
            foreach ($carrera as $value) {
                $convertedValues[] = VolantePeer::getSqlValueForEnum(VolantePeer::CARRERA, $value);
            }
            $carrera = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolantePeer::CARRERA, $carrera, $comparison);
    }

    /**
     * Filter the query on the fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFecha('2011-03-14'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha('now'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha(array('max' => 'yesterday')); // WHERE fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $fecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByFecha($fecha = null, $comparison = null)
    {
        if (is_array($fecha)) {
            $useMinMax = false;
            if (isset($fecha['min'])) {
                $this->addUsingAlias(VolantePeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecha['max'])) {
                $this->addUsingAlias(VolantePeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolantePeer::FECHA, $fecha, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VolantePeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the cargo column
     *
     * Example usage:
     * <code>
     * $query->filterByCargo('fooValue');   // WHERE cargo = 'fooValue'
     * $query->filterByCargo('%fooValue%'); // WHERE cargo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cargo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByCargo($cargo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cargo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cargo)) {
                $cargo = str_replace('*', '%', $cargo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VolantePeer::CARGO, $cargo, $comparison);
    }

    /**
     * Filter the query on the direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccion('fooValue');   // WHERE direccion = 'fooValue'
     * $query->filterByDireccion('%fooValue%'); // WHERE direccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $direccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByDireccion($direccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($direccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $direccion)) {
                $direccion = str_replace('*', '%', $direccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VolantePeer::DIRECCION, $direccion, $comparison);
    }

    /**
     * Filter the query on the foto column
     *
     * Example usage:
     * <code>
     * $query->filterByFoto('fooValue');   // WHERE foto = 'fooValue'
     * $query->filterByFoto('%fooValue%'); // WHERE foto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByFoto($foto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foto)) {
                $foto = str_replace('*', '%', $foto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VolantePeer::FOTO, $foto, $comparison);
    }

    /**
     * Filter the query on the telefono1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono1('fooValue');   // WHERE telefono1 = 'fooValue'
     * $query->filterByTelefono1('%fooValue%'); // WHERE telefono1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByTelefono1($telefono1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono1)) {
                $telefono1 = str_replace('*', '%', $telefono1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VolantePeer::TELEFONO1, $telefono1, $comparison);
    }

    /**
     * Filter the query on the telefono2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono2('fooValue');   // WHERE telefono2 = 'fooValue'
     * $query->filterByTelefono2('%fooValue%'); // WHERE telefono2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function filterByTelefono2($telefono2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono2)) {
                $telefono2 = str_replace('*', '%', $telefono2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VolantePeer::TELEFONO2, $telefono2, $comparison);
    }

    /**
     * Filter the query on the estatus column
     *
     * @param     mixed $estatus The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VolanteQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByEstatus($estatus = null, $comparison = null)
    {
        if (is_scalar($estatus)) {
            $estatus = VolantePeer::getSqlValueForEnum(VolantePeer::ESTATUS, $estatus);
        } elseif (is_array($estatus)) {
            $convertedValues = array();
            foreach ($estatus as $value) {
                $convertedValues[] = VolantePeer::getSqlValueForEnum(VolantePeer::ESTATUS, $value);
            }
            $estatus = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VolantePeer::ESTATUS, $estatus, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(VolantePeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VolantePeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return VolanteQuery The current query, for fluid interface
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
     * Filter the query by a related Candidato object
     *
     * @param   Candidato|PropelObjectCollection $candidato  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VolanteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCandidato($candidato, $comparison = null)
    {
        if ($candidato instanceof Candidato) {
            return $this
                ->addUsingAlias(VolantePeer::ID, $candidato->getIdVolante(), $comparison);
        } elseif ($candidato instanceof PropelObjectCollection) {
            return $this
                ->useCandidatoQuery()
                ->filterByPrimaryKeys($candidato->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCandidato() only accepts arguments of type Candidato or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Candidato relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function joinCandidato($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Candidato');

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
            $this->addJoinObject($join, 'Candidato');
        }

        return $this;
    }

    /**
     * Use the Candidato relation Candidato object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CandidatoQuery A secondary query class using the current class as primary query
     */
    public function useCandidatoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCandidato($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Candidato', 'CandidatoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Volante $volante Object to remove from the list of results
     *
     * @return VolanteQuery The current query, for fluid interface
     */
    public function prune($volante = null)
    {
        if ($volante) {
            $this->addUsingAlias(VolantePeer::ID, $volante->getIdVolante(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
