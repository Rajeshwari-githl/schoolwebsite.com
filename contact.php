<?php 
if( isset( $_REQUEST['email'] ) ) {
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    mail("rainbowscl1234@gmail.com" , $subject , $message , "From:".$email );
    echo "mail sent successfully";
	
}  else {
     echo "<form method = 'post' action ='contact.html'>
     Email of sender : <input name = 'email' type = 'text' /> <br/>
     Subject : <input name = 'subject' type = 'text'/> <br/>
     Enter your feedback here : <textarea name = 'message' rows = 15 cols = 40 > </textarea> <br/>
     <input type = 'submit'/>
     </form>";
   }
?>
 