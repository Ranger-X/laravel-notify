<?php

if (!function_exists('notify_info')) {
    /**
     * Helper notify info() without facade: Notify::info()
     *
     * @param null        $content
     * @param null        $title
     * @return \Illuminate\Foundation\Application|mixed
     */
    function notify_info($content = null, $title = null)
    {
        $notifier = app('notify');

        if (!is_null($content)) {
            return $notifier->info($content, $title);
        }

        return $notifier;
    }
}

//if (!function_exists('notify_icon')) {
//    /**
//     * Get the icon for the notify level
//     *
//     * @param $level
//     * @return string
//     */
//    function notify_icon($level)
//    {
//        switch ($level) {
//            case 'danger':
//                return 'times shake';
//                break;
//            case 'warning':
//                return 'warning shake';
//                break;
//            case 'success':
//                return 'smile-o bounce';
//                break;
//            default: // info / default
//                return 'bell shake';
//                break;
//        }
//    }
//}
//
//if (!function_exists('notify_icon_small')) {
//    /**
//     * Get the icon for the notify level
//     *
//     * @param $level
//     * @return string
//     */
//    function notify_icon_small($level)
//    {
//        switch ($level) {
//            case 'danger':
//                return 'times spin';
//                break;
//            case 'warning':
//                return 'times-circle-o spin';
//                break;
//            case 'success':
//                return 'smile-o bounce';
//                break;
//            default: // info / default
//                return 'bell spin';
//                break;
//        }
//    }
//}