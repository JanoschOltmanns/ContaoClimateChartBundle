<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['climateChart'] = '{title_legend},name,headline,type;{config_legend},climateChartJan,climateChartFeb,climateChartMar,climateChartApr,climateChartMay,climateChartJun,climateChartJul,climateChartAug,climateChartSep,climateChartOct,climateChartNov,climateChartDec;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';


$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartJan'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartJan'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartFeb'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartFeb'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartMar'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartMar'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartApr'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartApr'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartMay'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartMay'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartJun'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartJun'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartJul'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartJul'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartAug'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartAug'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartSep'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartSep'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartOct'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartOct'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartNov'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartNov'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
$GLOBALS['TL_DCA']['tl_module']['fields']['climateChartDec'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['climateChartDec'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default 0"
];
