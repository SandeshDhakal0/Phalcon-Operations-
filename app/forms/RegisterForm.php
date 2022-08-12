<?php
namespace App\Forms;
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;

class RegisterForm extends Form
{
    public function initialize()
{
$form = new Form();

$form->add(
    new Text(
        'nameLast'
    )
);

$form->add(
    new Text(
        'nameFirst'
    )
);
}
}