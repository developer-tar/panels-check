<?php

namespace App;

trait ImageUploadTrait
{
    public function storeImage($image, string $folder = 'images')
    {

        if ($image->isValid()) {
            return $image->store($folder, 'public');
        }
    
        return null;
    }
}
