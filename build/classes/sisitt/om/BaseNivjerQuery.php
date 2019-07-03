<?php


/**
 * Base class that represents a query for the 'encuempr_nivjer' table.
 *
 *
 *
 * @method NivjerQuery orderByIdEncuesta($order = Criteria::ASC) Order by the id column
 * @method NivjerQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method NivjerQuery orderByAgromandosu($order = Criteria::ASC) Order by the agromandosu column
 * @method NivjerQuery orderByAgromandoin($order = Criteria::ASC) Order by the agromandoin column
 * @method NivjerQuery orderByAgrosupervisor($order = Criteria::ASC) Order by the agrosupervisor column
 * @method NivjerQuery orderByAgrotecnico($order = Criteria::ASC) Order by the agrotecnico column
 * @method NivjerQuery orderByAgrootro($order = Criteria::ASC) Order by the agrootro column
 * @method NivjerQuery orderByIgemandosu($order = Criteria::ASC) Order by the igemandosu column
 * @method NivjerQuery orderByIgemandoin($order = Criteria::ASC) Order by the igemandoin column
 * @method NivjerQuery orderByIgesupervisor($order = Criteria::ASC) Order by the igesupervisor column
 * @method NivjerQuery orderByIgetecnico($order = Criteria::ASC) Order by the igetecnico column
 * @method NivjerQuery orderByIgeotro($order = Criteria::ASC) Order by the igeotro column
 * @method NivjerQuery orderByBiomandosu($order = Criteria::ASC) Order by the biomandosu column
 * @method NivjerQuery orderByBiomandoin($order = Criteria::ASC) Order by the biomandoin column
 * @method NivjerQuery orderByBiosupervisor($order = Criteria::ASC) Order by the biosupervisor column
 * @method NivjerQuery orderByBiotecnico($order = Criteria::ASC) Order by the biotecnico column
 * @method NivjerQuery orderByBiootro($order = Criteria::ASC) Order by the biootro column
 * @method NivjerQuery orderByAdminmandosu($order = Criteria::ASC) Order by the adminmandosu column
 * @method NivjerQuery orderByAdminmandoin($order = Criteria::ASC) Order by the adminmandoin column
 * @method NivjerQuery orderByAdminsupervisor($order = Criteria::ASC) Order by the adminsupervisor column
 * @method NivjerQuery orderByAdmintecnico($order = Criteria::ASC) Order by the admintecnico column
 * @method NivjerQuery orderByAdminotro($order = Criteria::ASC) Order by the adminotro column
 * @method NivjerQuery orderByInfomandosu($order = Criteria::ASC) Order by the infomandosu column
 * @method NivjerQuery orderByInfomandoin($order = Criteria::ASC) Order by the infomandoin column
 * @method NivjerQuery orderByInfosupervisor($order = Criteria::ASC) Order by the infosupervisor column
 * @method NivjerQuery orderByInfotecnico($order = Criteria::ASC) Order by the infotecnico column
 * @method NivjerQuery orderByInfootro($order = Criteria::ASC) Order by the infootro column
 *
 * @method NivjerQuery groupByIdEncuesta() Group by the id column
 * @method NivjerQuery groupByIdUsuario() Group by the idusuario column
 * @method NivjerQuery groupByAgromandosu() Group by the agromandosu column
 * @method NivjerQuery groupByAgromandoin() Group by the agromandoin column
 * @method NivjerQuery groupByAgrosupervisor() Group by the agrosupervisor column
 * @method NivjerQuery groupByAgrotecnico() Group by the agrotecnico column
 * @method NivjerQuery groupByAgrootro() Group by the agrootro column
 * @method NivjerQuery groupByIgemandosu() Group by the igemandosu column
 * @method NivjerQuery groupByIgemandoin() Group by the igemandoin column
 * @method NivjerQuery groupByIgesupervisor() Group by the igesupervisor column
 * @method NivjerQuery groupByIgetecnico() Group by the igetecnico column
 * @method NivjerQuery groupByIgeotro() Group by the igeotro column
 * @method NivjerQuery groupByBiomandosu() Group by the biomandosu column
 * @method NivjerQuery groupByBiomandoin() Group by the biomandoin column
 * @method NivjerQuery groupByBiosupervisor() Group by the biosupervisor column
 * @method NivjerQuery groupByBiotecnico() Group by the biotecnico column
 * @method NivjerQuery groupByBiootro() Group by the biootro column
 * @method NivjerQuery groupByAdminmandosu() Group by the adminmandosu column
 * @method NivjerQuery groupByAdminmandoin() Group by the adminmandoin column
 * @method NivjerQuery groupByAdminsupervisor() Group by the adminsupervisor column
 * @method NivjerQuery groupByAdmintecnico() Group by the admintecnico column
 * @method NivjerQuery groupByAdminotro() Group by the adminotro column
 * @method NivjerQuery groupByInfomandosu() Group by the infomandosu column
 * @method NivjerQuery groupByInfomandoin() Group by the infomandoin column
 * @method NivjerQuery groupByInfosupervisor() Group by the infosupervisor column
 * @method NivjerQuery groupByInfotecnico() Group by the infotecnico column
 * @method NivjerQuery groupByInfootro() Group by the infootro column
 *
 * @method NivjerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NivjerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NivjerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NivjerQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method NivjerQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method NivjerQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Nivjer findOne(PropelPDO $con = null) Return the first Nivjer matching the query
 * @method Nivjer findOneOrCreate(PropelPDO $con = null) Return the first Nivjer matching the query, or a new Nivjer object populated from the query conditions when no match is found
 *
 * @method Nivjer findOneByIdUsuario(int $idusuario) Return the first Nivjer filtered by the idusuario column
 * @method Nivjer findOneByAgromandosu(int $agromandosu) Return the first Nivjer filtered by the agromandosu column
 * @method Nivjer findOneByAgromandoin(int $agromandoin) Return the first Nivjer filtered by the agromandoin column
 * @method Nivjer findOneByAgrosupervisor(int $agrosupervisor) Return the first Nivjer filtered by the agrosupervisor column
 * @method Nivjer findOneByAgrotecnico(int $agrotecnico) Return the first Nivjer filtered by the agrotecnico column
 * @method Nivjer findOneByAgrootro(int $agrootro) Return the first Nivjer filtered by the agrootro column
 * @method Nivjer findOneByIgemandosu(int $igemandosu) Return the first Nivjer filtered by the igemandosu column
 * @method Nivjer findOneByIgemandoin(int $igemandoin) Return the first Nivjer filtered by the igemandoin column
 * @method Nivjer findOneByIgesupervisor(int $igesupervisor) Return the first Nivjer filtered by the igesupervisor column
 * @method Nivjer findOneByIgetecnico(int $igetecnico) Return the first Nivjer filtered by the igetecnico column
 * @method Nivjer findOneByIgeotro(int $igeotro) Return the first Nivjer filtered by the igeotro column
 * @method Nivjer findOneByBiomandosu(int $biomandosu) Return the first Nivjer filtered by the biomandosu column
 * @method Nivjer findOneByBiomandoin(int $biomandoin) Return the first Nivjer filtered by the biomandoin column
 * @method Nivjer findOneByBiosupervisor(int $biosupervisor) Return the first Nivjer filtered by the biosupervisor column
 * @method Nivjer findOneByBiotecnico(int $biotecnico) Return the first Nivjer filtered by the biotecnico column
 * @method Nivjer findOneByBiootro(int $biootro) Return the first Nivjer filtered by the biootro column
 * @method Nivjer findOneByAdminmandosu(int $adminmandosu) Return the first Nivjer filtered by the adminmandosu column
 * @method Nivjer findOneByAdminmandoin(int $adminmandoin) Return the first Nivjer filtered by the adminmandoin column
 * @method Nivjer findOneByAdminsupervisor(int $adminsupervisor) Return the first Nivjer filtered by the adminsupervisor column
 * @method Nivjer findOneByAdmintecnico(int $admintecnico) Return the first Nivjer filtered by the admintecnico column
 * @method Nivjer findOneByAdminotro(int $adminotro) Return the first Nivjer filtered by the adminotro column
 * @method Nivjer findOneByInfomandosu(int $infomandosu) Return the first Nivjer filtered by the infomandosu column
 * @method Nivjer findOneByInfomandoin(int $infomandoin) Return the first Nivjer filtered by the infomandoin column
 * @method Nivjer findOneByInfosupervisor(int $infosupervisor) Return the first Nivjer filtered by the infosupervisor column
 * @method Nivjer findOneByInfotecnico(int $infotecnico) Return the first Nivjer filtered by the infotecnico column
 * @method Nivjer findOneByInfootro(int $infootro) Return the first Nivjer filtered by the infootro column
 *
 * @method array findByIdEncuesta(int $id) Return Nivjer objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Nivjer objects filtered by the idusuario column
 * @method array findByAgromandosu(int $agromandosu) Return Nivjer objects filtered by the agromandosu column
 * @method array findByAgromandoin(int $agromandoin) Return Nivjer objects filtered by the agromandoin column
 * @method array findByAgrosupervisor(int $agrosupervisor) Return Nivjer objects filtered by the agrosupervisor column
 * @method array findByAgrotecnico(int $agrotecnico) Return Nivjer objects filtered by the agrotecnico column
 * @method array findByAgrootro(int $agrootro) Return Nivjer objects filtered by the agrootro column
 * @method array findByIgemandosu(int $igemandosu) Return Nivjer objects filtered by the igemandosu column
 * @method array findByIgemandoin(int $igemandoin) Return Nivjer objects filtered by the igemandoin column
 * @method array findByIgesupervisor(int $igesupervisor) Return Nivjer objects filtered by the igesupervisor column
 * @method array findByIgetecnico(int $igetecnico) Return Nivjer objects filtered by the igetecnico column
 * @method array findByIgeotro(int $igeotro) Return Nivjer objects filtered by the igeotro column
 * @method array findByBiomandosu(int $biomandosu) Return Nivjer objects filtered by the biomandosu column
 * @method array findByBiomandoin(int $biomandoin) Return Nivjer objects filtered by the biomandoin column
 * @method array findByBiosupervisor(int $biosupervisor) Return Nivjer objects filtered by the biosupervisor column
 * @method array findByBiotecnico(int $biotecnico) Return Nivjer objects filtered by the biotecnico column
 * @method array findByBiootro(int $biootro) Return Nivjer objects filtered by the biootro column
 * @method array findByAdminmandosu(int $adminmandosu) Return Nivjer objects filtered by the adminmandosu column
 * @method array findByAdminmandoin(int $adminmandoin) Return Nivjer objects filtered by the adminmandoin column
 * @method array findByAdminsupervisor(int $adminsupervisor) Return Nivjer objects filtered by the adminsupervisor column
 * @method array findByAdmintecnico(int $admintecnico) Return Nivjer objects filtered by the admintecnico column
 * @method array findByAdminotro(int $adminotro) Return Nivjer objects filtered by the adminotro column
 * @method array findByInfomandosu(int $infomandosu) Return Nivjer objects filtered by the infomandosu column
 * @method array findByInfomandoin(int $infomandoin) Return Nivjer objects filtered by the infomandoin column
 * @method array findByInfosupervisor(int $infosupervisor) Return Nivjer objects filtered by the infosupervisor column
 * @method array findByInfotecnico(int $infotecnico) Return Nivjer objects filtered by the infotecnico column
 * @method array findByInfootro(int $infootro) Return Nivjer objects filtered by the infootro column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseNivjerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNivjerQuery object.
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
            $modelName = 'Nivjer';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NivjerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NivjerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NivjerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NivjerQuery) {
            return $criteria;
        }
        $query = new NivjerQuery(null, null, $modelAlias);

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
     * @return   Nivjer|Nivjer[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NivjerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Nivjer A model object, or null if the key is not found
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
     * @return                 Nivjer A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `agromandosu`, `agromandoin`, `agrosupervisor`, `agrotecnico`, `agrootro`, `igemandosu`, `igemandoin`, `igesupervisor`, `igetecnico`, `igeotro`, `biomandosu`, `biomandoin`, `biosupervisor`, `biotecnico`, `biootro`, `adminmandosu`, `adminmandoin`, `adminsupervisor`, `admintecnico`, `adminotro`, `infomandosu`, `infomandoin`, `infosupervisor`, `infotecnico`, `infootro` FROM `encuempr_nivjer` WHERE `id` = :p0';
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
            $obj = new Nivjer();
            $obj->hydrate($row);
            NivjerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Nivjer|Nivjer[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Nivjer[]|mixed the list of results, formatted by the current formatter
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
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NivjerPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NivjerPeer::ID, $keys, Criteria::IN);
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
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIdEncuesta($idEncuesta = null, $comparison = null)
    {
        if (is_array($idEncuesta)) {
            $useMinMax = false;
            if (isset($idEncuesta['min'])) {
                $this->addUsingAlias(NivjerPeer::ID, $idEncuesta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEncuesta['max'])) {
                $this->addUsingAlias(NivjerPeer::ID, $idEncuesta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::ID, $idEncuesta, $comparison);
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
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(NivjerPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(NivjerPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the agromandosu column
     *
     * Example usage:
     * <code>
     * $query->filterByAgromandosu(1234); // WHERE agromandosu = 1234
     * $query->filterByAgromandosu(array(12, 34)); // WHERE agromandosu IN (12, 34)
     * $query->filterByAgromandosu(array('min' => 12)); // WHERE agromandosu >= 12
     * $query->filterByAgromandosu(array('max' => 12)); // WHERE agromandosu <= 12
     * </code>
     *
     * @param     mixed $agromandosu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAgromandosu($agromandosu = null, $comparison = null)
    {
        if (is_array($agromandosu)) {
            $useMinMax = false;
            if (isset($agromandosu['min'])) {
                $this->addUsingAlias(NivjerPeer::AGROMANDOSU, $agromandosu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agromandosu['max'])) {
                $this->addUsingAlias(NivjerPeer::AGROMANDOSU, $agromandosu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::AGROMANDOSU, $agromandosu, $comparison);
    }

    /**
     * Filter the query on the agromandoin column
     *
     * Example usage:
     * <code>
     * $query->filterByAgromandoin(1234); // WHERE agromandoin = 1234
     * $query->filterByAgromandoin(array(12, 34)); // WHERE agromandoin IN (12, 34)
     * $query->filterByAgromandoin(array('min' => 12)); // WHERE agromandoin >= 12
     * $query->filterByAgromandoin(array('max' => 12)); // WHERE agromandoin <= 12
     * </code>
     *
     * @param     mixed $agromandoin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAgromandoin($agromandoin = null, $comparison = null)
    {
        if (is_array($agromandoin)) {
            $useMinMax = false;
            if (isset($agromandoin['min'])) {
                $this->addUsingAlias(NivjerPeer::AGROMANDOIN, $agromandoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agromandoin['max'])) {
                $this->addUsingAlias(NivjerPeer::AGROMANDOIN, $agromandoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::AGROMANDOIN, $agromandoin, $comparison);
    }

    /**
     * Filter the query on the agrosupervisor column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrosupervisor(1234); // WHERE agrosupervisor = 1234
     * $query->filterByAgrosupervisor(array(12, 34)); // WHERE agrosupervisor IN (12, 34)
     * $query->filterByAgrosupervisor(array('min' => 12)); // WHERE agrosupervisor >= 12
     * $query->filterByAgrosupervisor(array('max' => 12)); // WHERE agrosupervisor <= 12
     * </code>
     *
     * @param     mixed $agrosupervisor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAgrosupervisor($agrosupervisor = null, $comparison = null)
    {
        if (is_array($agrosupervisor)) {
            $useMinMax = false;
            if (isset($agrosupervisor['min'])) {
                $this->addUsingAlias(NivjerPeer::AGROSUPERVISOR, $agrosupervisor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agrosupervisor['max'])) {
                $this->addUsingAlias(NivjerPeer::AGROSUPERVISOR, $agrosupervisor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::AGROSUPERVISOR, $agrosupervisor, $comparison);
    }

    /**
     * Filter the query on the agrotecnico column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrotecnico(1234); // WHERE agrotecnico = 1234
     * $query->filterByAgrotecnico(array(12, 34)); // WHERE agrotecnico IN (12, 34)
     * $query->filterByAgrotecnico(array('min' => 12)); // WHERE agrotecnico >= 12
     * $query->filterByAgrotecnico(array('max' => 12)); // WHERE agrotecnico <= 12
     * </code>
     *
     * @param     mixed $agrotecnico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAgrotecnico($agrotecnico = null, $comparison = null)
    {
        if (is_array($agrotecnico)) {
            $useMinMax = false;
            if (isset($agrotecnico['min'])) {
                $this->addUsingAlias(NivjerPeer::AGROTECNICO, $agrotecnico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agrotecnico['max'])) {
                $this->addUsingAlias(NivjerPeer::AGROTECNICO, $agrotecnico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::AGROTECNICO, $agrotecnico, $comparison);
    }

    /**
     * Filter the query on the agrootro column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrootro(1234); // WHERE agrootro = 1234
     * $query->filterByAgrootro(array(12, 34)); // WHERE agrootro IN (12, 34)
     * $query->filterByAgrootro(array('min' => 12)); // WHERE agrootro >= 12
     * $query->filterByAgrootro(array('max' => 12)); // WHERE agrootro <= 12
     * </code>
     *
     * @param     mixed $agrootro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAgrootro($agrootro = null, $comparison = null)
    {
        if (is_array($agrootro)) {
            $useMinMax = false;
            if (isset($agrootro['min'])) {
                $this->addUsingAlias(NivjerPeer::AGROOTRO, $agrootro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agrootro['max'])) {
                $this->addUsingAlias(NivjerPeer::AGROOTRO, $agrootro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::AGROOTRO, $agrootro, $comparison);
    }

    /**
     * Filter the query on the igemandosu column
     *
     * Example usage:
     * <code>
     * $query->filterByIgemandosu(1234); // WHERE igemandosu = 1234
     * $query->filterByIgemandosu(array(12, 34)); // WHERE igemandosu IN (12, 34)
     * $query->filterByIgemandosu(array('min' => 12)); // WHERE igemandosu >= 12
     * $query->filterByIgemandosu(array('max' => 12)); // WHERE igemandosu <= 12
     * </code>
     *
     * @param     mixed $igemandosu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIgemandosu($igemandosu = null, $comparison = null)
    {
        if (is_array($igemandosu)) {
            $useMinMax = false;
            if (isset($igemandosu['min'])) {
                $this->addUsingAlias(NivjerPeer::IGEMANDOSU, $igemandosu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($igemandosu['max'])) {
                $this->addUsingAlias(NivjerPeer::IGEMANDOSU, $igemandosu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::IGEMANDOSU, $igemandosu, $comparison);
    }

    /**
     * Filter the query on the igemandoin column
     *
     * Example usage:
     * <code>
     * $query->filterByIgemandoin(1234); // WHERE igemandoin = 1234
     * $query->filterByIgemandoin(array(12, 34)); // WHERE igemandoin IN (12, 34)
     * $query->filterByIgemandoin(array('min' => 12)); // WHERE igemandoin >= 12
     * $query->filterByIgemandoin(array('max' => 12)); // WHERE igemandoin <= 12
     * </code>
     *
     * @param     mixed $igemandoin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIgemandoin($igemandoin = null, $comparison = null)
    {
        if (is_array($igemandoin)) {
            $useMinMax = false;
            if (isset($igemandoin['min'])) {
                $this->addUsingAlias(NivjerPeer::IGEMANDOIN, $igemandoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($igemandoin['max'])) {
                $this->addUsingAlias(NivjerPeer::IGEMANDOIN, $igemandoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::IGEMANDOIN, $igemandoin, $comparison);
    }

    /**
     * Filter the query on the igesupervisor column
     *
     * Example usage:
     * <code>
     * $query->filterByIgesupervisor(1234); // WHERE igesupervisor = 1234
     * $query->filterByIgesupervisor(array(12, 34)); // WHERE igesupervisor IN (12, 34)
     * $query->filterByIgesupervisor(array('min' => 12)); // WHERE igesupervisor >= 12
     * $query->filterByIgesupervisor(array('max' => 12)); // WHERE igesupervisor <= 12
     * </code>
     *
     * @param     mixed $igesupervisor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIgesupervisor($igesupervisor = null, $comparison = null)
    {
        if (is_array($igesupervisor)) {
            $useMinMax = false;
            if (isset($igesupervisor['min'])) {
                $this->addUsingAlias(NivjerPeer::IGESUPERVISOR, $igesupervisor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($igesupervisor['max'])) {
                $this->addUsingAlias(NivjerPeer::IGESUPERVISOR, $igesupervisor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::IGESUPERVISOR, $igesupervisor, $comparison);
    }

    /**
     * Filter the query on the igetecnico column
     *
     * Example usage:
     * <code>
     * $query->filterByIgetecnico(1234); // WHERE igetecnico = 1234
     * $query->filterByIgetecnico(array(12, 34)); // WHERE igetecnico IN (12, 34)
     * $query->filterByIgetecnico(array('min' => 12)); // WHERE igetecnico >= 12
     * $query->filterByIgetecnico(array('max' => 12)); // WHERE igetecnico <= 12
     * </code>
     *
     * @param     mixed $igetecnico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIgetecnico($igetecnico = null, $comparison = null)
    {
        if (is_array($igetecnico)) {
            $useMinMax = false;
            if (isset($igetecnico['min'])) {
                $this->addUsingAlias(NivjerPeer::IGETECNICO, $igetecnico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($igetecnico['max'])) {
                $this->addUsingAlias(NivjerPeer::IGETECNICO, $igetecnico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::IGETECNICO, $igetecnico, $comparison);
    }

    /**
     * Filter the query on the igeotro column
     *
     * Example usage:
     * <code>
     * $query->filterByIgeotro(1234); // WHERE igeotro = 1234
     * $query->filterByIgeotro(array(12, 34)); // WHERE igeotro IN (12, 34)
     * $query->filterByIgeotro(array('min' => 12)); // WHERE igeotro >= 12
     * $query->filterByIgeotro(array('max' => 12)); // WHERE igeotro <= 12
     * </code>
     *
     * @param     mixed $igeotro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByIgeotro($igeotro = null, $comparison = null)
    {
        if (is_array($igeotro)) {
            $useMinMax = false;
            if (isset($igeotro['min'])) {
                $this->addUsingAlias(NivjerPeer::IGEOTRO, $igeotro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($igeotro['max'])) {
                $this->addUsingAlias(NivjerPeer::IGEOTRO, $igeotro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::IGEOTRO, $igeotro, $comparison);
    }

    /**
     * Filter the query on the biomandosu column
     *
     * Example usage:
     * <code>
     * $query->filterByBiomandosu(1234); // WHERE biomandosu = 1234
     * $query->filterByBiomandosu(array(12, 34)); // WHERE biomandosu IN (12, 34)
     * $query->filterByBiomandosu(array('min' => 12)); // WHERE biomandosu >= 12
     * $query->filterByBiomandosu(array('max' => 12)); // WHERE biomandosu <= 12
     * </code>
     *
     * @param     mixed $biomandosu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByBiomandosu($biomandosu = null, $comparison = null)
    {
        if (is_array($biomandosu)) {
            $useMinMax = false;
            if (isset($biomandosu['min'])) {
                $this->addUsingAlias(NivjerPeer::BIOMANDOSU, $biomandosu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($biomandosu['max'])) {
                $this->addUsingAlias(NivjerPeer::BIOMANDOSU, $biomandosu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::BIOMANDOSU, $biomandosu, $comparison);
    }

    /**
     * Filter the query on the biomandoin column
     *
     * Example usage:
     * <code>
     * $query->filterByBiomandoin(1234); // WHERE biomandoin = 1234
     * $query->filterByBiomandoin(array(12, 34)); // WHERE biomandoin IN (12, 34)
     * $query->filterByBiomandoin(array('min' => 12)); // WHERE biomandoin >= 12
     * $query->filterByBiomandoin(array('max' => 12)); // WHERE biomandoin <= 12
     * </code>
     *
     * @param     mixed $biomandoin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByBiomandoin($biomandoin = null, $comparison = null)
    {
        if (is_array($biomandoin)) {
            $useMinMax = false;
            if (isset($biomandoin['min'])) {
                $this->addUsingAlias(NivjerPeer::BIOMANDOIN, $biomandoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($biomandoin['max'])) {
                $this->addUsingAlias(NivjerPeer::BIOMANDOIN, $biomandoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::BIOMANDOIN, $biomandoin, $comparison);
    }

    /**
     * Filter the query on the biosupervisor column
     *
     * Example usage:
     * <code>
     * $query->filterByBiosupervisor(1234); // WHERE biosupervisor = 1234
     * $query->filterByBiosupervisor(array(12, 34)); // WHERE biosupervisor IN (12, 34)
     * $query->filterByBiosupervisor(array('min' => 12)); // WHERE biosupervisor >= 12
     * $query->filterByBiosupervisor(array('max' => 12)); // WHERE biosupervisor <= 12
     * </code>
     *
     * @param     mixed $biosupervisor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByBiosupervisor($biosupervisor = null, $comparison = null)
    {
        if (is_array($biosupervisor)) {
            $useMinMax = false;
            if (isset($biosupervisor['min'])) {
                $this->addUsingAlias(NivjerPeer::BIOSUPERVISOR, $biosupervisor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($biosupervisor['max'])) {
                $this->addUsingAlias(NivjerPeer::BIOSUPERVISOR, $biosupervisor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::BIOSUPERVISOR, $biosupervisor, $comparison);
    }

    /**
     * Filter the query on the biotecnico column
     *
     * Example usage:
     * <code>
     * $query->filterByBiotecnico(1234); // WHERE biotecnico = 1234
     * $query->filterByBiotecnico(array(12, 34)); // WHERE biotecnico IN (12, 34)
     * $query->filterByBiotecnico(array('min' => 12)); // WHERE biotecnico >= 12
     * $query->filterByBiotecnico(array('max' => 12)); // WHERE biotecnico <= 12
     * </code>
     *
     * @param     mixed $biotecnico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByBiotecnico($biotecnico = null, $comparison = null)
    {
        if (is_array($biotecnico)) {
            $useMinMax = false;
            if (isset($biotecnico['min'])) {
                $this->addUsingAlias(NivjerPeer::BIOTECNICO, $biotecnico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($biotecnico['max'])) {
                $this->addUsingAlias(NivjerPeer::BIOTECNICO, $biotecnico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::BIOTECNICO, $biotecnico, $comparison);
    }

    /**
     * Filter the query on the biootro column
     *
     * Example usage:
     * <code>
     * $query->filterByBiootro(1234); // WHERE biootro = 1234
     * $query->filterByBiootro(array(12, 34)); // WHERE biootro IN (12, 34)
     * $query->filterByBiootro(array('min' => 12)); // WHERE biootro >= 12
     * $query->filterByBiootro(array('max' => 12)); // WHERE biootro <= 12
     * </code>
     *
     * @param     mixed $biootro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByBiootro($biootro = null, $comparison = null)
    {
        if (is_array($biootro)) {
            $useMinMax = false;
            if (isset($biootro['min'])) {
                $this->addUsingAlias(NivjerPeer::BIOOTRO, $biootro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($biootro['max'])) {
                $this->addUsingAlias(NivjerPeer::BIOOTRO, $biootro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::BIOOTRO, $biootro, $comparison);
    }

    /**
     * Filter the query on the adminmandosu column
     *
     * Example usage:
     * <code>
     * $query->filterByAdminmandosu(1234); // WHERE adminmandosu = 1234
     * $query->filterByAdminmandosu(array(12, 34)); // WHERE adminmandosu IN (12, 34)
     * $query->filterByAdminmandosu(array('min' => 12)); // WHERE adminmandosu >= 12
     * $query->filterByAdminmandosu(array('max' => 12)); // WHERE adminmandosu <= 12
     * </code>
     *
     * @param     mixed $adminmandosu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAdminmandosu($adminmandosu = null, $comparison = null)
    {
        if (is_array($adminmandosu)) {
            $useMinMax = false;
            if (isset($adminmandosu['min'])) {
                $this->addUsingAlias(NivjerPeer::ADMINMANDOSU, $adminmandosu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adminmandosu['max'])) {
                $this->addUsingAlias(NivjerPeer::ADMINMANDOSU, $adminmandosu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::ADMINMANDOSU, $adminmandosu, $comparison);
    }

    /**
     * Filter the query on the adminmandoin column
     *
     * Example usage:
     * <code>
     * $query->filterByAdminmandoin(1234); // WHERE adminmandoin = 1234
     * $query->filterByAdminmandoin(array(12, 34)); // WHERE adminmandoin IN (12, 34)
     * $query->filterByAdminmandoin(array('min' => 12)); // WHERE adminmandoin >= 12
     * $query->filterByAdminmandoin(array('max' => 12)); // WHERE adminmandoin <= 12
     * </code>
     *
     * @param     mixed $adminmandoin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAdminmandoin($adminmandoin = null, $comparison = null)
    {
        if (is_array($adminmandoin)) {
            $useMinMax = false;
            if (isset($adminmandoin['min'])) {
                $this->addUsingAlias(NivjerPeer::ADMINMANDOIN, $adminmandoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adminmandoin['max'])) {
                $this->addUsingAlias(NivjerPeer::ADMINMANDOIN, $adminmandoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::ADMINMANDOIN, $adminmandoin, $comparison);
    }

    /**
     * Filter the query on the adminsupervisor column
     *
     * Example usage:
     * <code>
     * $query->filterByAdminsupervisor(1234); // WHERE adminsupervisor = 1234
     * $query->filterByAdminsupervisor(array(12, 34)); // WHERE adminsupervisor IN (12, 34)
     * $query->filterByAdminsupervisor(array('min' => 12)); // WHERE adminsupervisor >= 12
     * $query->filterByAdminsupervisor(array('max' => 12)); // WHERE adminsupervisor <= 12
     * </code>
     *
     * @param     mixed $adminsupervisor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAdminsupervisor($adminsupervisor = null, $comparison = null)
    {
        if (is_array($adminsupervisor)) {
            $useMinMax = false;
            if (isset($adminsupervisor['min'])) {
                $this->addUsingAlias(NivjerPeer::ADMINSUPERVISOR, $adminsupervisor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adminsupervisor['max'])) {
                $this->addUsingAlias(NivjerPeer::ADMINSUPERVISOR, $adminsupervisor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::ADMINSUPERVISOR, $adminsupervisor, $comparison);
    }

    /**
     * Filter the query on the admintecnico column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmintecnico(1234); // WHERE admintecnico = 1234
     * $query->filterByAdmintecnico(array(12, 34)); // WHERE admintecnico IN (12, 34)
     * $query->filterByAdmintecnico(array('min' => 12)); // WHERE admintecnico >= 12
     * $query->filterByAdmintecnico(array('max' => 12)); // WHERE admintecnico <= 12
     * </code>
     *
     * @param     mixed $admintecnico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAdmintecnico($admintecnico = null, $comparison = null)
    {
        if (is_array($admintecnico)) {
            $useMinMax = false;
            if (isset($admintecnico['min'])) {
                $this->addUsingAlias(NivjerPeer::ADMINTECNICO, $admintecnico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admintecnico['max'])) {
                $this->addUsingAlias(NivjerPeer::ADMINTECNICO, $admintecnico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::ADMINTECNICO, $admintecnico, $comparison);
    }

    /**
     * Filter the query on the adminotro column
     *
     * Example usage:
     * <code>
     * $query->filterByAdminotro(1234); // WHERE adminotro = 1234
     * $query->filterByAdminotro(array(12, 34)); // WHERE adminotro IN (12, 34)
     * $query->filterByAdminotro(array('min' => 12)); // WHERE adminotro >= 12
     * $query->filterByAdminotro(array('max' => 12)); // WHERE adminotro <= 12
     * </code>
     *
     * @param     mixed $adminotro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByAdminotro($adminotro = null, $comparison = null)
    {
        if (is_array($adminotro)) {
            $useMinMax = false;
            if (isset($adminotro['min'])) {
                $this->addUsingAlias(NivjerPeer::ADMINOTRO, $adminotro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adminotro['max'])) {
                $this->addUsingAlias(NivjerPeer::ADMINOTRO, $adminotro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::ADMINOTRO, $adminotro, $comparison);
    }

    /**
     * Filter the query on the infomandosu column
     *
     * Example usage:
     * <code>
     * $query->filterByInfomandosu(1234); // WHERE infomandosu = 1234
     * $query->filterByInfomandosu(array(12, 34)); // WHERE infomandosu IN (12, 34)
     * $query->filterByInfomandosu(array('min' => 12)); // WHERE infomandosu >= 12
     * $query->filterByInfomandosu(array('max' => 12)); // WHERE infomandosu <= 12
     * </code>
     *
     * @param     mixed $infomandosu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByInfomandosu($infomandosu = null, $comparison = null)
    {
        if (is_array($infomandosu)) {
            $useMinMax = false;
            if (isset($infomandosu['min'])) {
                $this->addUsingAlias(NivjerPeer::INFOMANDOSU, $infomandosu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infomandosu['max'])) {
                $this->addUsingAlias(NivjerPeer::INFOMANDOSU, $infomandosu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::INFOMANDOSU, $infomandosu, $comparison);
    }

    /**
     * Filter the query on the infomandoin column
     *
     * Example usage:
     * <code>
     * $query->filterByInfomandoin(1234); // WHERE infomandoin = 1234
     * $query->filterByInfomandoin(array(12, 34)); // WHERE infomandoin IN (12, 34)
     * $query->filterByInfomandoin(array('min' => 12)); // WHERE infomandoin >= 12
     * $query->filterByInfomandoin(array('max' => 12)); // WHERE infomandoin <= 12
     * </code>
     *
     * @param     mixed $infomandoin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByInfomandoin($infomandoin = null, $comparison = null)
    {
        if (is_array($infomandoin)) {
            $useMinMax = false;
            if (isset($infomandoin['min'])) {
                $this->addUsingAlias(NivjerPeer::INFOMANDOIN, $infomandoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infomandoin['max'])) {
                $this->addUsingAlias(NivjerPeer::INFOMANDOIN, $infomandoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::INFOMANDOIN, $infomandoin, $comparison);
    }

    /**
     * Filter the query on the infosupervisor column
     *
     * Example usage:
     * <code>
     * $query->filterByInfosupervisor(1234); // WHERE infosupervisor = 1234
     * $query->filterByInfosupervisor(array(12, 34)); // WHERE infosupervisor IN (12, 34)
     * $query->filterByInfosupervisor(array('min' => 12)); // WHERE infosupervisor >= 12
     * $query->filterByInfosupervisor(array('max' => 12)); // WHERE infosupervisor <= 12
     * </code>
     *
     * @param     mixed $infosupervisor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByInfosupervisor($infosupervisor = null, $comparison = null)
    {
        if (is_array($infosupervisor)) {
            $useMinMax = false;
            if (isset($infosupervisor['min'])) {
                $this->addUsingAlias(NivjerPeer::INFOSUPERVISOR, $infosupervisor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infosupervisor['max'])) {
                $this->addUsingAlias(NivjerPeer::INFOSUPERVISOR, $infosupervisor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::INFOSUPERVISOR, $infosupervisor, $comparison);
    }

    /**
     * Filter the query on the infotecnico column
     *
     * Example usage:
     * <code>
     * $query->filterByInfotecnico(1234); // WHERE infotecnico = 1234
     * $query->filterByInfotecnico(array(12, 34)); // WHERE infotecnico IN (12, 34)
     * $query->filterByInfotecnico(array('min' => 12)); // WHERE infotecnico >= 12
     * $query->filterByInfotecnico(array('max' => 12)); // WHERE infotecnico <= 12
     * </code>
     *
     * @param     mixed $infotecnico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByInfotecnico($infotecnico = null, $comparison = null)
    {
        if (is_array($infotecnico)) {
            $useMinMax = false;
            if (isset($infotecnico['min'])) {
                $this->addUsingAlias(NivjerPeer::INFOTECNICO, $infotecnico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infotecnico['max'])) {
                $this->addUsingAlias(NivjerPeer::INFOTECNICO, $infotecnico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::INFOTECNICO, $infotecnico, $comparison);
    }

    /**
     * Filter the query on the infootro column
     *
     * Example usage:
     * <code>
     * $query->filterByInfootro(1234); // WHERE infootro = 1234
     * $query->filterByInfootro(array(12, 34)); // WHERE infootro IN (12, 34)
     * $query->filterByInfootro(array('min' => 12)); // WHERE infootro >= 12
     * $query->filterByInfootro(array('max' => 12)); // WHERE infootro <= 12
     * </code>
     *
     * @param     mixed $infootro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function filterByInfootro($infootro = null, $comparison = null)
    {
        if (is_array($infootro)) {
            $useMinMax = false;
            if (isset($infootro['min'])) {
                $this->addUsingAlias(NivjerPeer::INFOOTRO, $infootro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infootro['max'])) {
                $this->addUsingAlias(NivjerPeer::INFOOTRO, $infootro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NivjerPeer::INFOOTRO, $infootro, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NivjerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(NivjerPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NivjerPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return NivjerQuery The current query, for fluid interface
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
     * @param   Nivjer $nivjer Object to remove from the list of results
     *
     * @return NivjerQuery The current query, for fluid interface
     */
    public function prune($nivjer = null)
    {
        if ($nivjer) {
            $this->addUsingAlias(NivjerPeer::ID, $nivjer->getIdEncuesta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
