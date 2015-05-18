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
 * Test case for class \sirconic\SgLayerslider\Domain\Model\Layer.
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
class LayerTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \sirconic\SgLayerslider\Domain\Model\Layer
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \sirconic\SgLayerslider\Domain\Model\Layer();
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
	public function getBgimageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBgimageForStringSetsBgimage() { 
		$this->fixture->setBgimage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBgimage()
		);
	}
	
	/**
	 * @test
	 */
	public function getDirectionReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getDirection()
		);
	}

	/**
	 * @test
	 */
	public function setDirectionForIntegerSetsDirection() { 
		$this->fixture->setDirection(12);

		$this->assertSame(
			12,
			$this->fixture->getDirection()
		);
	}
	
	/**
	 * @test
	 */
	public function getBgcolorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBgcolorForStringSetsBgcolor() { 
		$this->fixture->setBgcolor('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBgcolor()
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
	public function getEasinginReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEasinginForStringSetsEasingin() { 
		$this->fixture->setEasingin('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEasingin()
		);
	}
	
	/**
	 * @test
	 */
	public function getEasingoutReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEasingoutForStringSetsEasingout() { 
		$this->fixture->setEasingout('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEasingout()
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
	
	/**
	 * @test
	 */
	public function getElementsReturnsInitialValueForElement() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getElements()
		);
	}

	/**
	 * @test
	 */
	public function setElementsForObjectStorageContainingElementSetsElements() { 
		$element = new \sirconic\SgLayerslider\Domain\Model\Element();
		$objectStorageHoldingExactlyOneElements = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneElements->attach($element);
		$this->fixture->setElements($objectStorageHoldingExactlyOneElements);

		$this->assertSame(
			$objectStorageHoldingExactlyOneElements,
			$this->fixture->getElements()
		);
	}
	
	/**
	 * @test
	 */
	public function addElementToObjectStorageHoldingElements() {
		$element = new \sirconic\SgLayerslider\Domain\Model\Element();
		$objectStorageHoldingExactlyOneElement = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneElement->attach($element);
		$this->fixture->addElement($element);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneElement,
			$this->fixture->getElements()
		);
	}

	/**
	 * @test
	 */
	public function removeElementFromObjectStorageHoldingElements() {
		$element = new \sirconic\SgLayerslider\Domain\Model\Element();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($element);
		$localObjectStorage->detach($element);
		$this->fixture->addElement($element);
		$this->fixture->removeElement($element);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getElements()
		);
	}
	
}
?>