<?php

namespace Controller;


use FastD\Http\Response;
use FastD\Http\ServerRequest;

class MediaController
{
    public function create(ServerRequest $request)
    {
        $driver = config()->get('media.driver');
        //
        $driver = new $driver($request);

        $bucket = $request->getParsedBody()['bucket'];

        $path = $driver->moveTo($bucket);

        return json([
            'url' => $path,
        ]);
    }

    public function patch(ServerRequest $request)
    {
        return json([]);
    }

    public function delete(ServerRequest $request)
    {
        return json([]);
    }

    public function find(ServerRequest $request)
    {
        return json([]);
    }

    public function select(ServerRequest $request)
    {
        return json([]);
    }
}