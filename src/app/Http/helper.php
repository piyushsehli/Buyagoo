<?php
function getStorageUrl($path = null)
{
    if ($path) {
        $path = trim($path, '/');
        return url('') . '/src/storage/app/' . $path;
    }

    return url('') . '/src/storage/app';
}

function assetUrl($path = null)
{
    if ($path) {
        $path = trim($path, '/');
        return url('') . '/src/public/' . $path;
    }

    return url('') . '/src/public';
}

function storagePath($path=null){
    if($path){
        $path = trim($path, '/');
        return storage_path() . '/app/' . $path;
    }
    return storage_path() . '/app';
}

function active($path, $active = 'active'){
    return Request::is($path) ? $active : '';
}