<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $province=$_POST['province'];
        $msg=$_POST['msg'];

        $to='carcatchinc@gmail.com';
        $subject='Contact form submission';
        $message="Name: ".$name."\n"."Email: ".$email."\n"."Province: ".$province."\n". "Wrote the following: "."\n\n".$msg;
        $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
     echo "<h1> Sent Successfully! Thank you for your message.";
    }
    else{
        echp "Something went wrong!";
    }
    }