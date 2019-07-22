<?php

namespace JanoschOltmanns\ContaoClimateChartBundle\Controller;

use \Contao\Date;

class ClimateData {

    protected $monthlyData = [
        'jan' => [],
        'feb' => [],
        'mar' => [],
        'apr' => [],
        'may' => [],
        'jun' => [],
        'jul' => [],
        'aug' => [],
        'sep' => [],
        'oct' => [],
        'nov' => [],
        'dec' => [],
    ];

    private $referenceValue = 50;

    public function __construct() {
        $this->monthlyData['jan']['date'] = new Date('01.01.2019', 'd.m.Y');
        $this->monthlyData['feb']['date'] = new Date('01.02.2019', 'd.m.Y');
        $this->monthlyData['mar']['date'] = new Date('01.03.2019', 'd.m.Y');
        $this->monthlyData['apr']['date'] = new Date('01.04.2019', 'd.m.Y');
        $this->monthlyData['may']['date'] = new Date('01.05.2019', 'd.m.Y');
        $this->monthlyData['jun']['date'] = new Date('01.06.2019', 'd.m.Y');
        $this->monthlyData['jul']['date'] = new Date('01.07.2019', 'd.m.Y');
        $this->monthlyData['aug']['date'] = new Date('01.08.2019', 'd.m.Y');
        $this->monthlyData['sep']['date'] = new Date('01.09.2019', 'd.m.Y');
        $this->monthlyData['oct']['date'] = new Date('01.10.2019', 'd.m.Y');
        $this->monthlyData['nov']['date'] = new Date('01.11.2019', 'd.m.Y');
        $this->monthlyData['dec']['date'] = new Date('01.12.2019', 'd.m.Y');
    }

    public function getMonthlyData() {

        return $this->monthlyData;

    }

    public function getReferenceValue() {

        return $this->referenceValue;

    }

    public function getOrdinateEntries() {

        $ordinateEntries = [];

        for ($step=0; $step<= $this->referenceValue; $step+=10) {
            $ordinateEntries[] = [
                'label' => $step . '' . $GLOBALS['climateChart']['unit'],
                'rel' => 100 - ($step / $this->referenceValue * 100),
                'abs' => $step
            ];
        }

        return $ordinateEntries;

    }

    public function setFromContaoModuleModel($model) {

        $this->monthlyData['jan']['abs'] = $model->climateChartJan ?: 0;
        $this->monthlyData['feb']['abs'] = $model->climateChartFeb ?: 0;
        $this->monthlyData['mar']['abs'] = $model->climateChartMar ?: 0;
        $this->monthlyData['apr']['abs'] = $model->climateChartApr ?: 0;
        $this->monthlyData['may']['abs'] = $model->climateChartMay ?: 0;
        $this->monthlyData['jun']['abs'] = $model->climateChartJun ?: 0;
        $this->monthlyData['jul']['abs'] = $model->climateChartJul ?: 0;
        $this->monthlyData['aug']['abs'] = $model->climateChartAug ?: 0;
        $this->monthlyData['sep']['abs'] = $model->climateChartSep ?: 0;
        $this->monthlyData['oct']['abs'] = $model->climateChartOct ?: 0;
        $this->monthlyData['nov']['abs'] = $model->climateChartNov ?: 0;
        $this->monthlyData['dec']['abs'] = $model->climateChartDec ?: 0;

        $this->calculateRelatives();

        $this->addUnits();

    }

    private function calculateRelatives() {

        foreach ($this->monthlyData as $monthKey=>$data) {
            $this->monthlyData[$monthKey]['rel'] = $data['abs'] / $this->referenceValue * 100;
        }

    }

    private function addUnits() {

        foreach ($this->monthlyData as $monthKey=>$data) {
            $this->monthlyData[$monthKey]['label'] = $data['abs'] . ' ' . $GLOBALS['climateChart']['unit'];
        }

    }

}
