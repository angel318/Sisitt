<?php


/**
 * Base class that represents a query for the 'encuempr_datgen' table.
 *
 *
 *
 * @method DatgenQuery orderByIdEncuesta($order = Criteria::ASC) Order by the id column
 * @method DatgenQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method DatgenQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method DatgenQuery orderByDireccion($order = Criteria::ASC) Order by the direccion column
 * @method DatgenQuery orderByCiudad($order = Criteria::ASC) Order by the ciudad column
 * @method DatgenQuery orderByCorreo($order = Criteria::ASC) Order by the correo column
 * @method DatgenQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method DatgenQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method DatgenQuery orderByTamano($order = Criteria::ASC) Order by the tamano column
 * @method DatgenQuery orderByActividad1($order = Criteria::ASC) Order by the actividad1 column
 * @method DatgenQuery orderByActividad2($order = Criteria::ASC) Order by the actividad2 column
 * @method DatgenQuery orderByActividad3($order = Criteria::ASC) Order by the actividad3 column
 * @method DatgenQuery orderByActividad4($order = Criteria::ASC) Order by the actividad4 column
 * @method DatgenQuery orderByActividad5($order = Criteria::ASC) Order by the actividad5 column
 * @method DatgenQuery orderByActividad6($order = Criteria::ASC) Order by the actividad6 column
 * @method DatgenQuery orderByActividad7($order = Criteria::ASC) Order by the actividad7 column
 * @method DatgenQuery orderByActividad8($order = Criteria::ASC) Order by the actividad8 column
 * @method DatgenQuery orderByActividad9($order = Criteria::ASC) Order by the actividad9 column
 * @method DatgenQuery orderByActividad10($order = Criteria::ASC) Order by the actividad10 column
 * @method DatgenQuery orderByActividad11($order = Criteria::ASC) Order by the actividad11 column
 * @method DatgenQuery orderByActividad12($order = Criteria::ASC) Order by the actividad12 column
 * @method DatgenQuery orderByActividad13($order = Criteria::ASC) Order by the actividad13 column
 * @method DatgenQuery orderByActividad14($order = Criteria::ASC) Order by the actividad14 column
 * @method DatgenQuery orderByActividad15($order = Criteria::ASC) Order by the actividad15 column
 * @method DatgenQuery orderByActividad16($order = Criteria::ASC) Order by the actividad16 column
 * @method DatgenQuery orderByActividad17($order = Criteria::ASC) Order by the actividad17 column
 * @method DatgenQuery orderByActividad18($order = Criteria::ASC) Order by the actividad18 column
 * @method DatgenQuery orderByActividad19($order = Criteria::ASC) Order by the actividad19 column
 * @method DatgenQuery orderByActividad20($order = Criteria::ASC) Order by the actividad20 column
 *
 * @method DatgenQuery groupByIdEncuesta() Group by the id column
 * @method DatgenQuery groupByIdUsuario() Group by the idusuario column
 * @method DatgenQuery groupByNombre() Group by the nombre column
 * @method DatgenQuery groupByDireccion() Group by the direccion column
 * @method DatgenQuery groupByCiudad() Group by the ciudad column
 * @method DatgenQuery groupByCorreo() Group by the correo column
 * @method DatgenQuery groupByTelefono() Group by the telefono column
 * @method DatgenQuery groupByTipo() Group by the tipo column
 * @method DatgenQuery groupByTamano() Group by the tamano column
 * @method DatgenQuery groupByActividad1() Group by the actividad1 column
 * @method DatgenQuery groupByActividad2() Group by the actividad2 column
 * @method DatgenQuery groupByActividad3() Group by the actividad3 column
 * @method DatgenQuery groupByActividad4() Group by the actividad4 column
 * @method DatgenQuery groupByActividad5() Group by the actividad5 column
 * @method DatgenQuery groupByActividad6() Group by the actividad6 column
 * @method DatgenQuery groupByActividad7() Group by the actividad7 column
 * @method DatgenQuery groupByActividad8() Group by the actividad8 column
 * @method DatgenQuery groupByActividad9() Group by the actividad9 column
 * @method DatgenQuery groupByActividad10() Group by the actividad10 column
 * @method DatgenQuery groupByActividad11() Group by the actividad11 column
 * @method DatgenQuery groupByActividad12() Group by the actividad12 column
 * @method DatgenQuery groupByActividad13() Group by the actividad13 column
 * @method DatgenQuery groupByActividad14() Group by the actividad14 column
 * @method DatgenQuery groupByActividad15() Group by the actividad15 column
 * @method DatgenQuery groupByActividad16() Group by the actividad16 column
 * @method DatgenQuery groupByActividad17() Group by the actividad17 column
 * @method DatgenQuery groupByActividad18() Group by the actividad18 column
 * @method DatgenQuery groupByActividad19() Group by the actividad19 column
 * @method DatgenQuery groupByActividad20() Group by the actividad20 column
 *
 * @method DatgenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DatgenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DatgenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DatgenQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method DatgenQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method DatgenQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Datgen findOne(PropelPDO $con = null) Return the first Datgen matching the query
 * @method Datgen findOneOrCreate(PropelPDO $con = null) Return the first Datgen matching the query, or a new Datgen object populated from the query conditions when no match is found
 *
 * @method Datgen findOneByIdUsuario(int $idusuario) Return the first Datgen filtered by the idusuario column
 * @method Datgen findOneByNombre(string $nombre) Return the first Datgen filtered by the nombre column
 * @method Datgen findOneByDireccion(string $direccion) Return the first Datgen filtered by the direccion column
 * @method Datgen findOneByCiudad(string $ciudad) Return the first Datgen filtered by the ciudad column
 * @method Datgen findOneByCorreo(string $correo) Return the first Datgen filtered by the correo column
 * @method Datgen findOneByTelefono(string $telefono) Return the first Datgen filtered by the telefono column
 * @method Datgen findOneByTipo(int $tipo) Return the first Datgen filtered by the tipo column
 * @method Datgen findOneByTamano(int $tamano) Return the first Datgen filtered by the tamano column
 * @method Datgen findOneByActividad1(boolean $actividad1) Return the first Datgen filtered by the actividad1 column
 * @method Datgen findOneByActividad2(boolean $actividad2) Return the first Datgen filtered by the actividad2 column
 * @method Datgen findOneByActividad3(boolean $actividad3) Return the first Datgen filtered by the actividad3 column
 * @method Datgen findOneByActividad4(boolean $actividad4) Return the first Datgen filtered by the actividad4 column
 * @method Datgen findOneByActividad5(boolean $actividad5) Return the first Datgen filtered by the actividad5 column
 * @method Datgen findOneByActividad6(boolean $actividad6) Return the first Datgen filtered by the actividad6 column
 * @method Datgen findOneByActividad7(boolean $actividad7) Return the first Datgen filtered by the actividad7 column
 * @method Datgen findOneByActividad8(boolean $actividad8) Return the first Datgen filtered by the actividad8 column
 * @method Datgen findOneByActividad9(boolean $actividad9) Return the first Datgen filtered by the actividad9 column
 * @method Datgen findOneByActividad10(boolean $actividad10) Return the first Datgen filtered by the actividad10 column
 * @method Datgen findOneByActividad11(boolean $actividad11) Return the first Datgen filtered by the actividad11 column
 * @method Datgen findOneByActividad12(boolean $actividad12) Return the first Datgen filtered by the actividad12 column
 * @method Datgen findOneByActividad13(boolean $actividad13) Return the first Datgen filtered by the actividad13 column
 * @method Datgen findOneByActividad14(boolean $actividad14) Return the first Datgen filtered by the actividad14 column
 * @method Datgen findOneByActividad15(boolean $actividad15) Return the first Datgen filtered by the actividad15 column
 * @method Datgen findOneByActividad16(boolean $actividad16) Return the first Datgen filtered by the actividad16 column
 * @method Datgen findOneByActividad17(boolean $actividad17) Return the first Datgen filtered by the actividad17 column
 * @method Datgen findOneByActividad18(boolean $actividad18) Return the first Datgen filtered by the actividad18 column
 * @method Datgen findOneByActividad19(boolean $actividad19) Return the first Datgen filtered by the actividad19 column
 * @method Datgen findOneByActividad20(string $actividad20) Return the first Datgen filtered by the actividad20 column
 *
 * @method array findByIdEncuesta(int $id) Return Datgen objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Datgen objects filtered by the idusuario column
 * @method array findByNombre(string $nombre) Return Datgen objects filtered by the nombre column
 * @method array findByDireccion(string $direccion) Return Datgen objects filtered by the direccion column
 * @method array findByCiudad(string $ciudad) Return Datgen objects filtered by the ciudad column
 * @method array findByCorreo(string $correo) Return Datgen objects filtered by the correo column
 * @method array findByTelefono(string $telefono) Return Datgen objects filtered by the telefono column
 * @method array findByTipo(int $tipo) Return Datgen objects filtered by the tipo column
 * @method array findByTamano(int $tamano) Return Datgen objects filtered by the tamano column
 * @method array findByActividad1(boolean $actividad1) Return Datgen objects filtered by the actividad1 column
 * @method array findByActividad2(boolean $actividad2) Return Datgen objects filtered by the actividad2 column
 * @method array findByActividad3(boolean $actividad3) Return Datgen objects filtered by the actividad3 column
 * @method array findByActividad4(boolean $actividad4) Return Datgen objects filtered by the actividad4 column
 * @method array findByActividad5(boolean $actividad5) Return Datgen objects filtered by the actividad5 column
 * @method array findByActividad6(boolean $actividad6) Return Datgen objects filtered by the actividad6 column
 * @method array findByActividad7(boolean $actividad7) Return Datgen objects filtered by the actividad7 column
 * @method array findByActividad8(boolean $actividad8) Return Datgen objects filtered by the actividad8 column
 * @method array findByActividad9(boolean $actividad9) Return Datgen objects filtered by the actividad9 column
 * @method array findByActividad10(boolean $actividad10) Return Datgen objects filtered by the actividad10 column
 * @method array findByActividad11(boolean $actividad11) Return Datgen objects filtered by the actividad11 column
 * @method array findByActividad12(boolean $actividad12) Return Datgen objects filtered by the actividad12 column
 * @method array findByActividad13(boolean $actividad13) Return Datgen objects filtered by the actividad13 column
 * @method array findByActividad14(boolean $actividad14) Return Datgen objects filtered by the actividad14 column
 * @method array findByActividad15(boolean $actividad15) Return Datgen objects filtered by the actividad15 column
 * @method array findByActividad16(boolean $actividad16) Return Datgen objects filtered by the actividad16 column
 * @method array findByActividad17(boolean $actividad17) Return Datgen objects filtered by the actividad17 column
 * @method array findByActividad18(boolean $actividad18) Return Datgen objects filtered by the actividad18 column
 * @method array findByActividad19(boolean $actividad19) Return Datgen objects filtered by the actividad19 column
 * @method array findByActividad20(string $actividad20) Return Datgen objects filtered by the actividad20 column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseDatgenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDatgenQuery object.
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
            $modelName = 'Datgen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DatgenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DatgenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DatgenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DatgenQuery) {
            return $criteria;
        }
        $query = new DatgenQuery(null, null, $modelAlias);

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
     * @return   Datgen|Datgen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DatgenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Datgen A model object, or null if the key is not found
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
     * @return                 Datgen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `nombre`, `direccion`, `ciudad`, `correo`, `telefono`, `tipo`, `tamano`, `actividad1`, `actividad2`, `actividad3`, `actividad4`, `actividad5`, `actividad6`, `actividad7`, `actividad8`, `actividad9`, `actividad10`, `actividad11`, `actividad12`, `actividad13`, `actividad14`, `actividad15`, `actividad16`, `actividad17`, `actividad18`, `actividad19`, `actividad20` FROM `encuempr_datgen` WHERE `id` = :p0';
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
            $obj = new Datgen();
            $obj->hydrate($row);
            DatgenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Datgen|Datgen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Datgen[]|mixed the list of results, formatted by the current formatter
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
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DatgenPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DatgenPeer::ID, $keys, Criteria::IN);
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
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByIdEncuesta($idEncuesta = null, $comparison = null)
    {
        if (is_array($idEncuesta)) {
            $useMinMax = false;
            if (isset($idEncuesta['min'])) {
                $this->addUsingAlias(DatgenPeer::ID, $idEncuesta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEncuesta['max'])) {
                $this->addUsingAlias(DatgenPeer::ID, $idEncuesta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatgenPeer::ID, $idEncuesta, $comparison);
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
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(DatgenPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(DatgenPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatgenPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatgenPeer::NOMBRE, $nombre, $comparison);
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
     * @return DatgenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DatgenPeer::DIRECCION, $direccion, $comparison);
    }

    /**
     * Filter the query on the ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByCiudad('fooValue');   // WHERE ciudad = 'fooValue'
     * $query->filterByCiudad('%fooValue%'); // WHERE ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ciudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByCiudad($ciudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ciudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ciudad)) {
                $ciudad = str_replace('*', '%', $ciudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatgenPeer::CIUDAD, $ciudad, $comparison);
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
     * @return DatgenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DatgenPeer::CORREO, $correo, $comparison);
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
     * @return DatgenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DatgenPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the tipo column
     *
     * @param     mixed $tipo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByTipo($tipo = null, $comparison = null)
    {
        if (is_scalar($tipo)) {
            $tipo = DatgenPeer::getSqlValueForEnum(DatgenPeer::TIPO, $tipo);
        } elseif (is_array($tipo)) {
            $convertedValues = array();
            foreach ($tipo as $value) {
                $convertedValues[] = DatgenPeer::getSqlValueForEnum(DatgenPeer::TIPO, $value);
            }
            $tipo = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatgenPeer::TIPO, $tipo, $comparison);
    }

    /**
     * Filter the query on the tamano column
     *
     * @param     mixed $tamano The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByTamano($tamano = null, $comparison = null)
    {
        if (is_scalar($tamano)) {
            $tamano = DatgenPeer::getSqlValueForEnum(DatgenPeer::TAMANO, $tamano);
        } elseif (is_array($tamano)) {
            $convertedValues = array();
            foreach ($tamano as $value) {
                $convertedValues[] = DatgenPeer::getSqlValueForEnum(DatgenPeer::TAMANO, $value);
            }
            $tamano = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DatgenPeer::TAMANO, $tamano, $comparison);
    }

    /**
     * Filter the query on the actividad1 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad1(true); // WHERE actividad1 = true
     * $query->filterByActividad1('yes'); // WHERE actividad1 = true
     * </code>
     *
     * @param     boolean|string $actividad1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad1($actividad1 = null, $comparison = null)
    {
        if (is_string($actividad1)) {
            $actividad1 = in_array(strtolower($actividad1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD1, $actividad1, $comparison);
    }

    /**
     * Filter the query on the actividad2 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad2(true); // WHERE actividad2 = true
     * $query->filterByActividad2('yes'); // WHERE actividad2 = true
     * </code>
     *
     * @param     boolean|string $actividad2 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad2($actividad2 = null, $comparison = null)
    {
        if (is_string($actividad2)) {
            $actividad2 = in_array(strtolower($actividad2), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD2, $actividad2, $comparison);
    }

    /**
     * Filter the query on the actividad3 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad3(true); // WHERE actividad3 = true
     * $query->filterByActividad3('yes'); // WHERE actividad3 = true
     * </code>
     *
     * @param     boolean|string $actividad3 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad3($actividad3 = null, $comparison = null)
    {
        if (is_string($actividad3)) {
            $actividad3 = in_array(strtolower($actividad3), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD3, $actividad3, $comparison);
    }

    /**
     * Filter the query on the actividad4 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad4(true); // WHERE actividad4 = true
     * $query->filterByActividad4('yes'); // WHERE actividad4 = true
     * </code>
     *
     * @param     boolean|string $actividad4 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad4($actividad4 = null, $comparison = null)
    {
        if (is_string($actividad4)) {
            $actividad4 = in_array(strtolower($actividad4), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD4, $actividad4, $comparison);
    }

    /**
     * Filter the query on the actividad5 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad5(true); // WHERE actividad5 = true
     * $query->filterByActividad5('yes'); // WHERE actividad5 = true
     * </code>
     *
     * @param     boolean|string $actividad5 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad5($actividad5 = null, $comparison = null)
    {
        if (is_string($actividad5)) {
            $actividad5 = in_array(strtolower($actividad5), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD5, $actividad5, $comparison);
    }

    /**
     * Filter the query on the actividad6 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad6(true); // WHERE actividad6 = true
     * $query->filterByActividad6('yes'); // WHERE actividad6 = true
     * </code>
     *
     * @param     boolean|string $actividad6 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad6($actividad6 = null, $comparison = null)
    {
        if (is_string($actividad6)) {
            $actividad6 = in_array(strtolower($actividad6), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD6, $actividad6, $comparison);
    }

    /**
     * Filter the query on the actividad7 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad7(true); // WHERE actividad7 = true
     * $query->filterByActividad7('yes'); // WHERE actividad7 = true
     * </code>
     *
     * @param     boolean|string $actividad7 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad7($actividad7 = null, $comparison = null)
    {
        if (is_string($actividad7)) {
            $actividad7 = in_array(strtolower($actividad7), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD7, $actividad7, $comparison);
    }

    /**
     * Filter the query on the actividad8 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad8(true); // WHERE actividad8 = true
     * $query->filterByActividad8('yes'); // WHERE actividad8 = true
     * </code>
     *
     * @param     boolean|string $actividad8 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad8($actividad8 = null, $comparison = null)
    {
        if (is_string($actividad8)) {
            $actividad8 = in_array(strtolower($actividad8), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD8, $actividad8, $comparison);
    }

    /**
     * Filter the query on the actividad9 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad9(true); // WHERE actividad9 = true
     * $query->filterByActividad9('yes'); // WHERE actividad9 = true
     * </code>
     *
     * @param     boolean|string $actividad9 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad9($actividad9 = null, $comparison = null)
    {
        if (is_string($actividad9)) {
            $actividad9 = in_array(strtolower($actividad9), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD9, $actividad9, $comparison);
    }

    /**
     * Filter the query on the actividad10 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad10(true); // WHERE actividad10 = true
     * $query->filterByActividad10('yes'); // WHERE actividad10 = true
     * </code>
     *
     * @param     boolean|string $actividad10 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad10($actividad10 = null, $comparison = null)
    {
        if (is_string($actividad10)) {
            $actividad10 = in_array(strtolower($actividad10), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD10, $actividad10, $comparison);
    }

    /**
     * Filter the query on the actividad11 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad11(true); // WHERE actividad11 = true
     * $query->filterByActividad11('yes'); // WHERE actividad11 = true
     * </code>
     *
     * @param     boolean|string $actividad11 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad11($actividad11 = null, $comparison = null)
    {
        if (is_string($actividad11)) {
            $actividad11 = in_array(strtolower($actividad11), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD11, $actividad11, $comparison);
    }

    /**
     * Filter the query on the actividad12 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad12(true); // WHERE actividad12 = true
     * $query->filterByActividad12('yes'); // WHERE actividad12 = true
     * </code>
     *
     * @param     boolean|string $actividad12 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad12($actividad12 = null, $comparison = null)
    {
        if (is_string($actividad12)) {
            $actividad12 = in_array(strtolower($actividad12), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD12, $actividad12, $comparison);
    }

    /**
     * Filter the query on the actividad13 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad13(true); // WHERE actividad13 = true
     * $query->filterByActividad13('yes'); // WHERE actividad13 = true
     * </code>
     *
     * @param     boolean|string $actividad13 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad13($actividad13 = null, $comparison = null)
    {
        if (is_string($actividad13)) {
            $actividad13 = in_array(strtolower($actividad13), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD13, $actividad13, $comparison);
    }

    /**
     * Filter the query on the actividad14 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad14(true); // WHERE actividad14 = true
     * $query->filterByActividad14('yes'); // WHERE actividad14 = true
     * </code>
     *
     * @param     boolean|string $actividad14 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad14($actividad14 = null, $comparison = null)
    {
        if (is_string($actividad14)) {
            $actividad14 = in_array(strtolower($actividad14), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD14, $actividad14, $comparison);
    }

    /**
     * Filter the query on the actividad15 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad15(true); // WHERE actividad15 = true
     * $query->filterByActividad15('yes'); // WHERE actividad15 = true
     * </code>
     *
     * @param     boolean|string $actividad15 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad15($actividad15 = null, $comparison = null)
    {
        if (is_string($actividad15)) {
            $actividad15 = in_array(strtolower($actividad15), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD15, $actividad15, $comparison);
    }

    /**
     * Filter the query on the actividad16 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad16(true); // WHERE actividad16 = true
     * $query->filterByActividad16('yes'); // WHERE actividad16 = true
     * </code>
     *
     * @param     boolean|string $actividad16 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad16($actividad16 = null, $comparison = null)
    {
        if (is_string($actividad16)) {
            $actividad16 = in_array(strtolower($actividad16), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD16, $actividad16, $comparison);
    }

    /**
     * Filter the query on the actividad17 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad17(true); // WHERE actividad17 = true
     * $query->filterByActividad17('yes'); // WHERE actividad17 = true
     * </code>
     *
     * @param     boolean|string $actividad17 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad17($actividad17 = null, $comparison = null)
    {
        if (is_string($actividad17)) {
            $actividad17 = in_array(strtolower($actividad17), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD17, $actividad17, $comparison);
    }

    /**
     * Filter the query on the actividad18 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad18(true); // WHERE actividad18 = true
     * $query->filterByActividad18('yes'); // WHERE actividad18 = true
     * </code>
     *
     * @param     boolean|string $actividad18 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad18($actividad18 = null, $comparison = null)
    {
        if (is_string($actividad18)) {
            $actividad18 = in_array(strtolower($actividad18), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD18, $actividad18, $comparison);
    }

    /**
     * Filter the query on the actividad19 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad19(true); // WHERE actividad19 = true
     * $query->filterByActividad19('yes'); // WHERE actividad19 = true
     * </code>
     *
     * @param     boolean|string $actividad19 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad19($actividad19 = null, $comparison = null)
    {
        if (is_string($actividad19)) {
            $actividad19 = in_array(strtolower($actividad19), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD19, $actividad19, $comparison);
    }

    /**
     * Filter the query on the actividad20 column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad20('fooValue');   // WHERE actividad20 = 'fooValue'
     * $query->filterByActividad20('%fooValue%'); // WHERE actividad20 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actividad20 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function filterByActividad20($actividad20 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actividad20)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actividad20)) {
                $actividad20 = str_replace('*', '%', $actividad20);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DatgenPeer::ACTIVIDAD20, $actividad20, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DatgenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(DatgenPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DatgenPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return DatgenQuery The current query, for fluid interface
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
     * @param   Datgen $datgen Object to remove from the list of results
     *
     * @return DatgenQuery The current query, for fluid interface
     */
    public function prune($datgen = null)
    {
        if ($datgen) {
            $this->addUsingAlias(DatgenPeer::ID, $datgen->getIdEncuesta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
