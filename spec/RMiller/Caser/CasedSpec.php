<?php

namespace spec\RMiller\Caser;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CasedSpec extends ObjectBehavior
{
    function it_converts_from_snake_case_to_camel_case()
    {
        $toConvert = 'badger_potato_carrot';
        $this->beConstructedThrough('fromSnakeCase', [$toConvert]);
        $this->asCamelCase()->shouldBe('badgerPotatoCarrot');
    }

    function it_converts_from_snake_case_to_pascal_case()
    {
        $toConvert = 'badger_potato_carrot';
        $this->beConstructedThrough('fromSnakeCase', [$toConvert]);
        $this->asPascalCase()->shouldBe('BadgerPotatoCarrot');
    }

    function it_converts_from_snake_case_back_to_snake_case()
    {
        $toConvert = 'badger_potato_carrot';
        $this->beConstructedThrough('fromSnakeCase', [$toConvert]);
        $this->asSnakeCase()->shouldBe('badger_potato_carrot');
    }

    function it_converts_from_camel_case_to_snake_case()
    {
        $toConvert = 'monkeyAubergineKale';
        $this->beConstructedThrough('fromCamelCase', [$toConvert]);
        $this->asSnakeCase()->shouldBe('monkey_aubergine_kale');
    }

    function it_converts_from_pascal_case_to_snake_case()
    {
        $toConvert = 'MonkeyAubergineKale';
        $this->beConstructedThrough('fromCamelCase', [$toConvert]);
        $this->asSnakeCase()->shouldBe('monkey_aubergine_kale');
    }

    function it_converts_from_camel_case_to_pascal_case()
    {
        $toConvert = 'monkeyAubergineKale';
        $this->beConstructedThrough('fromCamelCase', [$toConvert]);
        $this->asPascalCase()->shouldBe('MonkeyAubergineKale');
    }
}
