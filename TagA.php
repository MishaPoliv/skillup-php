<?php
require_once 'Tag.php';

class TagA extends Tag
{


    public function __construct()
    {
        parent::__construct('a');
    }

    public function setHref($href)
    {
        parent::setAttr('href', $href);

        return $this;
    }

    public  function setTargetBlank()
    {
        parent::setAttr('target', '_blank');

        return $this;
    }

}