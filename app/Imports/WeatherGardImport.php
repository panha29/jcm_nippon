<?php

namespace App\Imports;

use App\Models\WeatherGardModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WeatherGardImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new WeatherGardModel([
            'color_name'=>$row['color_name'],
            'color_tag'=>$row['color_tag'],
            'color_15l'=>$row['color_15l'],
            'color_5l'=>$row['color_5l'],
            'color_1l'=>$row['color_1l'],
            'color_image'=>$row['color_image']
        ]);
    }
}
