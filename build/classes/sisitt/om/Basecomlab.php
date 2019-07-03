<?php


/**
 * Base class that represents a row from the 'encuempr_comlab' table.
 *
 *
 *
 * @package    propel.generator.sisitt.om
 */
abstract class Basecomlab extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'comlabPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        comlabPeer
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
     * The value for the conflictos field.
     * @var        int
     */
    protected $conflictos;

    /**
     * The value for the ortografia field.
     * @var        int
     */
    protected $ortografia;

    /**
     * The value for the procesos field.
     * @var        int
     */
    protected $procesos;

    /**
     * The value for the equipo field.
     * @var        int
     */
    protected $equipo;

    /**
     * The value for the admintiempo field.
     * @var        int
     */
    protected $admintiempo;

    /**
     * The value for the seguridadpersonal field.
     * @var        int
     */
    protected $seguridadpersonal;

    /**
     * The value for the facilidadpalabra field.
     * @var        int
     */
    protected $facilidadpalabra;

    /**
     * The value for the gestionproyectos field.
     * @var        int
     */
    protected $gestionproyectos;

    /**
     * The value for the puntualidad field.
     * @var        int
     */
    protected $puntualidad;

    /**
     * The value for the normas field.
     * @var        int
     */
    protected $normas;

    /**
     * The value for the integracion field.
     * @var        int
     */
    protected $integracion;

    /**
     * The value for the innovacion field.
     * @var        int
     */
    protected $innovacion;

    /**
     * The value for the negociacion field.
     * @var        int
     */
    protected $negociacion;

    /**
     * The value for the abstraccion field.
     * @var        int
     */
    protected $abstraccion;

    /**
     * The value for the decisiones field.
     * @var        int
     */
    protected $decisiones;

    /**
     * The value for the adaptacion field.
     * @var        int
     */
    protected $adaptacion;

    /**
     * The value for the otras field.
     * @var        int
     */
    protected $otras;

    /**
     * The value for the desempeniolaboral field.
     * @var        int
     */
    protected $desempeniolaboral;

    /**
     * The value for the mejoras field.
     * @var        string
     */
    protected $mejoras;

    /**
     * The value for the sugerencias field.
     * @var        string
     */
    protected $sugerencias;

    /**
     * The value for the nombres field.
     * @var        string
     */
    protected $nombres;

    /**
     * The value for the puesto field.
     * @var        string
     */
    protected $puesto;

    /**
     * The value for the correo field.
     * @var        string
     */
    protected $correo;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getIdEncuesta()
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
     * Get the [conflictos] column value.
     *
     * @return int
     */
    public function getConflictos()
    {

        return $this->conflictos;
    }

    /**
     * Get the [ortografia] column value.
     *
     * @return int
     */
    public function getOrtografia()
    {

        return $this->ortografia;
    }

    /**
     * Get the [procesos] column value.
     *
     * @return int
     */
    public function getProcesos()
    {

        return $this->procesos;
    }

    /**
     * Get the [equipo] column value.
     *
     * @return int
     */
    public function getEquipo()
    {

        return $this->equipo;
    }

    /**
     * Get the [admintiempo] column value.
     *
     * @return int
     */
    public function getAdmintiempo()
    {

        return $this->admintiempo;
    }

    /**
     * Get the [seguridadpersonal] column value.
     *
     * @return int
     */
    public function getSeguridadpersonal()
    {

        return $this->seguridadpersonal;
    }

    /**
     * Get the [facilidadpalabra] column value.
     *
     * @return int
     */
    public function getFelicidadpalabra()
    {

        return $this->facilidadpalabra;
    }

    /**
     * Get the [gestionproyectos] column value.
     *
     * @return int
     */
    public function getGestionproyectos()
    {

        return $this->gestionproyectos;
    }

    /**
     * Get the [puntualidad] column value.
     *
     * @return int
     */
    public function getPuntualidad()
    {

        return $this->puntualidad;
    }

    /**
     * Get the [normas] column value.
     *
     * @return int
     */
    public function getNormas()
    {

        return $this->normas;
    }

    /**
     * Get the [integracion] column value.
     *
     * @return int
     */
    public function getIntegracion()
    {

        return $this->integracion;
    }

    /**
     * Get the [innovacion] column value.
     *
     * @return int
     */
    public function getInnovacion()
    {

        return $this->innovacion;
    }

    /**
     * Get the [negociacion] column value.
     *
     * @return int
     */
    public function getNegociacion()
    {

        return $this->negociacion;
    }

    /**
     * Get the [abstraccion] column value.
     *
     * @return int
     */
    public function getAbstraccion()
    {

        return $this->abstraccion;
    }

    /**
     * Get the [decisiones] column value.
     *
     * @return int
     */
    public function getDecisiones()
    {

        return $this->decisiones;
    }

    /**
     * Get the [adaptacion] column value.
     *
     * @return int
     */
    public function getAdaptacion()
    {

        return $this->adaptacion;
    }

    /**
     * Get the [otras] column value.
     *
     * @return int
     */
    public function getOtras()
    {

        return $this->otras;
    }

    /**
     * Get the [desempeniolaboral] column value.
     *
     * @return int
     */
    public function getDesempeniolaboral()
    {

        return $this->desempeniolaboral;
    }

    /**
     * Get the [mejoras] column value.
     *
     * @return string
     */
    public function getMejoras()
    {

        return $this->mejoras;
    }

    /**
     * Get the [sugerencias] column value.
     *
     * @return string
     */
    public function getSugerencias()
    {

        return $this->sugerencias;
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
     * Get the [puesto] column value.
     *
     * @return string
     */
    public function getPuesto()
    {

        return $this->puesto;
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
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setIdEncuesta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = comlabPeer::ID;
        }


        return $this;
    } // setIdEncuesta()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = comlabPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [conflictos] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setConflictos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->conflictos !== $v) {
            $this->conflictos = $v;
            $this->modifiedColumns[] = comlabPeer::CONFLICTOS;
        }


        return $this;
    } // setConflictos()

    /**
     * Set the value of [ortografia] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setOrtografia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ortografia !== $v) {
            $this->ortografia = $v;
            $this->modifiedColumns[] = comlabPeer::ORTOGRAFIA;
        }


        return $this;
    } // setOrtografia()

    /**
     * Set the value of [procesos] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setProcesos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->procesos !== $v) {
            $this->procesos = $v;
            $this->modifiedColumns[] = comlabPeer::PROCESOS;
        }


        return $this;
    } // setProcesos()

    /**
     * Set the value of [equipo] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setEquipo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->equipo !== $v) {
            $this->equipo = $v;
            $this->modifiedColumns[] = comlabPeer::EQUIPO;
        }


        return $this;
    } // setEquipo()

    /**
     * Set the value of [admintiempo] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setAdmintiempo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->admintiempo !== $v) {
            $this->admintiempo = $v;
            $this->modifiedColumns[] = comlabPeer::ADMINTIEMPO;
        }


        return $this;
    } // setAdmintiempo()

    /**
     * Set the value of [seguridadpersonal] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setSeguridadpersonal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->seguridadpersonal !== $v) {
            $this->seguridadpersonal = $v;
            $this->modifiedColumns[] = comlabPeer::SEGURIDADPERSONAL;
        }


        return $this;
    } // setSeguridadpersonal()

    /**
     * Set the value of [facilidadpalabra] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setFelicidadpalabra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->facilidadpalabra !== $v) {
            $this->facilidadpalabra = $v;
            $this->modifiedColumns[] = comlabPeer::FACILIDADPALABRA;
        }


        return $this;
    } // setFelicidadpalabra()

    /**
     * Set the value of [gestionproyectos] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setGestionproyectos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gestionproyectos !== $v) {
            $this->gestionproyectos = $v;
            $this->modifiedColumns[] = comlabPeer::GESTIONPROYECTOS;
        }


        return $this;
    } // setGestionproyectos()

    /**
     * Set the value of [puntualidad] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setPuntualidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->puntualidad !== $v) {
            $this->puntualidad = $v;
            $this->modifiedColumns[] = comlabPeer::PUNTUALIDAD;
        }


        return $this;
    } // setPuntualidad()

    /**
     * Set the value of [normas] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setNormas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->normas !== $v) {
            $this->normas = $v;
            $this->modifiedColumns[] = comlabPeer::NORMAS;
        }


        return $this;
    } // setNormas()

    /**
     * Set the value of [integracion] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setIntegracion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->integracion !== $v) {
            $this->integracion = $v;
            $this->modifiedColumns[] = comlabPeer::INTEGRACION;
        }


        return $this;
    } // setIntegracion()

    /**
     * Set the value of [innovacion] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setInnovacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->innovacion !== $v) {
            $this->innovacion = $v;
            $this->modifiedColumns[] = comlabPeer::INNOVACION;
        }


        return $this;
    } // setInnovacion()

    /**
     * Set the value of [negociacion] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setNegociacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->negociacion !== $v) {
            $this->negociacion = $v;
            $this->modifiedColumns[] = comlabPeer::NEGOCIACION;
        }


        return $this;
    } // setNegociacion()

    /**
     * Set the value of [abstraccion] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setAbstraccion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abstraccion !== $v) {
            $this->abstraccion = $v;
            $this->modifiedColumns[] = comlabPeer::ABSTRACCION;
        }


        return $this;
    } // setAbstraccion()

    /**
     * Set the value of [decisiones] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setDecisiones($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->decisiones !== $v) {
            $this->decisiones = $v;
            $this->modifiedColumns[] = comlabPeer::DECISIONES;
        }


        return $this;
    } // setDecisiones()

    /**
     * Set the value of [adaptacion] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setAdaptacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->adaptacion !== $v) {
            $this->adaptacion = $v;
            $this->modifiedColumns[] = comlabPeer::ADAPTACION;
        }


        return $this;
    } // setAdaptacion()

    /**
     * Set the value of [otras] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setOtras($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otras !== $v) {
            $this->otras = $v;
            $this->modifiedColumns[] = comlabPeer::OTRAS;
        }


        return $this;
    } // setOtras()

    /**
     * Set the value of [desempeniolaboral] column.
     *
     * @param  int $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setDesempeniolaboral($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->desempeniolaboral !== $v) {
            $this->desempeniolaboral = $v;
            $this->modifiedColumns[] = comlabPeer::DESEMPENIOLABORAL;
        }


        return $this;
    } // setDesempeniolaboral()

    /**
     * Set the value of [mejoras] column.
     *
     * @param  string $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setMejoras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mejoras !== $v) {
            $this->mejoras = $v;
            $this->modifiedColumns[] = comlabPeer::MEJORAS;
        }


        return $this;
    } // setMejoras()

    /**
     * Set the value of [sugerencias] column.
     *
     * @param  string $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setSugerencias($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sugerencias !== $v) {
            $this->sugerencias = $v;
            $this->modifiedColumns[] = comlabPeer::SUGERENCIAS;
        }


        return $this;
    } // setSugerencias()

    /**
     * Set the value of [nombres] column.
     *
     * @param  string $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setNombres($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombres !== $v) {
            $this->nombres = $v;
            $this->modifiedColumns[] = comlabPeer::NOMBRES;
        }


        return $this;
    } // setNombres()

    /**
     * Set the value of [puesto] column.
     *
     * @param  string $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setPuesto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->puesto !== $v) {
            $this->puesto = $v;
            $this->modifiedColumns[] = comlabPeer::PUESTO;
        }


        return $this;
    } // setPuesto()

    /**
     * Set the value of [correo] column.
     *
     * @param  string $v new value
     * @return comlab The current object (for fluent API support)
     */
    public function setCorreo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->correo !== $v) {
            $this->correo = $v;
            $this->modifiedColumns[] = comlabPeer::CORREO;
        }


        return $this;
    } // setCorreo()

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
            $this->conflictos = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ortografia = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->procesos = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->equipo = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->admintiempo = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->seguridadpersonal = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->facilidadpalabra = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->gestionproyectos = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->puntualidad = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->normas = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->integracion = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->innovacion = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->negociacion = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->abstraccion = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->decisiones = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->adaptacion = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->otras = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->desempeniolaboral = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->mejoras = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->sugerencias = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->nombres = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->puesto = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->correo = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 25; // 25 = comlabPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating comlab object", $e);
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
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = comlabPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuario = null;
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
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = comlabQuery::create()
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
            $con = Propel::getConnection(comlabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                comlabPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = comlabPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . comlabPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(comlabPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(comlabPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(comlabPeer::CONFLICTOS)) {
            $modifiedColumns[':p' . $index++]  = '`conflictos`';
        }
        if ($this->isColumnModified(comlabPeer::ORTOGRAFIA)) {
            $modifiedColumns[':p' . $index++]  = '`ortografia`';
        }
        if ($this->isColumnModified(comlabPeer::PROCESOS)) {
            $modifiedColumns[':p' . $index++]  = '`procesos`';
        }
        if ($this->isColumnModified(comlabPeer::EQUIPO)) {
            $modifiedColumns[':p' . $index++]  = '`equipo`';
        }
        if ($this->isColumnModified(comlabPeer::ADMINTIEMPO)) {
            $modifiedColumns[':p' . $index++]  = '`admintiempo`';
        }
        if ($this->isColumnModified(comlabPeer::SEGURIDADPERSONAL)) {
            $modifiedColumns[':p' . $index++]  = '`seguridadpersonal`';
        }
        if ($this->isColumnModified(comlabPeer::FACILIDADPALABRA)) {
            $modifiedColumns[':p' . $index++]  = '`facilidadpalabra`';
        }
        if ($this->isColumnModified(comlabPeer::GESTIONPROYECTOS)) {
            $modifiedColumns[':p' . $index++]  = '`gestionproyectos`';
        }
        if ($this->isColumnModified(comlabPeer::PUNTUALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`puntualidad`';
        }
        if ($this->isColumnModified(comlabPeer::NORMAS)) {
            $modifiedColumns[':p' . $index++]  = '`normas`';
        }
        if ($this->isColumnModified(comlabPeer::INTEGRACION)) {
            $modifiedColumns[':p' . $index++]  = '`integracion`';
        }
        if ($this->isColumnModified(comlabPeer::INNOVACION)) {
            $modifiedColumns[':p' . $index++]  = '`innovacion`';
        }
        if ($this->isColumnModified(comlabPeer::NEGOCIACION)) {
            $modifiedColumns[':p' . $index++]  = '`negociacion`';
        }
        if ($this->isColumnModified(comlabPeer::ABSTRACCION)) {
            $modifiedColumns[':p' . $index++]  = '`abstraccion`';
        }
        if ($this->isColumnModified(comlabPeer::DECISIONES)) {
            $modifiedColumns[':p' . $index++]  = '`decisiones`';
        }
        if ($this->isColumnModified(comlabPeer::ADAPTACION)) {
            $modifiedColumns[':p' . $index++]  = '`adaptacion`';
        }
        if ($this->isColumnModified(comlabPeer::OTRAS)) {
            $modifiedColumns[':p' . $index++]  = '`otras`';
        }
        if ($this->isColumnModified(comlabPeer::DESEMPENIOLABORAL)) {
            $modifiedColumns[':p' . $index++]  = '`desempeniolaboral`';
        }
        if ($this->isColumnModified(comlabPeer::MEJORAS)) {
            $modifiedColumns[':p' . $index++]  = '`mejoras`';
        }
        if ($this->isColumnModified(comlabPeer::SUGERENCIAS)) {
            $modifiedColumns[':p' . $index++]  = '`sugerencias`';
        }
        if ($this->isColumnModified(comlabPeer::NOMBRES)) {
            $modifiedColumns[':p' . $index++]  = '`nombres`';
        }
        if ($this->isColumnModified(comlabPeer::PUESTO)) {
            $modifiedColumns[':p' . $index++]  = '`puesto`';
        }
        if ($this->isColumnModified(comlabPeer::CORREO)) {
            $modifiedColumns[':p' . $index++]  = '`correo`';
        }

        $sql = sprintf(
            'INSERT INTO `encuempr_comlab` (%s) VALUES (%s)',
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
                    case '`conflictos`':
                        $stmt->bindValue($identifier, $this->conflictos, PDO::PARAM_INT);
                        break;
                    case '`ortografia`':
                        $stmt->bindValue($identifier, $this->ortografia, PDO::PARAM_INT);
                        break;
                    case '`procesos`':
                        $stmt->bindValue($identifier, $this->procesos, PDO::PARAM_INT);
                        break;
                    case '`equipo`':
                        $stmt->bindValue($identifier, $this->equipo, PDO::PARAM_INT);
                        break;
                    case '`admintiempo`':
                        $stmt->bindValue($identifier, $this->admintiempo, PDO::PARAM_INT);
                        break;
                    case '`seguridadpersonal`':
                        $stmt->bindValue($identifier, $this->seguridadpersonal, PDO::PARAM_INT);
                        break;
                    case '`facilidadpalabra`':
                        $stmt->bindValue($identifier, $this->facilidadpalabra, PDO::PARAM_INT);
                        break;
                    case '`gestionproyectos`':
                        $stmt->bindValue($identifier, $this->gestionproyectos, PDO::PARAM_INT);
                        break;
                    case '`puntualidad`':
                        $stmt->bindValue($identifier, $this->puntualidad, PDO::PARAM_INT);
                        break;
                    case '`normas`':
                        $stmt->bindValue($identifier, $this->normas, PDO::PARAM_INT);
                        break;
                    case '`integracion`':
                        $stmt->bindValue($identifier, $this->integracion, PDO::PARAM_INT);
                        break;
                    case '`innovacion`':
                        $stmt->bindValue($identifier, $this->innovacion, PDO::PARAM_INT);
                        break;
                    case '`negociacion`':
                        $stmt->bindValue($identifier, $this->negociacion, PDO::PARAM_INT);
                        break;
                    case '`abstraccion`':
                        $stmt->bindValue($identifier, $this->abstraccion, PDO::PARAM_INT);
                        break;
                    case '`decisiones`':
                        $stmt->bindValue($identifier, $this->decisiones, PDO::PARAM_INT);
                        break;
                    case '`adaptacion`':
                        $stmt->bindValue($identifier, $this->adaptacion, PDO::PARAM_INT);
                        break;
                    case '`otras`':
                        $stmt->bindValue($identifier, $this->otras, PDO::PARAM_INT);
                        break;
                    case '`desempeniolaboral`':
                        $stmt->bindValue($identifier, $this->desempeniolaboral, PDO::PARAM_INT);
                        break;
                    case '`mejoras`':
                        $stmt->bindValue($identifier, $this->mejoras, PDO::PARAM_STR);
                        break;
                    case '`sugerencias`':
                        $stmt->bindValue($identifier, $this->sugerencias, PDO::PARAM_STR);
                        break;
                    case '`nombres`':
                        $stmt->bindValue($identifier, $this->nombres, PDO::PARAM_STR);
                        break;
                    case '`puesto`':
                        $stmt->bindValue($identifier, $this->puesto, PDO::PARAM_STR);
                        break;
                    case '`correo`':
                        $stmt->bindValue($identifier, $this->correo, PDO::PARAM_STR);
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
        $this->setIdEncuesta($pk);

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


            if (($retval = comlabPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = comlabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEncuesta();
                break;
            case 1:
                return $this->getIdUsuario();
                break;
            case 2:
                return $this->getConflictos();
                break;
            case 3:
                return $this->getOrtografia();
                break;
            case 4:
                return $this->getProcesos();
                break;
            case 5:
                return $this->getEquipo();
                break;
            case 6:
                return $this->getAdmintiempo();
                break;
            case 7:
                return $this->getSeguridadpersonal();
                break;
            case 8:
                return $this->getFelicidadpalabra();
                break;
            case 9:
                return $this->getGestionproyectos();
                break;
            case 10:
                return $this->getPuntualidad();
                break;
            case 11:
                return $this->getNormas();
                break;
            case 12:
                return $this->getIntegracion();
                break;
            case 13:
                return $this->getInnovacion();
                break;
            case 14:
                return $this->getNegociacion();
                break;
            case 15:
                return $this->getAbstraccion();
                break;
            case 16:
                return $this->getDecisiones();
                break;
            case 17:
                return $this->getAdaptacion();
                break;
            case 18:
                return $this->getOtras();
                break;
            case 19:
                return $this->getDesempeniolaboral();
                break;
            case 20:
                return $this->getMejoras();
                break;
            case 21:
                return $this->getSugerencias();
                break;
            case 22:
                return $this->getNombres();
                break;
            case 23:
                return $this->getPuesto();
                break;
            case 24:
                return $this->getCorreo();
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
        if (isset($alreadyDumpedObjects['comlab'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['comlab'][$this->getPrimaryKey()] = true;
        $keys = comlabPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEncuesta(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getConflictos(),
            $keys[3] => $this->getOrtografia(),
            $keys[4] => $this->getProcesos(),
            $keys[5] => $this->getEquipo(),
            $keys[6] => $this->getAdmintiempo(),
            $keys[7] => $this->getSeguridadpersonal(),
            $keys[8] => $this->getFelicidadpalabra(),
            $keys[9] => $this->getGestionproyectos(),
            $keys[10] => $this->getPuntualidad(),
            $keys[11] => $this->getNormas(),
            $keys[12] => $this->getIntegracion(),
            $keys[13] => $this->getInnovacion(),
            $keys[14] => $this->getNegociacion(),
            $keys[15] => $this->getAbstraccion(),
            $keys[16] => $this->getDecisiones(),
            $keys[17] => $this->getAdaptacion(),
            $keys[18] => $this->getOtras(),
            $keys[19] => $this->getDesempeniolaboral(),
            $keys[20] => $this->getMejoras(),
            $keys[21] => $this->getSugerencias(),
            $keys[22] => $this->getNombres(),
            $keys[23] => $this->getPuesto(),
            $keys[24] => $this->getCorreo(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = comlabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEncuesta($value);
                break;
            case 1:
                $this->setIdUsuario($value);
                break;
            case 2:
                $this->setConflictos($value);
                break;
            case 3:
                $this->setOrtografia($value);
                break;
            case 4:
                $this->setProcesos($value);
                break;
            case 5:
                $this->setEquipo($value);
                break;
            case 6:
                $this->setAdmintiempo($value);
                break;
            case 7:
                $this->setSeguridadpersonal($value);
                break;
            case 8:
                $this->setFelicidadpalabra($value);
                break;
            case 9:
                $this->setGestionproyectos($value);
                break;
            case 10:
                $this->setPuntualidad($value);
                break;
            case 11:
                $this->setNormas($value);
                break;
            case 12:
                $this->setIntegracion($value);
                break;
            case 13:
                $this->setInnovacion($value);
                break;
            case 14:
                $this->setNegociacion($value);
                break;
            case 15:
                $this->setAbstraccion($value);
                break;
            case 16:
                $this->setDecisiones($value);
                break;
            case 17:
                $this->setAdaptacion($value);
                break;
            case 18:
                $this->setOtras($value);
                break;
            case 19:
                $this->setDesempeniolaboral($value);
                break;
            case 20:
                $this->setMejoras($value);
                break;
            case 21:
                $this->setSugerencias($value);
                break;
            case 22:
                $this->setNombres($value);
                break;
            case 23:
                $this->setPuesto($value);
                break;
            case 24:
                $this->setCorreo($value);
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
        $keys = comlabPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEncuesta($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConflictos($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrtografia($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProcesos($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEquipo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdmintiempo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSeguridadpersonal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFelicidadpalabra($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setGestionproyectos($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPuntualidad($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNormas($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIntegracion($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setInnovacion($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNegociacion($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAbstraccion($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDecisiones($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAdaptacion($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOtras($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDesempeniolaboral($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMejoras($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSugerencias($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setNombres($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPuesto($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCorreo($arr[$keys[24]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(comlabPeer::DATABASE_NAME);

        if ($this->isColumnModified(comlabPeer::ID)) $criteria->add(comlabPeer::ID, $this->id);
        if ($this->isColumnModified(comlabPeer::IDUSUARIO)) $criteria->add(comlabPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(comlabPeer::CONFLICTOS)) $criteria->add(comlabPeer::CONFLICTOS, $this->conflictos);
        if ($this->isColumnModified(comlabPeer::ORTOGRAFIA)) $criteria->add(comlabPeer::ORTOGRAFIA, $this->ortografia);
        if ($this->isColumnModified(comlabPeer::PROCESOS)) $criteria->add(comlabPeer::PROCESOS, $this->procesos);
        if ($this->isColumnModified(comlabPeer::EQUIPO)) $criteria->add(comlabPeer::EQUIPO, $this->equipo);
        if ($this->isColumnModified(comlabPeer::ADMINTIEMPO)) $criteria->add(comlabPeer::ADMINTIEMPO, $this->admintiempo);
        if ($this->isColumnModified(comlabPeer::SEGURIDADPERSONAL)) $criteria->add(comlabPeer::SEGURIDADPERSONAL, $this->seguridadpersonal);
        if ($this->isColumnModified(comlabPeer::FACILIDADPALABRA)) $criteria->add(comlabPeer::FACILIDADPALABRA, $this->facilidadpalabra);
        if ($this->isColumnModified(comlabPeer::GESTIONPROYECTOS)) $criteria->add(comlabPeer::GESTIONPROYECTOS, $this->gestionproyectos);
        if ($this->isColumnModified(comlabPeer::PUNTUALIDAD)) $criteria->add(comlabPeer::PUNTUALIDAD, $this->puntualidad);
        if ($this->isColumnModified(comlabPeer::NORMAS)) $criteria->add(comlabPeer::NORMAS, $this->normas);
        if ($this->isColumnModified(comlabPeer::INTEGRACION)) $criteria->add(comlabPeer::INTEGRACION, $this->integracion);
        if ($this->isColumnModified(comlabPeer::INNOVACION)) $criteria->add(comlabPeer::INNOVACION, $this->innovacion);
        if ($this->isColumnModified(comlabPeer::NEGOCIACION)) $criteria->add(comlabPeer::NEGOCIACION, $this->negociacion);
        if ($this->isColumnModified(comlabPeer::ABSTRACCION)) $criteria->add(comlabPeer::ABSTRACCION, $this->abstraccion);
        if ($this->isColumnModified(comlabPeer::DECISIONES)) $criteria->add(comlabPeer::DECISIONES, $this->decisiones);
        if ($this->isColumnModified(comlabPeer::ADAPTACION)) $criteria->add(comlabPeer::ADAPTACION, $this->adaptacion);
        if ($this->isColumnModified(comlabPeer::OTRAS)) $criteria->add(comlabPeer::OTRAS, $this->otras);
        if ($this->isColumnModified(comlabPeer::DESEMPENIOLABORAL)) $criteria->add(comlabPeer::DESEMPENIOLABORAL, $this->desempeniolaboral);
        if ($this->isColumnModified(comlabPeer::MEJORAS)) $criteria->add(comlabPeer::MEJORAS, $this->mejoras);
        if ($this->isColumnModified(comlabPeer::SUGERENCIAS)) $criteria->add(comlabPeer::SUGERENCIAS, $this->sugerencias);
        if ($this->isColumnModified(comlabPeer::NOMBRES)) $criteria->add(comlabPeer::NOMBRES, $this->nombres);
        if ($this->isColumnModified(comlabPeer::PUESTO)) $criteria->add(comlabPeer::PUESTO, $this->puesto);
        if ($this->isColumnModified(comlabPeer::CORREO)) $criteria->add(comlabPeer::CORREO, $this->correo);

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
        $criteria = new Criteria(comlabPeer::DATABASE_NAME);
        $criteria->add(comlabPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEncuesta();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEncuesta($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEncuesta();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of comlab (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setConflictos($this->getConflictos());
        $copyObj->setOrtografia($this->getOrtografia());
        $copyObj->setProcesos($this->getProcesos());
        $copyObj->setEquipo($this->getEquipo());
        $copyObj->setAdmintiempo($this->getAdmintiempo());
        $copyObj->setSeguridadpersonal($this->getSeguridadpersonal());
        $copyObj->setFelicidadpalabra($this->getFelicidadpalabra());
        $copyObj->setGestionproyectos($this->getGestionproyectos());
        $copyObj->setPuntualidad($this->getPuntualidad());
        $copyObj->setNormas($this->getNormas());
        $copyObj->setIntegracion($this->getIntegracion());
        $copyObj->setInnovacion($this->getInnovacion());
        $copyObj->setNegociacion($this->getNegociacion());
        $copyObj->setAbstraccion($this->getAbstraccion());
        $copyObj->setDecisiones($this->getDecisiones());
        $copyObj->setAdaptacion($this->getAdaptacion());
        $copyObj->setOtras($this->getOtras());
        $copyObj->setDesempeniolaboral($this->getDesempeniolaboral());
        $copyObj->setMejoras($this->getMejoras());
        $copyObj->setSugerencias($this->getSugerencias());
        $copyObj->setNombres($this->getNombres());
        $copyObj->setPuesto($this->getPuesto());
        $copyObj->setCorreo($this->getCorreo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEncuesta(NULL); // this is a auto-increment column, so set to default value
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
     * @return comlab Clone of current object.
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
     * @return comlabPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new comlabPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return comlab The current object (for fluent API support)
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
            $v->addcomlab($this);
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
                $this->aUsuario->addcomlabs($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->idusuario = null;
        $this->conflictos = null;
        $this->ortografia = null;
        $this->procesos = null;
        $this->equipo = null;
        $this->admintiempo = null;
        $this->seguridadpersonal = null;
        $this->facilidadpalabra = null;
        $this->gestionproyectos = null;
        $this->puntualidad = null;
        $this->normas = null;
        $this->integracion = null;
        $this->innovacion = null;
        $this->negociacion = null;
        $this->abstraccion = null;
        $this->decisiones = null;
        $this->adaptacion = null;
        $this->otras = null;
        $this->desempeniolaboral = null;
        $this->mejoras = null;
        $this->sugerencias = null;
        $this->nombres = null;
        $this->puesto = null;
        $this->correo = null;
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
            if ($this->aUsuario instanceof Persistent) {
              $this->aUsuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(comlabPeer::DEFAULT_STRING_FORMAT);
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
