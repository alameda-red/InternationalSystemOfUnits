<?php

namespace Alameda\Component\InternationalSystemOfUnits;

/**
 * Converter
 *
 * @author Sebastian Kuhlmann <zebba@hotmail.de>
 * @package Alameda\Component\InternationalSystemOfUnits
 */
final class Converter
{
    /**
     * @param float $value
     * @param float $unit_in
     * @param float $unit_out
     * @return float
     */
    static public function convert($value, $unit_in, $unit_out)
    {
        return (float) $value * $unit_in / $unit_out;
    }
} 