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
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class QiNiu extends DriverAdapter
{
    protected $auth;

    public function __construct(ServerRequest $request)
    {
        parent::__construct($request);

        $this->auth = new Auth(config()->get('media.options.app_key'), config()->get('media.options.app_secret'));
    }

    public function moveTo($bucket)
    {
        $upManager = new UploadManager();
        $token = $this->auth->uploadToken($bucket);
        list($ret, $error) = $upManager->put($token, 'formput', 'hello world');
    }
}