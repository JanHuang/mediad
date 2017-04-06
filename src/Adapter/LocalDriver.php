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
     * @var ServerRequest
     */
    protected $request;

    /**
     * LocalDriver constructor.
     * @param ServerRequest $request
     */
    public function __construct(ServerRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @param $bucket
     * @return string
     */
    public function moveTo($bucket)
    {
        $file = $this->request->uploadFile[static::DEFAULT_NAME];

        $path = config()->get('media.options.path') . '/' . $bucket;

        $path = $file->moveTo($path);

        return str_replace(app()->getPath() . '/web', '', $path);
    }
}