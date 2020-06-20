<?php


function get_languages(){
 return  \App\Models\Language::active()->Selection()->get();
}
function get_default_lang(){
 return   \Illuminate\Support\Facades\Config::get('app.locale');
}
function uploadImage($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'images/' . $folder . '/' . $filename;
    return $path;
}
