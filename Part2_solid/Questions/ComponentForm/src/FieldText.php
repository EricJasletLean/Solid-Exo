<?php

namespace ComponentForm;
use ComponentForm\Fieldable;

class FieldText implements Fieldable
{
    const TYPE = 'text';
    private array $attr = [];

    public function __construct(private string $name, array $attr)
    {
        $this->setAttr($attr);
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