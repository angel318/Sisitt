<?php


/**
 * Base class that represents a row from the 'usuario' table.
 *
 *
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseUsuario extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UsuarioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsuarioPeer
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
     * The value for the matricula field.
     * @var        string
     */
    protected $matricula;

    /**
     * The value for the correo field.
     * @var        string
     */
    protected $correo;

    /**
     * The value for the contrasena field.
     * @var        string
     */
    protected $contrasena;

    /**
     * The value for the nombres field.
     * @var        string
     */
    protected $nombres;

    /**
     * The value for the apellidop field.
     * @var        string
     */
    protected $apellidop;

    /**
     * The value for the apellidom field.
     * @var        string
     */
    protected $apellidom;

    /**
     * The value for the curp field.
     * @var        string
     */
    protected $curp;

    /**
     * The value for the rfc field.
     * @var        string
     */
    protected $rfc;

    /**
     * The value for the telefono field.
     * @var        string
     */
    protected $telefono;

    /**
     * The value for the plan_id field.
     * @var        int
     */
    protected $plan_id;

    /**
     * The value for the contacto_id field.
     * @var        int
     */
    protected $contacto_id;

    /**
     * The value for the estatus field.
     * @var        int
     */
    protected $estatus;

    /**
     * The value for the tipo field.
     * @var        int
     */
    protected $tipo;

    /**
     * The value for the genero field.
     * @var        int
     */
    protected $genero;

    /**
     * The value for the nacimiento field.
     * @var        string
     */
    protected $nacimiento;

    /**
     * The value for the foto field.
     * @var        string
     */
    protected $foto;

    /**
     * @var        PlanEstudio
     */
    protected $aPlanEstudio;

    /**
     * @var        PropelObjectCollection|Permiso[] Collection to store aggregation of Permiso objects.
     */
    protected $collPermisos;
    protected $collPermisosPartial;

    /**
     * @var        PropelObjectCollection|Datgen[] Collection to store aggregation of Datgen objects.
     */
    protected $collDatgens;
    protected $collDatgensPartial;

    /**
     * @var        PropelObjectCollection|Ubilab[] Collection to store aggregation of Ubilab objects.
     */
    protected $collUbilabs;
    protected $collUbilabsPartial;

    /**
     * @var        PropelObjectCollection|Nivjer[] Collection to store aggregation of Nivjer objects.
     */
    protected $collNivjers;
    protected $collNivjersPartial;

    /**
     * @var        PropelObjectCollection|comlab[] Collection to store aggregation of comlab objects.
     */
    protected $collcomlabs;
    protected $collcomlabsPartial;

    /**
     * @var        PropelObjectCollection|Volante[] Collection to store aggregation of Volante objects.
     */
    protected $collVolantes;
    protected $collVolantesPartial;

    /**
     * @var        PropelObjectCollection|Curriculum[] Collection to store aggregation of Curriculum objects.
     */
    protected $collCurriculums;
    protected $collCurriculumsPartial;

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
    protected $permisosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $datgensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ubilabsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $nivjersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $comlabsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $volantesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $curriculumsScheduledForDeletion = null;

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
    public function getIdUsuario()
    {

        return $this->id;
    }

    /**
     * Get the [matricula] column value.
     *
     * @return string
     */
    public function getMatricula()
    {

        return $this->matricula;
    }

    /**
     * Get the [correo] column value.
     *
     * @return string
     */
    public function getCorreo()
    {

        return $this->correo;
    }

    /**
     * Get the [contrasena] column value.
     *
     * @return string
     */
    public function getContrasena()
    {

        return $this->contrasena;
    }

    /**
     * Get the [nombres] column value.
     *
     * @return string
     */
    public function getNombres()
    {

        return $this->nombres;
    }

    /**
     * Get the [apellidop] column value.
     *
     * @return string
     */
    public function getApellidoPaterno()
    {

        return $this->apellidop;
    }

    /**
     * Get the [apellidom] column value.
     *
     * @return string
     */
    public function getApellidoMaterno()
    {

        return $this->apellidom;
    }

    /**
     * Get the [curp] column value.
     *
     * @return string
     */
    public function getCurp()
    {

        return $this->curp;
    }

    /**
     * Get the [rfc] column value.
     *
     * @return string
     */
    public function getRfc()
    {

        return $this->rfc;
    }

    /**
     * Get the [telefono] column value.
     *
     * @return string
     */
    public function getTelefono()
    {

        return $this->telefono;
    }

    /**
     * Get the [plan_id] column value.
     *
     * @return int
     */
    public function getPlanId()
    {

        return $this->plan_id;
    }

    /**
     * Get the [contacto_id] column value.
     *
     * @return int
     */
    public function getContactoId()
    {

        return $this->contacto_id;
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
        $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::ESTATUS);
        if (!isset($valueSet[$this->estatus])) {
            throw new PropelException('Unknown stored enum key: ' . $this->estatus);
        }

        return $valueSet[$this->estatus];
    }

    /**
     * Get the [tipo] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getTipo()
    {
        if (null === $this->tipo) {
            return null;
        }
        $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::TIPO);
        if (!isset($valueSet[$this->tipo])) {
            throw new PropelException('Unknown stored enum key: ' . $this->tipo);
        }

        return $valueSet[$this->tipo];
    }

    /**
     * Get the [genero] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getGenero()
    {
        if (null === $this->genero) {
            return null;
        }
        $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::GENERO);
        if (!isset($valueSet[$this->genero])) {
            throw new PropelException('Unknown stored enum key: ' . $this->genero);
        }

        return $valueSet[$this->genero];
    }

    /**
     * Get the [optionally formatted] temporal [nacimiento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getNacimiento($format = '%x')
    {
        if ($this->nacimiento === null) {
            return null;
        }

        if ($this->nacimiento === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->nacimiento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->nacimiento, true), $x);
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
     * Get the [foto] column value.
     *
     * @return string
     */
    public function getFoto()
    {

        return $this->foto;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UsuarioPeer::ID;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [matricula] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setMatricula($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->matricula !== $v) {
            $this->matricula = $v;
            $this->modifiedColumns[] = UsuarioPeer::MATRICULA;
        }


        return $this;
    } // setMatricula()

    /**
     * Set the value of [correo] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setCorreo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->correo !== $v) {
            $this->correo = $v;
            $this->modifiedColumns[] = UsuarioPeer::CORREO;
        }


        return $this;
    } // setCorreo()

    /**
     * Set the value of [contrasena] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setContrasena($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrasena !== $v) {
            $this->contrasena = $v;
            $this->modifiedColumns[] = UsuarioPeer::CONTRASENA;
        }


        return $this;
    } // setContrasena()

    /**
     * Set the value of [nombres] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setNombres($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombres !== $v) {
            $this->nombres = $v;
            $this->modifiedColumns[] = UsuarioPeer::NOMBRES;
        }


        return $this;
    } // setNombres()

    /**
     * Set the value of [apellidop] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setApellidoPaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apellidop !== $v) {
            $this->apellidop = $v;
            $this->modifiedColumns[] = UsuarioPeer::APELLIDOP;
        }


        return $this;
    } // setApellidoPaterno()

    /**
     * Set the value of [apellidom] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setApellidoMaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apellidom !== $v) {
            $this->apellidom = $v;
            $this->modifiedColumns[] = UsuarioPeer::APELLIDOM;
        }


        return $this;
    } // setApellidoMaterno()

    /**
     * Set the value of [curp] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setCurp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->curp !== $v) {
            $this->curp = $v;
            $this->modifiedColumns[] = UsuarioPeer::CURP;
        }


        return $this;
    } // setCurp()

    /**
     * Set the value of [rfc] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rfc !== $v) {
            $this->rfc = $v;
            $this->modifiedColumns[] = UsuarioPeer::RFC;
        }


        return $this;
    } // setRfc()

    /**
     * Set the value of [telefono] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefono !== $v) {
            $this->telefono = $v;
            $this->modifiedColumns[] = UsuarioPeer::TELEFONO;
        }


        return $this;
    } // setTelefono()

    /**
     * Set the value of [plan_id] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setPlanId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->plan_id !== $v) {
            $this->plan_id = $v;
            $this->modifiedColumns[] = UsuarioPeer::PLAN_ID;
        }

        if ($this->aPlanEstudio !== null && $this->aPlanEstudio->getIdPlanEstudio() !== $v) {
            $this->aPlanEstudio = null;
        }


        return $this;
    } // setPlanId()

    /**
     * Set the value of [contacto_id] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setContactoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->contacto_id !== $v) {
            $this->contacto_id = $v;
            $this->modifiedColumns[] = UsuarioPeer::CONTACTO_ID;
        }


        return $this;
    } // setContactoId()

    /**
     * Set the value of [estatus] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setEstatus($v)
    {
        if ($v !== null) {
            $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::ESTATUS);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->estatus !== $v) {
            $this->estatus = $v;
            $this->modifiedColumns[] = UsuarioPeer::ESTATUS;
        }


        return $this;
    } // setEstatus()

    /**
     * Set the value of [tipo] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setTipo($v)
    {
        if ($v !== null) {
            $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::TIPO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->tipo !== $v) {
            $this->tipo = $v;
            $this->modifiedColumns[] = UsuarioPeer::TIPO;
        }


        return $this;
    } // setTipo()

    /**
     * Set the value of [genero] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setGenero($v)
    {
        if ($v !== null) {
            $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::GENERO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->genero !== $v) {
            $this->genero = $v;
            $this->modifiedColumns[] = UsuarioPeer::GENERO;
        }


        return $this;
    } // setGenero()

    /**
     * Sets the value of [nacimiento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Usuario The current object (for fluent API support)
     */
    public function setNacimiento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->nacimiento !== null || $dt !== null) {
            $currentDateAsString = ($this->nacimiento !== null && $tmpDt = new DateTime($this->nacimiento)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->nacimiento = $newDateAsString;
                $this->modifiedColumns[] = UsuarioPeer::NACIMIENTO;
            }
        } // if either are not null


        return $this;
    } // setNacimiento()

    /**
     * Set the value of [foto] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setFoto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->foto !== $v) {
            $this->foto = $v;
            $this->modifiedColumns[] = UsuarioPeer::FOTO;
        }


        return $this;
    } // setFoto()

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
            $this->matricula = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->correo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->contrasena = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nombres = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->apellidop = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->apellidom = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->curp = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->rfc = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->telefono = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->plan_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->contacto_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->estatus = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->tipo = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->genero = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->nacimiento = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->foto = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = UsuarioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Usuario object", $e);
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

        if ($this->aPlanEstudio !== null && $this->plan_id !== $this->aPlanEstudio->getIdPlanEstudio()) {
            $this->aPlanEstudio = null;
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsuarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPlanEstudio = null;
            $this->collPermisos = null;

            $this->collDatgens = null;

            $this->collUbilabs = null;

            $this->collNivjers = null;

            $this->collcomlabs = null;

            $this->collVolantes = null;

            $this->collCurriculums = null;

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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsuarioQuery::create()
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UsuarioPeer::addInstanceToPool($this);
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

            if ($this->aPlanEstudio !== null) {
                if ($this->aPlanEstudio->isModified() || $this->aPlanEstudio->isNew()) {
                    $affectedRows += $this->aPlanEstudio->save($con);
                }
                $this->setPlanEstudio($this->aPlanEstudio);
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

            if ($this->permisosScheduledForDeletion !== null) {
                if (!$this->permisosScheduledForDeletion->isEmpty()) {
                    PermisoQuery::create()
                        ->filterByPrimaryKeys($this->permisosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->permisosScheduledForDeletion = null;
                }
            }

            if ($this->collPermisos !== null) {
                foreach ($this->collPermisos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->datgensScheduledForDeletion !== null) {
                if (!$this->datgensScheduledForDeletion->isEmpty()) {
                    DatgenQuery::create()
                        ->filterByPrimaryKeys($this->datgensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->datgensScheduledForDeletion = null;
                }
            }

            if ($this->collDatgens !== null) {
                foreach ($this->collDatgens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ubilabsScheduledForDeletion !== null) {
                if (!$this->ubilabsScheduledForDeletion->isEmpty()) {
                    UbilabQuery::create()
                        ->filterByPrimaryKeys($this->ubilabsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ubilabsScheduledForDeletion = null;
                }
            }

            if ($this->collUbilabs !== null) {
                foreach ($this->collUbilabs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->nivjersScheduledForDeletion !== null) {
                if (!$this->nivjersScheduledForDeletion->isEmpty()) {
                    NivjerQuery::create()
                        ->filterByPrimaryKeys($this->nivjersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->nivjersScheduledForDeletion = null;
                }
            }

            if ($this->collNivjers !== null) {
                foreach ($this->collNivjers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->comlabsScheduledForDeletion !== null) {
                if (!$this->comlabsScheduledForDeletion->isEmpty()) {
                    comlabQuery::create()
                        ->filterByPrimaryKeys($this->comlabsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->comlabsScheduledForDeletion = null;
                }
            }

            if ($this->collcomlabs !== null) {
                foreach ($this->collcomlabs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->volantesScheduledForDeletion !== null) {
                if (!$this->volantesScheduledForDeletion->isEmpty()) {
                    VolanteQuery::create()
                        ->filterByPrimaryKeys($this->volantesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->volantesScheduledForDeletion = null;
                }
            }

            if ($this->collVolantes !== null) {
                foreach ($this->collVolantes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->curriculumsScheduledForDeletion !== null) {
                if (!$this->curriculumsScheduledForDeletion->isEmpty()) {
                    CurriculumQuery::create()
                        ->filterByPrimaryKeys($this->curriculumsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->curriculumsScheduledForDeletion = null;
                }
            }

            if ($this->collCurriculums !== null) {
                foreach ($this->collCurriculums as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = UsuarioPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsuarioPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsuarioPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UsuarioPeer::MATRICULA)) {
            $modifiedColumns[':p' . $index++]  = '`matricula`';
        }
        if ($this->isColumnModified(UsuarioPeer::CORREO)) {
            $modifiedColumns[':p' . $index++]  = '`correo`';
        }
        if ($this->isColumnModified(UsuarioPeer::CONTRASENA)) {
            $modifiedColumns[':p' . $index++]  = '`contrasena`';
        }
        if ($this->isColumnModified(UsuarioPeer::NOMBRES)) {
            $modifiedColumns[':p' . $index++]  = '`nombres`';
        }
        if ($this->isColumnModified(UsuarioPeer::APELLIDOP)) {
            $modifiedColumns[':p' . $index++]  = '`apellidop`';
        }
        if ($this->isColumnModified(UsuarioPeer::APELLIDOM)) {
            $modifiedColumns[':p' . $index++]  = '`apellidom`';
        }
        if ($this->isColumnModified(UsuarioPeer::CURP)) {
            $modifiedColumns[':p' . $index++]  = '`curp`';
        }
        if ($this->isColumnModified(UsuarioPeer::RFC)) {
            $modifiedColumns[':p' . $index++]  = '`rfc`';
        }
        if ($this->isColumnModified(UsuarioPeer::TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`telefono`';
        }
        if ($this->isColumnModified(UsuarioPeer::PLAN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`plan_id`';
        }
        if ($this->isColumnModified(UsuarioPeer::CONTACTO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`contacto_id`';
        }
        if ($this->isColumnModified(UsuarioPeer::ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`estatus`';
        }
        if ($this->isColumnModified(UsuarioPeer::TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`tipo`';
        }
        if ($this->isColumnModified(UsuarioPeer::GENERO)) {
            $modifiedColumns[':p' . $index++]  = '`genero`';
        }
        if ($this->isColumnModified(UsuarioPeer::NACIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`nacimiento`';
        }
        if ($this->isColumnModified(UsuarioPeer::FOTO)) {
            $modifiedColumns[':p' . $index++]  = '`foto`';
        }

        $sql = sprintf(
            'INSERT INTO `usuario` (%s) VALUES (%s)',
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
                    case '`matricula`':
                        $stmt->bindValue($identifier, $this->matricula, PDO::PARAM_STR);
                        break;
                    case '`correo`':
                        $stmt->bindValue($identifier, $this->correo, PDO::PARAM_STR);
                        break;
                    case '`contrasena`':
                        $stmt->bindValue($identifier, $this->contrasena, PDO::PARAM_STR);
                        break;
                    case '`nombres`':
                        $stmt->bindValue($identifier, $this->nombres, PDO::PARAM_STR);
                        break;
                    case '`apellidop`':
                        $stmt->bindValue($identifier, $this->apellidop, PDO::PARAM_STR);
                        break;
                    case '`apellidom`':
                        $stmt->bindValue($identifier, $this->apellidom, PDO::PARAM_STR);
                        break;
                    case '`curp`':
                        $stmt->bindValue($identifier, $this->curp, PDO::PARAM_STR);
                        break;
                    case '`rfc`':
                        $stmt->bindValue($identifier, $this->rfc, PDO::PARAM_STR);
                        break;
                    case '`telefono`':
                        $stmt->bindValue($identifier, $this->telefono, PDO::PARAM_STR);
                        break;
                    case '`plan_id`':
                        $stmt->bindValue($identifier, $this->plan_id, PDO::PARAM_INT);
                        break;
                    case '`contacto_id`':
                        $stmt->bindValue($identifier, $this->contacto_id, PDO::PARAM_INT);
                        break;
                    case '`estatus`':
                        $stmt->bindValue($identifier, $this->estatus, PDO::PARAM_INT);
                        break;
                    case '`tipo`':
                        $stmt->bindValue($identifier, $this->tipo, PDO::PARAM_INT);
                        break;
                    case '`genero`':
                        $stmt->bindValue($identifier, $this->genero, PDO::PARAM_INT);
                        break;
                    case '`nacimiento`':
                        $stmt->bindValue($identifier, $this->nacimiento, PDO::PARAM_STR);
                        break;
                    case '`foto`':
                        $stmt->bindValue($identifier, $this->foto, PDO::PARAM_STR);
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
        $this->setIdUsuario($pk);

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

            if ($this->aPlanEstudio !== null) {
                if (!$this->aPlanEstudio->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPlanEstudio->getValidationFailures());
                }
            }


            if (($retval = UsuarioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPermisos !== null) {
                    foreach ($this->collPermisos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDatgens !== null) {
                    foreach ($this->collDatgens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUbilabs !== null) {
                    foreach ($this->collUbilabs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNivjers !== null) {
                    foreach ($this->collNivjers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collcomlabs !== null) {
                    foreach ($this->collcomlabs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVolantes !== null) {
                    foreach ($this->collVolantes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCurriculums !== null) {
                    foreach ($this->collCurriculums as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdUsuario();
                break;
            case 1:
                return $this->getMatricula();
                break;
            case 2:
                return $this->getCorreo();
                break;
            case 3:
                return $this->getContrasena();
                break;
            case 4:
                return $this->getNombres();
                break;
            case 5:
                return $this->getApellidoPaterno();
                break;
            case 6:
                return $this->getApellidoMaterno();
                break;
            case 7:
                return $this->getCurp();
                break;
            case 8:
                return $this->getRfc();
                break;
            case 9:
                return $this->getTelefono();
                break;
            case 10:
                return $this->getPlanId();
                break;
            case 11:
                return $this->getContactoId();
                break;
            case 12:
                return $this->getEstatus();
                break;
            case 13:
                return $this->getTipo();
                break;
            case 14:
                return $this->getGenero();
                break;
            case 15:
                return $this->getNacimiento();
                break;
            case 16:
                return $this->getFoto();
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
        if (isset($alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()] = true;
        $keys = UsuarioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdUsuario(),
            $keys[1] => $this->getMatricula(),
            $keys[2] => $this->getCorreo(),
            $keys[3] => $this->getContrasena(),
            $keys[4] => $this->getNombres(),
            $keys[5] => $this->getApellidoPaterno(),
            $keys[6] => $this->getApellidoMaterno(),
            $keys[7] => $this->getCurp(),
            $keys[8] => $this->getRfc(),
            $keys[9] => $this->getTelefono(),
            $keys[10] => $this->getPlanId(),
            $keys[11] => $this->getContactoId(),
            $keys[12] => $this->getEstatus(),
            $keys[13] => $this->getTipo(),
            $keys[14] => $this->getGenero(),
            $keys[15] => $this->getNacimiento(),
            $keys[16] => $this->getFoto(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPlanEstudio) {
                $result['PlanEstudio'] = $this->aPlanEstudio->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPermisos) {
                $result['Permisos'] = $this->collPermisos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDatgens) {
                $result['Datgens'] = $this->collDatgens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUbilabs) {
                $result['Ubilabs'] = $this->collUbilabs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNivjers) {
                $result['Nivjers'] = $this->collNivjers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collcomlabs) {
                $result['comlabs'] = $this->collcomlabs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVolantes) {
                $result['Volantes'] = $this->collVolantes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCurriculums) {
                $result['Curriculums'] = $this->collCurriculums->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdUsuario($value);
                break;
            case 1:
                $this->setMatricula($value);
                break;
            case 2:
                $this->setCorreo($value);
                break;
            case 3:
                $this->setContrasena($value);
                break;
            case 4:
                $this->setNombres($value);
                break;
            case 5:
                $this->setApellidoPaterno($value);
                break;
            case 6:
                $this->setApellidoMaterno($value);
                break;
            case 7:
                $this->setCurp($value);
                break;
            case 8:
                $this->setRfc($value);
                break;
            case 9:
                $this->setTelefono($value);
                break;
            case 10:
                $this->setPlanId($value);
                break;
            case 11:
                $this->setContactoId($value);
                break;
            case 12:
                $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::ESTATUS);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setEstatus($value);
                break;
            case 13:
                $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::TIPO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setTipo($value);
                break;
            case 14:
                $valueSet = UsuarioPeer::getValueSet(UsuarioPeer::GENERO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setGenero($value);
                break;
            case 15:
                $this->setNacimiento($value);
                break;
            case 16:
                $this->setFoto($value);
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
        $keys = UsuarioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdUsuario($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMatricula($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCorreo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setContrasena($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNombres($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setApellidoPaterno($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setApellidoMaterno($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCurp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRfc($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTelefono($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPlanId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setContactoId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEstatus($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTipo($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setGenero($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNacimiento($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFoto($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsuarioPeer::ID)) $criteria->add(UsuarioPeer::ID, $this->id);
        if ($this->isColumnModified(UsuarioPeer::MATRICULA)) $criteria->add(UsuarioPeer::MATRICULA, $this->matricula);
        if ($this->isColumnModified(UsuarioPeer::CORREO)) $criteria->add(UsuarioPeer::CORREO, $this->correo);
        if ($this->isColumnModified(UsuarioPeer::CONTRASENA)) $criteria->add(UsuarioPeer::CONTRASENA, $this->contrasena);
        if ($this->isColumnModified(UsuarioPeer::NOMBRES)) $criteria->add(UsuarioPeer::NOMBRES, $this->nombres);
        if ($this->isColumnModified(UsuarioPeer::APELLIDOP)) $criteria->add(UsuarioPeer::APELLIDOP, $this->apellidop);
        if ($this->isColumnModified(UsuarioPeer::APELLIDOM)) $criteria->add(UsuarioPeer::APELLIDOM, $this->apellidom);
        if ($this->isColumnModified(UsuarioPeer::CURP)) $criteria->add(UsuarioPeer::CURP, $this->curp);
        if ($this->isColumnModified(UsuarioPeer::RFC)) $criteria->add(UsuarioPeer::RFC, $this->rfc);
        if ($this->isColumnModified(UsuarioPeer::TELEFONO)) $criteria->add(UsuarioPeer::TELEFONO, $this->telefono);
        if ($this->isColumnModified(UsuarioPeer::PLAN_ID)) $criteria->add(UsuarioPeer::PLAN_ID, $this->plan_id);
        if ($this->isColumnModified(UsuarioPeer::CONTACTO_ID)) $criteria->add(UsuarioPeer::CONTACTO_ID, $this->contacto_id);
        if ($this->isColumnModified(UsuarioPeer::ESTATUS)) $criteria->add(UsuarioPeer::ESTATUS, $this->estatus);
        if ($this->isColumnModified(UsuarioPeer::TIPO)) $criteria->add(UsuarioPeer::TIPO, $this->tipo);
        if ($this->isColumnModified(UsuarioPeer::GENERO)) $criteria->add(UsuarioPeer::GENERO, $this->genero);
        if ($this->isColumnModified(UsuarioPeer::NACIMIENTO)) $criteria->add(UsuarioPeer::NACIMIENTO, $this->nacimiento);
        if ($this->isColumnModified(UsuarioPeer::FOTO)) $criteria->add(UsuarioPeer::FOTO, $this->foto);

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
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
        $criteria->add(UsuarioPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdUsuario();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdUsuario($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdUsuario();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Usuario (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMatricula($this->getMatricula());
        $copyObj->setCorreo($this->getCorreo());
        $copyObj->setContrasena($this->getContrasena());
        $copyObj->setNombres($this->getNombres());
        $copyObj->setApellidoPaterno($this->getApellidoPaterno());
        $copyObj->setApellidoMaterno($this->getApellidoMaterno());
        $copyObj->setCurp($this->getCurp());
        $copyObj->setRfc($this->getRfc());
        $copyObj->setTelefono($this->getTelefono());
        $copyObj->setPlanId($this->getPlanId());
        $copyObj->setContactoId($this->getContactoId());
        $copyObj->setEstatus($this->getEstatus());
        $copyObj->setTipo($this->getTipo());
        $copyObj->setGenero($this->getGenero());
        $copyObj->setNacimiento($this->getNacimiento());
        $copyObj->setFoto($this->getFoto());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPermisos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPermiso($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDatgens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDatgen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUbilabs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUbilab($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNivjers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNivjer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getcomlabs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addcomlab($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVolantes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVolante($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCurriculums() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCurriculum($relObj->copy($deepCopy));
                }
            }

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
            $copyObj->setIdUsuario(NULL); // this is a auto-increment column, so set to default value
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
     * @return Usuario Clone of current object.
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
     * @return UsuarioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsuarioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a PlanEstudio object.
     *
     * @param                  PlanEstudio $v
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPlanEstudio(PlanEstudio $v = null)
    {
        if ($v === null) {
            $this->setPlanId(NULL);
        } else {
            $this->setPlanId($v->getIdPlanEstudio());
        }

        $this->aPlanEstudio = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the PlanEstudio object, it will not be re-added.
        if ($v !== null) {
            $v->addUsuario($this);
        }


        return $this;
    }


    /**
     * Get the associated PlanEstudio object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return PlanEstudio The associated PlanEstudio object.
     * @throws PropelException
     */
    public function getPlanEstudio(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPlanEstudio === null && ($this->plan_id !== null) && $doQuery) {
            $this->aPlanEstudio = PlanEstudioQuery::create()->findPk($this->plan_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPlanEstudio->addUsuarios($this);
             */
        }

        return $this->aPlanEstudio;
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
        if ('Permiso' == $relationName) {
            $this->initPermisos();
        }
        if ('Datgen' == $relationName) {
            $this->initDatgens();
        }
        if ('Ubilab' == $relationName) {
            $this->initUbilabs();
        }
        if ('Nivjer' == $relationName) {
            $this->initNivjers();
        }
        if ('comlab' == $relationName) {
            $this->initcomlabs();
        }
        if ('Volante' == $relationName) {
            $this->initVolantes();
        }
        if ('Curriculum' == $relationName) {
            $this->initCurriculums();
        }
        if ('Candidato' == $relationName) {
            $this->initCandidatos();
        }
    }

    /**
     * Clears out the collPermisos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addPermisos()
     */
    public function clearPermisos()
    {
        $this->collPermisos = null; // important to set this to null since that means it is uninitialized
        $this->collPermisosPartial = null;

        return $this;
    }

    /**
     * reset is the collPermisos collection loaded partially
     *
     * @return void
     */
    public function resetPartialPermisos($v = true)
    {
        $this->collPermisosPartial = $v;
    }

    /**
     * Initializes the collPermisos collection.
     *
     * By default this just sets the collPermisos collection to an empty array (like clearcollPermisos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPermisos($overrideExisting = true)
    {
        if (null !== $this->collPermisos && !$overrideExisting) {
            return;
        }
        $this->collPermisos = new PropelObjectCollection();
        $this->collPermisos->setModel('Permiso');
    }

    /**
     * Gets an array of Permiso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Permiso[] List of Permiso objects
     * @throws PropelException
     */
    public function getPermisos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPermisosPartial && !$this->isNew();
        if (null === $this->collPermisos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPermisos) {
                // return empty collection
                $this->initPermisos();
            } else {
                $collPermisos = PermisoQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPermisosPartial && count($collPermisos)) {
                      $this->initPermisos(false);

                      foreach ($collPermisos as $obj) {
                        if (false == $this->collPermisos->contains($obj)) {
                          $this->collPermisos->append($obj);
                        }
                      }

                      $this->collPermisosPartial = true;
                    }

                    $collPermisos->getInternalIterator()->rewind();

                    return $collPermisos;
                }

                if ($partial && $this->collPermisos) {
                    foreach ($this->collPermisos as $obj) {
                        if ($obj->isNew()) {
                            $collPermisos[] = $obj;
                        }
                    }
                }

                $this->collPermisos = $collPermisos;
                $this->collPermisosPartial = false;
            }
        }

        return $this->collPermisos;
    }

    /**
     * Sets a collection of Permiso objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $permisos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setPermisos(PropelCollection $permisos, PropelPDO $con = null)
    {
        $permisosToDelete = $this->getPermisos(new Criteria(), $con)->diff($permisos);


        $this->permisosScheduledForDeletion = $permisosToDelete;

        foreach ($permisosToDelete as $permisoRemoved) {
            $permisoRemoved->setUsuario(null);
        }

        $this->collPermisos = null;
        foreach ($permisos as $permiso) {
            $this->addPermiso($permiso);
        }

        $this->collPermisos = $permisos;
        $this->collPermisosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Permiso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Permiso objects.
     * @throws PropelException
     */
    public function countPermisos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPermisosPartial && !$this->isNew();
        if (null === $this->collPermisos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPermisos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPermisos());
            }
            $query = PermisoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collPermisos);
    }

    /**
     * Method called to associate a Permiso object to this object
     * through the Permiso foreign key attribute.
     *
     * @param    Permiso $l Permiso
     * @return Usuario The current object (for fluent API support)
     */
    public function addPermiso(Permiso $l)
    {
        if ($this->collPermisos === null) {
            $this->initPermisos();
            $this->collPermisosPartial = true;
        }

        if (!in_array($l, $this->collPermisos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPermiso($l);

            if ($this->permisosScheduledForDeletion and $this->permisosScheduledForDeletion->contains($l)) {
                $this->permisosScheduledForDeletion->remove($this->permisosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Permiso $permiso The permiso object to add.
     */
    protected function doAddPermiso($permiso)
    {
        $this->collPermisos[]= $permiso;
        $permiso->setUsuario($this);
    }

    /**
     * @param	Permiso $permiso The permiso object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removePermiso($permiso)
    {
        if ($this->getPermisos()->contains($permiso)) {
            $this->collPermisos->remove($this->collPermisos->search($permiso));
            if (null === $this->permisosScheduledForDeletion) {
                $this->permisosScheduledForDeletion = clone $this->collPermisos;
                $this->permisosScheduledForDeletion->clear();
            }
            $this->permisosScheduledForDeletion[]= clone $permiso;
            $permiso->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collDatgens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addDatgens()
     */
    public function clearDatgens()
    {
        $this->collDatgens = null; // important to set this to null since that means it is uninitialized
        $this->collDatgensPartial = null;

        return $this;
    }

    /**
     * reset is the collDatgens collection loaded partially
     *
     * @return void
     */
    public function resetPartialDatgens($v = true)
    {
        $this->collDatgensPartial = $v;
    }

    /**
     * Initializes the collDatgens collection.
     *
     * By default this just sets the collDatgens collection to an empty array (like clearcollDatgens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDatgens($overrideExisting = true)
    {
        if (null !== $this->collDatgens && !$overrideExisting) {
            return;
        }
        $this->collDatgens = new PropelObjectCollection();
        $this->collDatgens->setModel('Datgen');
    }

    /**
     * Gets an array of Datgen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Datgen[] List of Datgen objects
     * @throws PropelException
     */
    public function getDatgens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDatgensPartial && !$this->isNew();
        if (null === $this->collDatgens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDatgens) {
                // return empty collection
                $this->initDatgens();
            } else {
                $collDatgens = DatgenQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDatgensPartial && count($collDatgens)) {
                      $this->initDatgens(false);

                      foreach ($collDatgens as $obj) {
                        if (false == $this->collDatgens->contains($obj)) {
                          $this->collDatgens->append($obj);
                        }
                      }

                      $this->collDatgensPartial = true;
                    }

                    $collDatgens->getInternalIterator()->rewind();

                    return $collDatgens;
                }

                if ($partial && $this->collDatgens) {
                    foreach ($this->collDatgens as $obj) {
                        if ($obj->isNew()) {
                            $collDatgens[] = $obj;
                        }
                    }
                }

                $this->collDatgens = $collDatgens;
                $this->collDatgensPartial = false;
            }
        }

        return $this->collDatgens;
    }

    /**
     * Sets a collection of Datgen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $datgens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setDatgens(PropelCollection $datgens, PropelPDO $con = null)
    {
        $datgensToDelete = $this->getDatgens(new Criteria(), $con)->diff($datgens);


        $this->datgensScheduledForDeletion = $datgensToDelete;

        foreach ($datgensToDelete as $datgenRemoved) {
            $datgenRemoved->setUsuario(null);
        }

        $this->collDatgens = null;
        foreach ($datgens as $datgen) {
            $this->addDatgen($datgen);
        }

        $this->collDatgens = $datgens;
        $this->collDatgensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Datgen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Datgen objects.
     * @throws PropelException
     */
    public function countDatgens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDatgensPartial && !$this->isNew();
        if (null === $this->collDatgens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDatgens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDatgens());
            }
            $query = DatgenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collDatgens);
    }

    /**
     * Method called to associate a Datgen object to this object
     * through the Datgen foreign key attribute.
     *
     * @param    Datgen $l Datgen
     * @return Usuario The current object (for fluent API support)
     */
    public function addDatgen(Datgen $l)
    {
        if ($this->collDatgens === null) {
            $this->initDatgens();
            $this->collDatgensPartial = true;
        }

        if (!in_array($l, $this->collDatgens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDatgen($l);

            if ($this->datgensScheduledForDeletion and $this->datgensScheduledForDeletion->contains($l)) {
                $this->datgensScheduledForDeletion->remove($this->datgensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Datgen $datgen The datgen object to add.
     */
    protected function doAddDatgen($datgen)
    {
        $this->collDatgens[]= $datgen;
        $datgen->setUsuario($this);
    }

    /**
     * @param	Datgen $datgen The datgen object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeDatgen($datgen)
    {
        if ($this->getDatgens()->contains($datgen)) {
            $this->collDatgens->remove($this->collDatgens->search($datgen));
            if (null === $this->datgensScheduledForDeletion) {
                $this->datgensScheduledForDeletion = clone $this->collDatgens;
                $this->datgensScheduledForDeletion->clear();
            }
            $this->datgensScheduledForDeletion[]= clone $datgen;
            $datgen->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collUbilabs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addUbilabs()
     */
    public function clearUbilabs()
    {
        $this->collUbilabs = null; // important to set this to null since that means it is uninitialized
        $this->collUbilabsPartial = null;

        return $this;
    }

    /**
     * reset is the collUbilabs collection loaded partially
     *
     * @return void
     */
    public function resetPartialUbilabs($v = true)
    {
        $this->collUbilabsPartial = $v;
    }

    /**
     * Initializes the collUbilabs collection.
     *
     * By default this just sets the collUbilabs collection to an empty array (like clearcollUbilabs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUbilabs($overrideExisting = true)
    {
        if (null !== $this->collUbilabs && !$overrideExisting) {
            return;
        }
        $this->collUbilabs = new PropelObjectCollection();
        $this->collUbilabs->setModel('Ubilab');
    }

    /**
     * Gets an array of Ubilab objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ubilab[] List of Ubilab objects
     * @throws PropelException
     */
    public function getUbilabs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUbilabsPartial && !$this->isNew();
        if (null === $this->collUbilabs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUbilabs) {
                // return empty collection
                $this->initUbilabs();
            } else {
                $collUbilabs = UbilabQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUbilabsPartial && count($collUbilabs)) {
                      $this->initUbilabs(false);

                      foreach ($collUbilabs as $obj) {
                        if (false == $this->collUbilabs->contains($obj)) {
                          $this->collUbilabs->append($obj);
                        }
                      }

                      $this->collUbilabsPartial = true;
                    }

                    $collUbilabs->getInternalIterator()->rewind();

                    return $collUbilabs;
                }

                if ($partial && $this->collUbilabs) {
                    foreach ($this->collUbilabs as $obj) {
                        if ($obj->isNew()) {
                            $collUbilabs[] = $obj;
                        }
                    }
                }

                $this->collUbilabs = $collUbilabs;
                $this->collUbilabsPartial = false;
            }
        }

        return $this->collUbilabs;
    }

    /**
     * Sets a collection of Ubilab objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ubilabs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setUbilabs(PropelCollection $ubilabs, PropelPDO $con = null)
    {
        $ubilabsToDelete = $this->getUbilabs(new Criteria(), $con)->diff($ubilabs);


        $this->ubilabsScheduledForDeletion = $ubilabsToDelete;

        foreach ($ubilabsToDelete as $ubilabRemoved) {
            $ubilabRemoved->setUsuario(null);
        }

        $this->collUbilabs = null;
        foreach ($ubilabs as $ubilab) {
            $this->addUbilab($ubilab);
        }

        $this->collUbilabs = $ubilabs;
        $this->collUbilabsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ubilab objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ubilab objects.
     * @throws PropelException
     */
    public function countUbilabs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUbilabsPartial && !$this->isNew();
        if (null === $this->collUbilabs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUbilabs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUbilabs());
            }
            $query = UbilabQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collUbilabs);
    }

    /**
     * Method called to associate a Ubilab object to this object
     * through the Ubilab foreign key attribute.
     *
     * @param    Ubilab $l Ubilab
     * @return Usuario The current object (for fluent API support)
     */
    public function addUbilab(Ubilab $l)
    {
        if ($this->collUbilabs === null) {
            $this->initUbilabs();
            $this->collUbilabsPartial = true;
        }

        if (!in_array($l, $this->collUbilabs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUbilab($l);

            if ($this->ubilabsScheduledForDeletion and $this->ubilabsScheduledForDeletion->contains($l)) {
                $this->ubilabsScheduledForDeletion->remove($this->ubilabsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ubilab $ubilab The ubilab object to add.
     */
    protected function doAddUbilab($ubilab)
    {
        $this->collUbilabs[]= $ubilab;
        $ubilab->setUsuario($this);
    }

    /**
     * @param	Ubilab $ubilab The ubilab object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeUbilab($ubilab)
    {
        if ($this->getUbilabs()->contains($ubilab)) {
            $this->collUbilabs->remove($this->collUbilabs->search($ubilab));
            if (null === $this->ubilabsScheduledForDeletion) {
                $this->ubilabsScheduledForDeletion = clone $this->collUbilabs;
                $this->ubilabsScheduledForDeletion->clear();
            }
            $this->ubilabsScheduledForDeletion[]= clone $ubilab;
            $ubilab->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collNivjers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addNivjers()
     */
    public function clearNivjers()
    {
        $this->collNivjers = null; // important to set this to null since that means it is uninitialized
        $this->collNivjersPartial = null;

        return $this;
    }

    /**
     * reset is the collNivjers collection loaded partially
     *
     * @return void
     */
    public function resetPartialNivjers($v = true)
    {
        $this->collNivjersPartial = $v;
    }

    /**
     * Initializes the collNivjers collection.
     *
     * By default this just sets the collNivjers collection to an empty array (like clearcollNivjers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNivjers($overrideExisting = true)
    {
        if (null !== $this->collNivjers && !$overrideExisting) {
            return;
        }
        $this->collNivjers = new PropelObjectCollection();
        $this->collNivjers->setModel('Nivjer');
    }

    /**
     * Gets an array of Nivjer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Nivjer[] List of Nivjer objects
     * @throws PropelException
     */
    public function getNivjers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNivjersPartial && !$this->isNew();
        if (null === $this->collNivjers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNivjers) {
                // return empty collection
                $this->initNivjers();
            } else {
                $collNivjers = NivjerQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNivjersPartial && count($collNivjers)) {
                      $this->initNivjers(false);

                      foreach ($collNivjers as $obj) {
                        if (false == $this->collNivjers->contains($obj)) {
                          $this->collNivjers->append($obj);
                        }
                      }

                      $this->collNivjersPartial = true;
                    }

                    $collNivjers->getInternalIterator()->rewind();

                    return $collNivjers;
                }

                if ($partial && $this->collNivjers) {
                    foreach ($this->collNivjers as $obj) {
                        if ($obj->isNew()) {
                            $collNivjers[] = $obj;
                        }
                    }
                }

                $this->collNivjers = $collNivjers;
                $this->collNivjersPartial = false;
            }
        }

        return $this->collNivjers;
    }

    /**
     * Sets a collection of Nivjer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $nivjers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setNivjers(PropelCollection $nivjers, PropelPDO $con = null)
    {
        $nivjersToDelete = $this->getNivjers(new Criteria(), $con)->diff($nivjers);


        $this->nivjersScheduledForDeletion = $nivjersToDelete;

        foreach ($nivjersToDelete as $nivjerRemoved) {
            $nivjerRemoved->setUsuario(null);
        }

        $this->collNivjers = null;
        foreach ($nivjers as $nivjer) {
            $this->addNivjer($nivjer);
        }

        $this->collNivjers = $nivjers;
        $this->collNivjersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Nivjer objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Nivjer objects.
     * @throws PropelException
     */
    public function countNivjers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNivjersPartial && !$this->isNew();
        if (null === $this->collNivjers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNivjers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNivjers());
            }
            $query = NivjerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collNivjers);
    }

    /**
     * Method called to associate a Nivjer object to this object
     * through the Nivjer foreign key attribute.
     *
     * @param    Nivjer $l Nivjer
     * @return Usuario The current object (for fluent API support)
     */
    public function addNivjer(Nivjer $l)
    {
        if ($this->collNivjers === null) {
            $this->initNivjers();
            $this->collNivjersPartial = true;
        }

        if (!in_array($l, $this->collNivjers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNivjer($l);

            if ($this->nivjersScheduledForDeletion and $this->nivjersScheduledForDeletion->contains($l)) {
                $this->nivjersScheduledForDeletion->remove($this->nivjersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Nivjer $nivjer The nivjer object to add.
     */
    protected function doAddNivjer($nivjer)
    {
        $this->collNivjers[]= $nivjer;
        $nivjer->setUsuario($this);
    }

    /**
     * @param	Nivjer $nivjer The nivjer object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeNivjer($nivjer)
    {
        if ($this->getNivjers()->contains($nivjer)) {
            $this->collNivjers->remove($this->collNivjers->search($nivjer));
            if (null === $this->nivjersScheduledForDeletion) {
                $this->nivjersScheduledForDeletion = clone $this->collNivjers;
                $this->nivjersScheduledForDeletion->clear();
            }
            $this->nivjersScheduledForDeletion[]= clone $nivjer;
            $nivjer->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collcomlabs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addcomlabs()
     */
    public function clearcomlabs()
    {
        $this->collcomlabs = null; // important to set this to null since that means it is uninitialized
        $this->collcomlabsPartial = null;

        return $this;
    }

    /**
     * reset is the collcomlabs collection loaded partially
     *
     * @return void
     */
    public function resetPartialcomlabs($v = true)
    {
        $this->collcomlabsPartial = $v;
    }

    /**
     * Initializes the collcomlabs collection.
     *
     * By default this just sets the collcomlabs collection to an empty array (like clearcollcomlabs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initcomlabs($overrideExisting = true)
    {
        if (null !== $this->collcomlabs && !$overrideExisting) {
            return;
        }
        $this->collcomlabs = new PropelObjectCollection();
        $this->collcomlabs->setModel('comlab');
    }

    /**
     * Gets an array of comlab objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|comlab[] List of comlab objects
     * @throws PropelException
     */
    public function getcomlabs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collcomlabsPartial && !$this->isNew();
        if (null === $this->collcomlabs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collcomlabs) {
                // return empty collection
                $this->initcomlabs();
            } else {
                $collcomlabs = comlabQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collcomlabsPartial && count($collcomlabs)) {
                      $this->initcomlabs(false);

                      foreach ($collcomlabs as $obj) {
                        if (false == $this->collcomlabs->contains($obj)) {
                          $this->collcomlabs->append($obj);
                        }
                      }

                      $this->collcomlabsPartial = true;
                    }

                    $collcomlabs->getInternalIterator()->rewind();

                    return $collcomlabs;
                }

                if ($partial && $this->collcomlabs) {
                    foreach ($this->collcomlabs as $obj) {
                        if ($obj->isNew()) {
                            $collcomlabs[] = $obj;
                        }
                    }
                }

                $this->collcomlabs = $collcomlabs;
                $this->collcomlabsPartial = false;
            }
        }

        return $this->collcomlabs;
    }

    /**
     * Sets a collection of comlab objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $comlabs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setcomlabs(PropelCollection $comlabs, PropelPDO $con = null)
    {
        $comlabsToDelete = $this->getcomlabs(new Criteria(), $con)->diff($comlabs);


        $this->comlabsScheduledForDeletion = $comlabsToDelete;

        foreach ($comlabsToDelete as $comlabRemoved) {
            $comlabRemoved->setUsuario(null);
        }

        $this->collcomlabs = null;
        foreach ($comlabs as $comlab) {
            $this->addcomlab($comlab);
        }

        $this->collcomlabs = $comlabs;
        $this->collcomlabsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related comlab objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related comlab objects.
     * @throws PropelException
     */
    public function countcomlabs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collcomlabsPartial && !$this->isNew();
        if (null === $this->collcomlabs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collcomlabs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getcomlabs());
            }
            $query = comlabQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collcomlabs);
    }

    /**
     * Method called to associate a comlab object to this object
     * through the comlab foreign key attribute.
     *
     * @param    comlab $l comlab
     * @return Usuario The current object (for fluent API support)
     */
    public function addcomlab(comlab $l)
    {
        if ($this->collcomlabs === null) {
            $this->initcomlabs();
            $this->collcomlabsPartial = true;
        }

        if (!in_array($l, $this->collcomlabs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddcomlab($l);

            if ($this->comlabsScheduledForDeletion and $this->comlabsScheduledForDeletion->contains($l)) {
                $this->comlabsScheduledForDeletion->remove($this->comlabsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	comlab $comlab The comlab object to add.
     */
    protected function doAddcomlab($comlab)
    {
        $this->collcomlabs[]= $comlab;
        $comlab->setUsuario($this);
    }

    /**
     * @param	comlab $comlab The comlab object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removecomlab($comlab)
    {
        if ($this->getcomlabs()->contains($comlab)) {
            $this->collcomlabs->remove($this->collcomlabs->search($comlab));
            if (null === $this->comlabsScheduledForDeletion) {
                $this->comlabsScheduledForDeletion = clone $this->collcomlabs;
                $this->comlabsScheduledForDeletion->clear();
            }
            $this->comlabsScheduledForDeletion[]= clone $comlab;
            $comlab->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collVolantes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addVolantes()
     */
    public function clearVolantes()
    {
        $this->collVolantes = null; // important to set this to null since that means it is uninitialized
        $this->collVolantesPartial = null;

        return $this;
    }

    /**
     * reset is the collVolantes collection loaded partially
     *
     * @return void
     */
    public function resetPartialVolantes($v = true)
    {
        $this->collVolantesPartial = $v;
    }

    /**
     * Initializes the collVolantes collection.
     *
     * By default this just sets the collVolantes collection to an empty array (like clearcollVolantes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVolantes($overrideExisting = true)
    {
        if (null !== $this->collVolantes && !$overrideExisting) {
            return;
        }
        $this->collVolantes = new PropelObjectCollection();
        $this->collVolantes->setModel('Volante');
    }

    /**
     * Gets an array of Volante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Volante[] List of Volante objects
     * @throws PropelException
     */
    public function getVolantes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVolantesPartial && !$this->isNew();
        if (null === $this->collVolantes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVolantes) {
                // return empty collection
                $this->initVolantes();
            } else {
                $collVolantes = VolanteQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVolantesPartial && count($collVolantes)) {
                      $this->initVolantes(false);

                      foreach ($collVolantes as $obj) {
                        if (false == $this->collVolantes->contains($obj)) {
                          $this->collVolantes->append($obj);
                        }
                      }

                      $this->collVolantesPartial = true;
                    }

                    $collVolantes->getInternalIterator()->rewind();

                    return $collVolantes;
                }

                if ($partial && $this->collVolantes) {
                    foreach ($this->collVolantes as $obj) {
                        if ($obj->isNew()) {
                            $collVolantes[] = $obj;
                        }
                    }
                }

                $this->collVolantes = $collVolantes;
                $this->collVolantesPartial = false;
            }
        }

        return $this->collVolantes;
    }

    /**
     * Sets a collection of Volante objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $volantes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setVolantes(PropelCollection $volantes, PropelPDO $con = null)
    {
        $volantesToDelete = $this->getVolantes(new Criteria(), $con)->diff($volantes);


        $this->volantesScheduledForDeletion = $volantesToDelete;

        foreach ($volantesToDelete as $volanteRemoved) {
            $volanteRemoved->setUsuario(null);
        }

        $this->collVolantes = null;
        foreach ($volantes as $volante) {
            $this->addVolante($volante);
        }

        $this->collVolantes = $volantes;
        $this->collVolantesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Volante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Volante objects.
     * @throws PropelException
     */
    public function countVolantes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVolantesPartial && !$this->isNew();
        if (null === $this->collVolantes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVolantes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVolantes());
            }
            $query = VolanteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collVolantes);
    }

    /**
     * Method called to associate a Volante object to this object
     * through the Volante foreign key attribute.
     *
     * @param    Volante $l Volante
     * @return Usuario The current object (for fluent API support)
     */
    public function addVolante(Volante $l)
    {
        if ($this->collVolantes === null) {
            $this->initVolantes();
            $this->collVolantesPartial = true;
        }

        if (!in_array($l, $this->collVolantes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVolante($l);

            if ($this->volantesScheduledForDeletion and $this->volantesScheduledForDeletion->contains($l)) {
                $this->volantesScheduledForDeletion->remove($this->volantesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Volante $volante The volante object to add.
     */
    protected function doAddVolante($volante)
    {
        $this->collVolantes[]= $volante;
        $volante->setUsuario($this);
    }

    /**
     * @param	Volante $volante The volante object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeVolante($volante)
    {
        if ($this->getVolantes()->contains($volante)) {
            $this->collVolantes->remove($this->collVolantes->search($volante));
            if (null === $this->volantesScheduledForDeletion) {
                $this->volantesScheduledForDeletion = clone $this->collVolantes;
                $this->volantesScheduledForDeletion->clear();
            }
            $this->volantesScheduledForDeletion[]= clone $volante;
            $volante->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collCurriculums collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addCurriculums()
     */
    public function clearCurriculums()
    {
        $this->collCurriculums = null; // important to set this to null since that means it is uninitialized
        $this->collCurriculumsPartial = null;

        return $this;
    }

    /**
     * reset is the collCurriculums collection loaded partially
     *
     * @return void
     */
    public function resetPartialCurriculums($v = true)
    {
        $this->collCurriculumsPartial = $v;
    }

    /**
     * Initializes the collCurriculums collection.
     *
     * By default this just sets the collCurriculums collection to an empty array (like clearcollCurriculums());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCurriculums($overrideExisting = true)
    {
        if (null !== $this->collCurriculums && !$overrideExisting) {
            return;
        }
        $this->collCurriculums = new PropelObjectCollection();
        $this->collCurriculums->setModel('Curriculum');
    }

    /**
     * Gets an array of Curriculum objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Curriculum[] List of Curriculum objects
     * @throws PropelException
     */
    public function getCurriculums($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCurriculumsPartial && !$this->isNew();
        if (null === $this->collCurriculums || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCurriculums) {
                // return empty collection
                $this->initCurriculums();
            } else {
                $collCurriculums = CurriculumQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCurriculumsPartial && count($collCurriculums)) {
                      $this->initCurriculums(false);

                      foreach ($collCurriculums as $obj) {
                        if (false == $this->collCurriculums->contains($obj)) {
                          $this->collCurriculums->append($obj);
                        }
                      }

                      $this->collCurriculumsPartial = true;
                    }

                    $collCurriculums->getInternalIterator()->rewind();

                    return $collCurriculums;
                }

                if ($partial && $this->collCurriculums) {
                    foreach ($this->collCurriculums as $obj) {
                        if ($obj->isNew()) {
                            $collCurriculums[] = $obj;
                        }
                    }
                }

                $this->collCurriculums = $collCurriculums;
                $this->collCurriculumsPartial = false;
            }
        }

        return $this->collCurriculums;
    }

    /**
     * Sets a collection of Curriculum objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $curriculums A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setCurriculums(PropelCollection $curriculums, PropelPDO $con = null)
    {
        $curriculumsToDelete = $this->getCurriculums(new Criteria(), $con)->diff($curriculums);


        $this->curriculumsScheduledForDeletion = $curriculumsToDelete;

        foreach ($curriculumsToDelete as $curriculumRemoved) {
            $curriculumRemoved->setUsuario(null);
        }

        $this->collCurriculums = null;
        foreach ($curriculums as $curriculum) {
            $this->addCurriculum($curriculum);
        }

        $this->collCurriculums = $curriculums;
        $this->collCurriculumsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Curriculum objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Curriculum objects.
     * @throws PropelException
     */
    public function countCurriculums(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCurriculumsPartial && !$this->isNew();
        if (null === $this->collCurriculums || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCurriculums) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCurriculums());
            }
            $query = CurriculumQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collCurriculums);
    }

    /**
     * Method called to associate a Curriculum object to this object
     * through the Curriculum foreign key attribute.
     *
     * @param    Curriculum $l Curriculum
     * @return Usuario The current object (for fluent API support)
     */
    public function addCurriculum(Curriculum $l)
    {
        if ($this->collCurriculums === null) {
            $this->initCurriculums();
            $this->collCurriculumsPartial = true;
        }

        if (!in_array($l, $this->collCurriculums->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCurriculum($l);

            if ($this->curriculumsScheduledForDeletion and $this->curriculumsScheduledForDeletion->contains($l)) {
                $this->curriculumsScheduledForDeletion->remove($this->curriculumsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Curriculum $curriculum The curriculum object to add.
     */
    protected function doAddCurriculum($curriculum)
    {
        $this->collCurriculums[]= $curriculum;
        $curriculum->setUsuario($this);
    }

    /**
     * @param	Curriculum $curriculum The curriculum object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeCurriculum($curriculum)
    {
        if ($this->getCurriculums()->contains($curriculum)) {
            $this->collCurriculums->remove($this->collCurriculums->search($curriculum));
            if (null === $this->curriculumsScheduledForDeletion) {
                $this->curriculumsScheduledForDeletion = clone $this->collCurriculums;
                $this->curriculumsScheduledForDeletion->clear();
            }
            $this->curriculumsScheduledForDeletion[]= clone $curriculum;
            $curriculum->setUsuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collCandidatos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
     * @return Usuario The current object (for fluent API support)
     */
    public function setCandidatos(PropelCollection $candidatos, PropelPDO $con = null)
    {
        $candidatosToDelete = $this->getCandidatos(new Criteria(), $con)->diff($candidatos);


        $this->candidatosScheduledForDeletion = $candidatosToDelete;

        foreach ($candidatosToDelete as $candidatoRemoved) {
            $candidatoRemoved->setUsuario(null);
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
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collCandidatos);
    }

    /**
     * Method called to associate a Candidato object to this object
     * through the Candidato foreign key attribute.
     *
     * @param    Candidato $l Candidato
     * @return Usuario The current object (for fluent API support)
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
        $candidato->setUsuario($this);
    }

    /**
     * @param	Candidato $candidato The candidato object to remove.
     * @return Usuario The current object (for fluent API support)
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
            $candidato->setUsuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related Candidatos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Candidato[] List of Candidato objects
     */
    public function getCandidatosJoinVolante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CandidatoQuery::create(null, $criteria);
        $query->joinWith('Volante', $join_behavior);

        return $this->getCandidatos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->matricula = null;
        $this->correo = null;
        $this->contrasena = null;
        $this->nombres = null;
        $this->apellidop = null;
        $this->apellidom = null;
        $this->curp = null;
        $this->rfc = null;
        $this->telefono = null;
        $this->plan_id = null;
        $this->contacto_id = null;
        $this->estatus = null;
        $this->tipo = null;
        $this->genero = null;
        $this->nacimiento = null;
        $this->foto = null;
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
            if ($this->collPermisos) {
                foreach ($this->collPermisos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDatgens) {
                foreach ($this->collDatgens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUbilabs) {
                foreach ($this->collUbilabs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNivjers) {
                foreach ($this->collNivjers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collcomlabs) {
                foreach ($this->collcomlabs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVolantes) {
                foreach ($this->collVolantes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCurriculums) {
                foreach ($this->collCurriculums as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCandidatos) {
                foreach ($this->collCandidatos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aPlanEstudio instanceof Persistent) {
              $this->aPlanEstudio->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPermisos instanceof PropelCollection) {
            $this->collPermisos->clearIterator();
        }
        $this->collPermisos = null;
        if ($this->collDatgens instanceof PropelCollection) {
            $this->collDatgens->clearIterator();
        }
        $this->collDatgens = null;
        if ($this->collUbilabs instanceof PropelCollection) {
            $this->collUbilabs->clearIterator();
        }
        $this->collUbilabs = null;
        if ($this->collNivjers instanceof PropelCollection) {
            $this->collNivjers->clearIterator();
        }
        $this->collNivjers = null;
        if ($this->collcomlabs instanceof PropelCollection) {
            $this->collcomlabs->clearIterator();
        }
        $this->collcomlabs = null;
        if ($this->collVolantes instanceof PropelCollection) {
            $this->collVolantes->clearIterator();
        }
        $this->collVolantes = null;
        if ($this->collCurriculums instanceof PropelCollection) {
            $this->collCurriculums->clearIterator();
        }
        $this->collCurriculums = null;
        if ($this->collCandidatos instanceof PropelCollection) {
            $this->collCandidatos->clearIterator();
        }
        $this->collCandidatos = null;
        $this->aPlanEstudio = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsuarioPeer::DEFAULT_STRING_FORMAT);
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
