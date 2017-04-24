<?php

namespace Front\Models;

use Illuminate\Database\Eloquent\Model;


class front extends Model {
    protected  $table = 'students';
    public $timestamps = false;
    protected $fillable = [
        'student_name' ,
        'student_description' ,
        'student_image' ,
    ];
    protected $primaryKey = 'student_id';
    
    public function showdata()
    {
        $show = self::get();
        return $show;
    }

}
