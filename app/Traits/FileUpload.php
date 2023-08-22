<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
trait FileUpload
{
    public static  function UserFileUpload($file) // Taking input image as parameter
    {
        $file_original_name = $file->getClientOriginalName();
        $file_unique_name =  Str::random(20).time() . $file->getClientOriginalName();
        $file_extension = $file->getClientOriginalExtension();
        $file_size = $file->getSize()/1024;
        $save_img = $file->move(storage_path('app/public/NSID/Files-'.auth()->user()->id.'/'), $file_unique_name);
        if($save_img) {
            $file_path = 'NSID/Files-' . auth()->user()->id . '/' . $file_unique_name;
            $arr = [
               'file_original_name' => $file_original_name,
               'file_unique_name' => $file_unique_name,
               'file_extension' => $file_extension,
               'file_size' => $file_size,
               'file_path' => $file_path,
            ];
            return $arr;
        }
        return null;
    }
}
