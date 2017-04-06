<?php

route()->group('/api', function () {
    route()->get('/spaces', 'SpaceController@select');
    route()->post('/spaces', 'SpaceController@create');
    route()->get('/spaces/{id}', 'SpaceController@find');
    route()->patch('/spaces/{id}', 'SpaceController@patch');
    route()->delete('/spaces/{id}', 'SpaceController@delete');
    route()->get('/medias', '');
});
