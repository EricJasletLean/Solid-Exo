<?php

namespace ComponentForm;

use ComponentForm\Fieldable;
use ComponentForm\FieldStorable;

class ArrayFieldStore implements FieldStorable
{
    public array $storage = [];

    public function addField(Fieldable $field):void
    {
        if (!in_array($field->getName(), $this->storage)){
            $this->storage[$field->getName()] = $field;
        }
    }

    public function reset():self
    {
        $this->storage = [];
        return $this;
    }
    public function Delete(string $name):void
    {
        if (in_array($name, $this->storage)){
            unset($this->storage[$name]);
        }
    }
    public function getStorage()
    {
        return $this->storage;
    }
}