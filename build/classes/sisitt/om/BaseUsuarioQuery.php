<?php


/**
 * Base class that represents a query for the 'usuario' table.
 *
 *
 *
 * @method UsuarioQuery orderByIdUsuario($order = Criteria::ASC) Order by the id column
 * @method UsuarioQuery orderByMatricula($order = Criteria::ASC) Order by the matricula column
 * @method UsuarioQuery orderByCorreo($order = Criteria::ASC) Order by the correo column
 * @method UsuarioQuery orderByContrasena($order = Criteria::ASC) Order by the contrasena column
 * @method UsuarioQuery orderByNombres($order = Criteria::ASC) Order by the nombres column
 * @method UsuarioQuery orderByApellidoPaterno($order = Criteria::ASC) Order by the apellidop column
 * @method UsuarioQuery orderByApellidoMaterno($order = Criteria::ASC) Order by the apellidom column
 * @method UsuarioQuery orderByCurp($order = Criteria::ASC) Order by the curp column
 * @method UsuarioQuery orderByRfc($order = Criteria::ASC) Order by the rfc column
 * @method UsuarioQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method UsuarioQuery orderByPlanId($order = Criteria::ASC) Order by the plan_id column
 * @method UsuarioQuery orderByContactoId($order = Criteria::ASC) Order by the contacto_id column
 * @method UsuarioQuery orderByEstatus($order = Criteria::ASC) Order by the estatus column
 * @method UsuarioQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method UsuarioQuery orderByGenero($order = Criteria::ASC) Order by the genero column
 * @method UsuarioQuery orderByNacimiento($order = Criteria::ASC) Order by the nacimiento column
 * @method UsuarioQuery orderByFoto($order = Criteria::ASC) Order by the foto column
 *
 * @method UsuarioQuery groupByIdUsuario() Group by the id column
 * @method UsuarioQuery groupByMatricula() Group by the matricula column
 * @method UsuarioQuery groupByCorreo() Group by the correo column
 * @method UsuarioQuery groupByContrasena() Group by the contrasena column
 * @method UsuarioQuery groupByNombres() Group by the nombres column
 * @method UsuarioQuery groupByApellidoPaterno() Group by the apellidop column
 * @method UsuarioQuery groupByApellidoMaterno() Group by the apellidom column
 * @method UsuarioQuery groupByCurp() Group by the curp column
 * @method UsuarioQuery groupByRfc() Group by the rfc column
 * @method UsuarioQuery groupByTelefono() Group by the telefono column
 * @method UsuarioQuery groupByPlanId() Group by the plan_id column
 * @method UsuarioQuery groupByContactoId() Group by the contacto_id column
 * @method UsuarioQuery groupByEstatus() Group by the estatus column
 * @method UsuarioQuery groupByTipo() Group by the tipo column
 * @method UsuarioQuery groupByGenero() Group by the genero column
 * @method UsuarioQuery groupByNacimiento() Group by the nacimiento column
 * @method UsuarioQuery groupByFoto() Group by the foto column
 *
 * @method UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuarioQuery leftJoinPlanEstudio($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanEstudio relation
 * @method UsuarioQuery rightJoinPlanEstudio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanEstudio relation
 * @method UsuarioQuery innerJoinPlanEstudio($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanEstudio relation
 *
 * @method UsuarioQuery leftJoinPermiso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Permiso relation
 * @method UsuarioQuery rightJoinPermiso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Permiso relation
 * @method UsuarioQuery innerJoinPermiso($relationAlias = null) Adds a INNER JOIN clause to the query using the Permiso relation
 *
 * @method UsuarioQuery leftJoinDatgen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Datgen relation
 * @method UsuarioQuery rightJoinDatgen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Datgen relation
 * @method UsuarioQuery innerJoinDatgen($relationAlias = null) Adds a INNER JOIN clause to the query using the Datgen relation
 *
 * @method UsuarioQuery leftJoinUbilab($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ubilab relation
 * @method UsuarioQuery rightJoinUbilab($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ubilab relation
 * @method UsuarioQuery innerJoinUbilab($relationAlias = null) Adds a INNER JOIN clause to the query using the Ubilab relation
 *
 * @method UsuarioQuery leftJoinNivjer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Nivjer relation
 * @method UsuarioQuery rightJoinNivjer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Nivjer relation
 * @method UsuarioQuery innerJoinNivjer($relationAlias = null) Adds a INNER JOIN clause to the query using the Nivjer relation
 *
 * @method UsuarioQuery leftJoincomlab($relationAlias = null) Adds a LEFT JOIN clause to the query using the comlab relation
 * @method UsuarioQuery rightJoincomlab($relationAlias = null) Adds a RIGHT JOIN clause to the query using the comlab relation
 * @method UsuarioQuery innerJoincomlab($relationAlias = null) Adds a INNER JOIN clause to the query using the comlab relation
 *
 * @method UsuarioQuery leftJoinVolante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Volante relation
 * @method UsuarioQuery rightJoinVolante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Volante relation
 * @method UsuarioQuery innerJoinVolante($relationAlias = null) Adds a INNER JOIN clause to the query using the Volante relation
 *
 * @method UsuarioQuery leftJoinCurriculum($relationAlias = null) Adds a LEFT JOIN clause to the query using the Curriculum relation
 * @method UsuarioQuery rightJoinCurriculum($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Curriculum relation
 * @method UsuarioQuery innerJoinCurriculum($relationAlias = null) Adds a INNER JOIN clause to the query using the Curriculum relation
 *
 * @method UsuarioQuery leftJoinCandidato($relationAlias = null) Adds a LEFT JOIN clause to the query using the Candidato relation
 * @method UsuarioQuery rightJoinCandidato($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Candidato relation
 * @method UsuarioQuery innerJoinCandidato($relationAlias = null) Adds a INNER JOIN clause to the query using the Candidato relation
 *
 * @method Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method Usuario findOneByMatricula(string $matricula) Return the first Usuario filtered by the matricula column
 * @method Usuario findOneByCorreo(string $correo) Return the first Usuario filtered by the correo column
 * @method Usuario findOneByContrasena(string $contrasena) Return the first Usuario filtered by the contrasena column
 * @method Usuario findOneByNombres(string $nombres) Return the first Usuario filtered by the nombres column
 * @method Usuario findOneByApellidoPaterno(string $apellidop) Return the first Usuario filtered by the apellidop column
 * @method Usuario findOneByApellidoMaterno(string $apellidom) Return the first Usuario filtered by the apellidom column
 * @method Usuario findOneByCurp(string $curp) Return the first Usuario filtered by the curp column
 * @method Usuario findOneByRfc(string $rfc) Return the first Usuario filtered by the rfc column
 * @method Usuario findOneByTelefono(string $telefono) Return the first Usuario filtered by the telefono column
 * @method Usuario findOneByPlanId(int $plan_id) Return the first Usuario filtered by the plan_id column
 * @method Usuario findOneByContactoId(int $contacto_id) Return the first Usuario filtered by the contacto_id column
 * @method Usuario findOneByEstatus(int $estatus) Return the first Usuario filtered by the estatus column
 * @method Usuario findOneByTipo(int $tipo) Return the first Usuario filtered by the tipo column
 * @method Usuario findOneByGenero(int $genero) Return the first Usuario filtered by the genero column
 * @method Usuario findOneByNacimiento(string $nacimiento) Return the first Usuario filtered by the nacimiento column
 * @method Usuario findOneByFoto(string $foto) Return the first Usuario filtered by the foto column
 *
 * @method array findByIdUsuario(int $id) Return Usuario objects filtered by the id column
 * @method array findByMatricula(string $matricula) Return Usuario objects filtered by the matricula column
 * @method array findByCorreo(string $correo) Return Usuario objects filtered by the correo column
 * @method array findByContrasena(string $contrasena) Return Usuario objects filtered by the contrasena column
 * @method array findByNombres(string $nombres) Return Usuario objects filtered by the nombres column
 * @method array findByApellidoPaterno(string $apellidop) Return Usuario objects filtered by the apellidop column
 * @method array findByApellidoMaterno(string $apellidom) Return Usuario objects filtered by the apellidom column
 * @method array findByCurp(string $curp) Return Usuario objects filtered by the curp column
 * @method array findByRfc(string $rfc) Return Usuario objects filtered by the rfc column
 * @method array findByTelefono(string $telefono) Return Usuario objects filtered by the telefono column
 * @method array findByPlanId(int $plan_id) Return Usuario objects filtered by the plan_id column
 * @method array findByContactoId(int $contacto_id) Return Usuario objects filtered by the contacto_id column
 * @method array findByEstatus(int $estatus) Return Usuario objects filtered by the estatus column
 * @method array findByTipo(int $tipo) Return Usuario objects filtered by the tipo column
 * @method array findByGenero(int $genero) Return Usuario objects filtered by the genero column
 * @method array findByNacimiento(string $nacimiento) Return Usuario objects filtered by the nacimiento column
 * @method array findByFoto(string $foto) Return Usuario objects filtered by the foto column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioQuery object.
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
            $modelName = 'Usuario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioQuery) {
            return $criteria;
        }
        $query = new UsuarioQuery(null, null, $modelAlias);

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
     * @return   Usuario|Usuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdUsuario($key, $con = null)
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `matricula`, `correo`, `contrasena`, `nombres`, `apellidop`, `apellidom`, `curp`, `rfc`, `telefono`, `plan_id`, `contacto_id`, `estatus`, `tipo`, `genero`, `nacimiento`, `foto` FROM `usuario` WHERE `id` = :p0';
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
            $obj = new Usuario();
            $obj->hydrate($row);
            UsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuario|Usuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuario[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE id = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdUsuario(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(UsuarioPeer::ID, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(UsuarioPeer::ID, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ID, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the matricula column
     *
     * Example usage:
     * <code>
     * $query->filterByMatricula('fooValue');   // WHERE matricula = 'fooValue'
     * $query->filterByMatricula('%fooValue%'); // WHERE matricula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matricula The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByMatricula($matricula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matricula)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matricula)) {
                $matricula = str_replace('*', '%', $matricula);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::MATRICULA, $matricula, $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UsuarioPeer::CORREO, $correo, $comparison);
    }

    /**
     * Filter the query on the contrasena column
     *
     * Example usage:
     * <code>
     * $query->filterByContrasena('fooValue');   // WHERE contrasena = 'fooValue'
     * $query->filterByContrasena('%fooValue%'); // WHERE contrasena LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrasena The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByContrasena($contrasena = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrasena)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrasena)) {
                $contrasena = str_replace('*', '%', $contrasena);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::CONTRASENA, $contrasena, $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UsuarioPeer::NOMBRES, $nombres, $comparison);
    }

    /**
     * Filter the query on the apellidop column
     *
     * Example usage:
     * <code>
     * $query->filterByApellidoPaterno('fooValue');   // WHERE apellidop = 'fooValue'
     * $query->filterByApellidoPaterno('%fooValue%'); // WHERE apellidop LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellidoPaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByApellidoPaterno($apellidoPaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellidoPaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellidoPaterno)) {
                $apellidoPaterno = str_replace('*', '%', $apellidoPaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::APELLIDOP, $apellidoPaterno, $comparison);
    }

    /**
     * Filter the query on the apellidom column
     *
     * Example usage:
     * <code>
     * $query->filterByApellidoMaterno('fooValue');   // WHERE apellidom = 'fooValue'
     * $query->filterByApellidoMaterno('%fooValue%'); // WHERE apellidom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellidoMaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByApellidoMaterno($apellidoMaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellidoMaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellidoMaterno)) {
                $apellidoMaterno = str_replace('*', '%', $apellidoMaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::APELLIDOM, $apellidoMaterno, $comparison);
    }

    /**
     * Filter the query on the curp column
     *
     * Example usage:
     * <code>
     * $query->filterByCurp('fooValue');   // WHERE curp = 'fooValue'
     * $query->filterByCurp('%fooValue%'); // WHERE curp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $curp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByCurp($curp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($curp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $curp)) {
                $curp = str_replace('*', '%', $curp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::CURP, $curp, $comparison);
    }

    /**
     * Filter the query on the rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByRfc('fooValue');   // WHERE rfc = 'fooValue'
     * $query->filterByRfc('%fooValue%'); // WHERE rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByRfc($rfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rfc)) {
                $rfc = str_replace('*', '%', $rfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::RFC, $rfc, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the plan_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanId(1234); // WHERE plan_id = 1234
     * $query->filterByPlanId(array(12, 34)); // WHERE plan_id IN (12, 34)
     * $query->filterByPlanId(array('min' => 12)); // WHERE plan_id >= 12
     * $query->filterByPlanId(array('max' => 12)); // WHERE plan_id <= 12
     * </code>
     *
     * @see       filterByPlanEstudio()
     *
     * @param     mixed $planId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPlanId($planId = null, $comparison = null)
    {
        if (is_array($planId)) {
            $useMinMax = false;
            if (isset($planId['min'])) {
                $this->addUsingAlias(UsuarioPeer::PLAN_ID, $planId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planId['max'])) {
                $this->addUsingAlias(UsuarioPeer::PLAN_ID, $planId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::PLAN_ID, $planId, $comparison);
    }

    /**
     * Filter the query on the contacto_id column
     *
     * Example usage:
     * <code>
     * $query->filterByContactoId(1234); // WHERE contacto_id = 1234
     * $query->filterByContactoId(array(12, 34)); // WHERE contacto_id IN (12, 34)
     * $query->filterByContactoId(array('min' => 12)); // WHERE contacto_id >= 12
     * $query->filterByContactoId(array('max' => 12)); // WHERE contacto_id <= 12
     * </code>
     *
     * @param     mixed $contactoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByContactoId($contactoId = null, $comparison = null)
    {
        if (is_array($contactoId)) {
            $useMinMax = false;
            if (isset($contactoId['min'])) {
                $this->addUsingAlias(UsuarioPeer::CONTACTO_ID, $contactoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contactoId['max'])) {
                $this->addUsingAlias(UsuarioPeer::CONTACTO_ID, $contactoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::CONTACTO_ID, $contactoId, $comparison);
    }

    /**
     * Filter the query on the estatus column
     *
     * @param     mixed $estatus The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByEstatus($estatus = null, $comparison = null)
    {
        if (is_scalar($estatus)) {
            $estatus = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::ESTATUS, $estatus);
        } elseif (is_array($estatus)) {
            $convertedValues = array();
            foreach ($estatus as $value) {
                $convertedValues[] = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::ESTATUS, $value);
            }
            $estatus = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ESTATUS, $estatus, $comparison);
    }

    /**
     * Filter the query on the tipo column
     *
     * @param     mixed $tipo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByTipo($tipo = null, $comparison = null)
    {
        if (is_scalar($tipo)) {
            $tipo = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::TIPO, $tipo);
        } elseif (is_array($tipo)) {
            $convertedValues = array();
            foreach ($tipo as $value) {
                $convertedValues[] = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::TIPO, $value);
            }
            $tipo = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::TIPO, $tipo, $comparison);
    }

    /**
     * Filter the query on the genero column
     *
     * @param     mixed $genero The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByGenero($genero = null, $comparison = null)
    {
        if (is_scalar($genero)) {
            $genero = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::GENERO, $genero);
        } elseif (is_array($genero)) {
            $convertedValues = array();
            foreach ($genero as $value) {
                $convertedValues[] = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::GENERO, $value);
            }
            $genero = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::GENERO, $genero, $comparison);
    }

    /**
     * Filter the query on the nacimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByNacimiento('2011-03-14'); // WHERE nacimiento = '2011-03-14'
     * $query->filterByNacimiento('now'); // WHERE nacimiento = '2011-03-14'
     * $query->filterByNacimiento(array('max' => 'yesterday')); // WHERE nacimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $nacimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByNacimiento($nacimiento = null, $comparison = null)
    {
        if (is_array($nacimiento)) {
            $useMinMax = false;
            if (isset($nacimiento['min'])) {
                $this->addUsingAlias(UsuarioPeer::NACIMIENTO, $nacimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nacimiento['max'])) {
                $this->addUsingAlias(UsuarioPeer::NACIMIENTO, $nacimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::NACIMIENTO, $nacimiento, $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UsuarioPeer::FOTO, $foto, $comparison);
    }

    /**
     * Filter the query by a related PlanEstudio object
     *
     * @param   PlanEstudio|PropelObjectCollection $planEstudio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanEstudio($planEstudio, $comparison = null)
    {
        if ($planEstudio instanceof PlanEstudio) {
            return $this
                ->addUsingAlias(UsuarioPeer::PLAN_ID, $planEstudio->getIdPlanEstudio(), $comparison);
        } elseif ($planEstudio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioPeer::PLAN_ID, $planEstudio->toKeyValue('PrimaryKey', 'IdPlanEstudio'), $comparison);
        } else {
            throw new PropelException('filterByPlanEstudio() only accepts arguments of type PlanEstudio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanEstudio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinPlanEstudio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanEstudio');

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
            $this->addJoinObject($join, 'PlanEstudio');
        }

        return $this;
    }

    /**
     * Use the PlanEstudio relation PlanEstudio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanEstudioQuery A secondary query class using the current class as primary query
     */
    public function usePlanEstudioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPlanEstudio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanEstudio', 'PlanEstudioQuery');
    }

    /**
     * Filter the query by a related Permiso object
     *
     * @param   Permiso|PropelObjectCollection $permiso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPermiso($permiso, $comparison = null)
    {
        if ($permiso instanceof Permiso) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $permiso->getIdUsuario(), $comparison);
        } elseif ($permiso instanceof PropelObjectCollection) {
            return $this
                ->usePermisoQuery()
                ->filterByPrimaryKeys($permiso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPermiso() only accepts arguments of type Permiso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Permiso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinPermiso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Permiso');

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
            $this->addJoinObject($join, 'Permiso');
        }

        return $this;
    }

    /**
     * Use the Permiso relation Permiso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PermisoQuery A secondary query class using the current class as primary query
     */
    public function usePermisoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPermiso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Permiso', 'PermisoQuery');
    }

    /**
     * Filter the query by a related Datgen object
     *
     * @param   Datgen|PropelObjectCollection $datgen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDatgen($datgen, $comparison = null)
    {
        if ($datgen instanceof Datgen) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $datgen->getIdUsuario(), $comparison);
        } elseif ($datgen instanceof PropelObjectCollection) {
            return $this
                ->useDatgenQuery()
                ->filterByPrimaryKeys($datgen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDatgen() only accepts arguments of type Datgen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Datgen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinDatgen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Datgen');

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
            $this->addJoinObject($join, 'Datgen');
        }

        return $this;
    }

    /**
     * Use the Datgen relation Datgen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DatgenQuery A secondary query class using the current class as primary query
     */
    public function useDatgenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDatgen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Datgen', 'DatgenQuery');
    }

    /**
     * Filter the query by a related Ubilab object
     *
     * @param   Ubilab|PropelObjectCollection $ubilab  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUbilab($ubilab, $comparison = null)
    {
        if ($ubilab instanceof Ubilab) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $ubilab->getIdUsuario(), $comparison);
        } elseif ($ubilab instanceof PropelObjectCollection) {
            return $this
                ->useUbilabQuery()
                ->filterByPrimaryKeys($ubilab->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUbilab() only accepts arguments of type Ubilab or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ubilab relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinUbilab($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ubilab');

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
            $this->addJoinObject($join, 'Ubilab');
        }

        return $this;
    }

    /**
     * Use the Ubilab relation Ubilab object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UbilabQuery A secondary query class using the current class as primary query
     */
    public function useUbilabQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUbilab($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ubilab', 'UbilabQuery');
    }

    /**
     * Filter the query by a related Nivjer object
     *
     * @param   Nivjer|PropelObjectCollection $nivjer  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNivjer($nivjer, $comparison = null)
    {
        if ($nivjer instanceof Nivjer) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $nivjer->getIdUsuario(), $comparison);
        } elseif ($nivjer instanceof PropelObjectCollection) {
            return $this
                ->useNivjerQuery()
                ->filterByPrimaryKeys($nivjer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNivjer() only accepts arguments of type Nivjer or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Nivjer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinNivjer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Nivjer');

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
            $this->addJoinObject($join, 'Nivjer');
        }

        return $this;
    }

    /**
     * Use the Nivjer relation Nivjer object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NivjerQuery A secondary query class using the current class as primary query
     */
    public function useNivjerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNivjer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Nivjer', 'NivjerQuery');
    }

    /**
     * Filter the query by a related comlab object
     *
     * @param   comlab|PropelObjectCollection $comlab  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBycomlab($comlab, $comparison = null)
    {
        if ($comlab instanceof comlab) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $comlab->getIdUsuario(), $comparison);
        } elseif ($comlab instanceof PropelObjectCollection) {
            return $this
                ->usecomlabQuery()
                ->filterByPrimaryKeys($comlab->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBycomlab() only accepts arguments of type comlab or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the comlab relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joincomlab($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('comlab');

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
            $this->addJoinObject($join, 'comlab');
        }

        return $this;
    }

    /**
     * Use the comlab relation comlab object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   comlabQuery A secondary query class using the current class as primary query
     */
    public function usecomlabQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joincomlab($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'comlab', 'comlabQuery');
    }

    /**
     * Filter the query by a related Volante object
     *
     * @param   Volante|PropelObjectCollection $volante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVolante($volante, $comparison = null)
    {
        if ($volante instanceof Volante) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $volante->getIdUsuario(), $comparison);
        } elseif ($volante instanceof PropelObjectCollection) {
            return $this
                ->useVolanteQuery()
                ->filterByPrimaryKeys($volante->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVolante() only accepts arguments of type Volante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Volante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinVolante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Volante');

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
            $this->addJoinObject($join, 'Volante');
        }

        return $this;
    }

    /**
     * Use the Volante relation Volante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VolanteQuery A secondary query class using the current class as primary query
     */
    public function useVolanteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVolante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Volante', 'VolanteQuery');
    }

    /**
     * Filter the query by a related Curriculum object
     *
     * @param   Curriculum|PropelObjectCollection $curriculum  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCurriculum($curriculum, $comparison = null)
    {
        if ($curriculum instanceof Curriculum) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $curriculum->getIdUsuario(), $comparison);
        } elseif ($curriculum instanceof PropelObjectCollection) {
            return $this
                ->useCurriculumQuery()
                ->filterByPrimaryKeys($curriculum->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCurriculum() only accepts arguments of type Curriculum or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Curriculum relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinCurriculum($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Curriculum');

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
            $this->addJoinObject($join, 'Curriculum');
        }

        return $this;
    }

    /**
     * Use the Curriculum relation Curriculum object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CurriculumQuery A secondary query class using the current class as primary query
     */
    public function useCurriculumQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCurriculum($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Curriculum', 'CurriculumQuery');
    }

    /**
     * Filter the query by a related Candidato object
     *
     * @param   Candidato|PropelObjectCollection $candidato  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCandidato($candidato, $comparison = null)
    {
        if ($candidato instanceof Candidato) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $candidato->getIdUsuario(), $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * @param   Usuario $usuario Object to remove from the list of results
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function prune($usuario = null)
    {
        if ($usuario) {
            $this->addUsingAlias(UsuarioPeer::ID, $usuario->getIdUsuario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
