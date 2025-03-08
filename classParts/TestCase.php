<?php
namespace classParts;
class TestCase
{
    protected $name;

    function __construct($self, $name)
    {
        $self->name = $name;
    }
}