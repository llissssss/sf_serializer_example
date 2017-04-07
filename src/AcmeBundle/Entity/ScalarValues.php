<?php

namespace AcmeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity
 */
class ScalarValues
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $string;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $integer;


    /**
     * @var bool
     *
     * @ORM\Column(type="bool")
     */
    protected $boolean;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString(string $string)
    {
        $this->string = $string;
    }

    /**
     * @return int
     */
    public function getInteger(): int
    {
        return $this->integer;
    }

    /**
     * @param int $integer
     */
    public function setInteger(int $integer)
    {
        $this->integer = $integer;
    }

    /**
     * @return boolean
     */
    public function isBoolean(): boolean
    {
        return $this->boolean;
    }

    /**
     * @param boolean $boolean
     */
    public function setBoolean(boolean $boolean)
    {
        $this->boolean = $boolean;
    }
}
