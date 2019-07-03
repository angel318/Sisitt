<?php


/**
 * Base class that represents a query for the 'encuempr_ubilab' table.
 *
 *
 *
 * @method UbilabQuery orderByIdEncuesta($order = Criteria::ASC) Order by the id column
 * @method UbilabQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method UbilabQuery orderByNumPro($order = Criteria::ASC) Order by the numpro column
 * @method UbilabQuery orderByNumEgre($order = Criteria::ASC) Order by the numegre column
 * @method UbilabQuery orderByCongruencia($order = Criteria::ASC) Order by the congruencia column
 * @method UbilabQuery orderByCarrera1($order = Criteria::ASC) Order by the carrera1 column
 * @method UbilabQuery orderByCarrera2($order = Criteria::ASC) Order by the carrera2 column
 * @method UbilabQuery orderByCarrera3($order = Criteria::ASC) Order by the carrera3 column
 * @method UbilabQuery orderByCarrera4($order = Criteria::ASC) Order by the carrera4 column
 * @method UbilabQuery orderByCarrera5($order = Criteria::ASC) Order by the carrera5 column
 * @method UbilabQuery orderByCarrera6($order = Criteria::ASC) Order by the carrera6 column
 * @method UbilabQuery orderByRequisito1($order = Criteria::ASC) Order by the requisito1 column
 * @method UbilabQuery orderByRequisito2($order = Criteria::ASC) Order by the requisito2 column
 * @method UbilabQuery orderByRequisito3($order = Criteria::ASC) Order by the requisito3 column
 * @method UbilabQuery orderByRequisito4($order = Criteria::ASC) Order by the requisito4 column
 * @method UbilabQuery orderByRequisito5($order = Criteria::ASC) Order by the requisito5 column
 * @method UbilabQuery orderByRequisito6($order = Criteria::ASC) Order by the requisito6 column
 * @method UbilabQuery orderByRequisito7($order = Criteria::ASC) Order by the requisito7 column
 * @method UbilabQuery orderByRequisito8($order = Criteria::ASC) Order by the requisito8 column
 * @method UbilabQuery orderByRequisito9($order = Criteria::ASC) Order by the requisito9 column
 *
 * @method UbilabQuery groupByIdEncuesta() Group by the id column
 * @method UbilabQuery groupByIdUsuario() Group by the idusuario column
 * @method UbilabQuery groupByNumPro() Group by the numpro column
 * @method UbilabQuery groupByNumEgre() Group by the numegre column
 * @method UbilabQuery groupByCongruencia() Group by the congruencia column
 * @method UbilabQuery groupByCarrera1() Group by the carrera1 column
 * @method UbilabQuery groupByCarrera2() Group by the carrera2 column
 * @method UbilabQuery groupByCarrera3() Group by the carrera3 column
 * @method UbilabQuery groupByCarrera4() Group by the carrera4 column
 * @method UbilabQuery groupByCarrera5() Group by the carrera5 column
 * @method UbilabQuery groupByCarrera6() Group by the carrera6 column
 * @method UbilabQuery groupByRequisito1() Group by the requisito1 column
 * @method UbilabQuery groupByRequisito2() Group by the requisito2 column
 * @method UbilabQuery groupByRequisito3() Group by the requisito3 column
 * @method UbilabQuery groupByRequisito4() Group by the requisito4 column
 * @method UbilabQuery groupByRequisito5() Group by the requisito5 column
 * @method UbilabQuery groupByRequisito6() Group by the requisito6 column
 * @method UbilabQuery groupByRequisito7() Group by the requisito7 column
 * @method UbilabQuery groupByRequisito8() Group by the requisito8 column
 * @method UbilabQuery groupByRequisito9() Group by the requisito9 column
 *
 * @method UbilabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UbilabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UbilabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UbilabQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method UbilabQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method UbilabQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Ubilab findOne(PropelPDO $con = null) Return the first Ubilab matching the query
 * @method Ubilab findOneOrCreate(PropelPDO $con = null) Return the first Ubilab matching the query, or a new Ubilab object populated from the query conditions when no match is found
 *
 * @method Ubilab findOneByIdUsuario(int $idusuario) Return the first Ubilab filtered by the idusuario column
 * @method Ubilab findOneByNumPro(int $numpro) Return the first Ubilab filtered by the numpro column
 * @method Ubilab findOneByNumEgre(int $numegre) Return the first Ubilab filtered by the numegre column
 * @method Ubilab findOneByCongruencia(int $congruencia) Return the first Ubilab filtered by the congruencia column
 * @method Ubilab findOneByCarrera1(string $carrera1) Return the first Ubilab filtered by the carrera1 column
 * @method Ubilab findOneByCarrera2(string $carrera2) Return the first Ubilab filtered by the carrera2 column
 * @method Ubilab findOneByCarrera3(string $carrera3) Return the first Ubilab filtered by the carrera3 column
 * @method Ubilab findOneByCarrera4(string $carrera4) Return the first Ubilab filtered by the carrera4 column
 * @method Ubilab findOneByCarrera5(string $carrera5) Return the first Ubilab filtered by the carrera5 column
 * @method Ubilab findOneByCarrera6(string $carrera6) Return the first Ubilab filtered by the carrera6 column
 * @method Ubilab findOneByRequisito1(boolean $requisito1) Return the first Ubilab filtered by the requisito1 column
 * @method Ubilab findOneByRequisito2(boolean $requisito2) Return the first Ubilab filtered by the requisito2 column
 * @method Ubilab findOneByRequisito3(boolean $requisito3) Return the first Ubilab filtered by the requisito3 column
 * @method Ubilab findOneByRequisito4(boolean $requisito4) Return the first Ubilab filtered by the requisito4 column
 * @method Ubilab findOneByRequisito5(boolean $requisito5) Return the first Ubilab filtered by the requisito5 column
 * @method Ubilab findOneByRequisito6(boolean $requisito6) Return the first Ubilab filtered by the requisito6 column
 * @method Ubilab findOneByRequisito7(boolean $requisito7) Return the first Ubilab filtered by the requisito7 column
 * @method Ubilab findOneByRequisito8(boolean $requisito8) Return the first Ubilab filtered by the requisito8 column
 * @method Ubilab findOneByRequisito9(string $requisito9) Return the first Ubilab filtered by the requisito9 column
 *
 * @method array findByIdEncuesta(int $id) Return Ubilab objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Ubilab objects filtered by the idusuario column
 * @method array findByNumPro(int $numpro) Return Ubilab objects filtered by the numpro column
 * @method array findByNumEgre(int $numegre) Return Ubilab objects filtered by the numegre column
 * @method array findByCongruencia(int $congruencia) Return Ubilab objects filtered by the congruencia column
 * @method array findByCarrera1(string $carrera1) Return Ubilab objects filtered by the carrera1 column
 * @method array findByCarrera2(string $carrera2) Return Ubilab objects filtered by the carrera2 column
 * @method array findByCarrera3(string $carrera3) Return Ubilab objects filtered by the carrera3 column
 * @method array findByCarrera4(string $carrera4) Return Ubilab objects filtered by the carrera4 column
 * @method array findByCarrera5(string $carrera5) Return Ubilab objects filtered by the carrera5 column
 * @method array findByCarrera6(string $carrera6) Return Ubilab objects filtered by the carrera6 column
 * @method array findByRequisito1(boolean $requisito1) Return Ubilab objects filtered by the requisito1 column
 * @method array findByRequisito2(boolean $requisito2) Return Ubilab objects filtered by the requisito2 column
 * @method array findByRequisito3(boolean $requisito3) Return Ubilab objects filtered by the requisito3 column
 * @method array findByRequisito4(boolean $requisito4) Return Ubilab objects filtered by the requisito4 column
 * @method array findByRequisito5(boolean $requisito5) Return Ubilab objects filtered by the requisito5 column
 * @method array findByRequisito6(boolean $requisito6) Return Ubilab objects filtered by the requisito6 column
 * @method array findByRequisito7(boolean $requisito7) Return Ubilab objects filtered by the requisito7 column
 * @method array findByRequisito8(boolean $requisito8) Return Ubilab objects filtered by the requisito8 column
 * @method array findByRequisito9(string $requisito9) Return Ubilab objects filtered by the requisito9 column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseUbilabQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUbilabQuery object.
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
            $modelName = 'Ubilab';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UbilabQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UbilabQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UbilabQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UbilabQuery) {
            return $criteria;
        }
        $query = new UbilabQuery(null, null, $modelAlias);

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
     * @return   Ubilab|Ubilab[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UbilabPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ubilab A model object, or null if the key is not found
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
     * @return                 Ubilab A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `numpro`, `numegre`, `congruencia`, `carrera1`, `carrera2`, `carrera3`, `carrera4`, `carrera5`, `carrera6`, `requisito1`, `requisito2`, `requisito3`, `requisito4`, `requisito5`, `requisito6`, `requisito7`, `requisito8`, `requisito9` FROM `encuempr_ubilab` WHERE `id` = :p0';
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
            $obj = new Ubilab();
            $obj->hydrate($row);
            UbilabPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ubilab|Ubilab[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ubilab[]|mixed the list of results, formatted by the current formatter
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
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UbilabPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UbilabPeer::ID, $keys, Criteria::IN);
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
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByIdEncuesta($idEncuesta = null, $comparison = null)
    {
        if (is_array($idEncuesta)) {
            $useMinMax = false;
            if (isset($idEncuesta['min'])) {
                $this->addUsingAlias(UbilabPeer::ID, $idEncuesta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEncuesta['max'])) {
                $this->addUsingAlias(UbilabPeer::ID, $idEncuesta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UbilabPeer::ID, $idEncuesta, $comparison);
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
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(UbilabPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(UbilabPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UbilabPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the numpro column
     *
     * @param     mixed $numPro The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByNumPro($numPro = null, $comparison = null)
    {
        if (is_scalar($numPro)) {
            $numPro = UbilabPeer::getSqlValueForEnum(UbilabPeer::NUMPRO, $numPro);
        } elseif (is_array($numPro)) {
            $convertedValues = array();
            foreach ($numPro as $value) {
                $convertedValues[] = UbilabPeer::getSqlValueForEnum(UbilabPeer::NUMPRO, $value);
            }
            $numPro = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UbilabPeer::NUMPRO, $numPro, $comparison);
    }

    /**
     * Filter the query on the numegre column
     *
     * @param     mixed $numEgre The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByNumEgre($numEgre = null, $comparison = null)
    {
        if (is_scalar($numEgre)) {
            $numEgre = UbilabPeer::getSqlValueForEnum(UbilabPeer::NUMEGRE, $numEgre);
        } elseif (is_array($numEgre)) {
            $convertedValues = array();
            foreach ($numEgre as $value) {
                $convertedValues[] = UbilabPeer::getSqlValueForEnum(UbilabPeer::NUMEGRE, $value);
            }
            $numEgre = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UbilabPeer::NUMEGRE, $numEgre, $comparison);
    }

    /**
     * Filter the query on the congruencia column
     *
     * @param     mixed $congruencia The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByCongruencia($congruencia = null, $comparison = null)
    {
        if (is_scalar($congruencia)) {
            $congruencia = UbilabPeer::getSqlValueForEnum(UbilabPeer::CONGRUENCIA, $congruencia);
        } elseif (is_array($congruencia)) {
            $convertedValues = array();
            foreach ($congruencia as $value) {
                $convertedValues[] = UbilabPeer::getSqlValueForEnum(UbilabPeer::CONGRUENCIA, $value);
            }
            $congruencia = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CONGRUENCIA, $congruencia, $comparison);
    }

    /**
     * Filter the query on the carrera1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrera1('fooValue');   // WHERE carrera1 = 'fooValue'
     * $query->filterByCarrera1('%fooValue%'); // WHERE carrera1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carrera1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByCarrera1($carrera1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carrera1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carrera1)) {
                $carrera1 = str_replace('*', '%', $carrera1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CARRERA1, $carrera1, $comparison);
    }

    /**
     * Filter the query on the carrera2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrera2('fooValue');   // WHERE carrera2 = 'fooValue'
     * $query->filterByCarrera2('%fooValue%'); // WHERE carrera2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carrera2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByCarrera2($carrera2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carrera2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carrera2)) {
                $carrera2 = str_replace('*', '%', $carrera2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CARRERA2, $carrera2, $comparison);
    }

    /**
     * Filter the query on the carrera3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrera3('fooValue');   // WHERE carrera3 = 'fooValue'
     * $query->filterByCarrera3('%fooValue%'); // WHERE carrera3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carrera3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByCarrera3($carrera3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carrera3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carrera3)) {
                $carrera3 = str_replace('*', '%', $carrera3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CARRERA3, $carrera3, $comparison);
    }

    /**
     * Filter the query on the carrera4 column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrera4('fooValue');   // WHERE carrera4 = 'fooValue'
     * $query->filterByCarrera4('%fooValue%'); // WHERE carrera4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carrera4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByCarrera4($carrera4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carrera4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carrera4)) {
                $carrera4 = str_replace('*', '%', $carrera4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CARRERA4, $carrera4, $comparison);
    }

    /**
     * Filter the query on the carrera5 column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrera5('fooValue');   // WHERE carrera5 = 'fooValue'
     * $query->filterByCarrera5('%fooValue%'); // WHERE carrera5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carrera5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByCarrera5($carrera5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carrera5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carrera5)) {
                $carrera5 = str_replace('*', '%', $carrera5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CARRERA5, $carrera5, $comparison);
    }

    /**
     * Filter the query on the carrera6 column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrera6('fooValue');   // WHERE carrera6 = 'fooValue'
     * $query->filterByCarrera6('%fooValue%'); // WHERE carrera6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carrera6 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByCarrera6($carrera6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carrera6)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carrera6)) {
                $carrera6 = str_replace('*', '%', $carrera6);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::CARRERA6, $carrera6, $comparison);
    }

    /**
     * Filter the query on the requisito1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito1(true); // WHERE requisito1 = true
     * $query->filterByRequisito1('yes'); // WHERE requisito1 = true
     * </code>
     *
     * @param     boolean|string $requisito1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito1($requisito1 = null, $comparison = null)
    {
        if (is_string($requisito1)) {
            $requisito1 = in_array(strtolower($requisito1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO1, $requisito1, $comparison);
    }

    /**
     * Filter the query on the requisito2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito2(true); // WHERE requisito2 = true
     * $query->filterByRequisito2('yes'); // WHERE requisito2 = true
     * </code>
     *
     * @param     boolean|string $requisito2 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito2($requisito2 = null, $comparison = null)
    {
        if (is_string($requisito2)) {
            $requisito2 = in_array(strtolower($requisito2), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO2, $requisito2, $comparison);
    }

    /**
     * Filter the query on the requisito3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito3(true); // WHERE requisito3 = true
     * $query->filterByRequisito3('yes'); // WHERE requisito3 = true
     * </code>
     *
     * @param     boolean|string $requisito3 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito3($requisito3 = null, $comparison = null)
    {
        if (is_string($requisito3)) {
            $requisito3 = in_array(strtolower($requisito3), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO3, $requisito3, $comparison);
    }

    /**
     * Filter the query on the requisito4 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito4(true); // WHERE requisito4 = true
     * $query->filterByRequisito4('yes'); // WHERE requisito4 = true
     * </code>
     *
     * @param     boolean|string $requisito4 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito4($requisito4 = null, $comparison = null)
    {
        if (is_string($requisito4)) {
            $requisito4 = in_array(strtolower($requisito4), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO4, $requisito4, $comparison);
    }

    /**
     * Filter the query on the requisito5 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito5(true); // WHERE requisito5 = true
     * $query->filterByRequisito5('yes'); // WHERE requisito5 = true
     * </code>
     *
     * @param     boolean|string $requisito5 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito5($requisito5 = null, $comparison = null)
    {
        if (is_string($requisito5)) {
            $requisito5 = in_array(strtolower($requisito5), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO5, $requisito5, $comparison);
    }

    /**
     * Filter the query on the requisito6 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito6(true); // WHERE requisito6 = true
     * $query->filterByRequisito6('yes'); // WHERE requisito6 = true
     * </code>
     *
     * @param     boolean|string $requisito6 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito6($requisito6 = null, $comparison = null)
    {
        if (is_string($requisito6)) {
            $requisito6 = in_array(strtolower($requisito6), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO6, $requisito6, $comparison);
    }

    /**
     * Filter the query on the requisito7 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito7(true); // WHERE requisito7 = true
     * $query->filterByRequisito7('yes'); // WHERE requisito7 = true
     * </code>
     *
     * @param     boolean|string $requisito7 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito7($requisito7 = null, $comparison = null)
    {
        if (is_string($requisito7)) {
            $requisito7 = in_array(strtolower($requisito7), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO7, $requisito7, $comparison);
    }

    /**
     * Filter the query on the requisito8 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito8(true); // WHERE requisito8 = true
     * $query->filterByRequisito8('yes'); // WHERE requisito8 = true
     * </code>
     *
     * @param     boolean|string $requisito8 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito8($requisito8 = null, $comparison = null)
    {
        if (is_string($requisito8)) {
            $requisito8 = in_array(strtolower($requisito8), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO8, $requisito8, $comparison);
    }

    /**
     * Filter the query on the requisito9 column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisito9('fooValue');   // WHERE requisito9 = 'fooValue'
     * $query->filterByRequisito9('%fooValue%'); // WHERE requisito9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requisito9 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function filterByRequisito9($requisito9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requisito9)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requisito9)) {
                $requisito9 = str_replace('*', '%', $requisito9);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UbilabPeer::REQUISITO9, $requisito9, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UbilabQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UbilabPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UbilabPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return UbilabQuery The current query, for fluid interface
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
     * @param   Ubilab $ubilab Object to remove from the list of results
     *
     * @return UbilabQuery The current query, for fluid interface
     */
    public function prune($ubilab = null)
    {
        if ($ubilab) {
            $this->addUsingAlias(UbilabPeer::ID, $ubilab->getIdEncuesta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
