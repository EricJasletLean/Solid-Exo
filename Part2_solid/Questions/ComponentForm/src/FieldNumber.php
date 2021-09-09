<?php

namespace ComponentForm;
use ComponentForm\Fieldable;

class FieldNumber implements Fieldable
{
    const TYPE = 'number';
    private array $attr = [];

    public function __construct(private string $name, array $attr)
    {
        $this->setAttr($attr);
    }
    
    public function renderHtml()
    {
        return '<label for="' . $this->getName() . '">' . $this->getName() . ' : </label><input type="' . $this->getType() . '" name="' . $this->getName() . '" id="' . $this->getName() . '" ' . $this->getAttr() . '>';
    }

    public function getName():string
    {
        return $this->name;
    }
    public function setName(string $name):self
    {
        $this->name = $name;
        return $this;
    }
    public function setAttr(array $attr)
    {
        $this->attr = $attr;
    }
    public function getType():string
    {
        return self::TYPE;
    }
    public function getAttr()
    {
        $att = '';
        foreach ($this->attr as $key => $attribute) {
            $att .= ' ' . $key . '="' . $attribute . '" ';
        }
        return $att;
    }
}