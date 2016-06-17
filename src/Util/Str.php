<?php

namespace Sijad\Persian\Util;

class Str
{
    protected static $charMap = array (
        '©' => '(c)',
        'ь' => '-', 'ъ' => '-', 'Ь' => '-', 'Ъ' => '-',
        '۰' => '0',
        '۱' => '1',
        '۲' => '2',
        'ξ' => '3', 'Ξ' => '3', '۳' => '3',
        '۴' => '4',
        '۵' => '5',
        '۶' => '6',
        '۷' => '7',
        'Θ' => '8', 'θ' => '8', '۸' => '8',
        '۹' => '9',
        'Ă' => 'A', 'Ά' => 'A', 'Á' => 'A', 'Ą' => 'A', 'À' => 'A', 'Α' => 'A', 'Ǎ' => 'A', 'Â' => 'A', 'Ǻ' => 'A', 'Ã' => 'A', 'Å' => 'A', 'Æ' => 'A',
        'Ǽ' => 'AE', 'Ä' => 'Ae',
        'Β' => 'B', 'Þ' => 'B',
        'Ç' => 'C', 'ץ' => 'C', 'Ć' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C',
        'Д' => 'D', 'Ð' => 'D', 'Đ' => 'D', 'Δ' => 'D',
        'Έ' => 'E', 'É' => 'E', 'Ę' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ë' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ε' => 'E',
        'Φ' => 'F',
        'Γ' => 'G', 'Ğ' => 'G', 'Ĝ' => 'G', 'Ġ' => 'G',
        'Ħ' => 'H', 'Η' => 'H', 'Ή' => 'H', 'Ĥ' => 'H',
        'Ĭ' => 'I', 'İ' => 'I', 'Ί' => 'I', 'Ĩ' => 'I', 'Ϊ' => 'I', 'Ǐ' => 'I', 'Į' => 'I', 'Ι' => 'I', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ĳ' => 'IJ',
        'Ĵ' => 'J',
        'Κ' => 'K',
        'Ŀ' => 'L', 'Ł' => 'L', 'Ľ' => 'L', 'Ĺ' => 'L', 'Λ' => 'L',
        'Μ' => 'M', 'Ñ' => 'N', 'Ń' => 'N', 'Ν' => 'N',
        'Ǒ' => 'O', 'Ǿ' => 'O', 'Ό' => 'O', 'Ō' => 'O', 'Ο' => 'O', 'Ø' => 'O', 'Ŏ' => 'O', 'Ò' => 'O', 'Ó' => 'O', 'Ơ' => 'O', 'Ô' => 'O', 'Õ' => 'O',
        'Œ' => 'OE', 'Ö' => 'Oe',
        'Π' => 'P',
        'Ψ' => 'PS',
        'Ŕ' => 'R', 'Ρ' => 'R', 'Ŗ' => 'R',
        'Ŝ' => 'S', 'Ş' => 'S', 'Ś' => 'S', 'Š' => 'S', 'Σ' => 'S', 'Ș' => 'S',
        'Ŧ' => 'T', 'Τ' => 'T', 'Ț' => 'T', 'Ţ' => 'T',
        'Ǚ' => 'U', 'Û' => 'U', 'Ú' => 'U', 'Ù' => 'U', 'Ǘ' => 'U', 'Ũ' => 'U', 'Ư' => 'U', 'Ǔ' => 'U', 'Ǖ' => 'U', 'Ų' => 'U', 'Ŭ' => 'U', 'Ǜ' => 'U',
        'Ü' => 'Ue',
        'Ŵ' => 'W', 'Ω' => 'W', 'Ώ' => 'W',
        'Χ' => 'X',
        'Ý' => 'Y', 'Υ' => 'Y', 'Ÿ' => 'Y', 'Ϋ' => 'Y', 'Ŷ' => 'Y', 'Ύ' => 'Y',
        'Ž' => 'Z', 'Ż' => 'Z', 'Ζ' => 'Z', 'Ź' => 'Z',
        'á' => 'a', 'à' => 'a', 'ą' => 'a', 'â' => 'a', 'ã' => 'a', 'א' => 'a', 'Ā' => 'a', 'α' => 'a', 'ǎ' => 'a', 'ă' => 'a', 'ª' => 'a', 'а' => 'a', 'ā' => 'a', 'ǻ' => 'a', 'å' => 'a', 'ά' => 'a', 'А' => 'a',
        'ä' => 'ae', 'æ' => 'ae', 'ǽ' => 'ae',
        'ב' => 'b', 'β' => 'b', 'þ' => 'b', 'б' => 'b', 'Б' => 'b',
        'ц' => 'c', 'ć' => 'c', 'ċ' => 'c', 'č' => 'c', 'Ц' => 'c', 'ç' => 'c', 'ĉ' => 'c', 'צ' => 'c', 'Č' => 'c',
        'ч' => 'ch', 'Ч' => 'ch',
        'đ' => 'd', 'ď' => 'd', 'δ' => 'd', 'ð' => 'd', 'ד' => 'd', 'Ď' => 'd', 'д' => 'd',
        'έ' => 'e', 'Ě' => 'e', 'ε' => 'e', 'е' => 'e', 'ě' => 'e', 'ע' => 'e', 'ë' => 'e', 'ē' => 'e', 'Є' => 'e', 'Ē' => 'e', 'Е' => 'e', 'ę' => 'e', 'ê' => 'e', 'é' => 'e', 'Ə' => 'e', 'è' => 'e', 'ĕ' => 'e', 'ė' => 'e', 'ə' => 'e', 'є' => 'e',
        'ƒ' => 'f', 'φ' => 'f', 'Ф' => 'f', 'ф' => 'f',
        'ג' => 'g', 'ĝ' => 'g', 'Ģ' => 'g', 'г' => 'g', 'Ґ' => 'g', 'ģ' => 'g', 'ґ' => 'g', 'Г' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'γ' => 'g',
        'ĥ' => 'h', 'ה' => 'h', 'ή' => 'h', 'η' => 'h', 'ח' => 'h', 'х' => 'h', 'ħ' => 'h', 'Х' => 'h',
        'ī' => 'i', 'ι' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ĩ' => 'i', 'ĭ' => 'i', 'И' => 'i', 'Ī' => 'i', 'ı' => 'i', 'ï' => 'i', 'и' => 'i', 'ǐ' => 'i', 'į' => 'i', 'י' => 'i', 'ΐ' => 'i', 'ϊ' => 'i', 'ї' => 'i', 'і' => 'i', 'ί' => 'i', 'Ї' => 'i', 'І' => 'i',
        'ĳ' => 'ij',
        'й' => 'j', 'ĵ' => 'j', 'Й' => 'j',
        'я' => 'ja', 'Я' => 'ja',
        'Э' => 'je', 'э' => 'je',
        'ё' => 'jo', 'Ё' => 'jo',
        'Ю' => 'ju', 'ю' => 'ju',
        'ķ' => 'k', 'К' => 'k', 'Ķ' => 'k', 'ĸ' => 'k', 'כ' => 'k', 'ך' => 'k', 'κ' => 'k', 'к' => 'k',
        'Ļ' => 'l', 'ļ' => 'l', 'ł' => 'l', 'ŀ' => 'l', 'ĺ' => 'l', 'Л' => 'l', 'λ' => 'l', 'ל' => 'l', 'ľ' => 'l', 'л' => 'l',
        'μ' => 'm', 'מ' => 'm', 'м' => 'm', 'ם' => 'm', 'М' => 'm',
        'ן' => 'n', 'н' => 'n', 'ņ' => 'n', 'Н' => 'n', 'Ň' => 'n', 'נ' => 'n', 'Ŋ' => 'n', 'ν' => 'n', 'ń' => 'n', 'ň' => 'n', 'ŋ' => 'n', 'Ņ' => 'n', 'ñ' => 'n', 'ŉ' => 'n',
        'ǿ' => 'o', 'ơ' => 'o', 'ǒ' => 'o', 'ŏ' => 'o', 'ō' => 'o', 'º' => 'o', 'õ' => 'o', 'о' => 'o', 'ô' => 'o', 'ό' => 'o', 'ó' => 'o', 'ő' => 'o', 'ø' => 'o', 'ò' => 'o', 'ο' => 'o', 'О' => 'o', 'Ő' => 'o',
        'ö' => 'oe', 'œ' => 'oe',
        'П' => 'p', 'π' => 'p', 'פ' => 'p', 'ף' => 'p', 'п' => 'p',
        'ψ' => 'ps',
        'ק' => 'q',
        'Р' => 'r', 'ρ' => 'r', 'ŕ' => 'r', 'р' => 'r', 'ŗ' => 'r', 'ר' => 'r', 'Ř' => 'r', 'ř' => 'r',
        'ş' => 's', 'ς' => 's', 'ס' => 's', 'ŝ' => 's', 'σ' => 's', 'ș' => 's', 'ſ' => 's', 'с' => 's', 'ś' => 's', 'С' => 's', 'š' => 's',
        'щ' => 'sch', 'Щ' => 'sch',
        'Ш' => 'sh', 'ш' => 'sh',
        'ß' => 'ss',
        'ŧ' => 't', 'ט' => 't', 'ť' => 't', 'Ť' => 't', 'ț' => 't', 'ת' => 't', 'т' => 't', 'ţ' => 't', 'Т' => 't', 'τ' => 't',
        '™' => 'tm',
        'ŭ' => 'u', 'Ű' => 'u', 'û' => 'u', 'ǔ' => 'u', 'ú' => 'u', 'ǚ' => 'u', 'ù' => 'u', 'ǜ' => 'u', 'ű' => 'u', 'ǖ' => 'u', 'ǘ' => 'u', 'ų' => 'u', 'ū' => 'u', 'ư' => 'u', 'ũ' => 'u', 'ů' => 'u', 'У' => 'u', 'Ů' => 'u', 'Ū' => 'u', 'у' => 'u',
        'ü' => 'ue',
        'В' => 'v', 'ו' => 'v', 'в' => 'v',
        'ω' => 'w', 'ώ' => 'w', 'ש' => 'w', 'ŵ' => 'w',
        'χ' => 'x',
        'Ы' => 'y', 'ŷ' => 'y', 'ϋ' => 'y', 'ΰ' => 'y', 'ý' => 'y', 'ύ' => 'y', 'ÿ' => 'y', 'υ' => 'y', 'ы' => 'y',
        'ז' => 'z', 'З' => 'z', 'з' => 'z', 'ζ' => 'z', 'ž' => 'z', 'ź' => 'z', 'ż' => 'z',
        'Ж' => 'zh', 'ж' => 'zh',
    );

    /**
     * Create a slug out of the given string.
     *
     * @param string $str
     * @return string
     */
    public static function slug($str)
    {
        $str = mb_strtolower($str);
        $str = str_replace(array_keys(static::$charMap), static::$charMap, $str);
        $str = preg_replace('/[^\s\p{Zs}\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu', ' ', $str);
        $str = preg_replace('/[\s\p{Zs}]+/mu', '-', $str);
        $str = preg_replace('/-+/', '-', $str);

        return trim($str, '-') ?: '-';
    }
}
