<?php

namespace PhalApi\QrCode;

/**
 * 生成二维码
 *
 * @see http://phpqrcode.sourceforge.net/
 * @author: dogstar 2017-11-21
 */

require_once dirname(__FILE__) . '/phpqrcode/qrlib.php';

class_alias('\QRcode', '\PhalApi\QrCode\QrCode');

class Lite
{
    public function png($text, $outfile = false, $level = 'L', $size = 3, $margin = 4, $saveandprint = false, $rawData = false)
    {
        return \QRcode::png($text, $outfile, $level, $size, $margin, $saveandprint, 0xFFFFFF, 0x000000, $rawData);
    }

    public function jpg($text, $outfile = false, $level = 'L', $size = 3, $margin = 4, $q = 85, $rawData = false)
    {
        return \QRcode::jpg($text, $outfile, $level, $size, $margin, $q, $rawData);
    }
}
