<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class FileMeta extends Model
{
    use HasFactory, Searchable;

    protected $table = "filemeta";

    protected $fillable = [
        'file_id', 'user_id	', 'meta_key','meta_value'
    ];

    protected $with = [
        'file:id,file_original_name,file_path,policy_no,file_type_id',
//        'type:id,file_type',
    ];

    public function file()
    {
        return $this->belongsTo('App\Models\File','id');
    }
//    public function type()
//    {
//        return $this->belongsTo('App\Models\FileType','file_type_id');
//    }


}
