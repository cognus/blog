<?php

/**
 * Comentario filter form base class.
 *
 * @package    blog
 * @subpackage filter
 * @author     pavel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseComentarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_id' => new sfWidgetFormFilterInput(),
      'autor'   => new sfWidgetFormFilterInput(),
      'email'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'texto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'post_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'autor'   => new sfValidatorPass(array('required' => false)),
      'email'   => new sfValidatorPass(array('required' => false)),
      'texto'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comentario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comentario';
  }

  public function getFields()
  {
    return array(
      'post_id' => 'Number',
      'id'      => 'Number',
      'autor'   => 'Text',
      'email'   => 'Text',
      'texto'   => 'Text',
    );
  }
}
