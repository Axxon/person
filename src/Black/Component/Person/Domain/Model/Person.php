<?php

namespace Black\Component\Person\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;
use Email\EmailAddress;

/**
 * Class Person
 */
class Person implements Entity
{
    /**
     * @var PersonId
     */
    protected $personId;

    /**
     * @var Name
     */
    protected $name;

    /**
     * @var EmailAddress
     */
    protected $email;

    /**
     * @var
     */
    protected $gender;

    /**
     * @var
     */
    protected $honorificPrefix;

    /**
     * @var
     */
    protected $jobTitle;

    /**
     * @var
     */
    protected $telephone;

    /**
     * @var
     */
    protected $mobile;

    /**
     * @var
     */
    protected $faxNumber;

    /**
     * @var
     */
    protected $picture;

    /**
     * @param PersonId $personId
     * @param Name $name
     * @param EmailAddress $email
     */
    public function __construct(
        PersonId $personId,
        Name $name,
        EmailAddress $email
    ) {
        $this->personId = $personId;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @return PersonId
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @return Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return EmailAddress
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getHonorificPrefix()
    {
       return $this->honorificPrefix;
    }

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
