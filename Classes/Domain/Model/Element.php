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
class Element extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /** size-string
     *
     * @var \string
     */
    protected $sizestring;

    /** Image Height
     *
     * @var \stringr
     */
    protected $imgheight;


    /** Imgage Style
     *
     * @var  \string
     * */
    protected $imgstring;

    /** Image Width
     *
     * @var \string
     */
    protected $imgwidth;

    /** Image Alt-Value
     *
     * @var \string
     */
    protected $imgalt;

    /** Image-Stylestring
     *
     * @var \string
     */
    protected $imgstyle;

    /** Layer-Link ID
     *
     * @var \integer
     */
    protected $layerlink;

    /**
     * Datastring fuer die Zusammenstellung
     *
     * @var \string
     */
    protected $datastring;

    /**
     * Textwrap
     *
     * @var \integer
     */
    protected $textwrap;

    /**
     * Style-String für die Ausgabe
     *
     * @var \string
     */
    protected $stylestring;

    /**
	 * Element-Titel
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Element-Text
	 *
	 * @var \string
	 */
	protected $elementtext;

	/**
	 * Element-Bild
	 *
	 * @var \string
	 */
	protected $image;

    /**
	 * Text-Tag
     *
	 * @var \string
	 */
	protected $texttag;

	/**
	 * Rand links
	 *
	 * @var \string
	 */
	protected $borderleft;

	/**
	 * Rand oben
	 *
	 * @var \string
	 */
	protected $bordertop;

	/**
	 * Schrift/Hintergrund-Style
	 *
	 * @var \string
	 */
	protected $textcolor;

	/**
	 * Effektrichtung einblenden
	 *
	 * @var \integer
	 */
	protected $slidedirin;

	/**
	 * Effektrichtung ausblenden
	 *
	 * @var \integer
	 */
	protected $slidedirout;

	/**
	 * Effektdauer einblenden
	 *
	 * @var \integer
	 */
	protected $durationin;

	/**
	 * Effektdauer ausblenden
	 *
	 * @var \integer
	 */
	protected $durationout;

	/**
	 * Verzögerung einblenden
	 *
	 * @var \integer
	 */
	protected $delayin;

    /**
     * Übergangsfunktion einblenden
     * @var \string
     */
    protected $easingin;

    /**
     * Darstellungszeit
     *
     * @var \integer
     */
    protected $showuntil;

    /**
     *
     * @var \string
     */
    protected $offsetxin;

    /**
     *
     * @var \string
     */
    protected $offsetxout;

    /**
     *
     * @var \string
     */
    protected $offsetyin;

    /**
     *
     * @var \string
     */
    protected $offsetyout;

    /**
     *
     * @var \integer
     */
    protected $fadein;

    /**
     *
     * @var \integer
     */
    protected $fadeout;

    /**
     *
     * @var \integer
     */
    protected $rotatein;

    /**
     *
     * @var \integer
     */
    protected $rotateout;

    /**
     *
     * @var \integer
     */
    protected $rotatexin;

    /**
     *
     * @var \integer
     */
    protected $rotatexout;

    /**
     *
     * @var \integer
     */
    protected $rotateyin;

    /**
     *
     * @var \integer
     */
    protected $rotateyout;

    /**
     *
     * @var \float
     */
    protected $scalexin;

    /**
     *
     * @var \float
     */
    protected $scalexout;

    /**
     *
     * @var \float
     */
    protected $scaleyin;

    /**
     *
     * @var \float
     */
    protected $scaleyout;

    /**
     *
     * @var \integer
     */
    protected $skewxin;

    /**
     *
     * @var \integer
     */
    protected $skewxout;

    /**
     *
     * @var \integer
     */
    protected $skewyin;

    /**
     *
     * @var \integer
     */
    protected $skewyout;

    /**
     *
     * @var \integer
     */
    protected $parallax;

    /**
     *
     * @var \string
     */
    protected $transformoriginin;

    /**
     *
     * @var \string
     */
    protected $transformoriginout;

    /**
     *
     * @var \string
     */
    protected $easingout;

    /**
     *
     * @var \string
     */
    protected $medialink;

    /**
     *
     * @var \integer
     */
    protected $mediatype;

    /**
     * Returns the Showuntil
     *
     * @return \int $showuntil
     */
    public function getShowuntil() {
        return $this->showuntil;
    }

	/**
     * Returns the Offsetxin
     *
     * @return \string $offsetxin
     */
	public function getOffsetxin() {
        return $this->offsetxin;
    }

	/**
     * Returns the Offsetxout
     *
     * @return \string $offsetxout
     */
	public function getOffsetxout() {
        return $this->offsetxout;
    }

	/**
     * Returns the Offsetyin
     *
     * @return \string $offsetyin
     */
	public function getOffsetyin() {
        return $this->offsetyin;
    }

	/**
     * Returns the Offsetyout
     *
     * @return \string $offsetyout
     */
	public function getOffsetyout() {
        return $this->offsetyout;
    }

	/**
     * Returns theFadein
     *
     * @return \string $fadein
     */
	public function getFadein() {
        return $this->fadein;
    }

	/**
     * Returns the Fadeout
     *
     * @return \string $fadeout
     */
	public function getFadeout() {
        return $this->fadeout;
    }

	/**
     * Returns the Rotatein
     *
     * @return \string $rotatein
     */
	public function getRotatein() {
        return $this->rotatein;
    }

	/**
     * Returns the Rotateout
     *
     * @return \string $rotateout
     */
	public function getRotateout() {
        return $this->rotateout;
    }

	/**
     * Returns the Rotatexin
     *
     * @return \string $rotatexin
     */
	public function getRotatexin() {
        return $this->rotatexin;
    }

	/**
     * Returns the Rotatexout
     *
     * @return \string $rotatexout
     */
	public function getRotatexout() {
        return $this->rotatexout;
    }

	/**
     * Returns the Rotateyin
     *
     * @return \string $rotateyin
     */
	public function getRotateyin() {
        return $this->rotateyin;
    }

	/**
     * Returns the Rotateyout
     *
     * @return \string $rotateyout
     */
	public function getRotateyout() {
        return $this->rotateyout;
    }

	/**
     * Returns the Scalexin
     *
     * @return \string $scalexin
     */
	public function getScalexin() {
        return $this->scalexin;
    }

	/**
     * Returns the Scalexout
     *
     * @return \string $scalexout
     */
	public function getScalexout() {
        return $this->scalexout;
    }

	/**
     * Returns the Scaleyin
     *
     * @return \string $scaleyin
     */
	public function getScaleyin() {
        return $this->scaleyin;
    }

	/**
     * Returns the Scaleyout
     *
     * @return \string $scaleyout
     */
	public function getScaleyout() {
        return $this->scaleyout;
    }

	/**
     * Returns the Skewxin
     *
     * @return \string $skewxin
     */
	public function getSkewxin() {
        return $this->skewxin;
    }

	/**
     * Returns the Skewxout
     *
     * @return \string $skewxout
     */
	public function getSkewxout() {
        return $this->skewxout;
    }

	/**
     * Returns the Skewyin
     *
     * @return \string $skewyin
     */
	public function getSkewyin() {
        return $this->skewyin;
    }

	/**
     * Returns the Skewyout
     *
     * @return \string $skewyout
     */
	public function getSkewyout() {
        return $this->skewyout;
    }

	/**
     * Returns the Parallax
     *
     * @return \string $parallax
     */
	public function getParallax() {
        return $this->parallax;
    }

	/**
     * Returns the Transformoriginin
     *
     * @return \string $transformoriginin
     */
	public function getTransformoriginin() {
        return $this->transformoriginin;
    }

	/**
     * Returns the Transformoriginout
     *
     * @return \string $transformoriginout
     */
	public function getTransformoriginout() {
        return $this->transformoriginout;
    }

	/**
     * Returns the Easingout
     *
     * @return \string $easingout
     */
	public function getEasingout() {
        return $this->easingout;
    }

	/**
     * Returns the Medialink
     *
     * @return \string $medialink
     */
	public function getMedialink() {
        return $this->medialink;
    }

	/**
     * Returns the Mediatype
     *
     * @return \string $mediatype
     */
	public function getMediatype() {
        return $this->mediatype;
    }


    /**
     * Sets the showuntil
     *
     * @param \int $showuntil
     * @return void
     */
    public function setShowuntil($showuntil) {
    	$this->showuntil = $showuntil;
    }


    /**
     * Sets the offsetxin
     *
     * @param \string $offsetxin
     * @return void
     */
	public function setOffsetxin($offsetxin) {
		$this->offsetxin = $offsetxin;
    }


    /**
     * Sets the offsetxout
     *
     * @param \string $offsetxout
     * @return void
     */
	public function setOffsetxout($offsetxout) {
		$this->offsetxout = $offsetxout;
    }


    /**
     * Sets the offsetyin
     *
     * @param \string $offsetyin
     * @return void
     */
	public function setOffsetyin($offsetyin) {
		$this->offsetyin = $offsetyin;
    }


    /**
     * Sets the offsetyout
     *
     * @param \string $offsetyout
     * @return void
     */
	public function setOffsetyout($offsetyout) {
		$this->offsetyout = $offsetyout;
    }


    /**
     * Sets the fadein
     *
     * @param \string $fadein
     * @return void
     */
	public function setFadein($fadein) {
		$this->fadein = $fadein;
    }


    /**
     * Sets the fadeout
     *
     * @param \string $fadeout
     * @return void
     */
	public function setFadeout($fadeout) {
		$this->fadeout = $fadeout;
    }


    /**
     * Sets the rotatein
     *
     * @param \string $rotatein
     * @return void
     */
	public function setRotatein($rotatein) {
		$this->rotatein = $rotatein;
    }


    /**
     * Sets the rotateout
     *
     * @param \string $rotateout
     * @return void
     */
	public function setRotateout($rotateout) {
		$this->rotateout = $rotateout;
    }


    /**
     * Sets the rotatexin
     *
     * @param \string $rotatexin
     * @return void
     */
	public function setRotatexin($rotatexin) {
		$this->rotatexin = $rotatexin;
    }


    /**
     * Sets the rotatexout
     *
     * @param \string $rotatexout
     * @return void
     */
	public function setRotatexout($rotatexout) {
		$this->rotatexout = $rotatexout;
    }


    /**
     * Sets the rotateyin
     *
     * @param \string $rotateyin
     * @return void
     */
	public function setRotateyin($rotateyin) {
		$this->rotateyin = $rotateyin;
    }


    /**
     * Sets the rotateyout
     *
     * @param \string $rotateyout
     * @return void
     */
	public function setRotateyout($rotateyout) {
		$this->rotateyout = $rotateyout;
    }


    /**
     * Sets the scalexin
     *
     * @param \string $scalexin
     * @return void
     */
	public function setScalexin($scalexin) {
		$this->scalexin = $scalexin;
    }


    /**
     * Sets the scalexout
     *
     * @param \string $scalexout
     * @return void
     */
	public function setScalexout($scalexout) {
		$this->scalexout = $scalexout;
    }


    /**
     * Sets the scaleyin
     *
     * @param \string $scaleyin
     * @return void
     */
	public function setScaleyin($scaleyin) {
		$this->scaleyin = $scaleyin;
    }


    /**
     * Sets the scaleyout
     *
     * @param \string $scaleyout
     * @return void
     */
	public function setScaleyout($scaleyout) {
		$this->scaleyout = $scaleyout;
    }


    /**
     * Sets the skewxin
     *
     * @param \string $skewxin
     * @return void
     */
	public function setSkewxin ($skewxin) {
		$this->skewxin  = $skewxin;
    }


    /**
     * Sets the skewxout
     *
     * @param \string $skewxout
     * @return void
     */
	public function setSkewxout($skewxout) {
		$this->skewxout = $skewxout;
    }


    /**
     * Sets the skewyin
     *
     * @param \string $skewyin
     * @return void
     */
	public function setSkewyin($skewyin) {
		$this->skewyin = $skewyin;
    }


    /**
     * Sets the skewyout
     *
     * @param \string $skewyout
     * @return void
     */
	public function setSkewyout($skewyout ) {
		$this->skewyout = $skewyout;
    }


    /**
     * Sets the parallax
     *
     * @param \string $parallax
     * @return void
     */
	public function setParallax($parallax) {
		$this->parallax = $parallax;
    }


    /**
     * Sets the transformoriginin
     *
     * @param \string $transformoriginin
     * @return void
     */
	public function setTransformoriginin($transformoriginin) {
		$this->transformoriginin = $transformoriginin;
    }


    /**
     * Sets the transformoriginout
     *
     * @param \string $transformoriginout
     * @return void
     */
	public function setTransformoriginout($transformoriginout) {
		$this->transformoriginout = $transformoriginout;
    }

    /**
     * Sets the easingout
     *
     * @param \string $easingout
     * @return void
     */
	public function setEasingout($easingout) {
		$this->easingout = $easingout;
    }


    /**
     * Sets the medialink
     *
     * @param \string $	medialink
     * @return void
     */
	public function setMedialink($medialink) {
		$this->medialink = $medialink;
    }


    /**
     * Sets the mediatype
     *
     * @param \string $mediatype
     * @return void
     */
	public function setMediatyp($mediatype) {
		$this->mediatype = $mediatype;
    }

	/**
	/**
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
	 * Returns the elementtext
	 *
	 * @return \string $elementtext
	 */
	public function getElementtext() {
		return $this->elementtext;
	}

	/**
	 * Sets the elementtext
	 *
	 * @param \string $elementtext
	 * @return void
	 */
	public function setElementtext($elementtext) {
		$this->elementtext = $elementtext;
	}

	/**
	 * Returns the image
	 *
	 * @return \string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the borderleft
	 *
	 * @return \string $borderleft
	 */
	public function getBorderleft() {
        $value=str_replace(' ', '',$this->borderleft);
        $einheit=mb_eregi_replace('[0-9]','',$value);
        if ($einheit=='') {
            $einheit='px';
            $borderleft=$this->borderleft.$einheit;
        } else {
            $borderleft=$this->borderleft;
        }

		return $borderleft;
	}

	/**
	 * Sets the borderleft
	 *
	 * @param \string $borderleft
	 * @return void
	 */
	public function setBorderleft($borderleft) {
		$this->borderleft = $borderleft;
	}

	/**
	 * Returns the bordertop
	 *
	 * @return \string $bordertop
	 */
	public function getBordertop() {
        $value=str_replace(' ', '',$this->bordertop);
        $einheit=mb_eregi_replace('[0-9]','',$value);
        if ($einheit=='') {
            $einheit='px';
            $bordertop=$this->bordertop.$einheit;
        } else {
            $bordertop=$this->bordertop;
        }
		return $bordertop;
	}

	/**
	 * Sets the bordertop
	 *
	 * @param \string $bordertop
	 * @return void
	 */
	public function setBordertop($bordertop) {
		$this->bordertop = $bordertop;
	}

	/**
	 * Returns the textcolor
	 *
	 * @return \string $textcolor
	 */
	public function getTextcolor() {
		return $this->textcolor;
	}

	/**
	 * Sets the textcolor
	 *
	 * @param \string $textcolor
	 * @return void
	 */
	public function setTextcolor($textcolor) {
		$this->textcolor = $textcolor;
	}

	/**
	 * Returns the slidedirin
	 *
	 * @return \integer $slidedirin
	 */
	public function getSlidedirin() {
		return $this->slidedirin;
	}

	/**
	 * Sets the slidedirin
	 *
	 * @param \integer $slidedirin
	 * @return void
	 */
	public function setSlidedirin($slidedirin) {
		$this->slidedirin = $slidedirin;
	}

	/**
	 * Returns the slidedirout
	 *
	 * @return \integer $slidedirout
	 */
	public function getSlidedirout() {
		return $this->slidedirout;
	}

	/**
	 * Sets the slidedirout
	 *
	 * @param \integer $slidedirout
	 * @return void
	 */
	public function setSlidedirout($slidedirout) {
		$this->slidedirout = $slidedirout;
	}

	/**
	 * Returns the durationin
	 *
	 * @return \integer $durationin
	 */
	public function getDurationin() {
		return $this->durationin;
	}

	/**
	 * Sets the durationin
	 *
	 * @param \integer $durationin
	 * @return void
	 */
	public function setDurationin($durationin) {
		$this->durationin = $durationin;
	}

	/**
	 * Returns the durationout
	 *
	 * @return \integer $durationout
	 */
	public function getDurationout() {
		return $this->durationout;
	}

	/**
	 * Sets the durationout
	 *
	 * @param \integer $durationout
	 * @return void
	 */
	public function setDurationout($durationout) {
		$this->durationout = $durationout;
	}

	/**
	 * Returns the delayin
	 *
	 * @return \integer $delayin
	 */
	public function getDelayin() {
		return $this->delayin;
	}

	/**
	 * Sets the delayin
	 *
	 * @param \integer $delayin
	 * @return void
	 */
	public function setDelayin($delayin) {
		$this->delayin = $delayin;
	}

	/**
	 * Returns the easingin
	 *
	 * @return \string $easingin
	 */
	public function getEasingin() {
		return $this->easingin;
	}

	/**
	 * Sets the easingin
	 *
	 * @param \string $easingin
	 * @return void
	 */
	public function setEasingin($easingin) {
		$this->easingin = $easingin;
	}

	/**
	 * Returns the texttag
	 *
	 * @return \string $texttag
	 */
	public function getTexttag() {
        return $this->texttag;
	}

	/**
	 * Sets the texttag
	 *
	 * @param \string $texttag
	 * @return void
	 */
	public function setTexttag($texttag) {
		$this->texttag = $texttag;
	}

    /**
     * Return the elements style-String
     *
     * @return \string $stylestring
     */
    public function getStylestring() {
        $mystring='';
        if ($this->bordertop!='') {
            $mystring=$mystring.' top: '.$this->bordertop.';';
        }
        if ($this->borderleft!='') {
            $mystring=$mystring.' left: '.$this->borderleft.';';
        }
        if ($this->elementtext!='') {
            if ($this->textwrap=='0') {
                $mystring=$mystring.' white-space: nowrap;';
            }
            if ($this->textcolor!='') {
                $mystring=$mystring.' '.$this->textcolor;
            }
        }
        return $mystring;
    }
    /**
     * Return the elements data-ls-String
     *
     * @return \string $datastring
     */
    public function getDatastring() {
        $mystring='';
        if ($this->parallax!='') {
            $mystring=$mystring.' parallaxlevel: '.$this->parallax.';';
        }
        if ($this->transformoriginout !='') {
            $mystring=$mystring.' transformoriginout: '.$this->transformoriginout.';';
        }
        if ($this->transformoriginin !='') {
            $mystring=$mystring.' transformoriginin: '.$this->transformoriginin.';';
        }
        if ($this->skewyout !='') {
            $mystring=$mystring.' skewyout: '.$this->skewyout.';';
        }
        if ($this->skewyin !='') {
            $mystring=$mystring.' skewyin: '.$this->skewyin.';';
        }
        if ($this->skewxout !='') {
            $mystring=$mystring.' skewxout: '.$this->skewxout.';';
        }
        if ($this->skewxin !='') {
            $mystring=$mystring.' skewxin: '.$this->skewxin.';';
        }
        if ($this->scaleyout !='') {
            $mystring=$mystring.' scaleyout: '.$this->scaleyout.';';
        }
        if ($this->scaleyin !='') {
            $mystring=$mystring.' scaleyin: '.$this->scaleyin.';';
        }
        if ($this->scalexout !='') {
            $mystring=$mystring.' scalexout: '.$this->scalexout.';';
        }
        if ($this->scalexin !='') {
            $mystring=$mystring.' scalexin: '.$this->scalexin.';';
        }
        if ($this->rotateyout !='') {
            $mystring=$mystring.' rotateyout: '.$this->rotateyout.';';
        }
        if ($this->rotateyin !='') {
            $mystring=$mystring.' rotateyin: '.$this->rotateyin.';';
        }
        if ($this->rotatexout !='') {
            $mystring=$mystring.' rotatexout: '.$this->rotatexout.';';
        }
        if ($this->rotatexin !='') {
            $mystring=$mystring.' rotatexin: '.$this->rotatexin.';';
        }
        if ($this->rotateout !='') {
            $mystring=$mystring.' rotateout: '.$this->rotateout.';';
        }
        if ($this->rotatein !='') {
            $mystring=$mystring.' rotatein: '.$this->rotatein.';';
        }
        if ($this->fadeout !='') {
            $mystring=$mystring.' fadeout: '.$this->fadeout.';';
        }
        if ($this->fadein !='') {
            $mystring=$mystring.' fadein: '.$this->fadein.';';
        }
        if ($this->easingout !='') {
            $mystring=$mystring.' easingout: '.$this->easingout.';';
        }
        if ($this->easingin !='') {
            $mystring=$mystring.' easingin: '.$this->easingin.';';
        }
        if ($this->durationout !='') {
            $mystring=$mystring.' durationout: '.$this->durationout.';';
        }
        if ($this->durationin !='') {
            $mystring=$mystring.' durationin: '.$this->durationin.';';
        }
        if ($this->showuntil !='') {
            $mystring=$mystring.' showuntil: '.$this->showuntil.';';
        }
        if ($this->delayin !='') {
            $mystring=$mystring.' delayin: '.$this->delayin.';';
        }
        if ($this->offsetyout !='') {
            $mystring=$mystring.' offsetyout: '.$this->offsetyout.';';
        }
        if ($this->offsetyin !='') {
            $mystring=$mystring.' offsetyin: '.$this->offsetyin.';';
        }
        if ($this->offsetxout !='') {
            $mystring=$mystring.' offsetxout: '.$this->offsetxout.';';
        }
        if ($this->offsetxin !='') {
            $mystring=$mystring.' offsetxin: '.$this->offsetxin.';';
        }
        return $mystring;
    }
    /**
     * Set the Elements data-ls-String
     *
     * @param \string $datastring
     * @return void
     */
    public function setDatastring($datastring) {
        $this->datastring = $datastring;
    }

    /**
     * Returns the Layerlink ID
     *
     * @return \integer $layerlink
     */
    public function getLayerlink() {
        return $this->layerlink;
    }

    /**
     * Set the Layerlink
     *
     * @param \integer $layerlink
     * @return void
     */
    public function setLayerlink($layerlink) {
        $this->layerlink=$layerlink;
    }

    /**
     * Returns the Linewrap-Flag
     *
     * @return \integer $textwrap
     */
    public function getTextwrap() {
        return $this->textwrap;
    }

    /**
     * Set the Linewrap-Flag
     *
     * @param \integer $textwrap
     * @return void
     */
    public function setTextwrap($textwrap) {
        $this->textwrap=$textwrap;
    }

    /**
     * Returns the imagelink
     *
     * @return \string $extlink
     */
    public function getExtlink() {
        return $this->extlink;
    }

    /**
     * Set the image-link
     *
     * @param \string $extlink
     * @return void
     */
    public function setExtlink($extlink) {
        $this->extlink=$extlink;
    }

    /**
     * Returns the imageheight
     *
     * @return \string $imgheight
     */
    public function getImgheight() {
        return $this->imgheight;
    }

    /**
     * Set the image-height
     *
     * @param \string $imgheight
     * @return void
     */
    public function setImgheight($imgheight) {
        $this->imgheight=$imgheight;
    }

    /**
     * Returns the imagewidth
     *
     * @return \string $imgwidht
     */
    public function getImgwidth() {
        return $this->imgwidth;
    }

    /**
     * Set the image-width
     *
     * @param \string $imgwidth
     * @return void
     */
    public function setImgwidth($imgwidth) {
        $this->imgwidth=$imgwidth;
    }

    /**
     * Returns the image style
     *
     * @return \string $imgstyle
     */
    public function getImgstyle() {
        $mystring='';
        if (strlen($this->imgstyle)>0) {
            $mystring = "style='".$this->imgstyle."' ";
        }

        return $mystring;
    }

    /** Set the image style string
     *
     * @param \string $imgstyle
     * @return void
     */
    public function setImgstyle() {
        $this->imgstyle=$imgstyle;
    }

    /** Returns the img Alt-Value
     *
     * @return \string $imgalt
     */
    public function getImgalt() {
        return $this->imgalt;
    }

    /** Sets the img Alt-Value
     *
     * @param \string $imgalt
     * @return void
     */
    public function setImgalt() {
        $this->imgalt=$imgalt;
    }

    /** Returns the Elements Sizestring
     *  Aufbereitung, fuer height und width erlaubt ist
     * Zahl
     * Zahl mit Einheit
     * 'auto'
     * Bei <=0 wird das Attribut ganz weggelassen.
     * auto wird beibehalten
     * Zahl bzw. Zahl mit Einheit wird in 'Zahl px' konvertiert
     *
     * @return \string $sizestring
     */
    public function getSizestring() {
        $mystring='';
        $einheith='';
        $einheitw='';
        if ($this->imgheight=='auto' ) {
            //nix
            $mystring=$mystring." height='auto'";
        } else {
            if ($this->imgheight<=0) {
                $mystring=$mystring." height='auto'";
            } else {
                preg_match('[^\d*]', $this->imgheight, $treffer);

                $mystring=$mystring." height='".$treffer[0]."px' ";
            }
        }
        if ($this->imgwidth=='auto' ) {
            $mystring=$mystring." width='auto'";
        } else {
            if ( $this->imgwidth<=0 ) {
                $mystring=$mystring." width='auto'";
            } else {
                preg_match('[^\d*]', $this->imgwidth, $treffer);

                $mystring=$mystring." width='".$treffer[0]."px' ";
            }
        }

        return $mystring;
    }

}
?>