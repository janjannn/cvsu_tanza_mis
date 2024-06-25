<?php
// File: app/Models/Feedback.php


namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'attending_staff',
        'date_of_request',
        'client_office',
        'concerned_office',
        'courtesy',
        'quality',
        'timeliness',
        'efficiency',
        'comments',
    ];
}
