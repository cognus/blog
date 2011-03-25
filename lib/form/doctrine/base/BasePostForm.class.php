<?php

/**
 * Post form base class.
 *
 * @method Post getObject() Returns the current form's model object
 *
 * @package    blog
 * @subpackage form
 * @author     pavel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePostForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_post' => new sfWidgetFormInputHidden(),
      'titulo'  => new sfWidgetFormInputText(),
      'resumen' => new sfWidgetFormTextarea(),
      'texto'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_post' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_post')), 'empty_value' => $this->getObject()->get('id_post'), 'required' => false)),
      'titulo'  => new sfValidatorString(array('max_length' => 255)),
      'resumen' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'texto'   => new sfValidatorString(array('max_length' => 4000)),
    ));

    $this->widgetSchema->setNameFormat('post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Post';
  }

}
