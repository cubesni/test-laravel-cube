<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Nette\Utils\Strings;

class UsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build($string, $subtitle, $data, $labels): \ArielMejiaDev\LarapexCharts\PieChart
    {

        return $this->chart->pieChart()
            ->setTitle($string)
            ->setSubtitle($subtitle)
            ->addData($data)
            ->setLabels($labels);
    }
}
