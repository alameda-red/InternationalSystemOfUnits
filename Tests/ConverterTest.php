<?php

namespace Alameda\Component\InternationalSystemOfUnits\Tests;

use Alameda\Component\InternationalSystemOfUnits\Converter;
use Alameda\Component\InternationalSystemOfUnits\Length;

/**
 * @author Sebastian Kuhlmann <zebba@hotmail.de>
 * @package Alameda\Component\InternationalSystemOfUnits\Tests
 */
class ConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param float $value
     * @param float $unit_in
     * @param float $unit_out
     * @param $result
     *
     * @dataProvider convertDataProvider
     */
    public function testConvert($value, $unit_in, $unit_out, $result)
    {
        $this->assertEquals($result, Converter::convert($value, $unit_in, $unit_out));
    }

    /**
     * @return array
     */
    public function convertDataProvider()
    {
        return array(
            array(10., Length::MILLIMETRE, Length::CENTIMETRE, 1.),
            array(1., Length::CENTIMETRE, Length::MILLIMETRE, 10.),

            array(100.0, Length::CENTIMETRE, Length::METRE, 1.),
            array(1., Length::METRE, Length::CENTIMETRE, 100.),

            array(1000., Length::METRE, Length::KILOMETRE, 1.),
            array(1., Length::KILOMETRE, Length::METRE, 1000.),

            array(1., pow(Length::CENTIMETRE, 2),  pow(Length::MILLIMETRE, 2), 100.),
            array(100., pow(Length::MILLIMETRE, 2),  pow(Length::MILLIMETRE, 2), 100.),
        );
    }
} 