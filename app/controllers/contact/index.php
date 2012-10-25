<?php
function _index() {
    $data['page'] = 'contact';
    $pagename = 'Contact Novak Garden';
    $data['pagename'] = $pagename;
    $data['content'][] = View::do_fetch(VIEW_PATH . 'shared/_sidebar.php', array('pagename' => $pagename));
    $data['content'][] = View::do_fetch(VIEW_PATH . 'contact/_index.php');
        
    View::do_dump(VIEW_PATH . 'layouts/base.php', $data);
}

function _sendmail() {
    require_once(APP_PATH . 'vendors/phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    
    if (!empty($_POST)) {  
        //$mail -> IsSMTP();
        $mail -> From = $_POST['email'];
        $mail -> FromName = $_POST['name'];
        $mail -> AddAddress('phigdish@gmail.com', 'Dan Phelps');
        $mail -> Subject = $_POST['subject'];
        $mail -> Body = "<p>{$_POST['message']}</p>";
        $mail -> IsHTML(TRUE);
    }
     
    if($mail->Send()) 
        echo '{"success": true}';
    else 
        echo json_encode(array('error' => $mail->ErrorInfo));
}