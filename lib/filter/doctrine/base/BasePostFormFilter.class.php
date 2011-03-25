<?php

/**
 * Post filter form base class.
 *
 * @package    blog
 * @subpackage filter
 * @author     pavel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePostFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'resumen' => new sfWidgetFormFilterInput(),
      'texto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'titulo'  => new sfValidatorPass(array('required' => false)),
      'resumen' => new sfValidatorPass(array('required' => false)),
      'texto'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('post_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Post';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'titulo'  => 'Text',
      'resumen' => 'Text',
      'texto'   => 'Text',
    );
  }
}
