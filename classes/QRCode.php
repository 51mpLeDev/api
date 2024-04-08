<?php

namespace Firdavs\Api\Classes;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode as qr_code;
use Endroid\QrCode\Writer\PngWriter;

class QRCode
{
    protected $size;
    protected $margin;
    protected $encoding;
    protected $backgroung;

    public function __construct($size = 300, $margin = 10, $encoding = 'UTF-8', $background = '#FFF')
    {
        $this->size = $size;
        $this->margin = $$margin;
        $this->encoding = $encoding;
        $this->backgroung = $background;
    }

    public function create(string $data, string $path, string $image_name)
    {
        $qr_code = qr_code::create($data)
            ->setSize($this->size)
            ->setMargin($this->margin)
            ->setEncoding($this->encoding)
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $label = Label::create('Label')
            ->setTextColor(new Color(255, 0, 0));

        $wirter = new PngWriter();
        $result = $wirter->write($qr_code);
        $result->saveToFile("{$path}/{$image_name}");
    }
}
