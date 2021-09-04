<?php

session_start();


if(isset($_POST['emailForm']))
{
    header('content-type:image/jpeg');
    $font="arial.ttf";
    $image=imagecreatefromjpeg("Registration Template.jpg");
    $color=imagecolorallocate($image,19,21,22);
    $date=date('d F, Y');
    $name=$_SESSION['name'];
    $gender=$_SESSION['gender'];
    $course=$_SESSION['course'];
    $ID=$_SESSION['ID'];
    $age=$_SESSION['age'];
    $class10=$_SESSION['class10'];
    $class12=$_SESSION['class12'];
    $email=$_SESSION['email'];
    $dob=$_SESSION['dob'];
    $photo=$_SESSION['photo'];
    
    imagettftext($image,40,0,1000,1060,$color,$font,$ID);
    imagettftext($image,40,0,1000,1185,$color,$font,$name);
    imagettftext($image,40,0,1000,1305,$color,$font,$age);
    imagettftext($image,40,0,1000,1430,$color,$font,$gender);
    imagettftext($image,40,0,1000,1555,$color,$font,$email);
    imagettftext($image,40,0,1000,1675,$color,$font,$dob);
    imagettftext($image,40,0,1000,1800,$color,$font,$class10);
    imagettftext($image,40,0,1000,1925,$color,$font,$class12);
    imagettftext($image,40,0,1000,2040,$color,$font,$course);
    
    imagejpeg($image,$ID.'.jpeg');
    imagedestroy($image);

    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image($ID.'.jpeg',0,0,210,295);
    $pdf->Image($photo,150,57,40,40);
    $data = $pdf->output($_SESSION['ID'].".pdf",'F');

    $to = $_SESSION['email']; 
    $from = 'sonkerankush123@gmail.com'; 
    $fromName = 'IIITA Admissions'; 
    $subject = 'Application Form-Regarding';  
    $file = $_SESSION['ID'].".pdf";

    $htmlContent = ' 
        <p>Hey There, Kindly find below the attached PDF file of your application form.</p> '; 
    $headers = "From: $fromName"." <".$from.">";  
    $semi_rand = md5(time());  
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
    if(!empty($file) > 0){ 
        if(is_file($file)){ 
            $message .= "--{$mime_boundary}\n"; 
            $fp =    @fopen($file,"rb"); 
            $data =  @fread($fp,filesize($file)); 
    
            @fclose($fp); 
            $data = chunk_split(base64_encode($data)); 
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
            "Content-Description: ".basename($file)."\n" . 
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
        } 
    } 
    $message .= "--{$mime_boundary}--"; 
    $returnpath = "-f" . $from; 

    $mail = @mail($to, $subject, $message, $headers, $returnpath);  

}

if(isset($_POST['admissionLetter']))
{
    
    header('content-type:image/jpeg');
    $font="arial.ttf";
    $image=imagecreatefromjpeg("Seat Letter Template.jpg");
    $color=imagecolorallocate($image,19,21,22);
    $date=date('d F, Y');
    $name=$_SESSION['name'];
    $course=$_SESSION['course'];
    $ID=$_SESSION['ID'];
    imagettftext($image,40,0,470,975,$color,$font,$date);
    imagettftext($image,40,0,760,1114,$color,$font,"IIIT/21/05-".$ID);
    imagettftext($image,40,0,470,1328,$color,$font,$name);
    imagettftext($image,40,0,750,1880,$color,$font,$name);
    imagettftext($image,40,0,750,1960,$color,$font,$ID);
    imagettftext($image,40,0,750,2040,$color,$font,$course);
    imagejpeg($image,$ID.'.jpeg');
    imagedestroy($image);

    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image($ID.'.jpeg',0,0,210,295);
    $photo=$_SESSION['photo'];
    $pdf->Image($photo,140,65,45,50);
    $pdf->Output($_SESSION['ID']." LETTER.pdf",'D');

}

if(isset($_POST['download']))
{
    header('content-type:image/jpeg');
    $font="arial.ttf";
    $image=imagecreatefromjpeg("Registration Template.jpg");
    $color=imagecolorallocate($image,19,21,22);
    $date=date('d F, Y');
    $name=$_SESSION['name'];
    $gender=$_SESSION['gender'];
    $course=$_SESSION['course'];
    $ID=$_SESSION['ID'];
    $age=$_SESSION['age'];
    $class10=$_SESSION['class10'];
    $class12=$_SESSION['class12'];
    $email=$_SESSION['email'];
    $dob=$_SESSION['dob'];
    $photo=$_SESSION['photo'];
    
    imagettftext($image,40,0,1000,1060,$color,$font,$ID);
    imagettftext($image,40,0,1000,1185,$color,$font,$name);
    imagettftext($image,40,0,1000,1305,$color,$font,$age);
    imagettftext($image,40,0,1000,1430,$color,$font,$gender);
    imagettftext($image,40,0,1000,1555,$color,$font,$email);
    imagettftext($image,40,0,1000,1675,$color,$font,$dob);
    imagettftext($image,40,0,1000,1800,$color,$font,$class10);
    imagettftext($image,40,0,1000,1925,$color,$font,$class12);
    imagettftext($image,40,0,1000,2040,$color,$font,$course);
    
    imagejpeg($image,$ID.'.jpeg');
    imagedestroy($image);

    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image($ID.'.jpeg',0,0,210,295);
    $pdf->Image($photo,150,57,40,40);
    $pdf->Output($_SESSION['ID'].".pdf",'D');

}

if(isset($_POST['interviewInfo']))
{
    $Name=$_SESSION['name'];
    $Email=$_SESSION['email'];
         
    $toemail = "$Email";
    $fromName = 'IIITA Admissions';
    $from = 'sonkerankush123@gmail.com';
    $subject = "Interview Details-Regarding";
    $body = "Hey $Name, \n\nYour application has been shortlisted for the interview. The concerned authorities will reach out to you soon.\n\nNote: This is a system generated mail. So do not revert back to it.\n\nRegards,\nAdmission Committee, IIITA\n ";
    $headers = "From: $fromName"." <".$from.">"; 
    mail($toemail, $subject, $body, $headers);
    echo '<script>window.location.href="/UAS/PHP/applicantDashboard.php";</script>';
}

if(isset($_POST['logout']))
{
    echo '<script>window.location.href="/UAS/index.php";</script>';

}

?>