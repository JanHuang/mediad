<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace Adapter;


use App\Services\OSS;

class Ali extends DriverAdapter
{
    public function moveTo($bucket)
    {
        return OSS::publicUpload($bucket, $this->getAttachment()->getPostFilename(), [
            'ContentType' => 'application/pdf',
        ]);
    }
}