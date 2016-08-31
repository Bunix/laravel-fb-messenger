<?php
/**
 * User: casperlai
 * Date: 2016/8/31
 * Time: 下午3:28
 */

namespace Casperlaitw\LaravelFbMessenger\Messages;

/**
 * Class ImageMessage
 * @package Casperlaitw\LaravelFbMessenger\Messages
 */
class ImageMessage extends Message
{
    /**
     * Image path/url
     * @var string
     */
    private $image;

    /**
     * ImageMessage constructor.
     *
     * @param $sender
     * @param $image
     */
    public function __construct($sender, $image)
    {
        parent::__construct($sender);
        $this->image = $image;
    }

    /**
     * Message to send object
     * @return \pimax\Messages\Message
     */
    public function toData()
    {
        return new \pimax\Messages\ImageMessage($this->getSender(), $this->image);
    }
}
