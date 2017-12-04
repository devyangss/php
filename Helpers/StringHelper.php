<?php

namespace php\helpers;

class StringHelper extends BaseStringHelper
{

    /**
     * 中文字符串长度
     * @param string $string
     */
    public static function chineseStrlen($string = '')
    {
		$ret = 0;
		if (empty($string)) {
			return $ret;
		}
        preg_match_all("/([\x{4e00}-\x{9fa5}])/u", $string, $match);
        
        return count($match[0]);
	}
}