<?php 
    include_once("Admin/db_connect.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=FILTER_VAR($_POST['username'],FILTER_SANITIZE_STRING);
        $phone=FILTER_VAR($_POST['phone'],FILTER_SANITIZE_STRING);
        $email=FILTER_VAR($_POST['email'],FILTER_SANITIZE_EMAIL);
        $subject=FILTER_VAR($_POST['subject'],FILTER_SANITIZE_STRING);
        $message=FILTER_VAR($_POST['message'],FILTER_SANITIZE_STRING);
        if(!empty($username) && !empty($phone) && !empty($email) && !empty($message))
        {
            if(!preg_match("/^[a-zA-Z]*$/",$username))
            {
                //header("location:contact?contact_=username");
                //exit();
            } 
            if(!preg_match("/^[\+0-9\-\(\)\s]*$/",$phone))
            {
                header("location:contact?contact_=phone");
                exit();
            } 
            if(filter_var($email,FILTER_VALIDATE_EMAIL) === false)
            {
                header("location:contact?contact_=email");
                exit();
            }

            //Load Composer's autoloader
            require 'vendor/autoload.php';
            // //Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = "ssl://smtp.gmail.com";                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = "abde.mai36@gmail.com";                     //SMTP username
            $mail->Password   = "abdellah@mailal2021";                               //SMTP password
            $mail->SMTPSecure = "ssl";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;   

            //Content
            $mail->isHTML(true); 
            $mail->CharSet="UTF-8";

            $mail->setFrom($email);
            $mail->addAddress('abde.mai36@gmail.com'); 

            $mail->Subject = $subject;
            $mail->Body    = "<h2>".$username."</h2><br>Numéro de téléphone :".$phone."<br>Email :".$email."<br><br>".$message;

            $mail->send();
            if($mail)
            {
                $query="INSERT INTO tb_contact(usename,email,phone,subject,message) 
                VALUES('$username','$email','$phone','$subject','$message')";
                $result=mysqli_query($connexion,$query);
                if($result)
                {
                    header("location:contact?contact_=success");
                    exit();
                }else{
                    echo mysqli_error($conx);
                }
            }else{
                echo "null";
            }

        }else
        {
            header("location:contact?contact_=empty");
            exit();
        }
    }
    else
    {
        header("location:404.php");
        exit();
    }