<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        return 'Gender';
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        return 'Neutral';
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        return ['TH', 'EN'];
    }
}
