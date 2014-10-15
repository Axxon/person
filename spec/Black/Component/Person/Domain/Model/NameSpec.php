<?php

namespace spec\Black\Component\Person\Domain\Model;

use Black\Component\Person\Domain\Model\Name;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NameSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith("Alexandre", "Balmes");
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Person\Domain\Model\Name');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    function it_should_have_a_given_name()
    {
        $this->getGivenName()->shouldReturn("Alexandre");
        $this->getGivenName()->shouldBeString();
    }

    function it_should_have_a_family_name()
    {
        $this->getFamilyName()->shouldReturn("Balmes");
        $this->getGivenName()->shouldBeString();
    }

    function it_should_return_complete_name()
    {
        $this->getValue()->shouldReturn("Alexandre Balmes");
    }

    function it_should_check_equal_value()
    {
        $name = new Name("Gaïa", "Balmes");
        $this->isEqualTo($name)->shouldReturn(false);
    }
}
