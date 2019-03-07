<?php
/*****************************************
Talent Form. . 
******************************************/

add_action( 'admin_post_email_talent_form', 'processtalentform' );
add_action( 'admin_post_nopriv_email_talent_form', 'processtalentform' );

function processtalentform() {

    if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
    }
    $secretKey = '6LeBaYwUAAAAADr0YzI278oZNY5EQ3cZm7_yqf-g';
    $ip = $_SERVER['REMOTE_ADDR'];

    $response=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$captcha.'&remoteip='.$ip);
    $responseKeys = json_decode($response,true);
    if(intval($responseKeys["success"]) !== 1) {

      
    } else {
      
       //Handle the CV Upload
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );         

        $attachment_id = media_handle_upload( 'cv', $_POST['post_id'] );
        $attachments = get_attached_file( $attachment_id );

        //Get variables for emai content
        $name = $_POST['name']; 
        $number = $_POST['number'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $message = strip_tags ( $_POST['message'] );
        $admin_email = get_option( 'admin_email' );

        //Build the message to the head office
        $messageOffice = email_header();
        $messageOffice .= new_talent_form($name, $number, $company, $email, $message);
        $messageOffice .= reason_new_talent_form();
        $messageOffice .= email_footer();

        //Set headers
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        $headers[] = 'From: Greenfield IT Recruitment <info@greenfield-it.co.uk>';

        $mailoffice = wp_mail($admin_email, 'Talent Form Submission', $messageOffice, $headers, array($attachments) );

        if ($mailoffice) {
            wp_delete_attachment( $attachment_id, true );
            wp_redirect( get_site_url().'?p=328');
            exit;
        }
    }
}

