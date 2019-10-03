<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Permil.inc</title>
  <meta name="descpription" content="私たちはトコトン自己中である事を美学としております。
  まずは一人の'人'として己の幸せをトコトン追求していきます。
  それがいずれ大きな波として派生し、
  世界を変えてしまうのでは？と思っております。">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="shortcut icon" href="img/favicon1.png">
  <meta property="og:url" content="http://permil.jp/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="株式会社Permil | Permil Inc." />
  <meta property="og:description" content="私たちはトコトン自己中である事を美学としております。
  まずは一人の'人'として己の幸せをトコトン追求していきます。
  それがいずれ大きな波として派生し、
  世界を変えてしまうのでは？と思っております。" />
  <meta property="og:site_name" content="permil.inc" />
  <meta property="og:image" content="http://permil.jp/img/permil.png" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@flickr" />
  <meta name="twitter:title" content="Small Island Developing States Photo Submission" />
  <meta name="twitter:description" content="View the album on Flickr." />
  <meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" />
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body class="confirm">
  <header id="header" class="section">
    <h1 class="logo"><a href="./index.html">Permil.Inc</a></h1>
    <nav class="header-nav">
      <div id="menuToggle"> 
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <nav class="slide-nav">
      <ul>
    
        <a href="./index.html#vision">
          <li>VISION</li>
        </a>
        <a href="./index.html#products">
          <li>PRODUCTS</li>
        </a>
        <a href="./index.html#company">
          <li>COMPANY</li>
        </a>
        <a href="./index.html#contact">
          <li>CONTACT</li>
        </a>
        <a href="./page.html">
          <li>PROGRAMMING SCHOOL</li>
        </a>
      </ul>
    </nav>
  </header>
  <section id="contact" class="section">
    <div class="sec-header">
      <div class="form-nav">
        <div><span></span></div>
        <div><span></span></div>
        <div><span class="state"></span></div>
      </div>
      <div class="form-nav-ja">
        <p>入力</p>
        <p>確認</p>
        <p>送信</p>
      </div>
    </div>
    <form action="./index.html" method="post">
      <h2 class="thanks-message">お問い合わせありがとう御座います。</h2>
      <p class="contact-text"><?php

            mb_language("Japanese");
            mb_internal_encoding("UTF-8");
            $header_info="From:".$_POST["mail"]."\nContent-Type: text/html;charset=ISO-2022-JP\nX-Mailer: PHP/".phpversion();
            $to      = 'info@permil.jp';
            // $to      = 'yuta.inoue1907@gmail.com';
            $name = $_POST["name"];
            $message = $_POST["content"];
            $tel = $_POST["tel"];
            $headers = "from：".$_POST["mail"];
            if (
            mb_send_mail(
                $to,
                $subject,
                "名前：".$name."\n\n\n".
                "電話番号：".$tel."\n\n\n".
                "メールアドレス：\n".$headers."\n\n\n".
                "内容：".$_POST["content"]."\n\n\n",
                $header_info)
            ){
            echo "メールが送信されました。\n
            営業日3日以内にご返答致します。\n
            3日以上返信がない場合、お手数となりますが下記からお問い合わせください。\n\n
            電話番号：03-6915-2678";

            } else {
            echo "メールの送信に失敗しました。申し訳ありませんが、下記からお問い合わせください。\n\n電話番号：03-6915-2678";
            }
            ?>
      </p>
      <a href="./index.html" class="toHome">homeに戻る</a>
    </form>
  </section>
  <footer id="footer">
    <div >
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=small&mobile_iframe=true&width=61&height=20&appId"
        width="61" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
        allow="encrypted-media"></iframe>
    </div>
    <small>Copyright(C) permil.inc All Rights Reserved</small>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script src="./js/main.js"></script>
</html>