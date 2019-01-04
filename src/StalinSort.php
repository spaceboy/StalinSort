<?php
/**
 * @description PHP library for single-pass sort (and reverse sort) in "Stalin standards" (all non-ordered items are eliminated).
 * @author Spaceboy
 */

namespace Spaceboy\StalinSort;

class StalinSort {

    /**
     * Sorts array
     * @param array $arr
     * @return boolean
     */
    public static function sort(&$arr)
    {
        $max    = array_shift($arr);
        $out    = array($max);
        foreach($arr AS $val) {
            if (!($max > $val)) {
                $out[]  = $max  = $val;
            }
        }
        $arr    = $out;
        return TRUE;
    }

    /**
     * Sorts array in reverse order
     * @param array $arr
     * @return boolean
     */
    public static function rsort(&$arr)
    {
        $min    = array_shift($arr);
        $out    = array($min);
        foreach($arr AS $val) {
            if (!($val > $min)) {
                $out[]  = $min  = $val;
            }
        }
        $arr    = $out;
        return TRUE;
    }

    /**
     * Sorts array with index preserved
     * @param array $arr
     * @return boolean
     */
    public static function isort(&$arr)
    {
        foreach ($arr AS $key => $val) {
            if (!isset($max)) {
                $max    = $val;
            } else {
                if ($max > $val) {
                    unset($arr[$key]);
                } else {
                    $max    = $val;
                }
            }
        }
        return TRUE;
    }

    /**
     * Sorts array recursively with index preserved
     * @param array $arr
     * @return boolean
     */
    public static function irsort(&$arr)
    {
        foreach ($arr AS $key => $val) {
            if (!isset($min)) {
                $min    = $val;
            } else {
                if ($val > $min) {
                    unset($arr[$key]);
                } else {
                    $min    = $val;
                }
            }
        }
        return TRUE;
    }

}
