<?php include "include/header.php" ?>
  <div class="login-page" data-role="page">

    <div data-role="header" data-position="fixed">
      <h1>&nbsp;</h1>
      
    </div>

    <div class="home" data-role="content" role="main">
      <img src="img/bellelush/bellelush-logo-small.png" alt="Saddlerboolk" class="logo">
      <div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c">
        <input id="email" type="text" placeholder="Email" class="ui-input-text ui-body-c">
        <input id="password" type="password" placeholder="Password" class="ui-input-text ui-body-c">
      </div>

      <button id="signupBtn" data-target="create-account.php" data-theme="b" class="ui-btn-hidden" data-disabled="false">Sign Up</button>

    </div>
  </div>
<?php include "include/footer.php" ?>
