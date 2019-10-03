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
        <div><span class="state"></span></div>
        <div><span></span></div>
      </div>
      <div class="form-nav-ja">
        <p>入力</p>
        <p>確認</p>
        <p>送信</p>
      </div>
    </div>
    <form action="send.php" method="post">
      <p class="contact-text">送信する内容は以下のようになります。間違いがなければ送信ボタンを推してください。
        間違いがあった場合は戻るボタンを押してください。
      </p>
      <?php 
      $name = $_POST["name"];
      $tel = $_POST["tel"];
      $fmail = $_POST["mail"];
      $content = $_POST["content"];
      ?>
      <div class="input">
        <p>お名前：</p>
        <p><?php echo $name ?></p>
      </div>
      <div class="input">
        <p>電話番号：</p>
        <p><?php echo $tel ?></p>
      </div>
      <div class="input">
        <p>メールアドレス：</p>
        <p><?php echo $fmail ?></p>
      </div>
      <div class="input">
        <p>お問い合わせ内容：</p>
        <p><?php echo $content ?></p>
      </div>
      <input type="hidden" name="name" value="<?php echo $name ?>">
      <input type="hidden" name="tel" value="<?php echo $tel ?>">
      <input type="hidden" name="mail" value="<?php echo $fmail ?>">
      <input type="hidden" name="content" value="<?php echo $content ?>">
      <div class="confirm-button">
        <button type="button" onClick='history.back();' value="back">戻る</button>
        <button type="submit">送信</button>
      </div>
      
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