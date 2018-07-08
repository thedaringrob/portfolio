<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php require 'nav.php'; ?>

    <div id="home" class="contentpanel">
        <img id="hero" src="assets/hero.jpg" alt="">
    </div>


    <div id="media" class="contentpanel">
      <div class="content-wrap">
        <h2>Media</h2>

        <?php require 'media.php' ?>

      </div>
    </div>



    <div id="resume" class="contentpanel">
      <div class="content-wrap">
        <h2>Resume</h2>
        <?php require 'resume.php' ?>
      </div>
    </div>



    <div id="about" class="contentpanel">
      <div class="content-wrap hidescroll">
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div id="contact" class="contentpanel ">
      <div class="content-wrap hidescroll">
        <?php require 'contact.php' ?>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
