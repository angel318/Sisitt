<?php


/**
 * Base class that represents a query for the 'permiso' table.
 *
 *
 *
 * @method PermisoQuery orderByIdPermiso($order = Criteria::ASC) Order by the id column
 * @method PermisoQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method PermisoQuery orderByModulo($order = Criteria::ASC) Order by the modulo column
 * @method PermisoQuery orderByAcceso($order = Criteria::ASC) Order by the acceso column
 * @method PermisoQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 *
 * @method PermisoQuery groupByIdPermiso() Group by the id column
 * @method PermisoQuery groupByIdUsuario() Group by the idusuario column
 * @method PermisoQuery groupByModulo() Group by the modulo column
 * @method PermisoQuery groupByAcceso() Group by the acceso column
 * @method PermisoQuery groupByTipo() Group by the tipo column
 *
 * @method PermisoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PermisoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PermisoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PermisoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method PermisoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method PermisoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Permiso findOne(PropelPDO $con = null) Return the first Permiso matching the query
 * @method Permiso findOneOrCreate(PropelPDO $con = null) Return the first Permiso matching the query, or a new Permiso object populated from the query conditions when no match is found
 *
 * @method Permiso findOneByIdUsuario(int $idusuario) Return the first Permiso filtered by the idusuario column
 * @method Permiso findOneByModulo(string $modulo) Return the first Permiso filtered by the modulo column
 * @method Permiso findOneByAcceso(int $acceso) Return the first Permiso filtered by the acceso column
 * @method Permiso findOneByTipo(int $tipo) Return the first Permiso filtered by the tipo column
 *
 * @method array findByIdPermiso(int $id) Return Permiso objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Permiso objects filtered by the idusuario column
 * @method array findByModulo(string $modulo) Return Permiso objects filtered by the modulo column
 * @method array findByAcceso(int $acceso) Return Permiso objects filtered by the acceso column
 * @method array findByTipo(int $tipo) Return Permiso objects filtered by the tipo column
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BasePermisoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePermisoQuery object.
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
            $modelName = 'Permiso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PermisoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PermisoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PermisoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PermisoQuery) {
            return $criteria;
        }
        $query = new PermisoQuery(null, null, $modelAlias);

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
     * @return   Permiso|Permiso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PermisoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PermisoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Permiso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPermiso($key, $con = null)
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
     * @return                 Permiso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `modulo`, `acceso`, `tipo` FROM `permiso` WHERE `id` = :p0';
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
            $obj = new Permiso();
            $obj->hydrate($row);
            PermisoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Permiso|Permiso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Permiso[]|mixed the list of results, formatted by the current formatter
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
     * @return PermisoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PermisoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PermisoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PermisoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPermiso(1234); // WHERE id = 1234
     * $query->filterByIdPermiso(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdPermiso(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdPermiso(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idPermiso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PermisoQuery The current query, for fluid interface
     */
    public function filterByIdPermiso($idPermiso = null, $comparison = null)
    {
        if (is_array($idPermiso)) {
            $useMinMax = false;
            if (isset($idPermiso['min'])) {
                $this->addUsingAlias(PermisoPeer::ID, $idPermiso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPermiso['max'])) {
                $this->addUsingAlias(PermisoPeer::ID, $idPermiso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PermisoPeer::ID, $idPermiso, $comparison);
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
     * @return PermisoQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(PermisoPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(PermisoPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PermisoPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the modulo column
     *
     * Example usage:
     * <code>
     * $query->filterByModulo('fooValue');   // WHERE modulo = 'fooValue'
     * $query->filterByModulo('%fooValue%'); // WHERE modulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modulo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PermisoQuery The current query, for fluid interface
     */
    public function filterByModulo($modulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modulo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modulo)) {
                $modulo = str_replace('*', '%', $modulo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PermisoPeer::MODULO, $modulo, $comparison);
    }

    /**
     * Filter the query on the acceso column
     *
     * @param     mixed $acceso The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PermisoQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByAcceso($acceso = null, $comparison = null)
    {
        if (is_scalar($acceso)) {
            $acceso = PermisoPeer::getSqlValueForEnum(PermisoPeer::ACCESO, $acceso);
        } elseif (is_array($acceso)) {
            $convertedValues = array();
            foreach ($acceso as $value) {
                $convertedValues[] = PermisoPeer::getSqlValueForEnum(PermisoPeer::ACCESO, $value);
            }
            $acceso = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PermisoPeer::ACCESO, $acceso, $comparison);
    }

    /**
     * Filter the query on the tipo column
     *
     * @param     mixed $tipo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PermisoQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByTipo($tipo = null, $comparison = null)
    {
        if (is_scalar($tipo)) {
            $tipo = PermisoPeer::getSqlValueForEnum(PermisoPeer::TIPO, $tipo);
        } elseif (is_array($tipo)) {
            $convertedValues = array();
            foreach ($tipo as $value) {
                $convertedValues[] = PermisoPeer::getSqlValueForEnum(PermisoPeer::TIPO, $value);
            }
            $tipo = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PermisoPeer::TIPO, $tipo, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PermisoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(PermisoPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PermisoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return PermisoQuery The current query, for fluid interface
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
     * @param   Permiso $permiso Object to remove from the list of results
     *
     * @return PermisoQuery The current query, for fluid interface
     */
    public function prune($permiso = null)
    {
        if ($permiso) {
            $this->addUsingAlias(PermisoPeer::ID, $permiso->getIdPermiso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
