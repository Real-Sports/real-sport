<?php 
  
function send($receiver,$subject,$message){
    //header formation
    $header = "From: silvan8124@gmail.com";
    //sending mail
    if(mail($receiver,$subject,$message,$header)){
        return false;
    }else{
        return true;
    }

}
?>