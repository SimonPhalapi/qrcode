<?php

namespace PhalApi\QrCode;

/**
 * 二维码别名引导文件
 */
// 1. 引入原生的 phpqrcode 库
require_once dirname(__FILE__) . '/phpqrcode/qrlib.php';

// 2. 建立全局类名到当前命名空间的映射
if (!class_exists('PhalApi\QrCode\QrCode', false)) {
    class_alias('QRcode', __NAMESPACE__ . '\\QrCode');
}
