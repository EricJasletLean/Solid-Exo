<?php

require_once __DIR__ . '/vendor/autoload.php';


use ComponentForm\Form;
use ComponentForm\ArrayFieldStore;
use ComponentForm\FieldText;
use ComponentForm\FieldNumber;
use ComponentForm\FieldPassword;
use ComponentForm\FieldSubmit;

$storage = new ArrayFieldStore();

$form1 = new Form($storage);

$form1->addField( new FieldText('firstName', ['class' => 'formtype']) );
$form1->addField( new FieldText('lastName', ['class' => 'formtype']) );
$form1->addField( new FieldNumber('Age', ['class' => 'formtype']) );
$form1->addField( new FieldPassword('password', ['class' => 'formtype']) );
$form1->addField( new FieldSubmit('suscribe', ['class' => 'formtype']) );

echo $form1->createView();
