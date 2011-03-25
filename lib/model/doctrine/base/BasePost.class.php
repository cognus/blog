<?php

/**
 * BasePost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_post
 * @property string $titulo
 * @property string $resumen
 * @property string $texto
 * 
 * @method integer getIdPost()  Returns the current record's "id_post" value
 * @method string  getTitulo()  Returns the current record's "titulo" value
 * @method string  getResumen() Returns the current record's "resumen" value
 * @method string  getTexto()   Returns the current record's "texto" value
 * @method Post    setIdPost()  Sets the current record's "id_post" value
 * @method Post    setTitulo()  Sets the current record's "titulo" value
 * @method Post    setResumen() Sets the current record's "resumen" value
 * @method Post    setTexto()   Sets the current record's "texto" value
 * 
 * @package    blog
 * @subpackage model
 * @author     pavel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePost extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('post');
        $this->hasColumn('id_post', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('titulo', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('resumen', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('texto', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}