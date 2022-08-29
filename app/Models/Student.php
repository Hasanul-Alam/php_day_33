<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'       => 1,
                'name'     => 'Nishat',
                'email'    => 'nishatafifa@gmail.com',
                'mobile'   => '01797888924'
            ],
            1 => [
                'id'       => 2,
                'name'     => 'Hasanul',
                'email'    => 'hasanulalam0000@gmail.com',
                'mobile'   => '01518646197'
            ],
            2 => [
                'id'       => 3,
                'name'     => 'Toufick',
                'email'    => 'toufick@gmail.com',
                'mobile'   => '01789653965'
            ]
        ];
    }
}
