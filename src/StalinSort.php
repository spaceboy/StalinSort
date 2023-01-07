<?php declare(strict_types = 1);

namespace Spaceboy\StalinSort;

/**
 * PHP library for single-pass sort (and reverse sort) in "Stalin standards" (all non-ordered items are eliminated).
 *
 * @author Spaceboy
 * @package Spaceboy\StalinSort
 */
class StalinSort {
    /**
     * Sorts array.
     *
     * @param array $arr
     *
     * @return void
     */
    public static function sort(array &$arr): void
    {
        $max = array_shift($arr);
        $out = array($max);
        foreach($arr AS $val) {
            if (!($max > $val)) {
                $out[] = $max = $val;
            }
        }
        $arr = $out;
    }

    /**
     * Sorts array in reverse order.
     *
     * @param array $arr
     *
     * @return void
     */
    public static function rsort(array &$arr): void
    {
        $min = array_shift($arr);
        $out = array($min);
        foreach($arr AS $val) {
            if (!($val > $min)) {
                $out[]  = $min  = $val;
            }
        }
        $arr = $out;
    }

    /**
     * Sorts array with index preserved.
     *
     * @param array $arr
     *
     * @return void
     */
    public static function isort(array &$arr): void
    {
        foreach ($arr AS $key => $val) {
            if (!isset($max)) {
                $max = $val;
            } else {
                if ($max > $val) {
                    unset($arr[$key]);
                } else {
                    $max = $val;
                }
            }
        }
    }

    /**
     * Sorts array in reverse order with index preserved.
     *
     * @param array $arr
     *
     * @return void
     */
    public static function irsort(array &$arr): void
    {
        foreach ($arr AS $key => $val) {
            if (!isset($min)) {
                $min = $val;
            } else {
                if ($val > $min) {
                    unset($arr[$key]);
                } else {
                    $min = $val;
                }
            }
        }
    }
}
