<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace Adapter;


include_once __DIR__ . '/../../vendor/johnlui/aliyun-oss/example/OSS.php';
use App\Services\OSS;
use OSS\OssClient;

class AliOSS extends DriverAdapter
{
    public function moveTo($bucket)
    {
        if (OSS::publicUpload($bucket, $this->getAttachment()->getPostFilename(), $this->getAttachment()->getFilename())) {
            return 'http://' . config()->get('media.options.endpoint') . '/' . $this->getAttachment()->getPostFilename();
        }
        $ossClient = new OssClient(
            config()->get('media.options.app_key'),
            config()->get('media.options.app_secret'),
            config()->get('media.options.endpoint')
        );

        return $ossClient->uploadFile(
            $bucket,
            $this->getAttachment()->getPostFilename(),
            $this->getAttachment()->getFilename()
        );
    }
}