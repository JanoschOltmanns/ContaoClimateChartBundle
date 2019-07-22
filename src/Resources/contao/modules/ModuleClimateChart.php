<?php

namespace ContaoClimateChartBundle;

use JanoschOltmanns\ContaoClimateChartBundle\Controller\ClimateData;

class ModuleClimateChart extends \Contao\Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_climate_chart';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \Contao\BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . $GLOBALS['TL_LANG']['FMD']['climateChart'][0] . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}

	/**
	 * Generate the module
	 */
	protected function compile()
	{

	    $climateData = new ClimateData();
	    $climateData->setFromContaoModuleModel($this);

	    $this->Template->climateData = $climateData->getMonthlyData();
	    $this->Template->ordinateData = $climateData->getOrdinateEntries();
	    $this->Template->unit = $GLOBALS['climateChart']['unit'];

	}

}
