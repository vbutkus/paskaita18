<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-28
 * Time: 13:26
 */

namespace app\animals;


class Animal
{
protected $weight;

protected $type;

private $city;

private $name;

public function __construct(string $type, float $weight, string $city, string $name)
{
    $this->type = $type;
    $this->weight = $weight;
    $this->city = $city;
    $this->name = $name;
}

    /**
     * @return mixed
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


}