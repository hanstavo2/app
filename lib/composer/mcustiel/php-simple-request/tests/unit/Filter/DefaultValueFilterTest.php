<?php
/**
 * This file is part of php-simple-request.
 *
 * php-simple-request is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * php-simple-request is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with php-simple-request.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace Unit\Filter;

use Mcustiel\SimpleRequest\Filter\DefaultValue;

class DefaultValueFilterTest extends \PHPUnit_Framework_TestCase
{
    const EXPECTED = 'potato';

    private $filter;

    public function setUp()
    {
        $this->filter = new DefaultValue();
        $this->filter->setSpecification(self::EXPECTED);
    }

    public function testFilter()
    {
        $this->assertEquals(self::EXPECTED, $this->filter->filter(''));
        $this->assertEquals(self::EXPECTED, $this->filter->filter(null));
        $this->assertFalse($this->filter->filter(false));
        $this->assertEquals(0, $this->filter->filter(0));
        $this->assertEquals('0', $this->filter->filter('0'));
        $this->assertEquals('tomato', $this->filter->filter('tomato'));
    }
}
