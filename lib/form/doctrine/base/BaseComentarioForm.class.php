<?php

/**
 * Comentario form base class.
 *
 * @method Comentario getObject() Returns the current form's model object
 *
 * @package    blog
 * @subpackage form
 * @author     pavel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseComentarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_id' => new sfWidgetFormInputText(),
      'id'      => new sfWidgetFormInputHidden(),
      'autor'   => new sfWidgetFormInputText(),
      'email'   => new sfWidgetFormInputText(),
      'texto'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'post_id' => new sfValidatorInteger(array('required' => false)),
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'autor'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'   => new sfValidatorString(array('max_length' => 255)),
      'texto'   => new sfValidatorString(array('max_length' => 4000)),
    ));

    $this->widgetSchema->setNameFormat('comentario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comentario';
  }

}
