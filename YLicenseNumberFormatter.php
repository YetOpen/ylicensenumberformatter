<?php 

/**
 * YLicenseNumberFormatter: format a number with separator in order to improve readability
 *
 * @author Lorenzo Milesi <maxxer@yetopen.it>
 * @link http://www.yetopen.it/
 */

class YLicenseNumberFormatter extends CFormatter
{
    /**
     * Format a number to a license code (i.e. 12345678 -> 1234-5678)
     * @param string $val
     * @param string $separator The character separator (defaults to dash)
     * @param integer $digits Number of digits to group by
     * @return string Formatted $val
     */
    public function formatLicenseNumber($val, $separator = "-", $digits = 4)
    {
        return wordwrap($val,$digits,$separator,true);
    }
}