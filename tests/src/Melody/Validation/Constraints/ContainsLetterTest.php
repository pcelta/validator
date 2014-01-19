<?php

namespace Melody\Validation\Constraints;

use Melody\Validation\Validator as v;

class ContainsSpecialTest extends \PHPUnit_Framework_TestCase
{
    public function test_valid_string_should_pass()
    {
        $this->assertTrue(v::containsLetter(1)->validate('abcdef0123'));
    }

    public function test_invalid_string_should_fail_validation()
    {
        $this->assertFalse(v::containsLetter(1)->validate('0123'));
    }

    /**
     * @expectedException Melody\Validation\Exceptions\InvalidParameterException
     */
    public function test_invalid_parameter_should_raise_an_exception()
    {
        v::containsLetter(new \stdClass());
    }

    /**
     * @expectedException Melody\Validation\Exceptions\InvalidInputException
     */
    public function test_invalid_input_should_raise_an_exception()
    {
        v::containsLetter(5)->validate(new \stdClass());
    }
}
