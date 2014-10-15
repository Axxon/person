<?php

namespace spec\Black\Component\Person\Domain\Model;

use Black\Component\Person\Domain\Model\Name;
use Black\Component\Person\Domain\Model\PersonId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Person\Domain\Model\Person');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\Entity');
    }

    function let()
    {
        $personId = new PersonId('12345');
        $name = new Name("Alexandre", "Balmes");

        $this->beConstructedWith(
            $personId,
            $name,
            "alexandre@lablackroom.com",
            "gender",
            "honorificPrefix",
            "jobTitle",
            "telephone",
            "mobile",
            "faxNumber",
            "picture"
        );
    }

    function it_should_have_a_person_id()
    {
        $this->getPersonId()->shouldReturn("12345");
    }

    function it_should_have_a_name()
    {
        $this->getName()->getValue()->shouldReturn("Alexandre Balmes");
    }

    function it_should_have_a_mail()
    {
        $this->getEmail()->shouldReturn("alexandre@lablackroom.com");
    }

    function it_should_have_a_gender()
    {
        $this->getGender()->shouldReturn("gender");
    }

    function it_should_have_an_honorificPrefix()
    {
        $this->getHonorificPrefix()->shouldReturn("honorificPrefix");
    }

    function it_should_have_job_title()
    {
        $this->getJobTitle()->shouldReturn("jobTitle");
    }

    function it_should_have_a_telephone()
    {
        $this->getTelephone()->shouldReturn("telephone");
    }

    function it_should_have_a_mobile()
    {
        $this->getMobile()->shouldReturn("mobile");
    }

    function it_should_have_a_fax_number()
    {
        $this->getFaxNumber()->shouldReturn("faxNumber");
    }

    function it_should_have_a_picture()
    {
        $this->getPicture()->shouldReturn("picture");
    }
}
