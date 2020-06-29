<?php
namespace Drupal\creation\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class simpleform extends FormBase {
  
  public function getFormId() {
    return 'creation';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['candidate_firstname'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('First Name:'),
      '#required' => TRUE,
    );
    $form['candidate_Last Name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Last Name:'),
      '#required' => TRUE,
    );
    $form['candidate_Last Name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('bio:'),
      '#required' => TRUE,
    );
    $form['topic'] = array(
      '#type' => 'radios',
      '#title' => t('Gender'),
      '#options' => array('Male'=>t('Male'),'Female'=>t('Female')),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('SAVE'),
    );
    return $form;
  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
     foreach ($form_state->getValues() as $key => $value) {
       drupal_set_message($key . ': ' . $value);
     }
    }
  }