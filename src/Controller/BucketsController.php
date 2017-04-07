<?php

namespace Controller;


use FastD\Http\Response;
use FastD\Http\ServerRequest;

class BucketsController
{
    public function create(ServerRequest $request)
    {
        $bucket = model('buckets')->create($request->getParsedBody());

        return json($bucket, Response::HTTP_CREATED);
    }

    public function patch(ServerRequest $request)
    {
        parse_str($request->getBody(), $data);

        $bucket = model('buckets')->patch($request->getAttribute('id'), $data);

        return json($bucket);
    }

    public function delete(ServerRequest $request)
    {
        model('buckets')->delete($request->getAttribute('id'));

        return json([], Response::HTTP_NO_CONTENT);
    }

    public function find(ServerRequest $request)
    {
        $bucket = model('buckets')->find($request->getAttribute('id'));

        return json($bucket);
    }

    public function select(ServerRequest $request)
    {
        $buckets = model('buckets')->select();

        return json($buckets);
    }
}