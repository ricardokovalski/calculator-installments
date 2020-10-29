<?php

namespace Moguzz\Currencies;

use Moguzz\Contracts\Currency;

/**
 * Class Dollar
 * @package Moguzz\Currencies
 */
final class Dollar implements Currency
{
    /**
     * @var string $prefix
     */
    private $prefix = "$";

    /**
     * @var int $decimals
     */
    private $decimals;

    /**
     * @var string $decPoint
     */
    private $decPoint;

    /**
     * @var string $thousandsSep
     */
    private $thousandsSep;

    /**
     * Dollar constructor.
     * @param int $decimals
     */
    public function __construct($decimals = 2)
    {
        $this->decimals = $decimals;
        $this->decPoint = ".";
        $this->thousandsSep = ",";
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @return int
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * @return string
     */
    public function getDecPoint()
    {
        return $this->decPoint;
    }

    /**
     * @return string
     */
    public function getThousandsSep()
    {
        return $this->thousandsSep;
    }
}