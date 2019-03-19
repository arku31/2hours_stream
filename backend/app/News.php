<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * @return mixed|string
     */
    public function getImage()
    {
        return $this->image ?? '';
    }
}
