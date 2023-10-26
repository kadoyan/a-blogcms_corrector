<?php

namespace Acms\Custom;

class Corrector
{
    /**
     * 拡張子だけ取得
     */
    public static function getext($txt, $args = array()) {
        $extention = pathinfo($txt, PATHINFO_EXTENSION);
        return $extention;
    }
    /**
     * ファイル名だけ取得
     */
    public static function getfilename($txt, $args = array()) {
        $extention = pathinfo($txt, PATHINFO_FILENAME);
        return $extention;
    }
}
