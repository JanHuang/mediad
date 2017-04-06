<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace Adapter;


use FastD\Http\ServerRequest;

/**
 * Class LocalDriver
 * @package Adapter
 */
class LocalDriver extends DriverAdapter
{
    /**
     * @param $bucket
     * @return string
     */
    public function moveTo($bucket)
    {
        $file = $this->getAttachment();

        $path = config()->get('media.options.path') . '/' . $bucket;

        $path = $file->moveTo($path);

        return str_replace(app()->getPath() . '/web', '', $path);
    }
}