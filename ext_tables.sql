#
# Table structure for table 'tx_sglayerslider_domain_model_slider'
#
CREATE TABLE tx_sglayerslider_domain_model_slider (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,
	layers int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_sglayerslider_domain_model_layer'
#
CREATE TABLE tx_sglayerslider_domain_model_layer (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	slider int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	elements int(11) unsigned DEFAULT '0' NOT NULL,
  slidedelay int(11) DEFAULT '0' NOT NULL,
  transition2d varchar(255) DEFAULT '' NOT NULL,
  transition3d varchar(255) DEFAULT '' NOT NULL,
  timeshift int(11) DEFAULT '0' NOT NULL,
  deeplink varchar(255) DEFAULT '' NOT NULL,
  extlink varchar(255)  DEFAULT '' NOT NULL,
  bgimage text NOT NULL,
  thumbnail text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_sglayerslider_domain_model_element'
#
CREATE TABLE tx_sglayerslider_domain_model_element (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	layer int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	elementtext varchar(255) DEFAULT '' NOT NULL,
	image text NOT NULL,
  imgwidth varchar(11) DEFAULT 'auto' NOT NULL,
  imgheight varchar(11) DEFAULT 'auto' NOT NULL,
  imgstyle varchar(255) default NULL,
  imgalt varchar(255) default NULL,
	borderleft varchar(255) DEFAULT '0' NOT NULL,
	bordertop varchar(255) DEFAULT '0' NOT NULL,
	textcolor varchar(255) DEFAULT '' NOT NULL,
  texttag varchar(255) DEFAULT '' NOT NULL,
  textwrap tinyint(4) unsigned DEFAULT '0' NOT NULL,
  extlink varchar(255) DEFAULT '' NOT NULL,
  layerlink tinyint(4) unsigned DEFAULT '0' NOT NULL,
	slidedirin int(11) DEFAULT '0' NOT NULL,
	slidedirout int(11) DEFAULT '0' NOT NULL,
	durationin int(11) DEFAULT '0' NOT NULL,
	durationout int(11) DEFAULT '0' NOT NULL,
	delayin int(11) DEFAULT '0' NOT NULL,
	showuntil int(11) DEFAULT '0' NOT NULL,
	offsetxin varchar(255) DEFAULT '' NOT NULL,
	offsetxout varchar(255) DEFAULT '' NOT NULL,
	offsetyin varchar(255) DEFAULT '' NOT NULL,
	offsetyout varchar(255) DEFAULT '' NOT NULL,
	fadein int(11) DEFAULT '0' NOT NULL,
	fadeout int(11) DEFAULT '0' NOT NULL,
	rotatein int(11) DEFAULT '0' NOT NULL,
	rotateout int(11) DEFAULT '0' NOT NULL,
	rotatexin int(11) DEFAULT '0' NOT NULL,
	rotatexout int(11) DEFAULT '0' NOT NULL,
	rotateyin int(11) DEFAULT '0' NOT NULL,
	rotateyout int(11) DEFAULT '0' NOT NULL,
	scalexin decimal(4,2) DEFAULT '1.00' NOT NULL,
	scalexout decimal(4,2) DEFAULT '1.00' NOT NULL,
	scaleyin decimal(4,2) DEFAULT '1.00' NOT NULL,
	scaleyout decimal(4,2) DEFAULT '1.00' NOT NULL,
	skewxin int(11) DEFAULT '0' NOT NULL,
	skewxout int(11) DEFAULT '0' NOT NULL,
	skewyin int(11) DEFAULT '0' NOT NULL,
	skewyout int(11) DEFAULT '0' NOT NULL,
	parallax int(11) DEFAULT '0' NOT NULL,
	transformoriginin varchar(255) DEFAULT '' NOT NULL,
	transformoriginout varchar(255) DEFAULT '' NOT NULL,
	easingin varchar(255) DEFAULT '' NOT NULL,
	easingout varchar(255) DEFAULT '' NOT NULL,
	medialink varchar(255) DEFAULT '' NOT NULL,
	mediatype int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);


