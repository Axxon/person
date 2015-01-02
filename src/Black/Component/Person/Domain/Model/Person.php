<?php

namespace Black\Component\Person\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;
use Email\EmailAddress;

/**
 * Class Person
 *
 * @author Alexandre Balmes <alexandre@lablackroom.com>
 * @licence http://opensource.org/licenses/mit-license.php MIT
 */
class Person implements Entity
{
    protected $personId;

    protected $name;

    protected $email;

    protected $gender;

    protected $honorificPrefix;

    protected $jobTitle;

    protected $telephone;

    protected $mobile;

    protected $faxNumber;

    protected $picture;

    public function __construct(
        PersonId $personId,
        Name $name,
        EmailAddress $email
    ) {
        $this->personId = $personId;
        $this->name = $name;
        $this->email = $email;
    }

    public function getPersonId()
    {
        return $this->personId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getHonorificPrefix()
    {
       return $this->honorificPrefix;
    }

    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function getPicture()
    {
        return $this->picture;
    }
}
