<?php

namespace sirconic\SgLayerslider\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Robert Wenk <rw@sirconic-group.de>, sirconic group GmbH
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
 * Test case for class \sirconic\SgLayerslider\Domain\Model\Element.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage LayerSlider
 *
 * @author Robert Wenk <rw@sirconic-group.de>
 */
class ElementTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \sirconic\SgLayerslider\Domain\Model\Element
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \sirconic\SgLayerslider\Domain\Model\Element();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getElementtextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setElementtextForStringSetsElementtext() { 
		$this->fixture->setElementtext('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getElementtext()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getBorderleftReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getBorderleft()
		);
	}

	/**
	 * @test
	 */
	public function setBorderleftForIntegerSetsBorderleft() { 
		$this->fixture->setBorderleft(12);

		$this->assertSame(
			12,
			$this->fixture->getBorderleft()
		);
	}
	
	/**
	 * @test
	 */
	public function getBordertopReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getBordertop()
		);
	}

	/**
	 * @test
	 */
	public function setBordertopForIntegerSetsBordertop() { 
		$this->fixture->setBordertop(12);

		$this->assertSame(
			12,
			$this->fixture->getBordertop()
		);
	}
	
	/**
	 * @test
	 */
	public function getElementhightReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getElementhight()
		);
	}

	/**
	 * @test
	 */
	public function setElementhightForIntegerSetsElementhight() { 
		$this->fixture->setElementhight(12);

		$this->assertSame(
			12,
			$this->fixture->getElementhight()
		);
	}
	
	/**
	 * @test
	 */
	public function getTextcolorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTextcolorForStringSetsTextcolor() { 
		$this->fixture->setTextcolor('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTextcolor()
		);
	}
	
	/**
	 * @test
	 */
	public function getSlidedirinReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSlidedirin()
		);
	}

	/**
	 * @test
	 */
	public function setSlidedirinForIntegerSetsSlidedirin() { 
		$this->fixture->setSlidedirin(12);

		$this->assertSame(
			12,
			$this->fixture->getSlidedirin()
		);
	}
	
	/**
	 * @test
	 */
	public function getSlidediroutReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSlidedirout()
		);
	}

	/**
	 * @test
	 */
	public function setSlidediroutForIntegerSetsSlidedirout() { 
		$this->fixture->setSlidedirout(12);

		$this->assertSame(
			12,
			$this->fixture->getSlidedirout()
		);
	}
	
	/**
	 * @test
	 */
	public function getDurationinReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getDurationin()
		);
	}

	/**
	 * @test
	 */
	public function setDurationinForIntegerSetsDurationin() { 
		$this->fixture->setDurationin(12);

		$this->assertSame(
			12,
			$this->fixture->getDurationin()
		);
	}
	
	/**
	 * @test
	 */
	public function getDurationoutReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getDurationout()
		);
	}

	/**
	 * @test
	 */
	public function setDurationoutForIntegerSetsDurationout() { 
		$this->fixture->setDurationout(12);

		$this->assertSame(
			12,
			$this->fixture->getDurationout()
		);
	}
	
	/**
	 * @test
	 */
	public function getDelayinReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getDelayin()
		);
	}

	/**
	 * @test
	 */
	public function setDelayinForIntegerSetsDelayin() { 
		$this->fixture->setDelayin(12);

		$this->assertSame(
			12,
			$this->fixture->getDelayin()
		);
	}
	
	/**
	 * @test
	 */
	public function getDelayoutReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getDelayout()
		);
	}

	/**
	 * @test
	 */
	public function setDelayoutForIntegerSetsDelayout() { 
		$this->fixture->setDelayout(12);

		$this->assertSame(
			12,
			$this->fixture->getDelayout()
		);
	}
	
}
?>