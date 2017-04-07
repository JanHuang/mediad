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
        parse_str($request->getBody(), $data);

        $media = model('medias')->patch($request->getAttribute('id'), $data);

        return json($media);
    }

    public function delete(ServerRequest $request)
    {
        model('medias')->delete($request->getAttribute('id'));

        return json([], Response::HTTP_NO_CONTENT);
    }

    public function find(ServerRequest $request)
    {
        $media = model('medias')->find($request->getAttribute('id'));

        return json($media);
    }

    public function select(ServerRequest $request)
    {
        $medias = model('medias')->select();

        return json($medias);
    }
}