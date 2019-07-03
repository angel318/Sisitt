<?php


/**
 * Base class that represents a row from the 'encuempr_nivjer' table.
 *
 *
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseNivjer extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'NivjerPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        NivjerPeer
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
     * The value for the agromandosu field.
     * @var        int
     */
    protected $agromandosu;

    /**
     * The value for the agromandoin field.
     * @var        int
     */
    protected $agromandoin;

    /**
     * The value for the agrosupervisor field.
     * @var        int
     */
    protected $agrosupervisor;

    /**
     * The value for the agrotecnico field.
     * @var        int
     */
    protected $agrotecnico;

    /**
     * The value for the agrootro field.
     * @var        int
     */
    protected $agrootro;

    /**
     * The value for the igemandosu field.
     * @var        int
     */
    protected $igemandosu;

    /**
     * The value for the igemandoin field.
     * @var        int
     */
    protected $igemandoin;

    /**
     * The value for the igesupervisor field.
     * @var        int
     */
    protected $igesupervisor;

    /**
     * The value for the igetecnico field.
     * @var        int
     */
    protected $igetecnico;

    /**
     * The value for the igeotro field.
     * @var        int
     */
    protected $igeotro;

    /**
     * The value for the biomandosu field.
     * @var        int
     */
    protected $biomandosu;

    /**
     * The value for the biomandoin field.
     * @var        int
     */
    protected $biomandoin;

    /**
     * The value for the biosupervisor field.
     * @var        int
     */
    protected $biosupervisor;

    /**
     * The value for the biotecnico field.
     * @var        int
     */
    protected $biotecnico;

    /**
     * The value for the biootro field.
     * @var        int
     */
    protected $biootro;

    /**
     * The value for the adminmandosu field.
     * @var        int
     */
    protected $adminmandosu;

    /**
     * The value for the adminmandoin field.
     * @var        int
     */
    protected $adminmandoin;

    /**
     * The value for the adminsupervisor field.
     * @var        int
     */
    protected $adminsupervisor;

    /**
     * The value for the admintecnico field.
     * @var        int
     */
    protected $admintecnico;

    /**
     * The value for the adminotro field.
     * @var        int
     */
    protected $adminotro;

    /**
     * The value for the infomandosu field.
     * @var        int
     */
    protected $infomandosu;

    /**
     * The value for the infomandoin field.
     * @var        int
     */
    protected $infomandoin;

    /**
     * The value for the infosupervisor field.
     * @var        int
     */
    protected $infosupervisor;

    /**
     * The value for the infotecnico field.
     * @var        int
     */
    protected $infotecnico;

    /**
     * The value for the infootro field.
     * @var        int
     */
    protected $infootro;

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
     * Get the [agromandosu] column value.
     *
     * @return int
     */
    public function getAgromandosu()
    {

        return $this->agromandosu;
    }

    /**
     * Get the [agromandoin] column value.
     *
     * @return int
     */
    public function getAgromandoin()
    {

        return $this->agromandoin;
    }

    /**
     * Get the [agrosupervisor] column value.
     *
     * @return int
     */
    public function getAgrosupervisor()
    {

        return $this->agrosupervisor;
    }

    /**
     * Get the [agrotecnico] column value.
     *
     * @return int
     */
    public function getAgrotecnico()
    {

        return $this->agrotecnico;
    }

    /**
     * Get the [agrootro] column value.
     *
     * @return int
     */
    public function getAgrootro()
    {

        return $this->agrootro;
    }

    /**
     * Get the [igemandosu] column value.
     *
     * @return int
     */
    public function getIgemandosu()
    {

        return $this->igemandosu;
    }

    /**
     * Get the [igemandoin] column value.
     *
     * @return int
     */
    public function getIgemandoin()
    {

        return $this->igemandoin;
    }

    /**
     * Get the [igesupervisor] column value.
     *
     * @return int
     */
    public function getIgesupervisor()
    {

        return $this->igesupervisor;
    }

    /**
     * Get the [igetecnico] column value.
     *
     * @return int
     */
    public function getIgetecnico()
    {

        return $this->igetecnico;
    }

    /**
     * Get the [igeotro] column value.
     *
     * @return int
     */
    public function getIgeotro()
    {

        return $this->igeotro;
    }

    /**
     * Get the [biomandosu] column value.
     *
     * @return int
     */
    public function getBiomandosu()
    {

        return $this->biomandosu;
    }

    /**
     * Get the [biomandoin] column value.
     *
     * @return int
     */
    public function getBiomandoin()
    {

        return $this->biomandoin;
    }

    /**
     * Get the [biosupervisor] column value.
     *
     * @return int
     */
    public function getBiosupervisor()
    {

        return $this->biosupervisor;
    }

    /**
     * Get the [biotecnico] column value.
     *
     * @return int
     */
    public function getBiotecnico()
    {

        return $this->biotecnico;
    }

    /**
     * Get the [biootro] column value.
     *
     * @return int
     */
    public function getBiootro()
    {

        return $this->biootro;
    }

    /**
     * Get the [adminmandosu] column value.
     *
     * @return int
     */
    public function getAdminmandosu()
    {

        return $this->adminmandosu;
    }

    /**
     * Get the [adminmandoin] column value.
     *
     * @return int
     */
    public function getAdminmandoin()
    {

        return $this->adminmandoin;
    }

    /**
     * Get the [adminsupervisor] column value.
     *
     * @return int
     */
    public function getAdminsupervisor()
    {

        return $this->adminsupervisor;
    }

    /**
     * Get the [admintecnico] column value.
     *
     * @return int
     */
    public function getAdmintecnico()
    {

        return $this->admintecnico;
    }

    /**
     * Get the [adminotro] column value.
     *
     * @return int
     */
    public function getAdminotro()
    {

        return $this->adminotro;
    }

    /**
     * Get the [infomandosu] column value.
     *
     * @return int
     */
    public function getInfomandosu()
    {

        return $this->infomandosu;
    }

    /**
     * Get the [infomandoin] column value.
     *
     * @return int
     */
    public function getInfomandoin()
    {

        return $this->infomandoin;
    }

    /**
     * Get the [infosupervisor] column value.
     *
     * @return int
     */
    public function getInfosupervisor()
    {

        return $this->infosupervisor;
    }

    /**
     * Get the [infotecnico] column value.
     *
     * @return int
     */
    public function getInfotecnico()
    {

        return $this->infotecnico;
    }

    /**
     * Get the [infootro] column value.
     *
     * @return int
     */
    public function getInfootro()
    {

        return $this->infootro;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIdEncuesta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = NivjerPeer::ID;
        }


        return $this;
    } // setIdEncuesta()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = NivjerPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [agromandosu] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAgromandosu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agromandosu !== $v) {
            $this->agromandosu = $v;
            $this->modifiedColumns[] = NivjerPeer::AGROMANDOSU;
        }


        return $this;
    } // setAgromandosu()

    /**
     * Set the value of [agromandoin] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAgromandoin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agromandoin !== $v) {
            $this->agromandoin = $v;
            $this->modifiedColumns[] = NivjerPeer::AGROMANDOIN;
        }


        return $this;
    } // setAgromandoin()

    /**
     * Set the value of [agrosupervisor] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAgrosupervisor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agrosupervisor !== $v) {
            $this->agrosupervisor = $v;
            $this->modifiedColumns[] = NivjerPeer::AGROSUPERVISOR;
        }


        return $this;
    } // setAgrosupervisor()

    /**
     * Set the value of [agrotecnico] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAgrotecnico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agrotecnico !== $v) {
            $this->agrotecnico = $v;
            $this->modifiedColumns[] = NivjerPeer::AGROTECNICO;
        }


        return $this;
    } // setAgrotecnico()

    /**
     * Set the value of [agrootro] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAgrootro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agrootro !== $v) {
            $this->agrootro = $v;
            $this->modifiedColumns[] = NivjerPeer::AGROOTRO;
        }


        return $this;
    } // setAgrootro()

    /**
     * Set the value of [igemandosu] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIgemandosu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->igemandosu !== $v) {
            $this->igemandosu = $v;
            $this->modifiedColumns[] = NivjerPeer::IGEMANDOSU;
        }


        return $this;
    } // setIgemandosu()

    /**
     * Set the value of [igemandoin] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIgemandoin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->igemandoin !== $v) {
            $this->igemandoin = $v;
            $this->modifiedColumns[] = NivjerPeer::IGEMANDOIN;
        }


        return $this;
    } // setIgemandoin()

    /**
     * Set the value of [igesupervisor] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIgesupervisor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->igesupervisor !== $v) {
            $this->igesupervisor = $v;
            $this->modifiedColumns[] = NivjerPeer::IGESUPERVISOR;
        }


        return $this;
    } // setIgesupervisor()

    /**
     * Set the value of [igetecnico] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIgetecnico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->igetecnico !== $v) {
            $this->igetecnico = $v;
            $this->modifiedColumns[] = NivjerPeer::IGETECNICO;
        }


        return $this;
    } // setIgetecnico()

    /**
     * Set the value of [igeotro] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setIgeotro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->igeotro !== $v) {
            $this->igeotro = $v;
            $this->modifiedColumns[] = NivjerPeer::IGEOTRO;
        }


        return $this;
    } // setIgeotro()

    /**
     * Set the value of [biomandosu] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setBiomandosu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->biomandosu !== $v) {
            $this->biomandosu = $v;
            $this->modifiedColumns[] = NivjerPeer::BIOMANDOSU;
        }


        return $this;
    } // setBiomandosu()

    /**
     * Set the value of [biomandoin] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setBiomandoin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->biomandoin !== $v) {
            $this->biomandoin = $v;
            $this->modifiedColumns[] = NivjerPeer::BIOMANDOIN;
        }


        return $this;
    } // setBiomandoin()

    /**
     * Set the value of [biosupervisor] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setBiosupervisor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->biosupervisor !== $v) {
            $this->biosupervisor = $v;
            $this->modifiedColumns[] = NivjerPeer::BIOSUPERVISOR;
        }


        return $this;
    } // setBiosupervisor()

    /**
     * Set the value of [biotecnico] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setBiotecnico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->biotecnico !== $v) {
            $this->biotecnico = $v;
            $this->modifiedColumns[] = NivjerPeer::BIOTECNICO;
        }


        return $this;
    } // setBiotecnico()

    /**
     * Set the value of [biootro] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setBiootro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->biootro !== $v) {
            $this->biootro = $v;
            $this->modifiedColumns[] = NivjerPeer::BIOOTRO;
        }


        return $this;
    } // setBiootro()

    /**
     * Set the value of [adminmandosu] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAdminmandosu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->adminmandosu !== $v) {
            $this->adminmandosu = $v;
            $this->modifiedColumns[] = NivjerPeer::ADMINMANDOSU;
        }


        return $this;
    } // setAdminmandosu()

    /**
     * Set the value of [adminmandoin] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAdminmandoin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->adminmandoin !== $v) {
            $this->adminmandoin = $v;
            $this->modifiedColumns[] = NivjerPeer::ADMINMANDOIN;
        }


        return $this;
    } // setAdminmandoin()

    /**
     * Set the value of [adminsupervisor] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAdminsupervisor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->adminsupervisor !== $v) {
            $this->adminsupervisor = $v;
            $this->modifiedColumns[] = NivjerPeer::ADMINSUPERVISOR;
        }


        return $this;
    } // setAdminsupervisor()

    /**
     * Set the value of [admintecnico] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAdmintecnico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->admintecnico !== $v) {
            $this->admintecnico = $v;
            $this->modifiedColumns[] = NivjerPeer::ADMINTECNICO;
        }


        return $this;
    } // setAdmintecnico()

    /**
     * Set the value of [adminotro] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setAdminotro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->adminotro !== $v) {
            $this->adminotro = $v;
            $this->modifiedColumns[] = NivjerPeer::ADMINOTRO;
        }


        return $this;
    } // setAdminotro()

    /**
     * Set the value of [infomandosu] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setInfomandosu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infomandosu !== $v) {
            $this->infomandosu = $v;
            $this->modifiedColumns[] = NivjerPeer::INFOMANDOSU;
        }


        return $this;
    } // setInfomandosu()

    /**
     * Set the value of [infomandoin] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setInfomandoin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infomandoin !== $v) {
            $this->infomandoin = $v;
            $this->modifiedColumns[] = NivjerPeer::INFOMANDOIN;
        }


        return $this;
    } // setInfomandoin()

    /**
     * Set the value of [infosupervisor] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setInfosupervisor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infosupervisor !== $v) {
            $this->infosupervisor = $v;
            $this->modifiedColumns[] = NivjerPeer::INFOSUPERVISOR;
        }


        return $this;
    } // setInfosupervisor()

    /**
     * Set the value of [infotecnico] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setInfotecnico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infotecnico !== $v) {
            $this->infotecnico = $v;
            $this->modifiedColumns[] = NivjerPeer::INFOTECNICO;
        }


        return $this;
    } // setInfotecnico()

    /**
     * Set the value of [infootro] column.
     *
     * @param  int $v new value
     * @return Nivjer The current object (for fluent API support)
     */
    public function setInfootro($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infootro !== $v) {
            $this->infootro = $v;
            $this->modifiedColumns[] = NivjerPeer::INFOOTRO;
        }


        return $this;
    } // setInfootro()

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
            $this->agromandosu = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->agromandoin = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->agrosupervisor = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->agrotecnico = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->agrootro = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->igemandosu = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->igemandoin = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->igesupervisor = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->igetecnico = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->igeotro = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->biomandosu = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->biomandoin = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->biosupervisor = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->biotecnico = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->biootro = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->adminmandosu = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->adminmandoin = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->adminsupervisor = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->admintecnico = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->adminotro = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->infomandosu = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->infomandoin = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->infosupervisor = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->infotecnico = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->infootro = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 27; // 27 = NivjerPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Nivjer object", $e);
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
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = NivjerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = NivjerQuery::create()
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
            $con = Propel::getConnection(NivjerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                NivjerPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = NivjerPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . NivjerPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(NivjerPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(NivjerPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(NivjerPeer::AGROMANDOSU)) {
            $modifiedColumns[':p' . $index++]  = '`agromandosu`';
        }
        if ($this->isColumnModified(NivjerPeer::AGROMANDOIN)) {
            $modifiedColumns[':p' . $index++]  = '`agromandoin`';
        }
        if ($this->isColumnModified(NivjerPeer::AGROSUPERVISOR)) {
            $modifiedColumns[':p' . $index++]  = '`agrosupervisor`';
        }
        if ($this->isColumnModified(NivjerPeer::AGROTECNICO)) {
            $modifiedColumns[':p' . $index++]  = '`agrotecnico`';
        }
        if ($this->isColumnModified(NivjerPeer::AGROOTRO)) {
            $modifiedColumns[':p' . $index++]  = '`agrootro`';
        }
        if ($this->isColumnModified(NivjerPeer::IGEMANDOSU)) {
            $modifiedColumns[':p' . $index++]  = '`igemandosu`';
        }
        if ($this->isColumnModified(NivjerPeer::IGEMANDOIN)) {
            $modifiedColumns[':p' . $index++]  = '`igemandoin`';
        }
        if ($this->isColumnModified(NivjerPeer::IGESUPERVISOR)) {
            $modifiedColumns[':p' . $index++]  = '`igesupervisor`';
        }
        if ($this->isColumnModified(NivjerPeer::IGETECNICO)) {
            $modifiedColumns[':p' . $index++]  = '`igetecnico`';
        }
        if ($this->isColumnModified(NivjerPeer::IGEOTRO)) {
            $modifiedColumns[':p' . $index++]  = '`igeotro`';
        }
        if ($this->isColumnModified(NivjerPeer::BIOMANDOSU)) {
            $modifiedColumns[':p' . $index++]  = '`biomandosu`';
        }
        if ($this->isColumnModified(NivjerPeer::BIOMANDOIN)) {
            $modifiedColumns[':p' . $index++]  = '`biomandoin`';
        }
        if ($this->isColumnModified(NivjerPeer::BIOSUPERVISOR)) {
            $modifiedColumns[':p' . $index++]  = '`biosupervisor`';
        }
        if ($this->isColumnModified(NivjerPeer::BIOTECNICO)) {
            $modifiedColumns[':p' . $index++]  = '`biotecnico`';
        }
        if ($this->isColumnModified(NivjerPeer::BIOOTRO)) {
            $modifiedColumns[':p' . $index++]  = '`biootro`';
        }
        if ($this->isColumnModified(NivjerPeer::ADMINMANDOSU)) {
            $modifiedColumns[':p' . $index++]  = '`adminmandosu`';
        }
        if ($this->isColumnModified(NivjerPeer::ADMINMANDOIN)) {
            $modifiedColumns[':p' . $index++]  = '`adminmandoin`';
        }
        if ($this->isColumnModified(NivjerPeer::ADMINSUPERVISOR)) {
            $modifiedColumns[':p' . $index++]  = '`adminsupervisor`';
        }
        if ($this->isColumnModified(NivjerPeer::ADMINTECNICO)) {
            $modifiedColumns[':p' . $index++]  = '`admintecnico`';
        }
        if ($this->isColumnModified(NivjerPeer::ADMINOTRO)) {
            $modifiedColumns[':p' . $index++]  = '`adminotro`';
        }
        if ($this->isColumnModified(NivjerPeer::INFOMANDOSU)) {
            $modifiedColumns[':p' . $index++]  = '`infomandosu`';
        }
        if ($this->isColumnModified(NivjerPeer::INFOMANDOIN)) {
            $modifiedColumns[':p' . $index++]  = '`infomandoin`';
        }
        if ($this->isColumnModified(NivjerPeer::INFOSUPERVISOR)) {
            $modifiedColumns[':p' . $index++]  = '`infosupervisor`';
        }
        if ($this->isColumnModified(NivjerPeer::INFOTECNICO)) {
            $modifiedColumns[':p' . $index++]  = '`infotecnico`';
        }
        if ($this->isColumnModified(NivjerPeer::INFOOTRO)) {
            $modifiedColumns[':p' . $index++]  = '`infootro`';
        }

        $sql = sprintf(
            'INSERT INTO `encuempr_nivjer` (%s) VALUES (%s)',
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
                    case '`agromandosu`':
                        $stmt->bindValue($identifier, $this->agromandosu, PDO::PARAM_INT);
                        break;
                    case '`agromandoin`':
                        $stmt->bindValue($identifier, $this->agromandoin, PDO::PARAM_INT);
                        break;
                    case '`agrosupervisor`':
                        $stmt->bindValue($identifier, $this->agrosupervisor, PDO::PARAM_INT);
                        break;
                    case '`agrotecnico`':
                        $stmt->bindValue($identifier, $this->agrotecnico, PDO::PARAM_INT);
                        break;
                    case '`agrootro`':
                        $stmt->bindValue($identifier, $this->agrootro, PDO::PARAM_INT);
                        break;
                    case '`igemandosu`':
                        $stmt->bindValue($identifier, $this->igemandosu, PDO::PARAM_INT);
                        break;
                    case '`igemandoin`':
                        $stmt->bindValue($identifier, $this->igemandoin, PDO::PARAM_INT);
                        break;
                    case '`igesupervisor`':
                        $stmt->bindValue($identifier, $this->igesupervisor, PDO::PARAM_INT);
                        break;
                    case '`igetecnico`':
                        $stmt->bindValue($identifier, $this->igetecnico, PDO::PARAM_INT);
                        break;
                    case '`igeotro`':
                        $stmt->bindValue($identifier, $this->igeotro, PDO::PARAM_INT);
                        break;
                    case '`biomandosu`':
                        $stmt->bindValue($identifier, $this->biomandosu, PDO::PARAM_INT);
                        break;
                    case '`biomandoin`':
                        $stmt->bindValue($identifier, $this->biomandoin, PDO::PARAM_INT);
                        break;
                    case '`biosupervisor`':
                        $stmt->bindValue($identifier, $this->biosupervisor, PDO::PARAM_INT);
                        break;
                    case '`biotecnico`':
                        $stmt->bindValue($identifier, $this->biotecnico, PDO::PARAM_INT);
                        break;
                    case '`biootro`':
                        $stmt->bindValue($identifier, $this->biootro, PDO::PARAM_INT);
                        break;
                    case '`adminmandosu`':
                        $stmt->bindValue($identifier, $this->adminmandosu, PDO::PARAM_INT);
                        break;
                    case '`adminmandoin`':
                        $stmt->bindValue($identifier, $this->adminmandoin, PDO::PARAM_INT);
                        break;
                    case '`adminsupervisor`':
                        $stmt->bindValue($identifier, $this->adminsupervisor, PDO::PARAM_INT);
                        break;
                    case '`admintecnico`':
                        $stmt->bindValue($identifier, $this->admintecnico, PDO::PARAM_INT);
                        break;
                    case '`adminotro`':
                        $stmt->bindValue($identifier, $this->adminotro, PDO::PARAM_INT);
                        break;
                    case '`infomandosu`':
                        $stmt->bindValue($identifier, $this->infomandosu, PDO::PARAM_INT);
                        break;
                    case '`infomandoin`':
                        $stmt->bindValue($identifier, $this->infomandoin, PDO::PARAM_INT);
                        break;
                    case '`infosupervisor`':
                        $stmt->bindValue($identifier, $this->infosupervisor, PDO::PARAM_INT);
                        break;
                    case '`infotecnico`':
                        $stmt->bindValue($identifier, $this->infotecnico, PDO::PARAM_INT);
                        break;
                    case '`infootro`':
                        $stmt->bindValue($identifier, $this->infootro, PDO::PARAM_INT);
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


            if (($retval = NivjerPeer::doValidate($this, $columns)) !== true) {
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
        $pos = NivjerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAgromandosu();
                break;
            case 3:
                return $this->getAgromandoin();
                break;
            case 4:
                return $this->getAgrosupervisor();
                break;
            case 5:
                return $this->getAgrotecnico();
                break;
            case 6:
                return $this->getAgrootro();
                break;
            case 7:
                return $this->getIgemandosu();
                break;
            case 8:
                return $this->getIgemandoin();
                break;
            case 9:
                return $this->getIgesupervisor();
                break;
            case 10:
                return $this->getIgetecnico();
                break;
            case 11:
                return $this->getIgeotro();
                break;
            case 12:
                return $this->getBiomandosu();
                break;
            case 13:
                return $this->getBiomandoin();
                break;
            case 14:
                return $this->getBiosupervisor();
                break;
            case 15:
                return $this->getBiotecnico();
                break;
            case 16:
                return $this->getBiootro();
                break;
            case 17:
                return $this->getAdminmandosu();
                break;
            case 18:
                return $this->getAdminmandoin();
                break;
            case 19:
                return $this->getAdminsupervisor();
                break;
            case 20:
                return $this->getAdmintecnico();
                break;
            case 21:
                return $this->getAdminotro();
                break;
            case 22:
                return $this->getInfomandosu();
                break;
            case 23:
                return $this->getInfomandoin();
                break;
            case 24:
                return $this->getInfosupervisor();
                break;
            case 25:
                return $this->getInfotecnico();
                break;
            case 26:
                return $this->getInfootro();
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
        if (isset($alreadyDumpedObjects['Nivjer'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Nivjer'][$this->getPrimaryKey()] = true;
        $keys = NivjerPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEncuesta(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getAgromandosu(),
            $keys[3] => $this->getAgromandoin(),
            $keys[4] => $this->getAgrosupervisor(),
            $keys[5] => $this->getAgrotecnico(),
            $keys[6] => $this->getAgrootro(),
            $keys[7] => $this->getIgemandosu(),
            $keys[8] => $this->getIgemandoin(),
            $keys[9] => $this->getIgesupervisor(),
            $keys[10] => $this->getIgetecnico(),
            $keys[11] => $this->getIgeotro(),
            $keys[12] => $this->getBiomandosu(),
            $keys[13] => $this->getBiomandoin(),
            $keys[14] => $this->getBiosupervisor(),
            $keys[15] => $this->getBiotecnico(),
            $keys[16] => $this->getBiootro(),
            $keys[17] => $this->getAdminmandosu(),
            $keys[18] => $this->getAdminmandoin(),
            $keys[19] => $this->getAdminsupervisor(),
            $keys[20] => $this->getAdmintecnico(),
            $keys[21] => $this->getAdminotro(),
            $keys[22] => $this->getInfomandosu(),
            $keys[23] => $this->getInfomandoin(),
            $keys[24] => $this->getInfosupervisor(),
            $keys[25] => $this->getInfotecnico(),
            $keys[26] => $this->getInfootro(),
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
        $pos = NivjerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAgromandosu($value);
                break;
            case 3:
                $this->setAgromandoin($value);
                break;
            case 4:
                $this->setAgrosupervisor($value);
                break;
            case 5:
                $this->setAgrotecnico($value);
                break;
            case 6:
                $this->setAgrootro($value);
                break;
            case 7:
                $this->setIgemandosu($value);
                break;
            case 8:
                $this->setIgemandoin($value);
                break;
            case 9:
                $this->setIgesupervisor($value);
                break;
            case 10:
                $this->setIgetecnico($value);
                break;
            case 11:
                $this->setIgeotro($value);
                break;
            case 12:
                $this->setBiomandosu($value);
                break;
            case 13:
                $this->setBiomandoin($value);
                break;
            case 14:
                $this->setBiosupervisor($value);
                break;
            case 15:
                $this->setBiotecnico($value);
                break;
            case 16:
                $this->setBiootro($value);
                break;
            case 17:
                $this->setAdminmandosu($value);
                break;
            case 18:
                $this->setAdminmandoin($value);
                break;
            case 19:
                $this->setAdminsupervisor($value);
                break;
            case 20:
                $this->setAdmintecnico($value);
                break;
            case 21:
                $this->setAdminotro($value);
                break;
            case 22:
                $this->setInfomandosu($value);
                break;
            case 23:
                $this->setInfomandoin($value);
                break;
            case 24:
                $this->setInfosupervisor($value);
                break;
            case 25:
                $this->setInfotecnico($value);
                break;
            case 26:
                $this->setInfootro($value);
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
        $keys = NivjerPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEncuesta($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAgromandosu($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAgromandoin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAgrosupervisor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAgrotecnico($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAgrootro($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIgemandosu($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIgemandoin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIgesupervisor($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIgetecnico($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIgeotro($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBiomandosu($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBiomandoin($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBiosupervisor($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setBiotecnico($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBiootro($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAdminmandosu($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAdminmandoin($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAdminsupervisor($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAdmintecnico($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAdminotro($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setInfomandosu($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setInfomandoin($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setInfosupervisor($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setInfotecnico($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setInfootro($arr[$keys[26]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(NivjerPeer::DATABASE_NAME);

        if ($this->isColumnModified(NivjerPeer::ID)) $criteria->add(NivjerPeer::ID, $this->id);
        if ($this->isColumnModified(NivjerPeer::IDUSUARIO)) $criteria->add(NivjerPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(NivjerPeer::AGROMANDOSU)) $criteria->add(NivjerPeer::AGROMANDOSU, $this->agromandosu);
        if ($this->isColumnModified(NivjerPeer::AGROMANDOIN)) $criteria->add(NivjerPeer::AGROMANDOIN, $this->agromandoin);
        if ($this->isColumnModified(NivjerPeer::AGROSUPERVISOR)) $criteria->add(NivjerPeer::AGROSUPERVISOR, $this->agrosupervisor);
        if ($this->isColumnModified(NivjerPeer::AGROTECNICO)) $criteria->add(NivjerPeer::AGROTECNICO, $this->agrotecnico);
        if ($this->isColumnModified(NivjerPeer::AGROOTRO)) $criteria->add(NivjerPeer::AGROOTRO, $this->agrootro);
        if ($this->isColumnModified(NivjerPeer::IGEMANDOSU)) $criteria->add(NivjerPeer::IGEMANDOSU, $this->igemandosu);
        if ($this->isColumnModified(NivjerPeer::IGEMANDOIN)) $criteria->add(NivjerPeer::IGEMANDOIN, $this->igemandoin);
        if ($this->isColumnModified(NivjerPeer::IGESUPERVISOR)) $criteria->add(NivjerPeer::IGESUPERVISOR, $this->igesupervisor);
        if ($this->isColumnModified(NivjerPeer::IGETECNICO)) $criteria->add(NivjerPeer::IGETECNICO, $this->igetecnico);
        if ($this->isColumnModified(NivjerPeer::IGEOTRO)) $criteria->add(NivjerPeer::IGEOTRO, $this->igeotro);
        if ($this->isColumnModified(NivjerPeer::BIOMANDOSU)) $criteria->add(NivjerPeer::BIOMANDOSU, $this->biomandosu);
        if ($this->isColumnModified(NivjerPeer::BIOMANDOIN)) $criteria->add(NivjerPeer::BIOMANDOIN, $this->biomandoin);
        if ($this->isColumnModified(NivjerPeer::BIOSUPERVISOR)) $criteria->add(NivjerPeer::BIOSUPERVISOR, $this->biosupervisor);
        if ($this->isColumnModified(NivjerPeer::BIOTECNICO)) $criteria->add(NivjerPeer::BIOTECNICO, $this->biotecnico);
        if ($this->isColumnModified(NivjerPeer::BIOOTRO)) $criteria->add(NivjerPeer::BIOOTRO, $this->biootro);
        if ($this->isColumnModified(NivjerPeer::ADMINMANDOSU)) $criteria->add(NivjerPeer::ADMINMANDOSU, $this->adminmandosu);
        if ($this->isColumnModified(NivjerPeer::ADMINMANDOIN)) $criteria->add(NivjerPeer::ADMINMANDOIN, $this->adminmandoin);
        if ($this->isColumnModified(NivjerPeer::ADMINSUPERVISOR)) $criteria->add(NivjerPeer::ADMINSUPERVISOR, $this->adminsupervisor);
        if ($this->isColumnModified(NivjerPeer::ADMINTECNICO)) $criteria->add(NivjerPeer::ADMINTECNICO, $this->admintecnico);
        if ($this->isColumnModified(NivjerPeer::ADMINOTRO)) $criteria->add(NivjerPeer::ADMINOTRO, $this->adminotro);
        if ($this->isColumnModified(NivjerPeer::INFOMANDOSU)) $criteria->add(NivjerPeer::INFOMANDOSU, $this->infomandosu);
        if ($this->isColumnModified(NivjerPeer::INFOMANDOIN)) $criteria->add(NivjerPeer::INFOMANDOIN, $this->infomandoin);
        if ($this->isColumnModified(NivjerPeer::INFOSUPERVISOR)) $criteria->add(NivjerPeer::INFOSUPERVISOR, $this->infosupervisor);
        if ($this->isColumnModified(NivjerPeer::INFOTECNICO)) $criteria->add(NivjerPeer::INFOTECNICO, $this->infotecnico);
        if ($this->isColumnModified(NivjerPeer::INFOOTRO)) $criteria->add(NivjerPeer::INFOOTRO, $this->infootro);

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
        $criteria = new Criteria(NivjerPeer::DATABASE_NAME);
        $criteria->add(NivjerPeer::ID, $this->id);

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
     * @param object $copyObj An object of Nivjer (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setAgromandosu($this->getAgromandosu());
        $copyObj->setAgromandoin($this->getAgromandoin());
        $copyObj->setAgrosupervisor($this->getAgrosupervisor());
        $copyObj->setAgrotecnico($this->getAgrotecnico());
        $copyObj->setAgrootro($this->getAgrootro());
        $copyObj->setIgemandosu($this->getIgemandosu());
        $copyObj->setIgemandoin($this->getIgemandoin());
        $copyObj->setIgesupervisor($this->getIgesupervisor());
        $copyObj->setIgetecnico($this->getIgetecnico());
        $copyObj->setIgeotro($this->getIgeotro());
        $copyObj->setBiomandosu($this->getBiomandosu());
        $copyObj->setBiomandoin($this->getBiomandoin());
        $copyObj->setBiosupervisor($this->getBiosupervisor());
        $copyObj->setBiotecnico($this->getBiotecnico());
        $copyObj->setBiootro($this->getBiootro());
        $copyObj->setAdminmandosu($this->getAdminmandosu());
        $copyObj->setAdminmandoin($this->getAdminmandoin());
        $copyObj->setAdminsupervisor($this->getAdminsupervisor());
        $copyObj->setAdmintecnico($this->getAdmintecnico());
        $copyObj->setAdminotro($this->getAdminotro());
        $copyObj->setInfomandosu($this->getInfomandosu());
        $copyObj->setInfomandoin($this->getInfomandoin());
        $copyObj->setInfosupervisor($this->getInfosupervisor());
        $copyObj->setInfotecnico($this->getInfotecnico());
        $copyObj->setInfootro($this->getInfootro());

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
     * @return Nivjer Clone of current object.
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
     * @return NivjerPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new NivjerPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Nivjer The current object (for fluent API support)
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
            $v->addNivjer($this);
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
                $this->aUsuario->addNivjers($this);
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
        $this->agromandosu = null;
        $this->agromandoin = null;
        $this->agrosupervisor = null;
        $this->agrotecnico = null;
        $this->agrootro = null;
        $this->igemandosu = null;
        $this->igemandoin = null;
        $this->igesupervisor = null;
        $this->igetecnico = null;
        $this->igeotro = null;
        $this->biomandosu = null;
        $this->biomandoin = null;
        $this->biosupervisor = null;
        $this->biotecnico = null;
        $this->biootro = null;
        $this->adminmandosu = null;
        $this->adminmandoin = null;
        $this->adminsupervisor = null;
        $this->admintecnico = null;
        $this->adminotro = null;
        $this->infomandosu = null;
        $this->infomandoin = null;
        $this->infosupervisor = null;
        $this->infotecnico = null;
        $this->infootro = null;
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
        return (string) $this->exportTo(NivjerPeer::DEFAULT_STRING_FORMAT);
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
