<?php

namespace ComponentForm;
use ComponentForm\Fieldable;

Interface FieldStorable
{
    public function addField(Fieldable $field):void;
    public function reset():self;
    public function Delete(string $name):void;
    public function getStorage();
}