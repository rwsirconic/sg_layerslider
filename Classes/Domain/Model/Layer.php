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
class Layer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Titel des Elements
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * BG-Image
	 *
	 * @var \string
	 */
	protected $bgimage;

	/**
	 * Thumbnail
	 *
	 * @var \string
	 */
	protected $thumbnail;

	/**
	 * Deeplink
	 *
	 * @var \string
	 */
	protected $deeplink;

	/**
	 * Extlink
	 *
	 * @var \string
	 */
	protected $extlink;

	/**
	 * slidedelay
	 *
	 * @var \integer
	 */
	protected $slidedelay;

	/**
	 * transition2d
	 *
	 * @var \string
	 */
	protected $transition2d;

	/**
	 * transition3d
	 *
	 * @var \string
	 */
	protected $transition3d;

	/**
	 * timeshift
	 *
	 * @var \integer
	 */
	protected $timeshift;

	/**
	 * Elemente des Layers
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\sirconic\SgLayerslider\Domain\Model\Element>
	 */
	protected $elements;

	/**
	 * __construct
	 *
	 * @return Layer
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
		$this->elements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the timeshift
	 *
	 * @return \integer $timeshift
	 */
	public function getTimeshift() {
		return $this->timeshift;
	}

	/**
	 * Sets the timeshift
	 *
	 * @param \integer $timeshift
	 * @return void
	 */
	public function setTimeshift($timeshift) {
		$this->timeshift = $timeshift;
	}

	/**
	 * Returns the transition2d
	 *
	 * @return \string $transition2d
	 */
	public function getTransition2d() {
		return $this->transition2d;
	}

	/**
	 * Sets the transition2d
	 *
	 * @param \string $transition2d
	 * @return void
	 */
	public function setTransition2D($transition2d) {
		$this->transition2d = $transition2d;
	}

	/**
	 * Returns the deeplink
	 *
	 * @return \string $deeplink
	 */
	public function getDeeplink() {
		return $this->deeplink;
	}

	/**
	 * Sets the deeplink
	 *
	 * @param \string $deeplink
	 * @return void
	 */
	public function setDeeplink($deeplink) {
		$this->deeplink = $deeplink;
	}
	/**
	 * Returns the extlink
	 *
	 * @return \string $extlink
	 */
	public function getExtlink() {
		return $this->extlink;
	}

	/**
	 * Sets the extlink
	 *
	 * @param \string $extlink
	 * @return void
	 */
	public function setExtlink($extlink) {
		$this->extlink = $extlink;
	}

	/**
	 * Returns the bgimage
	 *
	 * @return \string $bgimage
	 */
	public function getBgimage() {
		return $this->bgimage;
	}

	/**
	 * Sets the bgimage
	 *
	 * @param \string $bgimage
	 * @return void
	 */
	public function setBgimage($bgimage) {
		$this->bgimage = $bgimage;
	}

	/**
	 * Returns the thumbnail
	 *
	 * @return \string $thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * Sets the thumbnail
	 *
	 * @param \string $thumbnail
	 * @return void
	 */
	public function setThumbnail($thumbnail) {
		$this->thumbnail = $thumbnail;
	}

	/**
	 * Returns the transition3d
	 *
	 * @return \string $transition3d
	 */
	public function getTransition3d() {
		return $this->transition3d;
	}

	/**
	 * Sets the transition3d
	 *
	 * @param \string $transition3d
	 * @return void
	 */
	public function setTransition3D($transition3d) {
		$this->transition3d = $transition3d;
	}

	/**
	 * Returns the slidedelay
	 *
	 * @return \integer $slidedelay
	 */
	public function getSlidedelay() {
		return $this->slidedelay;
	}

	/**
	 * Sets the slidedelay
	 *
	 * @param \integer $slidedelay
	 * @return void
	 */
	public function setSlidedelay($slidedelay) {
		$this->slidedelay = $slidedelay;
	}

	/**
	 * Adds a Element
	 *
	 * @param \sirconic\SgLayerslider\Domain\Model\Element $element
	 * @return void
	 */
	public function addElement(\sirconic\SgLayerslider\Domain\Model\Element $element) {
		$this->elements->attach($element);
	}

	/**
	 * Removes a Element
	 *
	 * @param \sirconic\SgLayerslider\Domain\Model\Element $elementToRemove The Element to be removed
	 * @return void
	 */
	public function removeElement(\sirconic\SgLayerslider\Domain\Model\Element $elementToRemove) {
		$this->elements->detach($elementToRemove);
	}

	/**
	 * Returns the elements
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\sirconic\SgLayerslider\Domain\Model\Element> $elements
	 */
	public function getElements() {
		return $this->elements;
	}

	/**
	 * Sets the elements
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\sirconic\SgLayerslider\Domain\Model\Element> $elements
	 * @return void
	 */
	public function setElements(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $elements) {
		$this->elements = $elements;
	}

}
?>