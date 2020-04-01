<?php
include('autoload.php');

$form = new Form([
     'method' => 'POST',
     'action' => 'form-handler.php'
]);

// $form2 = new Form();

// $lf = new LoginForm([]);

$form->textbox([
     'name' => 'fullName',
     'label' => 'Full name ',
     'required' => true,
     'length' => 100,
     'value' => 'محمد علاء'
]);

$form->email([
     'name' => 'email',
     'label' => 'email ',
     'required' => true
]);

$form->select([
     'name' => 'gender',
     'labelfor' => 'gender',
     'label' => 'gender ',
     'options' => [
          'm' => 'male',
          'f' => 'female',
     ]
]);

$form->radioBtn([
     'name' => 'gender',
     'labelfor' => 'radioBtn',
     'label' => 'choice one value: ',
     'options' => [
          'choice1' => 'choice1',
          'choice2' => 'choice2',
          'choice3' => 'choice3',
          'choice4' => 'choice4',
          'choice5' => 'choice5',
          'choice6' => 'choice6',
          'choice7' => 'choice7'
     ]
]);


// also, create $form->radio(), 
$form->textarea([
     'labelfor' => 'textarea',
     'label' => 'your message ',
     'text' => 'hi from myform.php',
     'required' => true
]);
$form->button([
     'type' => 'button',
     'text' => 'Click Here!'
]);

$form->hidden();
$form->submit([
     'text' => 'submit'
]);


//echo Bootstrap::header(); //static function
echo $form->html();
    //echo Bootstrap::footer();
