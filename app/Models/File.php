<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class File extends Model
{
    use HasFactory, Searchable;

    protected $table = "files";

    protected $fillable = [
        'file_original_name', 'file_unique_name	', 'file_size','file_path','file_extension','policy_no','file_type_id',
    ];

    protected $with = [
        'type:id,file_type',
        'fileMeta:id,meta_key,meta_value',
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\FileType','file_type_id');
    }


    public function fileMeta()
    {
        return $this->hasMany('App\Models\FileMeta','file_id','id');
    }

//    public function toSearchableArray()
//    {
//        $files = $this->with('fileMeta')
//            ->get()
//            ->toArray();
//        return $files;
//    }
//
//    protected function makeAllSearchableUsing($query)
//    {
//        return $query->with('fileMeta');
//    }


}
