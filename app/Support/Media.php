<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;

class Media
{
    public static function store(UploadedFile $file): string
    {
        return 'storage/'.$file->store('brand', 'public');
    }
}
