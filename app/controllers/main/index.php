<?php
function _index() {
    $pagename = 'Novak Garden Design &amp; Construction, LLC.';
    $data['pagename'] = $pagename;
    $data['content'][] = View::do_fetch(VIEW_PATH . 'shared/_sidebar.php');  
    $data['page'] = '';
    $data['content'][] = View::do_fetch(VIEW_PATH . 'home/_home.php');
    View::do_dump(VIEW_PATH . 'layouts/base.php', $data);
}