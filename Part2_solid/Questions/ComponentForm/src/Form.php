<?php

namespace ComponentForm;
use ComponentForm\Fieldable;
use ComponentForm\FieldStorable;

class Form
{
    private FieldStorable $storage;
    private string $method = 'GET';
    private string $action = '';
    private array $attr = [];
    public function __construct(FieldStorable $storage)
    {
        $this->storage = $storage;
    }

    public function addField(Fieldable $field)
    {
        $this->storage->addField($field);
    }

    public function createView()
    {
        $html = '<form action="'. $this->getAction() . '" method="'. $this->getMethod() . '"' . $this->getAttr() . '>';
        foreach ( $this->storage->getStorage() as $key => $field){
            $html .= '<div>' . $field->renderHtml() . '</div>';
        }
        return $html .= '</form>';
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of attr
     */ 
    public function getAttr()
    {
        $att = '';
        foreach ($this->attr as $key => $attribute) {
            $att .= ' ' . $key . '="' . $attribute . '" ';
        }
        return $att;
    }

    /**
     * Set the value of attr
     *
     * @return  self
     */ 
    public function setAttr($attr)
    {
        $this->attr = $attr;

        return $this;
    }
}