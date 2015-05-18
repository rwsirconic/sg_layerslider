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
 * Test case for class \sirconic\SgLayerslider\Domain\Model\Slider.
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
class SliderTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \sirconic\SgLayerslider\Domain\Model\Slider
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \sirconic\SgLayerslider\Domain\Model\Slider();
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
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getLayersReturnsInitialValueForLayer() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getLayers()
		);
	}

	/**
	 * @test
	 */
	public function setLayersForObjectStorageContainingLayerSetsLayers() { 
		$layer = new \sirconic\SgLayerslider\Domain\Model\Layer();
		$objectStorageHoldingExactlyOneLayers = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneLayers->attach($layer);
		$this->fixture->setLayers($objectStorageHoldingExactlyOneLayers);

		$this->assertSame(
			$objectStorageHoldingExactlyOneLayers,
			$this->fixture->getLayers()
		);
	}
	
	/**
	 * @test
	 */
	public function addLayerToObjectStorageHoldingLayers() {
		$layer = new \sirconic\SgLayerslider\Domain\Model\Layer();
		$objectStorageHoldingExactlyOneLayer = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneLayer->attach($layer);
		$this->fixture->addLayer($layer);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneLayer,
			$this->fixture->getLayers()
		);
	}

	/**
	 * @test
	 */
	public function removeLayerFromObjectStorageHoldingLayers() {
		$layer = new \sirconic\SgLayerslider\Domain\Model\Layer();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($layer);
		$localObjectStorage->detach($layer);
		$this->fixture->addLayer($layer);
		$this->fixture->removeLayer($layer);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getLayers()
		);
	}
	
}
?>