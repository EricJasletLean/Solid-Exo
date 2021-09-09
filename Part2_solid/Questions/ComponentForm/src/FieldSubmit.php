<?php

namespace ComponentForm;

class FieldSubmit implements Fieldable
{
    const TYPE = 'submit';
    private array $attr = [];

    public function __construct(private string $name, array $attr)
    {
        $this->setAttr($attr);
    }

    public function renderHtml():string
    {
        return '<input type="' . $this->getType() . '" value="' . $this->getName() . '" id="' . $this->getName() . '" ' . $this->getAttr() . '>';
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
    public function getAttr():string
    {
        $att = '';
        foreach ($this->attr as $key => $attribute) {
            $att .= ' ' . $key . '="' . $attribute . '" ';
        }
        return $att;
    }
}