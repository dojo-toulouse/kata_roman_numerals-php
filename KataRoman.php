<?php

class KataRoman {

    static private $_units = array(
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I',
    );

    public static function convert($arabianNumber) {
        $romanNumber = '';
        foreach (self::$_units as $arabian => $roman) {
            while ($arabianNumber >= $arabian) {
                $arabianNumber -= $arabian;
                $romanNumber .= $roman;
            }
        }
        return $romanNumber;
    }

}