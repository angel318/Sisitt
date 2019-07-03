<?php


/**
 * Base class that represents a row from the 'volantes' table.
 *
 *
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseVolante extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VolantePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VolantePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the carrera field.
     * @var        int
     */
    protected $carrera;

    /**
     * The value for the fecha field.
     * @var        string
     */
    protected $fecha;

    /**
     * The value for the descripcion field.
     * @var        string
     */
    protected $descripcion;

    /**
     * The value for the cargo field.
     * @var        string
     */
    protected $cargo;

    /**
     * The value for the direccion field.
     * @var        string
     */
    protected $direccion;

    /**
     * The value for the foto field.
     * @var        string
     */
    protected $foto;

    /**
     * The value for the telefono1 field.
     * @var        string
     */
    protected $telefono1;

    /**
     * The value for the telefono2 field.
     * @var        string
     */
    protected $telefono2;

    /**
     * The value for the estatus field.
     * @var        int
     */
    protected $estatus;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

    /**
     * @var        PropelObjectCollection|Candidato[] Collection to store aggregation of Candidato objects.
     */
    protected $collCandidatos;
    protected $collCandidatosPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $candidatosScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getIdVolante()
    {

        return $this->id;
    }

    /**
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdUsuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [carrera] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getCarrera()
    {
        if (null === $this->carrera) {
            return null;
        }
        $valueSet = VolantePeer::getValueSet(VolantePeer::CARRERA);
        if (!isset($valueSet[$this->carrera])) {
            throw new PropelException('Unknown stored enum key: ' . $this->carrera);
        }

        return $valueSet[$this->carrera];
    }

    /**
     * Get the [optionally formatted] temporal [fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->fecha === null) {
            return null;
        }

        if ($this->fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [descripcion] column value.
     *
     * @return string
     */
    public function getDescripcion()
    {

        return $this->descripcion;
    }

    /**
     * Get the [cargo] column value.
     *
     * @return string
     */
    public function getCargo()
    {

        return $this->cargo;
    }

    /**
     * Get the [direccion] column value.
     *
     * @return string
     */
    public function getDireccion()
    {

        return $this->direccion;
    }

    /**
     * Get the [foto] column value.
     *
     * @return string
     */
    public function getFoto()
    {

        return $this->foto;
    }

    /**
     * Get the [telefono1] column value.
     *
     * @return string
     */
    public function getTelefono1()
    {

        return $this->telefono1;
    }

    /**
     * Get the [telefono2] column value.
     *
     * @return string
     */
    public function getTelefono2()
    {

        return $this->telefono2;
    }

    /**
     * Get the [estatus] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getEstatus()
    {
        if (null === $this->estatus) {
            return null;
        }
        $valueSet = VolantePeer::getValueSet(VolantePeer::ESTATUS);
        if (!isset($valueSet[$this->estatus])) {
            throw new PropelException('Unknown stored enum key: ' . $this->estatus);
        }

        return $valueSet[$this->estatus];
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setIdVolante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = VolantePeer::ID;
        }


        return $this;
    } // setIdVolante()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = VolantePeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [carrera] column.
     *
     * @param  int $v new value
     * @return Volante The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setCarrera($v)
    {
        if ($v !== null) {
            $valueSet = VolantePeer::getValueSet(VolantePeer::CARRERA);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->carrera !== $v) {
            $this->carrera = $v;
            $this->modifiedColumns[] = VolantePeer::CARRERA;
        }


        return $this;
    } // setCarrera()

    /**
     * Sets the value of [fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Volante The current object (for fluent API support)
     */
    public function setFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha !== null && $tmpDt = new DateTime($this->fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha = $newDateAsString;
                $this->modifiedColumns[] = VolantePeer::FECHA;
            }
        } // if either are not null


        return $this;
    } // setFecha()

    /**
     * Set the value of [descripcion] column.
     *
     * @param  string $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[] = VolantePeer::DESCRIPCION;
        }


        return $this;
    } // setDescripcion()

    /**
     * Set the value of [cargo] column.
     *
     * @param  string $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setCargo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cargo !== $v) {
            $this->cargo = $v;
            $this->modifiedColumns[] = VolantePeer::CARGO;
        }


        return $this;
    } // setCargo()

    /**
     * Set the value of [direccion] column.
     *
     * @param  string $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setDireccion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->direccion !== $v) {
            $this->direccion = $v;
            $this->modifiedColumns[] = VolantePeer::DIRECCION;
        }


        return $this;
    } // setDireccion()

    /**
     * Set the value of [foto] column.
     *
     * @param  string $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setFoto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->foto !== $v) {
            $this->foto = $v;
            $this->modifiedColumns[] = VolantePeer::FOTO;
        }


        return $this;
    } // setFoto()

    /**
     * Set the value of [telefono1] column.
     *
     * @param  string $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setTelefono1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefono1 !== $v) {
            $this->telefono1 = $v;
            $this->modifiedColumns[] = VolantePeer::TELEFONO1;
        }


        return $this;
    } // setTelefono1()

    /**
     * Set the value of [telefono2] column.
     *
     * @param  string $v new value
     * @return Volante The current object (for fluent API support)
     */
    public function setTelefono2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefono2 !== $v) {
            $this->telefono2 = $v;
            $this->modifiedColumns[] = VolantePeer::TELEFONO2;
        }


        return $this;
    } // setTelefono2()

    /**
     * Set the value of [estatus] column.
     *
     * @param  int $v new value
     * @return Volante The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setEstatus($v)
    {
        if ($v !== null) {
            $valueSet = VolantePeer::getValueSet(VolantePeer::ESTATUS);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->estatus !== $v) {
            $this->estatus = $v;
            $this->modifiedColumns[] = VolantePeer::ESTATUS;
        }


        return $this;
    } // setEstatus()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idusuario = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->carrera = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fecha = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->descripcion = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cargo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->direccion = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->foto = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->telefono1 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->telefono2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->estatus = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = VolantePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Volante object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aUsuario !== null && $this->idusuario !== $this->aUsuario->getIdUsuario()) {
            $this->aUsuario = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(VolantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VolantePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuario = null;
            $this->collCandidatos = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(VolantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VolanteQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(VolantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                VolantePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUsuario !== null) {
                if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
                    $affectedRows += $this->aUsuario->save($con);
                }
                $this->setUsuario($this->aUsuario);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->candidatosScheduledForDeletion !== null) {
                if (!$this->candidatosScheduledForDeletion->isEmpty()) {
                    CandidatoQuery::create()
                        ->filterByPrimaryKeys($this->candidatosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->candidatosScheduledForDeletion = null;
                }
            }

            if ($this->collCandidatos !== null) {
                foreach ($this->collCandidatos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = VolantePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VolantePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VolantePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(VolantePeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(VolantePeer::CARRERA)) {
            $modifiedColumns[':p' . $index++]  = '`carrera`';
        }
        if ($this->isColumnModified(VolantePeer::FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`fecha`';
        }
        if ($this->isColumnModified(VolantePeer::DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`descripcion`';
        }
        if ($this->isColumnModified(VolantePeer::CARGO)) {
            $modifiedColumns[':p' . $index++]  = '`cargo`';
        }
        if ($this->isColumnModified(VolantePeer::DIRECCION)) {
            $modifiedColumns[':p' . $index++]  = '`direccion`';
        }
        if ($this->isColumnModified(VolantePeer::FOTO)) {
            $modifiedColumns[':p' . $index++]  = '`foto`';
        }
        if ($this->isColumnModified(VolantePeer::TELEFONO1)) {
            $modifiedColumns[':p' . $index++]  = '`telefono1`';
        }
        if ($this->isColumnModified(VolantePeer::TELEFONO2)) {
            $modifiedColumns[':p' . $index++]  = '`telefono2`';
        }
        if ($this->isColumnModified(VolantePeer::ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`estatus`';
        }

        $sql = sprintf(
            'INSERT INTO `volantes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`carrera`':
                        $stmt->bindValue($identifier, $this->carrera, PDO::PARAM_INT);
                        break;
                    case '`fecha`':
                        $stmt->bindValue($identifier, $this->fecha, PDO::PARAM_STR);
                        break;
                    case '`descripcion`':
                        $stmt->bindValue($identifier, $this->descripcion, PDO::PARAM_STR);
                        break;
                    case '`cargo`':
                        $stmt->bindValue($identifier, $this->cargo, PDO::PARAM_STR);
                        break;
                    case '`direccion`':
                        $stmt->bindValue($identifier, $this->direccion, PDO::PARAM_STR);
                        break;
                    case '`foto`':
                        $stmt->bindValue($identifier, $this->foto, PDO::PARAM_STR);
                        break;
                    case '`telefono1`':
                        $stmt->bindValue($identifier, $this->telefono1, PDO::PARAM_STR);
                        break;
                    case '`telefono2`':
                        $stmt->bindValue($identifier, $this->telefono2, PDO::PARAM_STR);
                        break;
                    case '`estatus`':
                        $stmt->bindValue($identifier, $this->estatus, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdVolante($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = VolantePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCandidatos !== null) {
                    foreach ($this->collCandidatos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = VolantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdVolante();
                break;
            case 1:
                return $this->getIdUsuario();
                break;
            case 2:
                return $this->getCarrera();
                break;
            case 3:
                return $this->getFecha();
                break;
            case 4:
                return $this->getDescripcion();
                break;
            case 5:
                return $this->getCargo();
                break;
            case 6:
                return $this->getDireccion();
                break;
            case 7:
                return $this->getFoto();
                break;
            case 8:
                return $this->getTelefono1();
                break;
            case 9:
                return $this->getTelefono2();
                break;
            case 10:
                return $this->getEstatus();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Volante'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Volante'][$this->getPrimaryKey()] = true;
        $keys = VolantePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdVolante(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getCarrera(),
            $keys[3] => $this->getFecha(),
            $keys[4] => $this->getDescripcion(),
            $keys[5] => $this->getCargo(),
            $keys[6] => $this->getDireccion(),
            $keys[7] => $this->getFoto(),
            $keys[8] => $this->getTelefono1(),
            $keys[9] => $this->getTelefono2(),
            $keys[10] => $this->getEstatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCandidatos) {
                $result['Candidatos'] = $this->collCandidatos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = VolantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdVolante($value);
                break;
            case 1:
                $this->setIdUsuario($value);
                break;
            case 2:
                $valueSet = VolantePeer::getValueSet(VolantePeer::CARRERA);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setCarrera($value);
                break;
            case 3:
                $this->setFecha($value);
                break;
            case 4:
                $this->setDescripcion($value);
                break;
            case 5:
                $this->setCargo($value);
                break;
            case 6:
                $this->setDireccion($value);
                break;
            case 7:
                $this->setFoto($value);
                break;
            case 8:
                $this->setTelefono1($value);
                break;
            case 9:
                $this->setTelefono2($value);
                break;
            case 10:
                $valueSet = VolantePeer::getValueSet(VolantePeer::ESTATUS);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setEstatus($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = VolantePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdVolante($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCarrera($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFecha($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDescripcion($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCargo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDireccion($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFoto($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTelefono1($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTelefono2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEstatus($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VolantePeer::DATABASE_NAME);

        if ($this->isColumnModified(VolantePeer::ID)) $criteria->add(VolantePeer::ID, $this->id);
        if ($this->isColumnModified(VolantePeer::IDUSUARIO)) $criteria->add(VolantePeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(VolantePeer::CARRERA)) $criteria->add(VolantePeer::CARRERA, $this->carrera);
        if ($this->isColumnModified(VolantePeer::FECHA)) $criteria->add(VolantePeer::FECHA, $this->fecha);
        if ($this->isColumnModified(VolantePeer::DESCRIPCION)) $criteria->add(VolantePeer::DESCRIPCION, $this->descripcion);
        if ($this->isColumnModified(VolantePeer::CARGO)) $criteria->add(VolantePeer::CARGO, $this->cargo);
        if ($this->isColumnModified(VolantePeer::DIRECCION)) $criteria->add(VolantePeer::DIRECCION, $this->direccion);
        if ($this->isColumnModified(VolantePeer::FOTO)) $criteria->add(VolantePeer::FOTO, $this->foto);
        if ($this->isColumnModified(VolantePeer::TELEFONO1)) $criteria->add(VolantePeer::TELEFONO1, $this->telefono1);
        if ($this->isColumnModified(VolantePeer::TELEFONO2)) $criteria->add(VolantePeer::TELEFONO2, $this->telefono2);
        if ($this->isColumnModified(VolantePeer::ESTATUS)) $criteria->add(VolantePeer::ESTATUS, $this->estatus);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(VolantePeer::DATABASE_NAME);
        $criteria->add(VolantePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdVolante();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdVolante($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdVolante();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Volante (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setCarrera($this->getCarrera());
        $copyObj->setFecha($this->getFecha());
        $copyObj->setDescripcion($this->getDescripcion());
        $copyObj->setCargo($this->getCargo());
        $copyObj->setDireccion($this->getDireccion());
        $copyObj->setFoto($this->getFoto());
        $copyObj->setTelefono1($this->getTelefono1());
        $copyObj->setTelefono2($this->getTelefono2());
        $copyObj->setEstatus($this->getEstatus());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCandidatos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCandidato($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdVolante(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Volante Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return VolantePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VolantePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Volante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdUsuario(NULL);
        } else {
            $this->setIdUsuario($v->getIdUsuario());
        }

        $this->aUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addVolante($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuario === null && ($this->idusuario !== null) && $doQuery) {
            $this->aUsuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuario->addVolantes($this);
             */
        }

        return $this->aUsuario;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Candidato' == $relationName) {
            $this->initCandidatos();
        }
    }

    /**
     * Clears out the collCandidatos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Volante The current object (for fluent API support)
     * @see        addCandidatos()
     */
    public function clearCandidatos()
    {
        $this->collCandidatos = null; // important to set this to null since that means it is uninitialized
        $this->collCandidatosPartial = null;

        return $this;
    }

    /**
     * reset is the collCandidatos collection loaded partially
     *
     * @return void
     */
    public function resetPartialCandidatos($v = true)
    {
        $this->collCandidatosPartial = $v;
    }

    /**
     * Initializes the collCandidatos collection.
     *
     * By default this just sets the collCandidatos collection to an empty array (like clearcollCandidatos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCandidatos($overrideExisting = true)
    {
        if (null !== $this->collCandidatos && !$overrideExisting) {
            return;
        }
        $this->collCandidatos = new PropelObjectCollection();
        $this->collCandidatos->setModel('Candidato');
    }

    /**
     * Gets an array of Candidato objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Volante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Candidato[] List of Candidato objects
     * @throws PropelException
     */
    public function getCandidatos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCandidatosPartial && !$this->isNew();
        if (null === $this->collCandidatos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCandidatos) {
                // return empty collection
                $this->initCandidatos();
            } else {
                $collCandidatos = CandidatoQuery::create(null, $criteria)
                    ->filterByVolante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCandidatosPartial && count($collCandidatos)) {
                      $this->initCandidatos(false);

                      foreach ($collCandidatos as $obj) {
                        if (false == $this->collCandidatos->contains($obj)) {
                          $this->collCandidatos->append($obj);
                        }
                      }

                      $this->collCandidatosPartial = true;
                    }

                    $collCandidatos->getInternalIterator()->rewind();

                    return $collCandidatos;
                }

                if ($partial && $this->collCandidatos) {
                    foreach ($this->collCandidatos as $obj) {
                        if ($obj->isNew()) {
                            $collCandidatos[] = $obj;
                        }
                    }
                }

                $this->collCandidatos = $collCandidatos;
                $this->collCandidatosPartial = false;
            }
        }

        return $this->collCandidatos;
    }

    /**
     * Sets a collection of Candidato objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $candidatos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Volante The current object (for fluent API support)
     */
    public function setCandidatos(PropelCollection $candidatos, PropelPDO $con = null)
    {
        $candidatosToDelete = $this->getCandidatos(new Criteria(), $con)->diff($candidatos);


        $this->candidatosScheduledForDeletion = $candidatosToDelete;

        foreach ($candidatosToDelete as $candidatoRemoved) {
            $candidatoRemoved->setVolante(null);
        }

        $this->collCandidatos = null;
        foreach ($candidatos as $candidato) {
            $this->addCandidato($candidato);
        }

        $this->collCandidatos = $candidatos;
        $this->collCandidatosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Candidato objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Candidato objects.
     * @throws PropelException
     */
    public function countCandidatos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCandidatosPartial && !$this->isNew();
        if (null === $this->collCandidatos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCandidatos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCandidatos());
            }
            $query = CandidatoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVolante($this)
                ->count($con);
        }

        return count($this->collCandidatos);
    }

    /**
     * Method called to associate a Candidato object to this object
     * through the Candidato foreign key attribute.
     *
     * @param    Candidato $l Candidato
     * @return Volante The current object (for fluent API support)
     */
    public function addCandidato(Candidato $l)
    {
        if ($this->collCandidatos === null) {
            $this->initCandidatos();
            $this->collCandidatosPartial = true;
        }

        if (!in_array($l, $this->collCandidatos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCandidato($l);

            if ($this->candidatosScheduledForDeletion and $this->candidatosScheduledForDeletion->contains($l)) {
                $this->candidatosScheduledForDeletion->remove($this->candidatosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Candidato $candidato The candidato object to add.
     */
    protected function doAddCandidato($candidato)
    {
        $this->collCandidatos[]= $candidato;
        $candidato->setVolante($this);
    }

    /**
     * @param	Candidato $candidato The candidato object to remove.
     * @return Volante The current object (for fluent API support)
     */
    public function removeCandidato($candidato)
    {
        if ($this->getCandidatos()->contains($candidato)) {
            $this->collCandidatos->remove($this->collCandidatos->search($candidato));
            if (null === $this->candidatosScheduledForDeletion) {
                $this->candidatosScheduledForDeletion = clone $this->collCandidatos;
                $this->candidatosScheduledForDeletion->clear();
            }
            $this->candidatosScheduledForDeletion[]= clone $candidato;
            $candidato->setVolante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Volante is new, it will return
     * an empty collection; or if this Volante has previously
     * been saved, it will retrieve related Candidatos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Volante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Candidato[] List of Candidato objects
     */
    public function getCandidatosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CandidatoQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getCandidatos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->idusuario = null;
        $this->carrera = null;
        $this->fecha = null;
        $this->descripcion = null;
        $this->cargo = null;
        $this->direccion = null;
        $this->foto = null;
        $this->telefono1 = null;
        $this->telefono2 = null;
        $this->estatus = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collCandidatos) {
                foreach ($this->collCandidatos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUsuario instanceof Persistent) {
              $this->aUsuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCandidatos instanceof PropelCollection) {
            $this->collCandidatos->clearIterator();
        }
        $this->collCandidatos = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VolantePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
