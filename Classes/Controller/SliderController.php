<?php
namespace sirconic\SgLayerslider\Controller;

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
class SliderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * sliderRepository
	 *
	 * @var \sirconic\SgLayerslider\Domain\Repository\SliderRepository
	 * @inject
	 */
	protected $sliderRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
        // UID des gewählten Sliders aus der Flexform lesen
        $slidertoshow= $this->settings['slider']['uid'];
        $sliders = $this->sliderRepository->findByUid($slidertoshow);

        $sliderconfig['sliderid']=str_replace(' ','',$sliders->getTitle());

        $sliderconfig['width']= $this->settings['layout']['width'];
        $sliderconfig['height']= $this->settings['layout']['height'];
        $sliderconfig['cssclass']= $this->settings['layout']['cssclass'];

        if ($this->settings['slider']['autostart']==1) {
            $sliderconfig['autostart']='true';
        }else{
            $sliderconfig['autostart']='false';
        }

        if ($this->settings['slider']['pauseOnHover']==1) {
            $sliderconfig['pauseOnHover']='true';
        }else{
            $sliderconfig['pauseOnHover']='false';
        }

        if ($this->settings['slider']['firstSlide']==1) {
            $sliderconfig['firstSlide']='random';
        }else{
            $sliderconfig['firstSlide']='1';
        }
        if ($this->settings['slider']['animateFirstSlide']==1) {
            $sliderconfig['animateFirstSlide']='true';
        }else{
            $sliderconfig['animateFirstSlide']='false';
        }
        if ($this->settings['slider']['loops']=='') {
            $sliderconfig['loops']=0;
        }else{
            $sliderconfig['loops']=$this->settings['slider']['loops'];
        }
        if ($this->settings['slider']['forceLoopNum']==1) {
            $sliderconfig['forceLoopNum']='true';
        }else{
            $sliderconfig['forceLoopNum']='false';
        }
        if ($this->settings['slider']['towWaySlideshow']==1) {
            $sliderconfig['towWaySlideshow']='true';
        }else{
            $sliderconfig['towWaySlideshow']='false';
        }
        if ($this->settings['slider']['randomSlideshow']==1) {
            $sliderconfig['randomSlideshow']='true';
        }else{
            $sliderconfig['randomSlideshow']='false';
        }


        if ($this->settings['layout']['responsive']==1) {
            $sliderconfig['responsive']='true';
        }else{
            $sliderconfig['responsive']='false';
        }

        if ($this->settings['layout']['responsiveUnder']=='') {
            $sliderconfig['responsiveUnder']='0';
        }else{
            $sliderconfig['responsiveUnder']=$this->settings['layout']['responsiveUnder'];
        }
        if ($this->settings['layout']['layersContainer']=='') {
            $sliderconfig['layersContainer']='0';
        }else{
            $sliderconfig['layersContainer']=$this->settings['layout']['layersContainer'];
        }

        if ($this->settings['appearence']['globalBGColor']=='') {
            $sliderconfig['globalBGColor']='transparent';
        }else{
            $sliderconfig['globalBGColor']='\''.$this->settings['appearence']['globalBGColor'].'\'';
        }
        if ($this->settings['appearence']['globalBGImage']=='') {
            $sliderconfig['globalBGImage']='false';
        }else{
            $sliderconfig['globalBGImage']=$this->settings['appearence']['globalBGImage'];
        }
        if ($this->settings['appearence']['skin']=='') {
            $sliderconfig['skin']='v5';
        }else{
            $sliderconfig['skin']=$this->settings['appearence']['globalBGColor'];
        }
        if ($this->settings['appearence']['skinsPath']=='') {
            $sliderconfig['skinsPath']='/layerslider/skins/';
        }else{
            $sliderconfig['skinsPath']=$this->settings['appearence']['skinsPath'];
        }


        if ($this->settings['navigation']['navPrevNext']=='0') {
            $sliderconfig['navPrevNext']='false';
        }else{
            $sliderconfig['navPrevNext']='true';
        }
        if ($this->settings['navigation']['navStartStop']=='0') {
            $sliderconfig['navStartStop']='false';
        }else{
            $sliderconfig['navStartStop']='true';
        }
        if ($this->settings['navigation']['navButtons']=='0') {
            $sliderconfig['navButtons']='false';
        }else{
            $sliderconfig['navButtons']='true';
        }
        if ($this->settings['navigation']['hoverPrevNext']=='0') {
            $sliderconfig['hoverPrevNext']='false';
        }else{
            $sliderconfig['hoverPrevNext']='true';
        }
        if ($this->settings['navigation']['hoverBottomNav']=='0') {
            $sliderconfig['hoverBottomNav']='false';
        }else{
            $sliderconfig['hoverBottomNav']='true';
        }
        if ($this->settings['navigation']['keybNav']=='0') {
            $sliderconfig['keybNav']='false';
        }else{
            $sliderconfig['keybNav']='true';
        }
        if ($this->settings['navigation']['touchNav']=='0') {
            $sliderconfig['touchNav']='false';
        }else{
            $sliderconfig['touchNav']='true';
        }
        if ($this->settings['navigation']['showBarTimer']=='0') {
            $sliderconfig['showBarTimer']='false';
        }else{
            $sliderconfig['showBarTimer']='true';
        }
        if ($this->settings['navigation']['showCircleTimer']=='0') {
            $sliderconfig['showCircleTimer']='false';
        }else{
            $sliderconfig['showCircleTimer']='true';
        }

        switch($this->settings['navigation']['thumbnailNavigation']) {
            case 'deaktiviert';
                $sliderconfig['thumbnailNavigation']='disabled';
                break;
            case 'aktiviert':
                $sliderconfig['thumbnailNavigation']='always';
                break;
            default;
                $sliderconfig['thumbnailNavigation']='hover';
        }

        if ($this->settings['navigation']['tnContainerWidth']=='') {
            $sliderconfig['tnContainerWidth']='60%';
        }else{
            $sliderconfig['tnContainerWidth']=$this->settings['navigation']['tnContainerWidth'];
        }
        if ($this->settings['navigation']['tnWidth']=='') {
            $sliderconfig['tnWidth']='100';
        }else{
            $sliderconfig['tnWidth']=$this->settings['navigation']['tnWidth'];
        }
        if ($this->settings['navigation']['tnHeight']=='') {
            $sliderconfig['tnHeight']='60';
        }else{
            $sliderconfig['tnHeight']=$this->settings['navigation']['tnHeight'];
        }
        if ($this->settings['navigation']['tnActiveOpacity']=='') {
            $sliderconfig['tnActiveOpacity']='35';
        }else{
            $sliderconfig['tnActiveOpacity']=$this->settings['navigation']['tnActiveOpacity'];
        }
        if ($this->settings['navigation']['tnInactiveOpacity']=='') {
            $sliderconfig['tnInactiveOpacity']='100';
        }else{
            $sliderconfig['tnInactiveOpacity']=$this->settings['navigation']['tnInactiveOpacity'];
        }


        if ($this->settings['video']['autoPlayVideos']=='0') {
            $sliderconfig['autoPlayVideos']='false';
        }else{
            $sliderconfig['autoPlayVideos']='true';
        }
        switch ($this->settings['video']['autoPauseSlideshow']) {
            case 'aktiviert';
                $sliderconfig['autoPauseSlideshow']='true';
                break;
            case 'deaktiviert';
                $sliderconfig['autoPauseSlideshow']='false';
                break;
            default;
                $sliderconfig['autoPauseSlideshow']='\'auto\'';
        }
        switch($this->settings['video']['youtubePreview']) {
            case 'Max Quality';
                $sliderconfig['youtubePreview']='maxresdefault.jpg';
                break;
            case 'Medium Quality';
                $sliderconfig['youtubePreview']='mqdefault.jpg';
                break;
            case 'High Quality';
                $sliderconfig['youtubePreview']='hqdfault.jpg';
                break;
            default;
                $sliderconfig['youtubePreview']='default.jpg';
        }

        if ($this->settings['image']['imgPreload']=='0') {
            $sliderconfig['imgPreload']='false';
        }else{
            $sliderconfig['imgPreload']='true';
        }
        if ($this->settings['image']['lazyLoad']=='0') {
            $sliderconfig['lazyLoad']='false';
        }else{
            $sliderconfig['lazyLoad']='true';
        }

        if ($this->settings['logo']['yourLogo']=='') {
            $sliderconfig['yourLogo']='false';
        }else{
            $sliderconfig['yourLogo']='\''.$this->settings['logo']['yourLogo'].'\'';
        }
        if ($this->settings['logo']['yourLogoStyle']=='') {
            $sliderconfig['yourLogoStyle']='left: -10px; top: -10px;';
        }else{
            $sliderconfig['yourLogoStyle']=$this->settings['logo']['yourLogoStyle'];
        }
        if ($this->settings['logo']['yourLogoLink']=='') {
            $sliderconfig['yourLogoLink']='false';
        }else{
            $sliderconfig['yourLogoLink']='\''.$this->settings['logo']['yourLogoLink'].'\'';
        }
        if ($this->settings['logo']['yourLogoTarget']=='') {
            $sliderconfig['yourLogoTarget']='_blank';
        }else{
            $sliderconfig['yourLogoTarget']=$this->settings['logo']['yourLogoTarget'];
        }

        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($sliderconfig);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($sliders);


		$this->view->assign('slider', $sliders);
        $this->view->assign('layers',$layers);
        $this->view->assign('elements',$elements);
        $this->view->assign('config',$sliderconfig);


	}

	/**
	 * action show
	 *
	 * @param \sirconic\SgLayerslider\Domain\Model\Slider $slider
	 * @return void
	 */
	public function showAction(\sirconic\SgLayerslider\Domain\Model\Slider $slider) {
		$this->view->assign('slider', $slider);
	}

}
?>