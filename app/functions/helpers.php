<?php
/**
 * @Package:
 * @Author: dungnt13
 * @Date: 5/13/2015
 * @Time: 10:32 AM
 */

if (!function_exists('status_show_hidden')) {

    /**
     * Get status [Show|Hidden] of an item
     *
     * @param int $status
     * @return mixed
     */
    function status_show_hidden($status = null)
    {
        $array = [0 => 'Hidden', 1 => 'Show'];
        return $status === null ? $array : $array[$status];
    }
}

if (!function_exists('is_series')) {

    /**
     * Check if film has multi episodes
     * @param int $check
     * @return mixed
     */
    function is_series($check = null)
    {
        $array = [0 => 'No', 1 => 'yes'];
        return $check == null ? $array : $array[$check];
    }
}

if (!function_exists('film_quality')) {
    /**
     * Get quality of film
     * @param string $quality
     * @return mixed
     */
    function film_quality($quality = null)
    {
        $array = ['SD' => 'SD', 'HD' => 'HD'];
        return $quality == null ? $array : $array[$quality];
    }
}

if (!function_exists('tim_thumb')) {
    function tim_thumb($link, $width = 100, $height = 100, $zc = 1)
    {
        $url = $link;
        if (
            strtolower(substr($link, 0, 7)) == 'http://' ||
            strtolower(substr($link, 0, 8)) == 'https://' ||
            strtolower(substr($link, 0, 4)) == 'www.'
        ) {
            $url = $link;
        } else
            $url = Config::get('app.url') . $link;
        return Config::get('app.url') . 'thumb.php?src=' . urlencode($url) . '&w=' . $width . '&h=' . $height . '&zc=' . $zc;
    }
}
if (!function_exists('vi_cut_string')) {
    /**
     * Limit the number of characters in a string.
     *
     * @param  string $value
     * @param  int $limit
     * @param  string $end
     * @return string
     */
    function vi_cut_string($value, $limit = 100, $end = '...')
    {
        $split = explode(' ', $value);
        $result = array();
        $check = '';
        $count = 0;
        foreach ($split as $word) {
            $count++;
            if (trim($word) != "" && strlen($check) < $limit) {
                $check .= ' ' . strtolower(Str::slug($word));
                $result[] = $word;
            }
        }

        $result = implode(' ', $result);

        if ($count >= count($split)) {
            $result .= $end;
        }
        return $result;
    }
}