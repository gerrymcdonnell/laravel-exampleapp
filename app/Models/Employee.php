<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identifcation',
        'birth',
        'salary',
        'marital_status',
        'bonus',
        'order',
        'department_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'birth' => 'datetime',
        'salary' => 'integer',
        'bonus' => 'decimal:2',
        'order' => 'integer',
        'department_id' => 'integer',
    ];


    public function contactInfo()
    {
        return $this->hasOne(\App\Models\ContactInfo::class);
    }

    public function projects()
    {
        return $this->belongsToMany(\App\Models\Project::class);
    }

    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }
}
