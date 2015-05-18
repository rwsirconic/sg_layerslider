<?php
namespace sirconic\SgLayerslider\Domain\Model;

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
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package sg_layerslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Slider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Titel des Sliders
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Beschreibung des Sliders
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * Layer des Sliders
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\sirconic\SgLayerslider\Domain\Model\Layer>
	 */
	protected $layers;

	/**
	 * __construct
	 *
	 * @return Slider
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->layers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a Layer
	 *
	 * @param \sirconic\SgLayerslider\Domain\Model\Layer $layer
	 * @return void
	 */
	public function addLayer(\sirconic\SgLayerslider\Domain\Model\Layer $layer) {
		$this->layers->attach($layer);
	}

	/**
	 * Removes a Layer
	 *
	 * @param \sirconic\SgLayerslider\Domain\Model\Layer $layerToRemove The Layer to be removed
	 * @return void
	 */
	public function removeLayer(\sirconic\SgLayerslider\Domain\Model\Layer $layerToRemove) {
		$this->layers->detach($layerToRemove);
	}

	/**
	 * Returns the layers
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\sirconic\SgLayerslider\Domain\Model\Layer> $layers
	 */
	public function getLayers() {
		return $this->layers;
	}

	/**
	 * Sets the layers
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\sirconic\SgLayerslider\Domain\Model\Layer> $layers
	 * @return void
	 */
	public function setLayers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $layers) {
		$this->layers = $layers;
	}

}
?>