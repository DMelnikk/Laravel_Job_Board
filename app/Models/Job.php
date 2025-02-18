<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    protected $table = 'offered_jobs';

    public static array $experience = [
        'Junior',
        'Mid',
        'Senior',
    ];

    public static array $category = [
        'IT',
        'Accounting',
        'Marketing',
        'Sales',
        'HR',
        'Finance'
    ];

}
