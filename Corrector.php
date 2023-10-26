<?php

namespace Acms\Custom;

/**
 * 拡張子だけ取得
 */
class Corrector
{
    public static function getext($txt, $args = array()) {
        $extention = pathinfo($txt, PATHINFO_EXTENSION);
        return $extention;
    }
}
