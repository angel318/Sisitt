<?php


/**
 * Base class that represents a query for the 'candidatos' table.
 *
 *
 *
 * @method CandidatoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CandidatoQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method CandidatoQuery orderByIdVolante($order = Criteria::ASC) Order by the idvolante column
 * @method CandidatoQuery orderByIdEmpresa($order = Criteria::ASC) Order by the idempresa column
 *
 * @method CandidatoQuery groupById() Group by the id column
 * @method CandidatoQuery groupByIdUsuario() Group by the idusuario column
 * @method CandidatoQuery groupByIdVolante() Group by the idvolante column
 * @method CandidatoQuery groupByIdEmpresa() Group by the idempresa column
 *
 * @method CandidatoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CandidatoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CandidatoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CandidatoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method CandidatoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method CandidatoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method CandidatoQuery leftJoinVolante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Volante relation
 * @method CandidatoQuery rightJoinVolante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Volante relation
 * @method CandidatoQuery innerJoinVolante($relationAlias = null) Adds a INNER JOIN clause to the query using the Volante relation
 *
 * @method Candidato findOne(PropelPDO $con = null) Return the first Candidato matching the query
 * @method Candidato findOneOrCreate(PropelPDO $con = null) Return the first Candidato matching the query, or a new Candidato object populated from the query conditions when no match is found
 *
 * @method Candidato findOneByIdUsuario(int $idusuario) Return the first Candidato filtered by the idusuario column
 * @method Candidato findOneByIdVolante(int $idvolante) Return the first Candidato filtered by the idvolante column
 * @method Candidato findOneByIdEmpresa(int $idempresa) Return the first Candidato filtered by the idempresa column
 *
 * @method array findById(int $id) Return Candidato objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Candidato objects filtered by the idusuario column
 * @method array findByIdVolante(int $idvolante) Return Candidato objects filtered by the idvolante column
 * @method array findByIdEmpresa(int $idempresa) Return Candidato objects filtered by the idempresa column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseCandidatoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCandidatoQuery object.
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
            $modelName = 'Candidato';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CandidatoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CandidatoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CandidatoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CandidatoQuery) {
            return $criteria;
        }
        $query = new CandidatoQuery(null, null, $modelAlias);

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
     * @return   Candidato|Candidato[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CandidatoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CandidatoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Candidato A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 Candidato A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `idvolante`, `idempresa` FROM `candidatos` WHERE `id` = :p0';
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
            $obj = new Candidato();
            $obj->hydrate($row);
            CandidatoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Candidato|Candidato[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Candidato[]|mixed the list of results, formatted by the current formatter
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
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CandidatoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CandidatoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CandidatoPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CandidatoPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandidatoPeer::ID, $id, $comparison);
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
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(CandidatoPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(CandidatoPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandidatoPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the idvolante column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVolante(1234); // WHERE idvolante = 1234
     * $query->filterByIdVolante(array(12, 34)); // WHERE idvolante IN (12, 34)
     * $query->filterByIdVolante(array('min' => 12)); // WHERE idvolante >= 12
     * $query->filterByIdVolante(array('max' => 12)); // WHERE idvolante <= 12
     * </code>
     *
     * @see       filterByVolante()
     *
     * @param     mixed $idVolante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function filterByIdVolante($idVolante = null, $comparison = null)
    {
        if (is_array($idVolante)) {
            $useMinMax = false;
            if (isset($idVolante['min'])) {
                $this->addUsingAlias(CandidatoPeer::IDVOLANTE, $idVolante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVolante['max'])) {
                $this->addUsingAlias(CandidatoPeer::IDVOLANTE, $idVolante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandidatoPeer::IDVOLANTE, $idVolante, $comparison);
    }

    /**
     * Filter the query on the idempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEmpresa(1234); // WHERE idempresa = 1234
     * $query->filterByIdEmpresa(array(12, 34)); // WHERE idempresa IN (12, 34)
     * $query->filterByIdEmpresa(array('min' => 12)); // WHERE idempresa >= 12
     * $query->filterByIdEmpresa(array('max' => 12)); // WHERE idempresa <= 12
     * </code>
     *
     * @param     mixed $idEmpresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function filterByIdEmpresa($idEmpresa = null, $comparison = null)
    {
        if (is_array($idEmpresa)) {
            $useMinMax = false;
            if (isset($idEmpresa['min'])) {
                $this->addUsingAlias(CandidatoPeer::IDEMPRESA, $idEmpresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEmpresa['max'])) {
                $this->addUsingAlias(CandidatoPeer::IDEMPRESA, $idEmpresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CandidatoPeer::IDEMPRESA, $idEmpresa, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CandidatoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CandidatoPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CandidatoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return CandidatoQuery The current query, for fluid interface
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
     * Filter the query by a related Volante object
     *
     * @param   Volante|PropelObjectCollection $volante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CandidatoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVolante($volante, $comparison = null)
    {
        if ($volante instanceof Volante) {
            return $this
                ->addUsingAlias(CandidatoPeer::IDVOLANTE, $volante->getIdVolante(), $comparison);
        } elseif ($volante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CandidatoPeer::IDVOLANTE, $volante->toKeyValue('PrimaryKey', 'IdVolante'), $comparison);
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
     * @return CandidatoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Candidato $candidato Object to remove from the list of results
     *
     * @return CandidatoQuery The current query, for fluid interface
     */
    public function prune($candidato = null)
    {
        if ($candidato) {
            $this->addUsingAlias(CandidatoPeer::ID, $candidato->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
