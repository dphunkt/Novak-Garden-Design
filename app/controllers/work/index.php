<?php
function _index($title = NULL, $id = NULL) {
    if (!is_null($title) && is_null($id)) 
        _throw_error();
    
    $album_exclude_array = array(264233753631471, 264212756966904, 268686096519570, 161987160522798, 375634829158029);
    $data['page'] = 'work';
    
    // get albums from FB
    $cache_file = 'cache/fb_albums.json';
    $api_call = 'https://graph.facebook.com/161987050522809/albums';
    $cache_for = 10080; // cache results for 1 week
    
    $api_cache = new api_cache($api_call, $cache_for, $cache_file);
    if (!$res = json_decode($api_cache->get_api_cache(), TRUE))
       die(View::do_fetch(VIEW_PATH . 'errors/404.php'));
    
    foreach($res['data'] as $alb) {
        if (array_search($alb['id'], $album_exclude_array) !== FALSE) continue;
        $albums[] = $alb;
    }
    
    if (!is_null($id)) {
        foreach ($albums as $album) {
            $albums_by_id[$album['id']] = $album;
        }
        if (array_key_exists($id, $albums_by_id)) 
            _view_album($albums_by_id[$id], $data);
        else
            _throw_error();
    } else {
        $vars['albums'] = $albums;
        $pagename = 'Design &amp; Construction Portfolio';
        $data['pagename'] = $pagename;
        $data['content'][] = View::do_fetch(VIEW_PATH . 'shared/_sidebar.php', array('pagename' => $pagename));
        $data['content'][] = View::do_fetch(VIEW_PATH . 'work/_albums.php', $vars);
    }
    
    View::do_dump(VIEW_PATH . 'layouts/base.php', $data);
}

function _view_album($album, &$data) {
    // get albums from FB
    $cache_file = 'cache/album_' . $album['id'] . '.json';
    $api_call = 'https://graph.facebook.com/' . $album['id'] . '/photos';
    $cache_for = 10080; // cache results for 1 week
    
    $api_cache = new api_cache($api_call, $cache_for, $cache_file);
    if (!$res = json_decode($api_cache->get_api_cache(), TRUE))
       die(View::do_fetch(VIEW_PATH . 'errors/404.php'));
    
    // get all photos for album
    $album_images = $res['data'];
    $vars['album'] = $album;
    $data['album_page'] = true;
    $vars['album_images'] = $album_images;
    
    $pagename = $album['name'];
    $data['pagename'] = $pagename;
    $description = !empty($album['description']) ? $album['description'] : '';
    $data['content'][] = View::do_fetch(VIEW_PATH . 'shared/_sidebar.php', array('pagename' => $pagename, 'description' => $description));
    $data['content'][] = View::do_fetch(VIEW_PATH . 'work/_view_album.php', $vars);
}

function _throw_error() {
    die(View::do_dump(VIEW_PATH . 'layouts/base.php', array('content' => array(View::do_fetch(VIEW_PATH . 'shared/_sidebar.php', 
                                                                         array('pagename' => '404 &#8211; Not Found')), View::do_fetch(VIEW_PATH . 'errors/404.php')), 
                                                            'pagename' => '404 &#8211; Not Found')));
}
