<?php

namespace Firdavs\Api\Classes;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode as qr_code;
use Endroid\QrCode\Writer\PngWriter;

class QRCode
{
    protected $size;
    protected $margin;
    protected $encoding;
    protected $backgroung;

    public function __construct($size = 300, $margin = 10, Encoding $encoding = null, $background = '#FFF')
    {
        $this->size = $size;
        $this->margin = $margin;
        if ($encoding){
            $this->encoding = $encoding;
        }else{
            $this->encoding = new Encoding('UTF-8');
        }
        $this->backgroung = $background;
    }

    public function create(string $data, string $path, string $image_name, string|null $label)
    {
        $qr_code = qr_code::create($data)
            ->setSize($this->size)
            ->setMargin($this->margin)
            ->setEncoding($this->encoding)
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $logo = Logo::create(asset('/assets/media/uploads/ClonGarson.jpg'))
            ->setResizeToWidth(50)
            ->setPunchoutBackground(true);

        $label = Label::create($label ?? '')
            ->setTextColor(new Color(255, 0, 0));

        $wirter = new PngWriter();
        $result = $wirter->write($qr_code, $logo, $label);
        $result->saveToFile("{$path}/{$image_name}");
    }
}
