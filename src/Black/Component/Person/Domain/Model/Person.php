<?php

namespace Black\Component\Person\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;

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
        $email,
        $gender,
        $honorificPrefix,
        $jobTitle,
        $telephone,
        $mobile,
        $faxNumber,
        $picture
    ) {
        $this->personId = $personId;
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->honorificPrefix = $honorificPrefix;
        $this->jobTitle = $jobTitle;
        $this->telephone = $telephone;
        $this->mobile = $mobile;
        $this->faxNumber = $faxNumber;
        $this->picture = $picture;
    }

    public function getPersonId()
    {
        return $this->personId->getValue();
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
