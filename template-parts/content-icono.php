<?php
if (!function_exists('display_icon')) {
    function display_icon($icon_name) {
        switch ($icon_name) {
            case 'icon-close':
                echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"> <path fill="#fff" stroke-miterlimit="10" d="M7.72 6.28 6.28 7.72 23.56 25 6.28 42.28l1.44 1.44L25 26.44l17.28 17.28 1.44-1.44L26.44 25 43.72 7.72l-1.44-1.44L25 23.56z" font-family="none" font-size="none" font-weight="none" style="mix-blend-mode: normal" text-anchor="none" transform="scale(5.1)" /> </svg>';
                break;
            case 'icon-arrow':
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none"><path d="M4.5 6.5L0 0H9L4.5 6.5Z" fill="#7480A2"/></svg>';
                break;
        }
    }
}
?>

