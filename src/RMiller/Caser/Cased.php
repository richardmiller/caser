<?php

namespace RMiller\Caser;

class Cased
{
    private $parts = [];

    public static function fromSnakeCase($snakeCased)
    {
        $name = new Cased();
        $name->parts = explode('_', $snakeCased);

        return $name;
    }

    public static function fromCamelCase($camelCased)
    {
        $name = new Cased();
        $name->parts = explode('_', ltrim(strtolower(preg_replace('/[A-Z]/', '_$0', $camelCased)), '_'));

        return $name;
    }

    public function asCamelCase()
    {
        return lcfirst(join('', array_map('ucfirst', $this->parts)));
    }

    public function asPascalCase()
    {
        return join('', array_map('ucfirst', $this->parts));
    }

    public function asSnakeCase()
    {
        return join('_', $this->parts);
    }
}
