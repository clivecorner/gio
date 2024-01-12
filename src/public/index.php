<?php
//2.10 Abstract classes and methods

require __DIR__ . '/../vendor/autoload.php';


//2.11 Abstract classes and methods

$fields = [
  new \App\Text('textField'),
  new \App\Checkbox('checkboxField'),
  new \App\Radio('radioField'),
];


foreach ($fields as $field) {
  echo $field->render() . '<br />';
}