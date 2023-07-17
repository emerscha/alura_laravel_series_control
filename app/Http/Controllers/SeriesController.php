<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listSeries() {
        $series = [
            'The Witcher',
            'Brooklin 99',
            'The Legend of Vox Machina'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
