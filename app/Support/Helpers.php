<?php

/**
 * @param string $path
 * @return string
 */
function url(string $path = null): string
{
    if ($_SERVER['HTTP_HOST'] == "localhost") {
        if ($path) {
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

/**
 * @return string
 */
function url_back(): string
{
    if (!empty($_SERVER['HTTP_REFERER']) && str_contains($_SERVER['HTTP_REFERER'], CONF_SITE_DOMAIN)) {
        return $_SERVER['HTTP_REFERER'];
    }

    return url();
}

function view(string $view, array $data = [])
{
    $v = new Jenssegers\Blade\Blade("theme/view", "theme/cache");
    echo $v->make($view, $data)->render();
}

/**
 * @return string
 */
function assets(string $patch): string 
{
    return url("/public/$patch");
}