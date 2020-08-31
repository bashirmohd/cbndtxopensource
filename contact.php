<?php

if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
	
             // Recipient email
            $toEmail = 'nabindu.kushwaha@gmail.com';
			
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <p><strong>Name</strong> '.$name.'</p>
                <p><strong>Email</strong> '.$email.'</p>
                <p><strong>Subject</strong> '.$subject.'</p>
                <p><strong>Message</strong> '.$message.'</p>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
               echo "<div style='color:#3c763d;background-color: #dff0d8;border-color: #d6e9c6;width: 100%;display: inherit;text-align: center;padding: 20px;max-width: 600px;margin: 100px auto;'>Your contact request has been submitted successfully !</div>";
			   
			   echo "<div  style='color:#3c763d;background-color: #bce8f1;border-color: #d6e9c6;width: 100%;display: inherit;text-align: center;padding: 20px;max-width: 600px;margin: 100px auto;'> <a href='javascript:history.back()'>Back To Home</a> </div>";
			   
            }else{
				 echo "<div style='color:#3c763d;background-color: #a94442;border-color: #d6e9c6;width: 100%;display: inherit;text-align: center;padding: 20px;max-width: 600px;margin: 100px auto;'>Your contact request submission failed, please try again!</div>";
				 
				  echo "<div  style='color:#3c763d;background-color: #bce8f1;border-color: #d6e9c6;width: 100%;display: inherit;text-align: center;padding: 20px;max-width: 600px;margin: 100px auto;'> <a href='javascript:history.back()'>Back To Home</a> </div>";
				
            }
}
?>