<title>Kyçuni</title>
<?php
require_once 'userController.php';

$user1 = new userController;
if(isset($_POST['submit'])){
    $user1->insert($_POST);
}


?>


<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css%22%3E"/>
    <link rel="stylesheet" href="style.css">
    <section>
    <link rel="stylesheet" href="style.css">
<div class="wrapper">
    <header>Kyçu</header>
    <form action="#" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email-i" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email-i nuk mund të jetë bosh</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Fjalëkalimi" name="pass">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Fjalëkalimi-i nuk mund të jetë bosh</div>
      </div>
      <div class="pass-txt"><a href="#">Harrove fjalëkalimin?</a></div>
      <input type="submit" name="submit" value="Kyçu">
    </form>
    <div class="sign-txt">Ende jo anëtar? <a href="../signUp/signup.php">Regjistrohu tani</a></div>
    <div class="sign-txt">Kyçu si Admin? <a href="../login-Admin/login.php">Kyçu si Admin</a></div>
  </div>
   <!-- <script src="login.js"></script> -->

  </section>
