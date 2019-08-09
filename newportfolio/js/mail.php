<?php 
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['topic'])) 
{
    $headers = 'From: Буряк Сергей\r\n' .
                'Reply-To: sergeyburiak55@gmail.com\r\n' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новое сообщение с сайта";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Имя: ".$_POST['name'];
    $letter .="\nEmail: ".$_POST['email'];
    $letter .="\nСообщение: ".$_POST['textarea'];
    
    if (mail('sergeyburiak55@gmail.com', $theme, $letter, $headers)){
      header("Location: /testform/thank-you.html");
    } else {
      header("Location: /testform");
    }  
              
} else {
  header("Location: /testform");
}