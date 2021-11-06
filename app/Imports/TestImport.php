<?php

namespace App\Imports;

use App\Models\Testing;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TestImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Testing([
            'article_id' => session('article_id'),
            'savol'  => $row['savol'],
            'j1'  => $row['1'],
            'j2'  => $row['2'],
            'j3'  => $row['3'],
            'j4'  => $row['4'],
            'javob' => 'j'.$row['t_j']
        ]);
    }
}
