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
     * ディレクトリーを含むパス文字列からファイル名だけ取得
     */
    public static function getfilename($txt, $args = array()) {
        $extention = pathinfo($txt, PATHINFO_FILENAME);
        return $extention;
    }
    /**
     * 指定した文字で文字列を分割して、指定した位置（数字で指定）、もしくは最後（lと指定）の要素を取得
     */
    public static function exsplit($txt, $args = array()) {
        $separator = isset($args[0]) ? $args[0] : null;
        $index = isset($args[1]) ? $args[1] : null;
        $splitArray = explode($separator, $txt);
        $value = "";
        if ($index === "l") {
            $value = end($splitArray);
        } else {
            $value = $splitArray[(int)$index];
        }
        return $value;
    }
    /**
     * 日付から曜日を取得
     */
    public static function getDay($txt, $args = array()) {
        try {
            $date = new DateTime($txt);
            // 曜日を取得
            return $date->format('l');
        } catch (Exception $e) {
            return null;
        }
    }
}
