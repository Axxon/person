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
 * Class PersonId
 *
 * @author Alexandre Balmes <alexandre@lablackroom.com>
 * @licence http://opensource.org/licenses/mit-license.php MIT
 */
class PersonId implements ValueObject
{
    /**
     * @var
     */
    protected $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s',  $this->getValue());
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param PersonId $personId
     *
     * @return bool
     */
    public function isEqualTo(PersonId $personId)
    {
        return $this->getValue() === $personId->getValue();
    }
}