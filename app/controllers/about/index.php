<?php
function _index() {
    $data['page'] = 'about';
    $pagename = 'About Novak Garden';
    $data['pagename'] = $pagename;
    $data['content'][] = View::do_fetch(VIEW_PATH . 'shared/_sidebar.php', array('pagename' => $pagename));
    $data['content'][] = View::do_fetch(VIEW_PATH . 'about/_index.php');
        
    View::do_dump(VIEW_PATH . 'layouts/base.php', $data);
}