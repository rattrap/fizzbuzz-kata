<?php

namespace Kata\Tests;

class KataTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function givenTrueItShouldBeTrue()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function givenFalseItShouldBeFalse()
    {
        $this->assertFalse(false);
    }

}