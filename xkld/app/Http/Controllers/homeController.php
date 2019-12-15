<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danh_muc;
use App\don_hang;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class homeController extends Controller
{
    public function getindex(){
        $name='Trang chủ';
        $danh_muc= danh_muc::all();
        return view('pages.home',compact('danh_muc','name'));
    }
    public function get_data($id){
        $product= don_hang::where('danhmuc_id',$id)->get();
        dd($product);
    }
    public function get_mail(){
        $name='Trang chủ / liên hệ';
        $danh_muc= danh_muc::all();
        return view('pages.contact',compact('danh_muc','name'));
    }
    public function sent_mail(Request $req){
        $mail = new PHPMailer(true);
        // $this->validate($req,[
        //     'name' => 'required|min:4',
        //     'phone'=>'required|numeric|min:9|max:12',
        //     "email"=>'required|email',
        //     "subject"=>"required|min:5",
        //     'description'=>'required'
        // ],
        // [
        //     'name.required'=>"Bạn chưa nhập tên",
        //     'name.min'=>"Tên tối thiểu 4 kí tự",
        //     'phone.required'=>"Bạn chưa nhập số điện thoại",
        //     'phone.numeric'=>"Định dạng là số",
        //     'phone.min'=>"Sô điện thoại tối thiểu 8 kí tự",
        //     "phone.max"=>"Số điện thoại tối đa 12 kí tự",
        //     'email.required'=>'Bạn chưa nhập email',
        //     'email.email'=>'Bạn nhập sai định dạng email',
        //     'subject.required'=>"Bạn chưa nhập tiêu đề",
        //     "subject.min"=>"Tiêu đề tối thiểu 5 kí tự",
        //     'description.required'=>"Bạn chưa nhập nội dung",
        // ]);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'sakukelovesakutara@gmail.com';                     // SMTP username
            $mail->Password   = '@fpt.Com';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom($req->email, 'lienhe');
            $mail->addAddress($req->email);               // Name is optional
            $mail->addCC('sakukelovesakutara@gmail.com');
            $mail->addBCC('sakukelovesakutara@gmail.com');
        
            // Attachments
          
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
