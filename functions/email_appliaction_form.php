<?php
/*****************************************
Function to send the application email via 
the application form.
******************************************/

add_action( 'admin_post_email_appliaction_form', 'processform' );
add_action( 'admin_post_nopriv_email_appliaction_form', 'processform' );

function processform() {
  if ($_POST['check'] == '') {
    //Handle the CV Upload
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );         

    $attachment_id = media_handle_upload( 'cv', $_POST['post_id'] );
    $attachments = get_attached_file( $attachment_id );

    //Get variables for emai content
    $jobTitle = $_POST['jobTitle']; 
    $jobLocation = $_POST['jobLocation'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $telephone = $_POST['tel'];
    $quickmessage = strip_tags ( $_POST['message'] );

    $to = $_POST['email'];
    $admin_email = get_option( 'admin_email' );

    //Build the message to the candidate
    $messageCandidate = email_header();
    $messageCandidate .= candidate_application($jobTitle, $jobLocation);
    $messageCandidate .= reason_jobapplication();
    $messageCandidate .= email_footer();

    //Build the message to the head office
    $messageOffice = email_header();
    $messageOffice .= new_candidate_application($jobTitle, $jobLocation, $fullName, $email, $telephone, $quickmessage);
    $messageOffice .= reason_new_jobapplication();
    $messageOffice .= email_footer();


    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: Greenfield IT Recruitment <info@greenfield-it.co.uk>';

    $mailCandidate = wp_mail($to, 'Application successful', $messageCandidate, $headers );
    $mailoffice = wp_mail($admin_email, 'New Candidate Application', $messageOffice, $headers, array($attachments) );

    if ($mailCandidate) {
        wp_delete_attachment( $attachment_id, true );
        wp_redirect( get_site_url().'?p=227');
        exit;
    }
  }

}
