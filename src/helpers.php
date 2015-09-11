<?php

if (!function_exists('view')) {

    /**
     * @param string $template name
     * @param array
     * @return string
     */
    function view($template, array $data = [])
    {
        $path = DEPLOYABLE_ROOT . 'views/';

        if (file_exists($path . $template)) {

            extract($data);

            include $path . $template;
        }
    }
}
