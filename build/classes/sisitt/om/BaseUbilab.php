<?php


/**
 * Base class that represents a row from the 'encuempr_ubilab' table.
 *
 *
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseUbilab extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UbilabPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UbilabPeer
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
     * The value for the numpro field.
     * @var        int
     */
    protected $numpro;

    /**
     * The value for the numegre field.
     * @var        int
     */
    protected $numegre;

    /**
     * The value for the congruencia field.
     * @var        int
     */
    protected $congruencia;

    /**
     * The value for the carrera1 field.
     * @var        string
     */
    protected $carrera1;

    /**
     * The value for the carrera2 field.
     * @var        string
     */
    protected $carrera2;

    /**
     * The value for the carrera3 field.
     * @var        string
     */
    protected $carrera3;

    /**
     * The value for the carrera4 field.
     * @var        string
     */
    protected $carrera4;

    /**
     * The value for the carrera5 field.
     * @var        string
     */
    protected $carrera5;

    /**
     * The value for the carrera6 field.
     * @var        string
     */
    protected $carrera6;

    /**
     * The value for the requisito1 field.
     * @var        boolean
     */
    protected $requisito1;

    /**
     * The value for the requisito2 field.
     * @var        boolean
     */
    protected $requisito2;

    /**
     * The value for the requisito3 field.
     * @var        boolean
     */
    protected $requisito3;

    /**
     * The value for the requisito4 field.
     * @var        boolean
     */
    protected $requisito4;

    /**
     * The value for the requisito5 field.
     * @var        boolean
     */
    protected $requisito5;

    /**
     * The value for the requisito6 field.
     * @var        boolean
     */
    protected $requisito6;

    /**
     * The value for the requisito7 field.
     * @var        boolean
     */
    protected $requisito7;

    /**
     * The value for the requisito8 field.
     * @var        boolean
     */
    protected $requisito8;

    /**
     * The value for the requisito9 field.
     * @var        string
     */
    protected $requisito9;

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
     * Get the [numpro] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getNumPro()
    {
        if (null === $this->numpro) {
            return null;
        }
        $valueSet = UbilabPeer::getValueSet(UbilabPeer::NUMPRO);
        if (!isset($valueSet[$this->numpro])) {
            throw new PropelException('Unknown stored enum key: ' . $this->numpro);
        }

        return $valueSet[$this->numpro];
    }

    /**
     * Get the [numegre] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getNumEgre()
    {
        if (null === $this->numegre) {
            return null;
        }
        $valueSet = UbilabPeer::getValueSet(UbilabPeer::NUMEGRE);
        if (!isset($valueSet[$this->numegre])) {
            throw new PropelException('Unknown stored enum key: ' . $this->numegre);
        }

        return $valueSet[$this->numegre];
    }

    /**
     * Get the [congruencia] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getCongruencia()
    {
        if (null === $this->congruencia) {
            return null;
        }
        $valueSet = UbilabPeer::getValueSet(UbilabPeer::CONGRUENCIA);
        if (!isset($valueSet[$this->congruencia])) {
            throw new PropelException('Unknown stored enum key: ' . $this->congruencia);
        }

        return $valueSet[$this->congruencia];
    }

    /**
     * Get the [carrera1] column value.
     *
     * @return string
     */
    public function getCarrera1()
    {

        return $this->carrera1;
    }

    /**
     * Get the [carrera2] column value.
     *
     * @return string
     */
    public function getCarrera2()
    {

        return $this->carrera2;
    }

    /**
     * Get the [carrera3] column value.
     *
     * @return string
     */
    public function getCarrera3()
    {

        return $this->carrera3;
    }

    /**
     * Get the [carrera4] column value.
     *
     * @return string
     */
    public function getCarrera4()
    {

        return $this->carrera4;
    }

    /**
     * Get the [carrera5] column value.
     *
     * @return string
     */
    public function getCarrera5()
    {

        return $this->carrera5;
    }

    /**
     * Get the [carrera6] column value.
     *
     * @return string
     */
    public function getCarrera6()
    {

        return $this->carrera6;
    }

    /**
     * Get the [requisito1] column value.
     *
     * @return boolean
     */
    public function getRequisito1()
    {

        return $this->requisito1;
    }

    /**
     * Get the [requisito2] column value.
     *
     * @return boolean
     */
    public function getRequisito2()
    {

        return $this->requisito2;
    }

    /**
     * Get the [requisito3] column value.
     *
     * @return boolean
     */
    public function getRequisito3()
    {

        return $this->requisito3;
    }

    /**
     * Get the [requisito4] column value.
     *
     * @return boolean
     */
    public function getRequisito4()
    {

        return $this->requisito4;
    }

    /**
     * Get the [requisito5] column value.
     *
     * @return boolean
     */
    public function getRequisito5()
    {

        return $this->requisito5;
    }

    /**
     * Get the [requisito6] column value.
     *
     * @return boolean
     */
    public function getRequisito6()
    {

        return $this->requisito6;
    }

    /**
     * Get the [requisito7] column value.
     *
     * @return boolean
     */
    public function getRequisito7()
    {

        return $this->requisito7;
    }

    /**
     * Get the [requisito8] column value.
     *
     * @return boolean
     */
    public function getRequisito8()
    {

        return $this->requisito8;
    }

    /**
     * Get the [requisito9] column value.
     *
     * @return string
     */
    public function getRequisito9()
    {

        return $this->requisito9;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setIdEncuesta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UbilabPeer::ID;
        }


        return $this;
    } // setIdEncuesta()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = UbilabPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [numpro] column.
     *
     * @param  int $v new value
     * @return Ubilab The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setNumPro($v)
    {
        if ($v !== null) {
            $valueSet = UbilabPeer::getValueSet(UbilabPeer::NUMPRO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->numpro !== $v) {
            $this->numpro = $v;
            $this->modifiedColumns[] = UbilabPeer::NUMPRO;
        }


        return $this;
    } // setNumPro()

    /**
     * Set the value of [numegre] column.
     *
     * @param  int $v new value
     * @return Ubilab The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setNumEgre($v)
    {
        if ($v !== null) {
            $valueSet = UbilabPeer::getValueSet(UbilabPeer::NUMEGRE);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->numegre !== $v) {
            $this->numegre = $v;
            $this->modifiedColumns[] = UbilabPeer::NUMEGRE;
        }


        return $this;
    } // setNumEgre()

    /**
     * Set the value of [congruencia] column.
     *
     * @param  int $v new value
     * @return Ubilab The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setCongruencia($v)
    {
        if ($v !== null) {
            $valueSet = UbilabPeer::getValueSet(UbilabPeer::CONGRUENCIA);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->congruencia !== $v) {
            $this->congruencia = $v;
            $this->modifiedColumns[] = UbilabPeer::CONGRUENCIA;
        }


        return $this;
    } // setCongruencia()

    /**
     * Set the value of [carrera1] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setCarrera1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carrera1 !== $v) {
            $this->carrera1 = $v;
            $this->modifiedColumns[] = UbilabPeer::CARRERA1;
        }


        return $this;
    } // setCarrera1()

    /**
     * Set the value of [carrera2] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setCarrera2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carrera2 !== $v) {
            $this->carrera2 = $v;
            $this->modifiedColumns[] = UbilabPeer::CARRERA2;
        }


        return $this;
    } // setCarrera2()

    /**
     * Set the value of [carrera3] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setCarrera3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carrera3 !== $v) {
            $this->carrera3 = $v;
            $this->modifiedColumns[] = UbilabPeer::CARRERA3;
        }


        return $this;
    } // setCarrera3()

    /**
     * Set the value of [carrera4] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setCarrera4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carrera4 !== $v) {
            $this->carrera4 = $v;
            $this->modifiedColumns[] = UbilabPeer::CARRERA4;
        }


        return $this;
    } // setCarrera4()

    /**
     * Set the value of [carrera5] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setCarrera5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carrera5 !== $v) {
            $this->carrera5 = $v;
            $this->modifiedColumns[] = UbilabPeer::CARRERA5;
        }


        return $this;
    } // setCarrera5()

    /**
     * Set the value of [carrera6] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setCarrera6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->carrera6 !== $v) {
            $this->carrera6 = $v;
            $this->modifiedColumns[] = UbilabPeer::CARRERA6;
        }


        return $this;
    } // setCarrera6()

    /**
     * Sets the value of the [requisito1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito1 !== $v) {
            $this->requisito1 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO1;
        }


        return $this;
    } // setRequisito1()

    /**
     * Sets the value of the [requisito2] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito2($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito2 !== $v) {
            $this->requisito2 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO2;
        }


        return $this;
    } // setRequisito2()

    /**
     * Sets the value of the [requisito3] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito3($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito3 !== $v) {
            $this->requisito3 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO3;
        }


        return $this;
    } // setRequisito3()

    /**
     * Sets the value of the [requisito4] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito4($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito4 !== $v) {
            $this->requisito4 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO4;
        }


        return $this;
    } // setRequisito4()

    /**
     * Sets the value of the [requisito5] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito5($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito5 !== $v) {
            $this->requisito5 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO5;
        }


        return $this;
    } // setRequisito5()

    /**
     * Sets the value of the [requisito6] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito6($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito6 !== $v) {
            $this->requisito6 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO6;
        }


        return $this;
    } // setRequisito6()

    /**
     * Sets the value of the [requisito7] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito7($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito7 !== $v) {
            $this->requisito7 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO7;
        }


        return $this;
    } // setRequisito7()

    /**
     * Sets the value of the [requisito8] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito8($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisito8 !== $v) {
            $this->requisito8 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO8;
        }


        return $this;
    } // setRequisito8()

    /**
     * Set the value of [requisito9] column.
     *
     * @param  string $v new value
     * @return Ubilab The current object (for fluent API support)
     */
    public function setRequisito9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->requisito9 !== $v) {
            $this->requisito9 = $v;
            $this->modifiedColumns[] = UbilabPeer::REQUISITO9;
        }


        return $this;
    } // setRequisito9()

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
            $this->numpro = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->numegre = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->congruencia = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->carrera1 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->carrera2 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->carrera3 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->carrera4 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->carrera5 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->carrera6 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->requisito1 = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->requisito2 = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->requisito3 = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->requisito4 = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
            $this->requisito5 = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->requisito6 = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
            $this->requisito7 = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->requisito8 = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->requisito9 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = UbilabPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ubilab object", $e);
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
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UbilabPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UbilabQuery::create()
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
            $con = Propel::getConnection(UbilabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UbilabPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = UbilabPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UbilabPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UbilabPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UbilabPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(UbilabPeer::NUMPRO)) {
            $modifiedColumns[':p' . $index++]  = '`numpro`';
        }
        if ($this->isColumnModified(UbilabPeer::NUMEGRE)) {
            $modifiedColumns[':p' . $index++]  = '`numegre`';
        }
        if ($this->isColumnModified(UbilabPeer::CONGRUENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`congruencia`';
        }
        if ($this->isColumnModified(UbilabPeer::CARRERA1)) {
            $modifiedColumns[':p' . $index++]  = '`carrera1`';
        }
        if ($this->isColumnModified(UbilabPeer::CARRERA2)) {
            $modifiedColumns[':p' . $index++]  = '`carrera2`';
        }
        if ($this->isColumnModified(UbilabPeer::CARRERA3)) {
            $modifiedColumns[':p' . $index++]  = '`carrera3`';
        }
        if ($this->isColumnModified(UbilabPeer::CARRERA4)) {
            $modifiedColumns[':p' . $index++]  = '`carrera4`';
        }
        if ($this->isColumnModified(UbilabPeer::CARRERA5)) {
            $modifiedColumns[':p' . $index++]  = '`carrera5`';
        }
        if ($this->isColumnModified(UbilabPeer::CARRERA6)) {
            $modifiedColumns[':p' . $index++]  = '`carrera6`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO1)) {
            $modifiedColumns[':p' . $index++]  = '`requisito1`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO2)) {
            $modifiedColumns[':p' . $index++]  = '`requisito2`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO3)) {
            $modifiedColumns[':p' . $index++]  = '`requisito3`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO4)) {
            $modifiedColumns[':p' . $index++]  = '`requisito4`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO5)) {
            $modifiedColumns[':p' . $index++]  = '`requisito5`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO6)) {
            $modifiedColumns[':p' . $index++]  = '`requisito6`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO7)) {
            $modifiedColumns[':p' . $index++]  = '`requisito7`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO8)) {
            $modifiedColumns[':p' . $index++]  = '`requisito8`';
        }
        if ($this->isColumnModified(UbilabPeer::REQUISITO9)) {
            $modifiedColumns[':p' . $index++]  = '`requisito9`';
        }

        $sql = sprintf(
            'INSERT INTO `encuempr_ubilab` (%s) VALUES (%s)',
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
                    case '`numpro`':
                        $stmt->bindValue($identifier, $this->numpro, PDO::PARAM_INT);
                        break;
                    case '`numegre`':
                        $stmt->bindValue($identifier, $this->numegre, PDO::PARAM_INT);
                        break;
                    case '`congruencia`':
                        $stmt->bindValue($identifier, $this->congruencia, PDO::PARAM_INT);
                        break;
                    case '`carrera1`':
                        $stmt->bindValue($identifier, $this->carrera1, PDO::PARAM_STR);
                        break;
                    case '`carrera2`':
                        $stmt->bindValue($identifier, $this->carrera2, PDO::PARAM_STR);
                        break;
                    case '`carrera3`':
                        $stmt->bindValue($identifier, $this->carrera3, PDO::PARAM_STR);
                        break;
                    case '`carrera4`':
                        $stmt->bindValue($identifier, $this->carrera4, PDO::PARAM_STR);
                        break;
                    case '`carrera5`':
                        $stmt->bindValue($identifier, $this->carrera5, PDO::PARAM_STR);
                        break;
                    case '`carrera6`':
                        $stmt->bindValue($identifier, $this->carrera6, PDO::PARAM_STR);
                        break;
                    case '`requisito1`':
                        $stmt->bindValue($identifier, (int) $this->requisito1, PDO::PARAM_INT);
                        break;
                    case '`requisito2`':
                        $stmt->bindValue($identifier, (int) $this->requisito2, PDO::PARAM_INT);
                        break;
                    case '`requisito3`':
                        $stmt->bindValue($identifier, (int) $this->requisito3, PDO::PARAM_INT);
                        break;
                    case '`requisito4`':
                        $stmt->bindValue($identifier, (int) $this->requisito4, PDO::PARAM_INT);
                        break;
                    case '`requisito5`':
                        $stmt->bindValue($identifier, (int) $this->requisito5, PDO::PARAM_INT);
                        break;
                    case '`requisito6`':
                        $stmt->bindValue($identifier, (int) $this->requisito6, PDO::PARAM_INT);
                        break;
                    case '`requisito7`':
                        $stmt->bindValue($identifier, (int) $this->requisito7, PDO::PARAM_INT);
                        break;
                    case '`requisito8`':
                        $stmt->bindValue($identifier, (int) $this->requisito8, PDO::PARAM_INT);
                        break;
                    case '`requisito9`':
                        $stmt->bindValue($identifier, $this->requisito9, PDO::PARAM_STR);
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


            if (($retval = UbilabPeer::doValidate($this, $columns)) !== true) {
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
        $pos = UbilabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNumPro();
                break;
            case 3:
                return $this->getNumEgre();
                break;
            case 4:
                return $this->getCongruencia();
                break;
            case 5:
                return $this->getCarrera1();
                break;
            case 6:
                return $this->getCarrera2();
                break;
            case 7:
                return $this->getCarrera3();
                break;
            case 8:
                return $this->getCarrera4();
                break;
            case 9:
                return $this->getCarrera5();
                break;
            case 10:
                return $this->getCarrera6();
                break;
            case 11:
                return $this->getRequisito1();
                break;
            case 12:
                return $this->getRequisito2();
                break;
            case 13:
                return $this->getRequisito3();
                break;
            case 14:
                return $this->getRequisito4();
                break;
            case 15:
                return $this->getRequisito5();
                break;
            case 16:
                return $this->getRequisito6();
                break;
            case 17:
                return $this->getRequisito7();
                break;
            case 18:
                return $this->getRequisito8();
                break;
            case 19:
                return $this->getRequisito9();
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
        if (isset($alreadyDumpedObjects['Ubilab'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ubilab'][$this->getPrimaryKey()] = true;
        $keys = UbilabPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEncuesta(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getNumPro(),
            $keys[3] => $this->getNumEgre(),
            $keys[4] => $this->getCongruencia(),
            $keys[5] => $this->getCarrera1(),
            $keys[6] => $this->getCarrera2(),
            $keys[7] => $this->getCarrera3(),
            $keys[8] => $this->getCarrera4(),
            $keys[9] => $this->getCarrera5(),
            $keys[10] => $this->getCarrera6(),
            $keys[11] => $this->getRequisito1(),
            $keys[12] => $this->getRequisito2(),
            $keys[13] => $this->getRequisito3(),
            $keys[14] => $this->getRequisito4(),
            $keys[15] => $this->getRequisito5(),
            $keys[16] => $this->getRequisito6(),
            $keys[17] => $this->getRequisito7(),
            $keys[18] => $this->getRequisito8(),
            $keys[19] => $this->getRequisito9(),
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
        $pos = UbilabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $valueSet = UbilabPeer::getValueSet(UbilabPeer::NUMPRO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setNumPro($value);
                break;
            case 3:
                $valueSet = UbilabPeer::getValueSet(UbilabPeer::NUMEGRE);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setNumEgre($value);
                break;
            case 4:
                $valueSet = UbilabPeer::getValueSet(UbilabPeer::CONGRUENCIA);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setCongruencia($value);
                break;
            case 5:
                $this->setCarrera1($value);
                break;
            case 6:
                $this->setCarrera2($value);
                break;
            case 7:
                $this->setCarrera3($value);
                break;
            case 8:
                $this->setCarrera4($value);
                break;
            case 9:
                $this->setCarrera5($value);
                break;
            case 10:
                $this->setCarrera6($value);
                break;
            case 11:
                $this->setRequisito1($value);
                break;
            case 12:
                $this->setRequisito2($value);
                break;
            case 13:
                $this->setRequisito3($value);
                break;
            case 14:
                $this->setRequisito4($value);
                break;
            case 15:
                $this->setRequisito5($value);
                break;
            case 16:
                $this->setRequisito6($value);
                break;
            case 17:
                $this->setRequisito7($value);
                break;
            case 18:
                $this->setRequisito8($value);
                break;
            case 19:
                $this->setRequisito9($value);
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
        $keys = UbilabPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEncuesta($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumPro($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumEgre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCongruencia($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCarrera1($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCarrera2($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCarrera3($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCarrera4($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCarrera5($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCarrera6($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRequisito1($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRequisito2($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRequisito3($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRequisito4($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRequisito5($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRequisito6($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setRequisito7($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setRequisito8($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRequisito9($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UbilabPeer::DATABASE_NAME);

        if ($this->isColumnModified(UbilabPeer::ID)) $criteria->add(UbilabPeer::ID, $this->id);
        if ($this->isColumnModified(UbilabPeer::IDUSUARIO)) $criteria->add(UbilabPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(UbilabPeer::NUMPRO)) $criteria->add(UbilabPeer::NUMPRO, $this->numpro);
        if ($this->isColumnModified(UbilabPeer::NUMEGRE)) $criteria->add(UbilabPeer::NUMEGRE, $this->numegre);
        if ($this->isColumnModified(UbilabPeer::CONGRUENCIA)) $criteria->add(UbilabPeer::CONGRUENCIA, $this->congruencia);
        if ($this->isColumnModified(UbilabPeer::CARRERA1)) $criteria->add(UbilabPeer::CARRERA1, $this->carrera1);
        if ($this->isColumnModified(UbilabPeer::CARRERA2)) $criteria->add(UbilabPeer::CARRERA2, $this->carrera2);
        if ($this->isColumnModified(UbilabPeer::CARRERA3)) $criteria->add(UbilabPeer::CARRERA3, $this->carrera3);
        if ($this->isColumnModified(UbilabPeer::CARRERA4)) $criteria->add(UbilabPeer::CARRERA4, $this->carrera4);
        if ($this->isColumnModified(UbilabPeer::CARRERA5)) $criteria->add(UbilabPeer::CARRERA5, $this->carrera5);
        if ($this->isColumnModified(UbilabPeer::CARRERA6)) $criteria->add(UbilabPeer::CARRERA6, $this->carrera6);
        if ($this->isColumnModified(UbilabPeer::REQUISITO1)) $criteria->add(UbilabPeer::REQUISITO1, $this->requisito1);
        if ($this->isColumnModified(UbilabPeer::REQUISITO2)) $criteria->add(UbilabPeer::REQUISITO2, $this->requisito2);
        if ($this->isColumnModified(UbilabPeer::REQUISITO3)) $criteria->add(UbilabPeer::REQUISITO3, $this->requisito3);
        if ($this->isColumnModified(UbilabPeer::REQUISITO4)) $criteria->add(UbilabPeer::REQUISITO4, $this->requisito4);
        if ($this->isColumnModified(UbilabPeer::REQUISITO5)) $criteria->add(UbilabPeer::REQUISITO5, $this->requisito5);
        if ($this->isColumnModified(UbilabPeer::REQUISITO6)) $criteria->add(UbilabPeer::REQUISITO6, $this->requisito6);
        if ($this->isColumnModified(UbilabPeer::REQUISITO7)) $criteria->add(UbilabPeer::REQUISITO7, $this->requisito7);
        if ($this->isColumnModified(UbilabPeer::REQUISITO8)) $criteria->add(UbilabPeer::REQUISITO8, $this->requisito8);
        if ($this->isColumnModified(UbilabPeer::REQUISITO9)) $criteria->add(UbilabPeer::REQUISITO9, $this->requisito9);

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
        $criteria = new Criteria(UbilabPeer::DATABASE_NAME);
        $criteria->add(UbilabPeer::ID, $this->id);

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
     * @param object $copyObj An object of Ubilab (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setNumPro($this->getNumPro());
        $copyObj->setNumEgre($this->getNumEgre());
        $copyObj->setCongruencia($this->getCongruencia());
        $copyObj->setCarrera1($this->getCarrera1());
        $copyObj->setCarrera2($this->getCarrera2());
        $copyObj->setCarrera3($this->getCarrera3());
        $copyObj->setCarrera4($this->getCarrera4());
        $copyObj->setCarrera5($this->getCarrera5());
        $copyObj->setCarrera6($this->getCarrera6());
        $copyObj->setRequisito1($this->getRequisito1());
        $copyObj->setRequisito2($this->getRequisito2());
        $copyObj->setRequisito3($this->getRequisito3());
        $copyObj->setRequisito4($this->getRequisito4());
        $copyObj->setRequisito5($this->getRequisito5());
        $copyObj->setRequisito6($this->getRequisito6());
        $copyObj->setRequisito7($this->getRequisito7());
        $copyObj->setRequisito8($this->getRequisito8());
        $copyObj->setRequisito9($this->getRequisito9());

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
     * @return Ubilab Clone of current object.
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
     * @return UbilabPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UbilabPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Ubilab The current object (for fluent API support)
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
            $v->addUbilab($this);
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
                $this->aUsuario->addUbilabs($this);
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
        $this->numpro = null;
        $this->numegre = null;
        $this->congruencia = null;
        $this->carrera1 = null;
        $this->carrera2 = null;
        $this->carrera3 = null;
        $this->carrera4 = null;
        $this->carrera5 = null;
        $this->carrera6 = null;
        $this->requisito1 = null;
        $this->requisito2 = null;
        $this->requisito3 = null;
        $this->requisito4 = null;
        $this->requisito5 = null;
        $this->requisito6 = null;
        $this->requisito7 = null;
        $this->requisito8 = null;
        $this->requisito9 = null;
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
        return (string) $this->exportTo(UbilabPeer::DEFAULT_STRING_FORMAT);
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
