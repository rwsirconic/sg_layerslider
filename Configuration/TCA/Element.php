<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_sglayerslider_domain_model_element'] = array(
	'ctrl' => $TCA['tx_sglayerslider_domain_model_element']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, elementtext, image, medialink, mediatype, borderleft, bordertop, elementhight, textcolor, slidedirin, slidedirout, durationin, easingin, easingout, delayin',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.textcol;textcol, image,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.media;media,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.border;border, elementhight,
		                --div--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.effekt;;;1-1-1,delayin,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.duration;duration,showuntil,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.fadeing;fadeing,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.easing;easing,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.rotate;rotate,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.scaling;scaling,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.skewing;skewing,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.transform;transform,
		                --div--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.position;;;1-1-1,
		                --palette--;LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.header.offset;offset,parallax,
		                --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
        'easing' => array('showitem'=>'easingin,easingout','canNotCollapse'=> 1),
        'border' => array('showitem'=>'borderleft,bordertop','canNotCollapse'=> 1),
        'media' => array('showitem'=>'medialink,mediatype','canNotCollapse'=> 1),
        'duration' => array('showitem'=>'durationin,durationout','canNotCollapse'=> 1),
        'offset' => array('showitem'=>'offsetxin,offsetyin,--linebreak--,offsetxout,offsetyout','canNotCollapse'=> 1),
        'textcol' => array('showitem'=>'elementtext,textcolor','canNotCollapse'=> 1),
        'fadeing' => array('showitem'=>'fadein,fadeout','canNotCollapse'=> 1),
        'rotate' => array('showitem'=>'rotatein,rotateout,--linebreak--,rotatexin,rotateyin,--linebreak--,rotatexout,rotateyout','canNotCollapse'=> 1),
        'scaling' => array('showitem'=>'scalexin,scalexout,--linebreak--,scaleyin,scaleyout','canNotCollapse'=> 1),
        'skewing' => array('showitem'=>'skewxin,skewyin,--linebreak--,skewxout,skewyout','canNotCollapse'=>1),
        'transform' => array('showitem'=>'transformoriginin,transformoriginout','canNotCollapse'=>1),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_sglayerslider_domain_model_element',
				'foreign_table_where' => 'AND tx_sglayerslider_domain_model_element.pid=###CURRENT_PID### AND tx_sglayerslider_domain_model_element.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'elementtext' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.elementtext',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'transformoriginin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.transformoriginin',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
                'default' => '50% 50% 0',
			),
		),
		'transformoriginout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.transformoriginout',
			'config' => array(
				'type' => 'input',
				'size' => 30,
                'eval' => 'trim',
                'default' => '50% 50% 0',
			),
		),
		'offsetxin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.offsetxin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default' => '80',
				'eval' => 'trim'
			),
		),
		'offsetxout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.offsetxout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default' => '0',
				'eval' => 'trim'
			),
		),
		'offsetyin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.offsetyin',
			'config' => array(
				'type' => 'input',
                'default' => '-80',
				'size' => 6,
				'eval' => 'trim'
			),
		),
		'offsetyout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.offsetyout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default' => '0',
                'eval' => 'trim'
			),
		),
		'rotatein' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.rotatein',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int'
			),
		),
		'rotateout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.rotateout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int'
			),
		),
		'rotatexin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.rotatexin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int'
			),
		),
		'rotatexout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.rotatexout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int'
			),
		),
		'rotateyin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.rotateyin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int'
			),
		),
		'rotateyout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.rotateyout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int'
			),
		),
		'scalexin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.scalexin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>1,
				'eval' => 'int'
			),
		),
		'scalexout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.scalexout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'1',
				'eval' => 'int'
			),
		),
		'scaleyin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.scaleyin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'1',
				'eval' => 'int'
			),
		),
		'scaleyout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.scaleyout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'1',
				'eval' => 'int'
			),
		),
		'skewxin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.skewxin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int',
			),
		),
		'skewxout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.skewxout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int',
			),
		),
		'skewyin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.skewyin',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int',
			),
		),
		'skewyout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.skewyout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int',
			),
		),
		'parallax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.parallax',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default'=>'0',
				'eval' => 'int',
			),
		),
        'fadein' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.fadein',
            'config' => array(
                'type' => 'check',
                'default' => '1'
            ),
        ),
        'fadeout' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.fadeout',
            'config' => array(
                'type' => 'check',
                'default' => '1',
            ),
        ),
		'medialink' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.medialink',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
        'mediatype' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.mediatype',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('--keine Medien --',0),
                    array('Youtube',1),
                    array('Video (opt. selfhosted)',2),
                    array('Audio (opt. selfhosted)',3),
                ),
            ),
        ),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_sglayerslider',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
        'easingin' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easingin',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.linear',
                        'linear',
                        'EXT:sg_layerslider/Resources/Public/Icons/linear.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInSine',
                        'easeInSine',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInSine.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutSine',
                        'easeOutSine',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutSine.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutSine',
                        'easeInOutSine',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutSine.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInQuad',
                        'easeInQuad',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInQuad.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutQuad',
                        'easeOutQuad',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutQuad.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutQuad',
                        'easeInOutQuad',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutQuad.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInCubic',
                        'easeInCubic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInCubic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutCubic',
                        'easeOutCubic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutCubic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutCubic',
                        'easeInOutCubic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutCubic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInQuart',
                        'easeInQuart',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInQuart.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutQuart',
                        'easeOutQuart',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutQuart.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutQuart',
                        'easeInOutQuart',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutQuart.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInQuint',
                        'easeInQuint',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInQuint.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutQuint',
                        'easeOutQuint',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutQuint.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutQuint',
                        'easeInOutQuint',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutQuint.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInExpo',
                        'easeInExpo',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInExpo.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutExpo',
                        'easeOutExpo',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutExpo.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutExpo',
                        'easeInOutExpo',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutExpo.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInCirc',
                        'easeInCirc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInCirc.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutCirc',
                        'easeOutCirc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutCirc.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutCirc',
                        'easeInOutCirc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutCirc.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInBack',
                        'easeInBack',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInBack.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutBack',
                        'easeOutBack',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutBack.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutBack',
                        'easeInOutBack',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutBack.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInElastic',
                        'easeInElastic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInElastic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutElasitc',
                        'easeOutElasitc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutElastic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutElastic',
                        'easeInOutElastic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutElastic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInBounce',
                        'easeInBounce',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInBounce.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutBounce',
                        'easeOutBounce',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutBounce.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutBounce',
                        'easeInOutBounce',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutBounce.gif'
                    ),

                ),
                'selicon_cols' => 6,
                'default' => 'easeInOutQuint',
                'iconsInOptionTags' => 1
            )
        ),
        'easingout' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easingout',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.linear',
                        'linear',
                        'EXT:sg_layerslider/Resources/Public/Icons/linear.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInSine',
                        'easeInSine',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInSine.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutSine',
                        'easeOutSine',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutSine.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutSine',
                        'easeInOutSine',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutSine.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInQuad',
                        'easeInQuad',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInQuad.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutQuad',
                        'easeOutQuad',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutQuad.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutQuad',
                        'easeInOutQuad',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutQuad.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInCubic',
                        'easeInCubic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInCubic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutCubic',
                        'easeOutCubic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutCubic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutCubic',
                        'easeInOutCubic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutCubic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInQuart',
                        'easeInQuart',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInQuart.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutQuart',
                        'easeOutQuart',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutQuart.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutQuart',
                        'easeInOutQuart',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutQuart.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInQuint',
                        'easeInQuint',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInQuint.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutQuint',
                        'easeOutQuint',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutQuint.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutQuint',
                        'easeInOutQuint',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutQuint.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInExpo',
                        'easeInExpo',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInExpo.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutExpo',
                        'easeOutExpo',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutExpo.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutExpo',
                        'easeInOutExpo',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutExpo.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInCirc',
                        'easeInCirc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInCirc.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutCirc',
                        'easeOutCirc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutCirc.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutCirc',
                        'easeInOutCirc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutCirc.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInBack',
                        'easeInBack',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInBack.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutBack',
                        'easeOutBack',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutBack.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutBack',
                        'easeInOutBack',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutBack.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInElastic',
                        'easeInElastic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInElastic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutElasitc',
                        'easeOutElasitc',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutElastic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutElastic',
                        'easeInOutElastic',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutElastic.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInBounce',
                        'easeInBounce',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInBounce.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeOutBounce',
                        'easeOutBounce',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeOutBounce.gif'
                    ),
                    array(
                        'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.easing.easeInOutBounce',
                        'easeInOutBounce',
                        'EXT:sg_layerslider/Resources/Public/Icons/easeInOutBounce.gif'
                    ),

                ),
                'selicon_cols' => 6,
                'default' => 'easeInOutQuint',
                'iconsInOptionTags' => 1
            )
        ),
		'borderleft' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.borderleft',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'bordertop' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.bordertop',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'elementhight' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.elementhight',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'textcolor' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.textcolor',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'showuntil' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.showuntil',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'int'
			),
		),
		'slidedirout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.slidedirout',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'durationin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.durationin',
			'config' => array(
				'type' => 'input',
                'default' => 1000,
				'size' => 6,
				'eval' => 'int'
			),
		),
		'durationout' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.durationout',
			'config' => array(
				'type' => 'input',
				'size' => 6,
                'default' => 1000,
				'eval' => 'int'
			),
		),
		'delayin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sg_layerslider/Resources/Private/Language/locallang_db.xlf:tx_sglayerslider_domain_model_element.delayin',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'layer' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>