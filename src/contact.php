<?php
mb_internal_encoding("UTF-8");
$admin_email = "info@permil.jp,info@codevillage.jp";
$admin_sub_email = "nishiumi@permil.jp";
// []内はcontact.html内のname
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $name_how = $_POST['name_how'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$content = $_POST['content'];
    $body .= "氏名:".$name."\n";
    $body .= "氏名(フリガナ):".$name_how."\n";
    $body .= "メールアドレス:".$email."\n";
    $body .= "電話番号:".$phone."\n";
    $body .= "ご用件:".$content."\n";  
  
  function SENDMAIL($to,$from,$sub,$body) {
    mb_language("uni");
    mb_internal_encoding("utf-8");//utf-8 or SJIS
    $Head="";
    $Head.="From: ".$from."\n";
    $Head.="Mime-Version: 1.0\n";
    $Head.="Reply-To: ".$from."\n";
    $Head.="X-Mailer: PHP/". phpversion();
    $flg = mb_send_mail($to, $sub, $body,$Head, $admin_sub_email);
    return $flg;
  }
	//メールの送り先,メールの送り元,メールタイトル
	$flg = SENDMAIL($admin_email, $address, "コーポレートサイトよりお問い合わせがありました。", $body);
	if($flg == true) {
		$message = "お問い合わせの送信が完了しました。ご返信まで今しばらくお待ち下さい。";
	} else {
		$message = "送信が完了しませんでした。\n大変お手数ですが、もう一度やり直して下さい。";
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permil.inc</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <section class="top-wrapper pp"></section> -->

    <section style="text-align: center;height: 100vh;">
        <?php echo $message; ?>
        <a href="../" style="display: block;margin-top: 2em;">戻る</a>
    </section>

    <footer>
        <small>Copyright&copy; permil.inc All Rights Reserved</small>
    </footer>
    <script>
        document.querySelector('.main-logo').addEventListener('click', function() {
            location.href = '../'
        })
    </script>
    <script src="js/main.js"></script>
</body>
</html>