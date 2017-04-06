<?php

route()->group('/api', function () {
    route()->get('/spaces', 'SpaceController@select');
    route()->post('/spaces', 'SpaceController@create');
    route()->get('/spaces/{id}', 'SpaceController@find');
    route()->patch('/spaces/{id}', 'SpaceController@patch');
    route()->delete('/spaces/{id}', 'SpaceController@delete');
    route()->get('/medias', 'MediaController@select');
    route()->get('/medias/{id}', 'MediaController@find');
    route()->post('/medias', 'MediaController@create');
    route()->patch('/medias/{id}', 'MediaController@patch');
    route()->delete('/medias/{id}', 'MediaController@delete');
});
