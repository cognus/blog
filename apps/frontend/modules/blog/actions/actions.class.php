<?php

/**
 * blog actions.
 *
 * @package    blog
 * @subpackage blog
 * @author     pavel
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class blogActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->posts = Doctrine_Core::getTable('post')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->post = Doctrine_Core::getTable('post')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->post);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new postForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new postForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($post = Doctrine_Core::getTable('post')->find(array($request->getParameter('id'))), sprintf('Object post does not exist (%s).', $request->getParameter('id')));
    $this->form = new postForm($post);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($post = Doctrine_Core::getTable('post')->find(array($request->getParameter('id'))), sprintf('Object post does not exist (%s).', $request->getParameter('id')));
    $this->form = new postForm($post);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($post = Doctrine_Core::getTable('post')->find(array($request->getParameter('id'))), sprintf('Object post does not exist (%s).', $request->getParameter('id')));
    $post->delete();

    $this->redirect('blog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $post = $form->save();

      $this->redirect('blog/edit?id='.$post->getId());
    }
  }
}
