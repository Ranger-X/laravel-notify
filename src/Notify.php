<?php
namespace RangerX\Notify;

use Illuminate\Session\Store;

class Notify
{
    /**
     * The session writer.
     *
     * @var SessionStore
     */
    private $session;

    /**
     * Create a new flash notifier instance.
     *
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an info notification
     *
     * @param      $content
     * @param      $title
     * @param int  $delay
     */
    public function info($content, $title, $delay)
    {
        $this->message('info', $content, $title, $delay);
    }

    /**
     * Flash a success notification
     *
     * @param      $content
     * @param      $title
     * @param int  $delay
     */
    public function success($content, $title, $delay)
    {
        $this->message('success', $content, $title, $delay);
    }

    /**
     * Flash an error notification
     *
     * @param      $content
     * @param      $title
     * @param int  $delay
     */
    public function error($content, $title, $delay)
    {
        $this->message('danger', $content, $title, $delay);
    }

    /**
     * Flash an danger notification
     *
     * @param      $title
     * @param      $content
     * @param int  $delay
     */
    public function danger($content, $title, $delay)
    {
        $this->message('danger', $content, $title, $delay);
    }

    /**
     * Flash a warning notification
     *
     * @param      $content
     * @param      $title
     * @param int  $delay
     */
    public function warning($content, $title, $delay)
    {
        $this->message('warning', $content, $title, $delay);
    }

    /**
     * Flash a notification message
     *
     * @param string      $type
     * @param             $content
     * @param string      $title
     * @param int         $delay
     */
    public function message(
        $type = 'info',
        $content,
        $title = '',
        $delay = 5000
    ) {
        $this->session->flash('notify.type', $type);
        $this->session->flash('notify.title', $title);
        $this->session->flash('notify.content', $content);

        // if icon == true, get icon from level, else if icon is string, set icon
        //if ((is_bool($icon) && $icon == true) || strlen($icon) > 1) {
        //    $icon = is_string($icon) ? $icon : notify_icon($level);
        //
        //    $this->session->flash('notify.icon', $icon . ' animated');
        //}

        // if icon == true, get icon from level, else if icon is string, set icon
        //if ((is_bool($iconSmall) && $iconSmall == true) || strlen($iconSmall) > 1) {
        //    $iconSmall = is_string($iconSmall) ? $iconSmall : notify_icon_small($level);
        //
        //    $this->session->flash('notify.iconSmall', $iconSmall . ' animated');
        //}

        if ($delay > 0) {
            $this->session->flash('notify.delay', $delay);
        }
    }
}
