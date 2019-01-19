<?php

namespace RauweBieten;

use Stringy\StaticStringy;

class TwigStringyExtension extends \Twig_Extension
{
    private static $methods = [
        'append',
        'at',
        'between',
        'camelize',
        'chars',
        'collapseWhitespace',
        'contains',
        'containsAll',
        'containsAny',
        'countSubstr',
        'dasherize',
        'delimit',
        'endsWith',
        'endsWithAny',
        'ensureLeft',
        'ensureRight',
        'first',
        'getEncoding',
        'hasLowerCase',
        'hasUpperCase',
        'htmlDecode',
        'htmlEncode',
        'humanize',
        'indexOf',
        'indexOfLast',
        'insert',
        'isAlpha',
        'isAlphanumeric',
        'isBase64',
        'isBlank',
        'isHexadecimal',
        'isJson',
        'isLowerCase',
        'isSerialized',
        'isUpperCase',
        'last',
        'length',
        'lines',
        'longestCommonPrefix',
        'longestCommonSuffix',
        'longestCommonSubstring',
        'lowerCaseFirst',
        'pad',
        'padBoth',
        'padLeft',
        'padRight',
        'prepend',
        'regexReplace',
        'removeLeft',
        'removeRight',
        'repeat',
        'replace',
        'reverse',
        'safeTruncate',
        'shuffle',
        'slugify',
        'slice',
        'split',
        'startsWith',
        'startsWithAny',
        'stripWhitespace',
        'substr',
        'surround',
        'swapCase',
        'tidy',
        'titleize',
        'toAscii',
        'toBoolean',
        'toLowerCase',
        'toSpaces',
        'toTabs',
        'toTitleCase',
        'toUpperCase',
        'trim',
        'trimLeft',
        'trimRight',
        'truncate',
        'underscored',
        'upperCamelize',
        'upperCaseFirst',
    ];

    private static $prefix = 'stringy_';

    public function getFilters()
    {
        return array_map(function ($method) {
            $filtername = StaticStringy::underscored(self::$prefix . $method);
            print '- ' . $filtername . PHP_EOL;
            return new \Twig_Filter($filtername, [StaticStringy::class, $method]);
        }, self::$methods);
    }
}
