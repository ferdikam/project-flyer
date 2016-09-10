<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Photo extends Model
{
    protected $table = 'flyer_photos';

    protected $fillable = ['path'];

    protected $baseDir = 'flyers/photos';

    public static function fromForm(UploadedFile $file)
    {
        $photo = new static;

        $name = time() . $file->getClientOriginalName();

        $photo->path = $photo->baseDir . '/' . $name;

        $file->storePubliclyAs($photo->baseDir, $name, 'public_path');

        return $photo;
    }

    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }
}
