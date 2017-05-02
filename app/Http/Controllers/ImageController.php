<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    protected $canvasColor = "#cccccc";

    protected $font = "fonts/font-source-pro.otf";

    public function __construct()
    {

    }


    /**
     * @param $width
     * @param $height
     * @return mixed
     */
    public function canvas($width, $height)
    {
        return Image::cache(function($image) use ($width, $height) {
            $image->canvas($width, $height, $this->canvasColor)
                ->text($width.' x '.$height, $width/2, $height/2, function($font) use ($width) {
                    $font->file($this->font);
                    $font->size($width/12);
                    $font->color('#999');
                    $font->align('center');
                    $font->valign('center');
                });
        }, 30, true)->response('jpg');
    }


    /**
     * @param $width
     * @param $height
     * @param $color
     * @return mixed
     */
    public function canvasColor($width, $height, $color)
    {
        return Image::cache(function($image) use ($width, $height, $color) {
            $image->canvas($width, $height, $color)
                ->text($width.' x '.$height, $width/2, $height/2, function($font) use ($width) {
                    $font->file($this->font);
                    $font->size($width/12);
                    $font->color('#fff');
                    $font->align('center');
                    $font->valign('center');
                });
        }, 30, true)->response('jpg');
    }

}
