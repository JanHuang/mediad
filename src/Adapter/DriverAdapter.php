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

abstract class DriverAdapter
{
    const DEFAULT_NAME = 'attachment';

    protected $request;

    public function __construct(ServerRequest $request)
    {
        $this->request = $request;
    }

    public function getAttachment()
    {
        return $this->request->uploadFile[static::DEFAULT_NAME];
    }

    abstract public function moveTo($bucket);
}