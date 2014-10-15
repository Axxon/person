<?php
/*
 * This file is part of the ${FILE_HEADER_PACKAGE} package.
 *
 * ${FILE_HEADER_COPYRIGHT}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Black\Component\Person\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\ValueObject;

/**
 * Class Name
 *
 * @author Alexandre Balmes <alexandre@lablackroom.com>
 * @licence http://opensource.org/licenses/mit-license.php MIT
 */
class Name implements ValueObject
{
    /**
     * @var
     */
    protected $familyName;

    /**
     * @var string
     */
    protected $givenName;

    /**
     * @param $givenName
     * @param $familyName
     */
    public function __construct($givenName, $familyName)
    {
        $this->givenName = (string) $givenName;
        $this->familyName = (string) $familyName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s %s',  $this->getGivenName(), $this->getFamilyName());
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return  $this->givenName;
    }

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function getValue()
    {
        return sprintf('%s %s',  $this->getGivenName(), $this->getFamilyName());
    }

    /**
     * @param Name $Name
     *
     * @return bool
     */
    public function isEqualTo(Name $name)
    {
        return $this->getValue() === $name->getValue();
    }
}