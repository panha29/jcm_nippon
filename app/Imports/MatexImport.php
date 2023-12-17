<?php

namespace App\Imports;

use App\Models\MatexModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatexImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MatexModel([
            'color_name'=>$row['color_name'],
            'color_tag'=>$row['color_tag'],
            'color_18l'=>$row['color_18l'],
            'color_5l'=>$row['color_5l'],
            'color_1l'=>$row['color_1l'],
            'color_image'=>$row['color_image']
        ]);
    }

}
