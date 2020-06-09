<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
  </head>
  <body>
    <main id="main">
      <h1>PEOPLE</h1>
      <div class="header">
        <p class="head1"></p>
        <p class="head2">Ideas</p>
        <p class="head2">Following</p>
        <p class="head2">Followers</p>
      </div>
      <?php
      for ($i=0; $i < 10 ; $i++) {
        echo "<div class='list' id='list'>
          <div class='head1'>
            <img class='avatar' src='img/avatar.png' alt='avatar'>
            <h2 id='{$i}name'>John Adams</h2>
            <button type='button' name='button' onmouseover='over({$i})' onmouseout='out({$i})' onclick='button({$i})'>+</button>
            <img class='rating' src='img/rating.png' alt='rating'>
            <span>0</span>
          </div>
          <p class='head2 ideas'>0</p>
          <p class='head2 following'>0</p>
          <p class='head2 followers'>0</p>
        </div>";
      }
       ?>


    </main>

    <script src="script.js"></script>
  </body>
</html>
