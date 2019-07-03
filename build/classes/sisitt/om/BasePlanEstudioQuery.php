<?php


/**
 * Base class that represents a query for the 'planestudio' table.
 *
 *
 *
 * @method PlanEstudioQuery orderByIdPlanEstudio($order = Criteria::ASC) Order by the id column
 * @method PlanEstudioQuery orderByNombrePlanEstudio($order = Criteria::ASC) Order by the nombreplaestudio column
 *
 * @method PlanEstudioQuery groupByIdPlanEstudio() Group by the id column
 * @method PlanEstudioQuery groupByNombrePlanEstudio() Group by the nombreplaestudio column
 *
 * @method PlanEstudioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PlanEstudioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PlanEstudioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PlanEstudioQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method PlanEstudioQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method PlanEstudioQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method PlanEstudio findOne(PropelPDO $con = null) Return the first PlanEstudio matching the query
 * @method PlanEstudio findOneOrCreate(PropelPDO $con = null) Return the first PlanEstudio matching the query, or a new PlanEstudio object populated from the query conditions when no match is found
 *
 * @method PlanEstudio findOneByNombrePlanEstudio(string $nombreplaestudio) Return the first PlanEstudio filtered by the nombreplaestudio column
 *
 * @method array findByIdPlanEstudio(int $id) Return PlanEstudio objects filtered by the id column
 * @method array findByNombrePlanEstudio(string $nombreplaestudio) Return PlanEstudio objects filtered by the nombreplaestudio column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BasePlanEstudioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePlanEstudioQuery object.
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
            $modelName = 'PlanEstudio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PlanEstudioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PlanEstudioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PlanEstudioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PlanEstudioQuery) {
            return $criteria;
        }
        $query = new PlanEstudioQuery(null, null, $modelAlias);

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
     * @return   PlanEstudio|PlanEstudio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PlanEstudioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PlanEstudioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PlanEstudio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPlanEstudio($key, $con = null)
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
     * @return                 PlanEstudio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nombreplaestudio` FROM `planestudio` WHERE `id` = :p0';
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
            $obj = new PlanEstudio();
            $obj->hydrate($row);
            PlanEstudioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PlanEstudio|PlanEstudio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PlanEstudio[]|mixed the list of results, formatted by the current formatter
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
     * @return PlanEstudioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PlanEstudioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PlanEstudioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PlanEstudioPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPlanEstudio(1234); // WHERE id = 1234
     * $query->filterByIdPlanEstudio(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdPlanEstudio(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdPlanEstudio(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idPlanEstudio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanEstudioQuery The current query, for fluid interface
     */
    public function filterByIdPlanEstudio($idPlanEstudio = null, $comparison = null)
    {
        if (is_array($idPlanEstudio)) {
            $useMinMax = false;
            if (isset($idPlanEstudio['min'])) {
                $this->addUsingAlias(PlanEstudioPeer::ID, $idPlanEstudio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPlanEstudio['max'])) {
                $this->addUsingAlias(PlanEstudioPeer::ID, $idPlanEstudio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanEstudioPeer::ID, $idPlanEstudio, $comparison);
    }

    /**
     * Filter the query on the nombreplaestudio column
     *
     * Example usage:
     * <code>
     * $query->filterByNombrePlanEstudio('fooValue');   // WHERE nombreplaestudio = 'fooValue'
     * $query->filterByNombrePlanEstudio('%fooValue%'); // WHERE nombreplaestudio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombrePlanEstudio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanEstudioQuery The current query, for fluid interface
     */
    public function filterByNombrePlanEstudio($nombrePlanEstudio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombrePlanEstudio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombrePlanEstudio)) {
                $nombrePlanEstudio = str_replace('*', '%', $nombrePlanEstudio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanEstudioPeer::NOMBREPLAESTUDIO, $nombrePlanEstudio, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanEstudioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(PlanEstudioPeer::ID, $usuario->getPlanId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioQuery()
                ->filterByPrimaryKeys($usuario->getPrimaryKeys())
                ->endUse();
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
     * @return PlanEstudioQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PlanEstudio $planEstudio Object to remove from the list of results
     *
     * @return PlanEstudioQuery The current query, for fluid interface
     */
    public function prune($planEstudio = null)
    {
        if ($planEstudio) {
            $this->addUsingAlias(PlanEstudioPeer::ID, $planEstudio->getIdPlanEstudio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
