<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectReferenceModel extends Model
{
    use HasFactory;
    protected $table = 'project_reference';
    protected $fillable = [
        'project_reference_name',
        'project_reference_startDate',
        'project_reference_endDate',
        'project_reference_image1',
        'project_reference_image2',
        'project_reference_image3',
        'project_reference_image4',
        'project_reference_exterior',
        'project_reference_interior',
        'project_reference_area',
    ];
}
