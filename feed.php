<?php include "include/header.php" ?>
  <div id="feedview" data-role="page">

  <?php include "include/menu-panel.php" ?>

    <div data-role="header" data-position="fixed">
    <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
      <h1>Feed</h1>

        <div data-role="navbar">
          <ul>
            <li><a href="#feedview">Feed</a></li>
            <li><a href="#gridview">Grid</a></li>
          </ul>
        </div><!-- /navbar -->
      
    </div>

    

    <img src="http://placehold.it/250x300" alt="">
      
    

<!--     <div class="home" data-role="content" role="main">
      <div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c">
        <input type="text" placeholder="Email" class="ui-input-text ui-body-c">
        <input type="password" placeholder="Password" class="ui-input-text ui-body-c">
      </div>

      <a href="create-account.php"><button data-theme="b" class="ui-btn-hidden" data-disabled="false">Sign Up</button></a>

    </div> -->
  <?php include "include/menu-footer.php" ?>


  </div>

<div id="gridview" data-role="page">

    <div data-role="header" data-position="fixed">
    <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
      <h1>Feed</h1>

        <div data-role="navbar">
          <ul>
            <li><a href="#feedview">Feed</a></li>
            <li><a href="#gridview">Grid</a></li>
          </ul>
        </div><!-- /navbar -->
      
    </div>


    <div class="ui-grid-b">
      <div class="ui-block-a"><a href="../edit-select.php" data-transition="slide"><div class="ui-bar ui-bar-a" style="height:80px; margin:10px;">Seating & Tables</div></a></div>
       <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:80px; margin:10px;">Food</div></div>
             <div class="ui-block-a"><a href="../edit-select.php" data-transition="slide"><div class="ui-bar ui-bar-a" style="height:80px; margin:10px;">Seating & Tables</div></a></div>
       <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:80px; margin:10px;">Food</div></div>
      
    </div>

    <?php include "include/menu-footer.php" ?>
    
</div>

<?php include "include/footer.php" ?>
