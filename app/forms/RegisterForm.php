<?php
namespace App\Forms;
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;

class RegisterForm extends Form
{
    public function initialize()
{
$this->add(
    new Text(
        'name'
    )
);

$this->add(
    new Text(
        'telephone'
    )
);
}
}