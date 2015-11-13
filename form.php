<?php

        $email;
        $comment;
        $company;
        $name;
        $phone
        $captcha;
        if(isset($_POST['name'])){
          $name=$_POST['name'];
        }
        if(isset($_POST['company'])){
          $company=$_POST['company'];
        }
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }
        if(isset($_POST['phone'])){
          $email=$_POST['phone'];
        }
        if(isset($_POST['comment'])){
          $email=$_POST['comment'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LctRQwTAAAAABUiyLJeN9Ihq6Ubf4cB_sTk2Nma&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }else
        {
          echo '<h2>Thanks for sending your enquiry.</h2>';
        }
?>