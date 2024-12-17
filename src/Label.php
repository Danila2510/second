<?php
namespace App;

use InvalidArgumentException;

class Label extends Control
{
    private $for;

    public function __construct($background, $width, $height, $name, $value, $forObject)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setParentName($forObject);
    }

    public function getParentName()
    {
        return $this->for;
    }

    public function setParentName($forObject)
    {
        if ($forObject instanceof Button || $forObject instanceof Text) {
            $this->for = $forObject->getName();
        } else {
            throw new InvalidArgumentException("Invalid object type. Expected instance of Button or Text.");
        }
    }
}
