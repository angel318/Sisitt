<?php


/**
 * Base class that represents a row from the 'encuempr_datgen' table.
 *
 *
 *
 * @package    propel.generator.sisitt.om
 */
abstract class BaseDatgen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DatgenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DatgenPeer
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
     * The value for the nombre field.
     * @var        string
     */
    protected $nombre;

    /**
     * The value for the direccion field.
     * @var        string
     */
    protected $direccion;

    /**
     * The value for the ciudad field.
     * @var        string
     */
    protected $ciudad;

    /**
     * The value for the correo field.
     * @var        string
     */
    protected $correo;

    /**
     * The value for the telefono field.
     * @var        string
     */
    protected $telefono;

    /**
     * The value for the tipo field.
     * @var        int
     */
    protected $tipo;

    /**
     * The value for the tamano field.
     * @var        int
     */
    protected $tamano;

    /**
     * The value for the actividad1 field.
     * @var        boolean
     */
    protected $actividad1;

    /**
     * The value for the actividad2 field.
     * @var        boolean
     */
    protected $actividad2;

    /**
     * The value for the actividad3 field.
     * @var        boolean
     */
    protected $actividad3;

    /**
     * The value for the actividad4 field.
     * @var        boolean
     */
    protected $actividad4;

    /**
     * The value for the actividad5 field.
     * @var        boolean
     */
    protected $actividad5;

    /**
     * The value for the actividad6 field.
     * @var        boolean
     */
    protected $actividad6;

    /**
     * The value for the actividad7 field.
     * @var        boolean
     */
    protected $actividad7;

    /**
     * The value for the actividad8 field.
     * @var        boolean
     */
    protected $actividad8;

    /**
     * The value for the actividad9 field.
     * @var        boolean
     */
    protected $actividad9;

    /**
     * The value for the actividad10 field.
     * @var        boolean
     */
    protected $actividad10;

    /**
     * The value for the actividad11 field.
     * @var        boolean
     */
    protected $actividad11;

    /**
     * The value for the actividad12 field.
     * @var        boolean
     */
    protected $actividad12;

    /**
     * The value for the actividad13 field.
     * @var        boolean
     */
    protected $actividad13;

    /**
     * The value for the actividad14 field.
     * @var        boolean
     */
    protected $actividad14;

    /**
     * The value for the actividad15 field.
     * @var        boolean
     */
    protected $actividad15;

    /**
     * The value for the actividad16 field.
     * @var        boolean
     */
    protected $actividad16;

    /**
     * The value for the actividad17 field.
     * @var        boolean
     */
    protected $actividad17;

    /**
     * The value for the actividad18 field.
     * @var        boolean
     */
    protected $actividad18;

    /**
     * The value for the actividad19 field.
     * @var        boolean
     */
    protected $actividad19;

    /**
     * The value for the actividad20 field.
     * @var        string
     */
    protected $actividad20;

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
     * Get the [nombre] column value.
     *
     * @return string
     */
    public function getNombre()
    {

        return $this->nombre;
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
     * Get the [ciudad] column value.
     *
     * @return string
     */
    public function getCiudad()
    {

        return $this->ciudad;
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
     * Get the [telefono] column value.
     *
     * @return string
     */
    public function getTelefono()
    {

        return $this->telefono;
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
        $valueSet = DatgenPeer::getValueSet(DatgenPeer::TIPO);
        if (!isset($valueSet[$this->tipo])) {
            throw new PropelException('Unknown stored enum key: ' . $this->tipo);
        }

        return $valueSet[$this->tipo];
    }

    /**
     * Get the [tamano] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getTamano()
    {
        if (null === $this->tamano) {
            return null;
        }
        $valueSet = DatgenPeer::getValueSet(DatgenPeer::TAMANO);
        if (!isset($valueSet[$this->tamano])) {
            throw new PropelException('Unknown stored enum key: ' . $this->tamano);
        }

        return $valueSet[$this->tamano];
    }

    /**
     * Get the [actividad1] column value.
     *
     * @return boolean
     */
    public function getActividad1()
    {

        return $this->actividad1;
    }

    /**
     * Get the [actividad2] column value.
     *
     * @return boolean
     */
    public function getActividad2()
    {

        return $this->actividad2;
    }

    /**
     * Get the [actividad3] column value.
     *
     * @return boolean
     */
    public function getActividad3()
    {

        return $this->actividad3;
    }

    /**
     * Get the [actividad4] column value.
     *
     * @return boolean
     */
    public function getActividad4()
    {

        return $this->actividad4;
    }

    /**
     * Get the [actividad5] column value.
     *
     * @return boolean
     */
    public function getActividad5()
    {

        return $this->actividad5;
    }

    /**
     * Get the [actividad6] column value.
     *
     * @return boolean
     */
    public function getActividad6()
    {

        return $this->actividad6;
    }

    /**
     * Get the [actividad7] column value.
     *
     * @return boolean
     */
    public function getActividad7()
    {

        return $this->actividad7;
    }

    /**
     * Get the [actividad8] column value.
     *
     * @return boolean
     */
    public function getActividad8()
    {

        return $this->actividad8;
    }

    /**
     * Get the [actividad9] column value.
     *
     * @return boolean
     */
    public function getActividad9()
    {

        return $this->actividad9;
    }

    /**
     * Get the [actividad10] column value.
     *
     * @return boolean
     */
    public function getActividad10()
    {

        return $this->actividad10;
    }

    /**
     * Get the [actividad11] column value.
     *
     * @return boolean
     */
    public function getActividad11()
    {

        return $this->actividad11;
    }

    /**
     * Get the [actividad12] column value.
     *
     * @return boolean
     */
    public function getActividad12()
    {

        return $this->actividad12;
    }

    /**
     * Get the [actividad13] column value.
     *
     * @return boolean
     */
    public function getActividad13()
    {

        return $this->actividad13;
    }

    /**
     * Get the [actividad14] column value.
     *
     * @return boolean
     */
    public function getActividad14()
    {

        return $this->actividad14;
    }

    /**
     * Get the [actividad15] column value.
     *
     * @return boolean
     */
    public function getActividad15()
    {

        return $this->actividad15;
    }

    /**
     * Get the [actividad16] column value.
     *
     * @return boolean
     */
    public function getActividad16()
    {

        return $this->actividad16;
    }

    /**
     * Get the [actividad17] column value.
     *
     * @return boolean
     */
    public function getActividad17()
    {

        return $this->actividad17;
    }

    /**
     * Get the [actividad18] column value.
     *
     * @return boolean
     */
    public function getActividad18()
    {

        return $this->actividad18;
    }

    /**
     * Get the [actividad19] column value.
     *
     * @return boolean
     */
    public function getActividad19()
    {

        return $this->actividad19;
    }

    /**
     * Get the [actividad20] column value.
     *
     * @return string
     */
    public function getActividad20()
    {

        return $this->actividad20;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setIdEncuesta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = DatgenPeer::ID;
        }


        return $this;
    } // setIdEncuesta()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = DatgenPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [nombre] column.
     *
     * @param  string $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = DatgenPeer::NOMBRE;
        }


        return $this;
    } // setNombre()

    /**
     * Set the value of [direccion] column.
     *
     * @param  string $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setDireccion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->direccion !== $v) {
            $this->direccion = $v;
            $this->modifiedColumns[] = DatgenPeer::DIRECCION;
        }


        return $this;
    } // setDireccion()

    /**
     * Set the value of [ciudad] column.
     *
     * @param  string $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ciudad !== $v) {
            $this->ciudad = $v;
            $this->modifiedColumns[] = DatgenPeer::CIUDAD;
        }


        return $this;
    } // setCiudad()

    /**
     * Set the value of [correo] column.
     *
     * @param  string $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setCorreo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->correo !== $v) {
            $this->correo = $v;
            $this->modifiedColumns[] = DatgenPeer::CORREO;
        }


        return $this;
    } // setCorreo()

    /**
     * Set the value of [telefono] column.
     *
     * @param  string $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefono !== $v) {
            $this->telefono = $v;
            $this->modifiedColumns[] = DatgenPeer::TELEFONO;
        }


        return $this;
    } // setTelefono()

    /**
     * Set the value of [tipo] column.
     *
     * @param  int $v new value
     * @return Datgen The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setTipo($v)
    {
        if ($v !== null) {
            $valueSet = DatgenPeer::getValueSet(DatgenPeer::TIPO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->tipo !== $v) {
            $this->tipo = $v;
            $this->modifiedColumns[] = DatgenPeer::TIPO;
        }


        return $this;
    } // setTipo()

    /**
     * Set the value of [tamano] column.
     *
     * @param  int $v new value
     * @return Datgen The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setTamano($v)
    {
        if ($v !== null) {
            $valueSet = DatgenPeer::getValueSet(DatgenPeer::TAMANO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->tamano !== $v) {
            $this->tamano = $v;
            $this->modifiedColumns[] = DatgenPeer::TAMANO;
        }


        return $this;
    } // setTamano()

    /**
     * Sets the value of the [actividad1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad1 !== $v) {
            $this->actividad1 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD1;
        }


        return $this;
    } // setActividad1()

    /**
     * Sets the value of the [actividad2] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad2($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad2 !== $v) {
            $this->actividad2 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD2;
        }


        return $this;
    } // setActividad2()

    /**
     * Sets the value of the [actividad3] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad3($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad3 !== $v) {
            $this->actividad3 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD3;
        }


        return $this;
    } // setActividad3()

    /**
     * Sets the value of the [actividad4] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad4($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad4 !== $v) {
            $this->actividad4 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD4;
        }


        return $this;
    } // setActividad4()

    /**
     * Sets the value of the [actividad5] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad5($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad5 !== $v) {
            $this->actividad5 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD5;
        }


        return $this;
    } // setActividad5()

    /**
     * Sets the value of the [actividad6] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad6($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad6 !== $v) {
            $this->actividad6 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD6;
        }


        return $this;
    } // setActividad6()

    /**
     * Sets the value of the [actividad7] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad7($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad7 !== $v) {
            $this->actividad7 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD7;
        }


        return $this;
    } // setActividad7()

    /**
     * Sets the value of the [actividad8] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad8($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad8 !== $v) {
            $this->actividad8 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD8;
        }


        return $this;
    } // setActividad8()

    /**
     * Sets the value of the [actividad9] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad9($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad9 !== $v) {
            $this->actividad9 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD9;
        }


        return $this;
    } // setActividad9()

    /**
     * Sets the value of the [actividad10] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad10($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad10 !== $v) {
            $this->actividad10 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD10;
        }


        return $this;
    } // setActividad10()

    /**
     * Sets the value of the [actividad11] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad11($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad11 !== $v) {
            $this->actividad11 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD11;
        }


        return $this;
    } // setActividad11()

    /**
     * Sets the value of the [actividad12] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad12($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad12 !== $v) {
            $this->actividad12 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD12;
        }


        return $this;
    } // setActividad12()

    /**
     * Sets the value of the [actividad13] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad13($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad13 !== $v) {
            $this->actividad13 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD13;
        }


        return $this;
    } // setActividad13()

    /**
     * Sets the value of the [actividad14] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad14($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad14 !== $v) {
            $this->actividad14 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD14;
        }


        return $this;
    } // setActividad14()

    /**
     * Sets the value of the [actividad15] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad15($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad15 !== $v) {
            $this->actividad15 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD15;
        }


        return $this;
    } // setActividad15()

    /**
     * Sets the value of the [actividad16] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad16($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad16 !== $v) {
            $this->actividad16 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD16;
        }


        return $this;
    } // setActividad16()

    /**
     * Sets the value of the [actividad17] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad17($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad17 !== $v) {
            $this->actividad17 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD17;
        }


        return $this;
    } // setActividad17()

    /**
     * Sets the value of the [actividad18] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad18($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad18 !== $v) {
            $this->actividad18 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD18;
        }


        return $this;
    } // setActividad18()

    /**
     * Sets the value of the [actividad19] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad19($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actividad19 !== $v) {
            $this->actividad19 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD19;
        }


        return $this;
    } // setActividad19()

    /**
     * Set the value of [actividad20] column.
     *
     * @param  string $v new value
     * @return Datgen The current object (for fluent API support)
     */
    public function setActividad20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->actividad20 !== $v) {
            $this->actividad20 = $v;
            $this->modifiedColumns[] = DatgenPeer::ACTIVIDAD20;
        }


        return $this;
    } // setActividad20()

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
            $this->nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->direccion = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ciudad = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->correo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->telefono = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->tipo = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->tamano = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->actividad1 = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->actividad2 = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->actividad3 = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->actividad4 = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->actividad5 = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->actividad6 = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
            $this->actividad7 = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->actividad8 = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
            $this->actividad9 = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->actividad10 = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->actividad11 = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->actividad12 = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->actividad13 = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
            $this->actividad14 = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->actividad15 = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
            $this->actividad16 = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->actividad17 = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
            $this->actividad18 = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->actividad19 = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
            $this->actividad20 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = DatgenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Datgen object", $e);
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
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DatgenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DatgenQuery::create()
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
            $con = Propel::getConnection(DatgenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DatgenPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = DatgenPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DatgenPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DatgenPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(DatgenPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(DatgenPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`nombre`';
        }
        if ($this->isColumnModified(DatgenPeer::DIRECCION)) {
            $modifiedColumns[':p' . $index++]  = '`direccion`';
        }
        if ($this->isColumnModified(DatgenPeer::CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`ciudad`';
        }
        if ($this->isColumnModified(DatgenPeer::CORREO)) {
            $modifiedColumns[':p' . $index++]  = '`correo`';
        }
        if ($this->isColumnModified(DatgenPeer::TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`telefono`';
        }
        if ($this->isColumnModified(DatgenPeer::TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`tipo`';
        }
        if ($this->isColumnModified(DatgenPeer::TAMANO)) {
            $modifiedColumns[':p' . $index++]  = '`tamano`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD1)) {
            $modifiedColumns[':p' . $index++]  = '`actividad1`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD2)) {
            $modifiedColumns[':p' . $index++]  = '`actividad2`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD3)) {
            $modifiedColumns[':p' . $index++]  = '`actividad3`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD4)) {
            $modifiedColumns[':p' . $index++]  = '`actividad4`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD5)) {
            $modifiedColumns[':p' . $index++]  = '`actividad5`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD6)) {
            $modifiedColumns[':p' . $index++]  = '`actividad6`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD7)) {
            $modifiedColumns[':p' . $index++]  = '`actividad7`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD8)) {
            $modifiedColumns[':p' . $index++]  = '`actividad8`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD9)) {
            $modifiedColumns[':p' . $index++]  = '`actividad9`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD10)) {
            $modifiedColumns[':p' . $index++]  = '`actividad10`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD11)) {
            $modifiedColumns[':p' . $index++]  = '`actividad11`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD12)) {
            $modifiedColumns[':p' . $index++]  = '`actividad12`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD13)) {
            $modifiedColumns[':p' . $index++]  = '`actividad13`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD14)) {
            $modifiedColumns[':p' . $index++]  = '`actividad14`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD15)) {
            $modifiedColumns[':p' . $index++]  = '`actividad15`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD16)) {
            $modifiedColumns[':p' . $index++]  = '`actividad16`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD17)) {
            $modifiedColumns[':p' . $index++]  = '`actividad17`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD18)) {
            $modifiedColumns[':p' . $index++]  = '`actividad18`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD19)) {
            $modifiedColumns[':p' . $index++]  = '`actividad19`';
        }
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD20)) {
            $modifiedColumns[':p' . $index++]  = '`actividad20`';
        }

        $sql = sprintf(
            'INSERT INTO `encuempr_datgen` (%s) VALUES (%s)',
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
                    case '`nombre`':
                        $stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`direccion`':
                        $stmt->bindValue($identifier, $this->direccion, PDO::PARAM_STR);
                        break;
                    case '`ciudad`':
                        $stmt->bindValue($identifier, $this->ciudad, PDO::PARAM_STR);
                        break;
                    case '`correo`':
                        $stmt->bindValue($identifier, $this->correo, PDO::PARAM_STR);
                        break;
                    case '`telefono`':
                        $stmt->bindValue($identifier, $this->telefono, PDO::PARAM_STR);
                        break;
                    case '`tipo`':
                        $stmt->bindValue($identifier, $this->tipo, PDO::PARAM_INT);
                        break;
                    case '`tamano`':
                        $stmt->bindValue($identifier, $this->tamano, PDO::PARAM_INT);
                        break;
                    case '`actividad1`':
                        $stmt->bindValue($identifier, (int) $this->actividad1, PDO::PARAM_INT);
                        break;
                    case '`actividad2`':
                        $stmt->bindValue($identifier, (int) $this->actividad2, PDO::PARAM_INT);
                        break;
                    case '`actividad3`':
                        $stmt->bindValue($identifier, (int) $this->actividad3, PDO::PARAM_INT);
                        break;
                    case '`actividad4`':
                        $stmt->bindValue($identifier, (int) $this->actividad4, PDO::PARAM_INT);
                        break;
                    case '`actividad5`':
                        $stmt->bindValue($identifier, (int) $this->actividad5, PDO::PARAM_INT);
                        break;
                    case '`actividad6`':
                        $stmt->bindValue($identifier, (int) $this->actividad6, PDO::PARAM_INT);
                        break;
                    case '`actividad7`':
                        $stmt->bindValue($identifier, (int) $this->actividad7, PDO::PARAM_INT);
                        break;
                    case '`actividad8`':
                        $stmt->bindValue($identifier, (int) $this->actividad8, PDO::PARAM_INT);
                        break;
                    case '`actividad9`':
                        $stmt->bindValue($identifier, (int) $this->actividad9, PDO::PARAM_INT);
                        break;
                    case '`actividad10`':
                        $stmt->bindValue($identifier, (int) $this->actividad10, PDO::PARAM_INT);
                        break;
                    case '`actividad11`':
                        $stmt->bindValue($identifier, (int) $this->actividad11, PDO::PARAM_INT);
                        break;
                    case '`actividad12`':
                        $stmt->bindValue($identifier, (int) $this->actividad12, PDO::PARAM_INT);
                        break;
                    case '`actividad13`':
                        $stmt->bindValue($identifier, (int) $this->actividad13, PDO::PARAM_INT);
                        break;
                    case '`actividad14`':
                        $stmt->bindValue($identifier, (int) $this->actividad14, PDO::PARAM_INT);
                        break;
                    case '`actividad15`':
                        $stmt->bindValue($identifier, (int) $this->actividad15, PDO::PARAM_INT);
                        break;
                    case '`actividad16`':
                        $stmt->bindValue($identifier, (int) $this->actividad16, PDO::PARAM_INT);
                        break;
                    case '`actividad17`':
                        $stmt->bindValue($identifier, (int) $this->actividad17, PDO::PARAM_INT);
                        break;
                    case '`actividad18`':
                        $stmt->bindValue($identifier, (int) $this->actividad18, PDO::PARAM_INT);
                        break;
                    case '`actividad19`':
                        $stmt->bindValue($identifier, (int) $this->actividad19, PDO::PARAM_INT);
                        break;
                    case '`actividad20`':
                        $stmt->bindValue($identifier, $this->actividad20, PDO::PARAM_STR);
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


            if (($retval = DatgenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DatgenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNombre();
                break;
            case 3:
                return $this->getDireccion();
                break;
            case 4:
                return $this->getCiudad();
                break;
            case 5:
                return $this->getCorreo();
                break;
            case 6:
                return $this->getTelefono();
                break;
            case 7:
                return $this->getTipo();
                break;
            case 8:
                return $this->getTamano();
                break;
            case 9:
                return $this->getActividad1();
                break;
            case 10:
                return $this->getActividad2();
                break;
            case 11:
                return $this->getActividad3();
                break;
            case 12:
                return $this->getActividad4();
                break;
            case 13:
                return $this->getActividad5();
                break;
            case 14:
                return $this->getActividad6();
                break;
            case 15:
                return $this->getActividad7();
                break;
            case 16:
                return $this->getActividad8();
                break;
            case 17:
                return $this->getActividad9();
                break;
            case 18:
                return $this->getActividad10();
                break;
            case 19:
                return $this->getActividad11();
                break;
            case 20:
                return $this->getActividad12();
                break;
            case 21:
                return $this->getActividad13();
                break;
            case 22:
                return $this->getActividad14();
                break;
            case 23:
                return $this->getActividad15();
                break;
            case 24:
                return $this->getActividad16();
                break;
            case 25:
                return $this->getActividad17();
                break;
            case 26:
                return $this->getActividad18();
                break;
            case 27:
                return $this->getActividad19();
                break;
            case 28:
                return $this->getActividad20();
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
        if (isset($alreadyDumpedObjects['Datgen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Datgen'][$this->getPrimaryKey()] = true;
        $keys = DatgenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEncuesta(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getNombre(),
            $keys[3] => $this->getDireccion(),
            $keys[4] => $this->getCiudad(),
            $keys[5] => $this->getCorreo(),
            $keys[6] => $this->getTelefono(),
            $keys[7] => $this->getTipo(),
            $keys[8] => $this->getTamano(),
            $keys[9] => $this->getActividad1(),
            $keys[10] => $this->getActividad2(),
            $keys[11] => $this->getActividad3(),
            $keys[12] => $this->getActividad4(),
            $keys[13] => $this->getActividad5(),
            $keys[14] => $this->getActividad6(),
            $keys[15] => $this->getActividad7(),
            $keys[16] => $this->getActividad8(),
            $keys[17] => $this->getActividad9(),
            $keys[18] => $this->getActividad10(),
            $keys[19] => $this->getActividad11(),
            $keys[20] => $this->getActividad12(),
            $keys[21] => $this->getActividad13(),
            $keys[22] => $this->getActividad14(),
            $keys[23] => $this->getActividad15(),
            $keys[24] => $this->getActividad16(),
            $keys[25] => $this->getActividad17(),
            $keys[26] => $this->getActividad18(),
            $keys[27] => $this->getActividad19(),
            $keys[28] => $this->getActividad20(),
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
        $pos = DatgenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNombre($value);
                break;
            case 3:
                $this->setDireccion($value);
                break;
            case 4:
                $this->setCiudad($value);
                break;
            case 5:
                $this->setCorreo($value);
                break;
            case 6:
                $this->setTelefono($value);
                break;
            case 7:
                $valueSet = DatgenPeer::getValueSet(DatgenPeer::TIPO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setTipo($value);
                break;
            case 8:
                $valueSet = DatgenPeer::getValueSet(DatgenPeer::TAMANO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setTamano($value);
                break;
            case 9:
                $this->setActividad1($value);
                break;
            case 10:
                $this->setActividad2($value);
                break;
            case 11:
                $this->setActividad3($value);
                break;
            case 12:
                $this->setActividad4($value);
                break;
            case 13:
                $this->setActividad5($value);
                break;
            case 14:
                $this->setActividad6($value);
                break;
            case 15:
                $this->setActividad7($value);
                break;
            case 16:
                $this->setActividad8($value);
                break;
            case 17:
                $this->setActividad9($value);
                break;
            case 18:
                $this->setActividad10($value);
                break;
            case 19:
                $this->setActividad11($value);
                break;
            case 20:
                $this->setActividad12($value);
                break;
            case 21:
                $this->setActividad13($value);
                break;
            case 22:
                $this->setActividad14($value);
                break;
            case 23:
                $this->setActividad15($value);
                break;
            case 24:
                $this->setActividad16($value);
                break;
            case 25:
                $this->setActividad17($value);
                break;
            case 26:
                $this->setActividad18($value);
                break;
            case 27:
                $this->setActividad19($value);
                break;
            case 28:
                $this->setActividad20($value);
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
        $keys = DatgenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEncuesta($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDireccion($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCiudad($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCorreo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTelefono($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTipo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTamano($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setActividad1($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setActividad2($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setActividad3($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setActividad4($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setActividad5($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setActividad6($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setActividad7($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setActividad8($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setActividad9($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setActividad10($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setActividad11($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setActividad12($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setActividad13($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setActividad14($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setActividad15($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setActividad16($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setActividad17($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setActividad18($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setActividad19($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setActividad20($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DatgenPeer::DATABASE_NAME);

        if ($this->isColumnModified(DatgenPeer::ID)) $criteria->add(DatgenPeer::ID, $this->id);
        if ($this->isColumnModified(DatgenPeer::IDUSUARIO)) $criteria->add(DatgenPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(DatgenPeer::NOMBRE)) $criteria->add(DatgenPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(DatgenPeer::DIRECCION)) $criteria->add(DatgenPeer::DIRECCION, $this->direccion);
        if ($this->isColumnModified(DatgenPeer::CIUDAD)) $criteria->add(DatgenPeer::CIUDAD, $this->ciudad);
        if ($this->isColumnModified(DatgenPeer::CORREO)) $criteria->add(DatgenPeer::CORREO, $this->correo);
        if ($this->isColumnModified(DatgenPeer::TELEFONO)) $criteria->add(DatgenPeer::TELEFONO, $this->telefono);
        if ($this->isColumnModified(DatgenPeer::TIPO)) $criteria->add(DatgenPeer::TIPO, $this->tipo);
        if ($this->isColumnModified(DatgenPeer::TAMANO)) $criteria->add(DatgenPeer::TAMANO, $this->tamano);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD1)) $criteria->add(DatgenPeer::ACTIVIDAD1, $this->actividad1);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD2)) $criteria->add(DatgenPeer::ACTIVIDAD2, $this->actividad2);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD3)) $criteria->add(DatgenPeer::ACTIVIDAD3, $this->actividad3);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD4)) $criteria->add(DatgenPeer::ACTIVIDAD4, $this->actividad4);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD5)) $criteria->add(DatgenPeer::ACTIVIDAD5, $this->actividad5);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD6)) $criteria->add(DatgenPeer::ACTIVIDAD6, $this->actividad6);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD7)) $criteria->add(DatgenPeer::ACTIVIDAD7, $this->actividad7);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD8)) $criteria->add(DatgenPeer::ACTIVIDAD8, $this->actividad8);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD9)) $criteria->add(DatgenPeer::ACTIVIDAD9, $this->actividad9);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD10)) $criteria->add(DatgenPeer::ACTIVIDAD10, $this->actividad10);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD11)) $criteria->add(DatgenPeer::ACTIVIDAD11, $this->actividad11);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD12)) $criteria->add(DatgenPeer::ACTIVIDAD12, $this->actividad12);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD13)) $criteria->add(DatgenPeer::ACTIVIDAD13, $this->actividad13);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD14)) $criteria->add(DatgenPeer::ACTIVIDAD14, $this->actividad14);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD15)) $criteria->add(DatgenPeer::ACTIVIDAD15, $this->actividad15);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD16)) $criteria->add(DatgenPeer::ACTIVIDAD16, $this->actividad16);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD17)) $criteria->add(DatgenPeer::ACTIVIDAD17, $this->actividad17);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD18)) $criteria->add(DatgenPeer::ACTIVIDAD18, $this->actividad18);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD19)) $criteria->add(DatgenPeer::ACTIVIDAD19, $this->actividad19);
        if ($this->isColumnModified(DatgenPeer::ACTIVIDAD20)) $criteria->add(DatgenPeer::ACTIVIDAD20, $this->actividad20);

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
        $criteria = new Criteria(DatgenPeer::DATABASE_NAME);
        $criteria->add(DatgenPeer::ID, $this->id);

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
     * @param object $copyObj An object of Datgen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setNombre($this->getNombre());
        $copyObj->setDireccion($this->getDireccion());
        $copyObj->setCiudad($this->getCiudad());
        $copyObj->setCorreo($this->getCorreo());
        $copyObj->setTelefono($this->getTelefono());
        $copyObj->setTipo($this->getTipo());
        $copyObj->setTamano($this->getTamano());
        $copyObj->setActividad1($this->getActividad1());
        $copyObj->setActividad2($this->getActividad2());
        $copyObj->setActividad3($this->getActividad3());
        $copyObj->setActividad4($this->getActividad4());
        $copyObj->setActividad5($this->getActividad5());
        $copyObj->setActividad6($this->getActividad6());
        $copyObj->setActividad7($this->getActividad7());
        $copyObj->setActividad8($this->getActividad8());
        $copyObj->setActividad9($this->getActividad9());
        $copyObj->setActividad10($this->getActividad10());
        $copyObj->setActividad11($this->getActividad11());
        $copyObj->setActividad12($this->getActividad12());
        $copyObj->setActividad13($this->getActividad13());
        $copyObj->setActividad14($this->getActividad14());
        $copyObj->setActividad15($this->getActividad15());
        $copyObj->setActividad16($this->getActividad16());
        $copyObj->setActividad17($this->getActividad17());
        $copyObj->setActividad18($this->getActividad18());
        $copyObj->setActividad19($this->getActividad19());
        $copyObj->setActividad20($this->getActividad20());

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
     * @return Datgen Clone of current object.
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
     * @return DatgenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DatgenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Datgen The current object (for fluent API support)
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
            $v->addDatgen($this);
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
                $this->aUsuario->addDatgens($this);
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
        $this->nombre = null;
        $this->direccion = null;
        $this->ciudad = null;
        $this->correo = null;
        $this->telefono = null;
        $this->tipo = null;
        $this->tamano = null;
        $this->actividad1 = null;
        $this->actividad2 = null;
        $this->actividad3 = null;
        $this->actividad4 = null;
        $this->actividad5 = null;
        $this->actividad6 = null;
        $this->actividad7 = null;
        $this->actividad8 = null;
        $this->actividad9 = null;
        $this->actividad10 = null;
        $this->actividad11 = null;
        $this->actividad12 = null;
        $this->actividad13 = null;
        $this->actividad14 = null;
        $this->actividad15 = null;
        $this->actividad16 = null;
        $this->actividad17 = null;
        $this->actividad18 = null;
        $this->actividad19 = null;
        $this->actividad20 = null;
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
        return (string) $this->exportTo(DatgenPeer::DEFAULT_STRING_FORMAT);
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
