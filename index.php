<?php include "include/header.php" ?>
  <div data-role="page">

    <div data-role="header" data-position="fixed">
      <h1>BelleLush</h1>
      
    </div>

    <div class="home" data-role="content" role="main">
      <!-- <img src="img/saddlebrook/saddlebrook_logo_small.png" alt="Saddlerboolk" class="logo"> -->
      <div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c">
        <input type="text" placeholder="Email" class="ui-input-text ui-body-c">
        <input type="password" placeholder="Password" class="ui-input-text ui-body-c">
      </div>

      <a href="create-account.php"><button data-theme="b" class="ui-btn-hidden" data-disabled="false">Sign Up</button></a>

    </div>
  </div>
<?php include "include/footer.php" ?>
