<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'sisitt.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('sisitt');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdUsuario', 'INTEGER', true, 20, null);
        $this->addColumn('matricula', 'Matricula', 'VARCHAR', true, 150, null);
        $this->addColumn('correo', 'Correo', 'VARCHAR', true, 200, null);
        $this->addColumn('contrasena', 'Contrasena', 'VARCHAR', true, 20, null);
        $this->addColumn('nombres', 'Nombres', 'VARCHAR', true, 150, null);
        $this->addColumn('apellidop', 'ApellidoPaterno', 'VARCHAR', true, 150, null);
        $this->addColumn('apellidom', 'ApellidoMaterno', 'VARCHAR', true, 150, null);
        $this->addColumn('curp', 'Curp', 'VARCHAR', true, 150, null);
        $this->addColumn('rfc', 'Rfc', 'VARCHAR', true, 150, null);
        $this->addColumn('telefono', 'Telefono', 'VARCHAR', true, 150, null);
        $this->addForeignKey('plan_id', 'PlanId', 'INTEGER', 'planestudio', 'id', false, 20, null);
        $this->addColumn('contacto_id', 'ContactoId', 'INTEGER', false, 20, null);
        $this->addColumn('estatus', 'Estatus', 'ENUM', true, 10, null);
        $this->getColumn('estatus', false)->setValueSet(array (
  0 => 'inactivo',
  1 => 'activo',
));
        $this->addColumn('tipo', 'Tipo', 'ENUM', true, 10, null);
        $this->getColumn('tipo', false)->setValueSet(array (
  0 => 'Estudiante',
  1 => 'Foraneo',
  2 => 'Personal',
));
        $this->addColumn('genero', 'Genero', 'ENUM', true, 25, null);
        $this->getColumn('genero', false)->setValueSet(array (
  0 => 'Masculino',
  1 => 'Femenino',
));
        $this->addColumn('nacimiento', 'Nacimiento', 'DATE', true, null, null);
        $this->addColumn('foto', 'Foto', 'VARCHAR', true, 200, null);
        // validators
        $this->addValidator('matricula', 'required', 'propel.validator.RequiredValidator', '', 'El campo matrícula no puede ser vacío');
        $this->addValidator('matricula', 'minLength', 'propel.validator.MinLengthValidator', '8', 'La matrícula no puede ser menor a 8 caracteres');
        $this->addValidator('matricula', 'maxLength', 'propel.validator.MaxLengthValidator', '150', 'La matrícula no puede ser mayor a 150 caracteres');
        $this->addValidator('correo', 'required', 'propel.validator.RequiredValidator', '', 'El campo correo electrónico no puede ser vacío');
        $this->addValidator('correo', 'unique', 'propel.validator.UniqueValidator', '', 'El correo electrónico ya se encuentra registrado');
        $this->addValidator('correo', 'match', 'propel.validator.MatchValidator', '/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/', 'Ingrese un correo válido.');
        $this->addValidator('contrasena', 'required', 'propel.validator.RequiredValidator', '', 'El campo contraseña no puede ser vacío');
        $this->addValidator('contrasena', 'minLength', 'propel.validator.MinLengthValidator', '4', 'La contraseña no puede ser menor a 4 caracteres');
        $this->addValidator('contrasena', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'La contraseña no puede ser mayor a 10 caracteres');
        $this->addValidator('nombres', 'required', 'propel.validator.RequiredValidator', '', 'El campo nombre no puede ser vacío');
        $this->addValidator('nombres', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre no puede ser menor a 3 caracteres');
        $this->addValidator('nombres', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El nombre no puede ser mayor a 100 caracteres');
        $this->addValidator('apellidop', 'required', 'propel.validator.RequiredValidator', '', 'El campo apellido paterno no puede ser vacío');
        $this->addValidator('apellidop', 'minLength', 'propel.validator.MinLengthValidator', '2', 'El apellido no puede ser menor a 2 caracteres');
        $this->addValidator('apellidop', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El apellido no puede ser mayor a 100 caracteres');
        $this->addValidator('apellidom', 'required', 'propel.validator.RequiredValidator', '', 'El campo apellido materno no puede ser vacío');
        $this->addValidator('apellidom', 'minLength', 'propel.validator.MinLengthValidator', '2', 'El apellido no puede ser menor a 2 caracteres');
        $this->addValidator('apellidom', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'El apellido no puede ser mayor a 100 caracteres');
        $this->addValidator('curp', 'required', 'propel.validator.RequiredValidator', '', 'El campo CURP no puede ser vacío');
        $this->addValidator('rfc', 'required', 'propel.validator.RequiredValidator', '', 'El campo RFC no puede ser vacío');
        $this->addValidator('telefono', 'required', 'propel.validator.RequiredValidator', '', 'El campo teléfono no puede ser vacío');
        $this->addValidator('nacimiento', 'required', 'propel.validator.RequiredValidator', '', 'El campo fecha de nacimiento no puede ser vacío');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PlanEstudio', 'PlanEstudio', RelationMap::MANY_TO_ONE, array('plan_id' => 'id', ), null, null);
        $this->addRelation('Permiso', 'Permiso', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Permisos');
        $this->addRelation('Datgen', 'Datgen', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Datgens');
        $this->addRelation('Ubilab', 'Ubilab', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Ubilabs');
        $this->addRelation('Nivjer', 'Nivjer', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Nivjers');
        $this->addRelation('comlab', 'comlab', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'comlabs');
        $this->addRelation('Volante', 'Volante', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Volantes');
        $this->addRelation('Curriculum', 'Curriculum', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Curriculums');
        $this->addRelation('Candidato', 'Candidato', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Candidatos');
    } // buildRelations()

} // UsuarioTableMap
