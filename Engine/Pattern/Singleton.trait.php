<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */

namespace JamBlog\Engine\Pattern;

trait Singleton
{
    use Base;

    protected static $_oInstance = null;

    /**
     * Get instance of class.
     *
     * @access public
     * @static
     * @return object Return the instance class or create first instance of the class.
     */
    public static function getInstance()
    {
        return (null === static::$_oInstance) ? static::$_oInstance = new static : static::$_oInstance;
    }
}
