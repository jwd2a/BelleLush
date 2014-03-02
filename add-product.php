<?php include "include/header.php" ?>
  <div data-role="page">

  <?php include "include/menu-panel.php" ?>

    <div data-role="header" data-position="fixed">
    <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
      <h1>Add Product</h1>
      
    </div>

<!--     <div class="home" data-role="content" role="main">
      <div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c">
        <input type="text" placeholder="Email" class="ui-input-text ui-body-c">
        <input type="password" placeholder="Password" class="ui-input-text ui-body-c">
      </div>

      <a href="create-account.php"><button data-theme="b" class="ui-btn-hidden" data-disabled="false">Sign Up</button></a>

    </div> -->
  
    <a href="../dialog/item-added.html"  data-rel="dialog"  data-corners="true" data-theme="c" ><button data-theme="b">Add Product</button></a>

  </div>
<?php include "include/footer.php" ?>
