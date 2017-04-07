<?php

namespace Controller;


use FastD\Http\Response;
use FastD\Http\ServerRequest;

class DriversController
{
    public function create(ServerRequest $request)
    {
        $driver = model('drivers')->create($request->getParsedBody());

        return json($driver, Response::HTTP_CREATED);
    }

    public function patch(ServerRequest $request)
    {
        parse_str($request->getBody(), $data);

        $driver = model('drivers')->patch($request->getAttribute('id'), $data);

        return json($driver);
    }

    public function delete(ServerRequest $request)
    {
        model('drivers')->delete($request->getAttribute('id'));

        return json([], Response::HTTP_NO_CONTENT);
    }

    public function find(ServerRequest $request)
    {
        $driver = model('drivers')->find($request->getAttribute('id'));

        return json($driver);
    }

    public function select(ServerRequest $request)
    {
        $drivers = model('drivers')->select();

        return json($drivers);
    }
}