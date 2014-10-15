<?php

namespace spec\Black\Component\Person\Domain\Model;

use Black\Component\Person\Domain\Model\PersonId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonIdSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(12345);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Person\Domain\Model\PersonId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    public function it_should_have_a_value()
    {
        $this->getValue()->shouldBeEqualTo('12345');
    }

    public function it_sould_have_a_magic_toString()
    {
        $this->__toString()->shouldBeEqualTo('12345');
    }

    public function it_should_be_equal()
    {
        $object2 = new PersonId('12345');

        $this->isEqualTo($object2)->shouldReturn(true);
    }

    public function it_should_not_be_equal()
    {
        $object2 = new PersonId('1');

        $this->isEqualTo($object2)->shouldReturn(false);
    }
}
