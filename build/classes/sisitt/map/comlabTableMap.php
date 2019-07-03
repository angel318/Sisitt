<?php



/**
 * This class defines the structure of the 'encuempr_comlab' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.sisitt.map
 */
class comlabTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.comlabTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('encuempr_comlab');
        $this->setPhpName('comlab');
        $this->setClassname('comlab');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdEncuesta', 'INTEGER', true, 20, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, 20, null);
        $this->addColumn('conflictos', 'Conflictos', 'INTEGER', true, 5, null);
        $this->addColumn('ortografia', 'Ortografia', 'INTEGER', true, 5, null);
        $this->addColumn('procesos', 'Procesos', 'INTEGER', true, 5, null);
        $this->addColumn('equipo', 'Equipo', 'INTEGER', true, 5, null);
        $this->addColumn('admintiempo', 'Admintiempo', 'INTEGER', true, 5, null);
        $this->addColumn('seguridadpersonal', 'Seguridadpersonal', 'INTEGER', true, 5, null);
        $this->addColumn('facilidadpalabra', 'Felicidadpalabra', 'INTEGER', true, 5, null);
        $this->addColumn('gestionproyectos', 'Gestionproyectos', 'INTEGER', true, 5, null);
        $this->addColumn('puntualidad', 'Puntualidad', 'INTEGER', true, 5, null);
        $this->addColumn('normas', 'Normas', 'INTEGER', true, 5, null);
        $this->addColumn('integracion', 'Integracion', 'INTEGER', true, 5, null);
        $this->addColumn('innovacion', 'Innovacion', 'INTEGER', true, 5, null);
        $this->addColumn('negociacion', 'Negociacion', 'INTEGER', true, 5, null);
        $this->addColumn('abstraccion', 'Abstraccion', 'INTEGER', true, 5, null);
        $this->addColumn('decisiones', 'Decisiones', 'INTEGER', true, 5, null);
        $this->addColumn('adaptacion', 'Adaptacion', 'INTEGER', true, 5, null);
        $this->addColumn('otras', 'Otras', 'INTEGER', true, 5, null);
        $this->addColumn('desempeniolaboral', 'Desempeniolaboral', 'INTEGER', true, 5, null);
        $this->addColumn('mejoras', 'Mejoras', 'VARCHAR', true, 500, null);
        $this->addColumn('sugerencias', 'Sugerencias', 'VARCHAR', true, 500, null);
        $this->addColumn('nombres', 'Nombres', 'VARCHAR', true, 150, null);
        $this->addColumn('puesto', 'Puesto', 'VARCHAR', true, 150, null);
        $this->addColumn('correo', 'Correo', 'VARCHAR', true, 200, null);
        // validators
        $this->addValidator('mejoras', 'required', 'propel.validator.RequiredValidator', '', 'La pregunta ¿Qué sugiere para mejorar la formación de los egresados del ITT?, no puede ser vacía');
        $this->addValidator('sugerencias', 'required', 'propel.validator.RequiredValidator', '', 'El campo de comentarios y sugerencias no puede ser vacío');
        $this->addValidator('nombres', 'required', 'propel.validator.RequiredValidator', '', 'El campo del nombre de la persona que llena la encuesta no puede ser vacío');
        $this->addValidator('nombres', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre no puede ser menor a 3 caracteres');
        $this->addValidator('nombres', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre no puede ser mayor a 100 caracteres');
        $this->addValidator('puesto', 'required', 'propel.validator.RequiredValidator', '', 'El campo puesto no puede ser vacío');
        $this->addValidator('puesto', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El puesto no puede ser menor a 3 caracteres');
        $this->addValidator('puesto', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El puesto no puede ser mayor a 100 caracteres');
        $this->addValidator('correo', 'required', 'propel.validator.RequiredValidator', '', 'El CORREO ELECTRÓNICO no puede ser vacío.');
        $this->addValidator('correo', 'unique', 'propel.validator.UniqueValidator', '', 'El CORREO ELECTRÓNICO ya se encuentra registrado.');
        $this->addValidator('correo', 'match', 'propel.validator.MatchValidator', '/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/', 'Ingrese un CORREO ELECTRÓNICO válido.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
    } // buildRelations()

} // comlabTableMap
