<?php

namespace ComponentForm;

Interface Fieldable
{
    public function getName():string;
    public function setName(string $string):self;
    public function getType():string;
    public function getAttr():string;
    public function renderHtml():string;
}