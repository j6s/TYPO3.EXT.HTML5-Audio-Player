<?php

namespace TYPO3\NimHtml5audioplayer\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 NIMIUS HTML5 Audio Player <nicki@nimius.net>, NIMIUS
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TYPO3\NimHtml5audioplayer\Domain\Model\Ogg.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage NIMIUS HTML5 Audio Player
 *
 * @author NIMIUS HTML5 Audio Player <nicki@nimius.net>
 */
class OggTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\NimHtml5audioplayer\Domain\Model\Ogg
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\NimHtml5audioplayer\Domain\Model\Ogg();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getOggReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOggForStringSetsOgg() { 
		$this->fixture->setOgg('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOgg()
		);
	}
	
}
?>