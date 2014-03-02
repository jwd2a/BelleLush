<?php include "include/header.php" ?>
  <div data-role="page">
    <?php include "include/menu-panel.php" ?>
    <div data-role="header" data-position="fixed">
      <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
      <h1>Select</h1>
      
    </div>

    <div data-role="content" role="main" class="edit-select-page">
<div class="select-options-menu">
  <div class="ui-body ui-body-a">
      <fieldset class="ui-grid-b">
    <div class="ui-block-a">
      <a href="../proposal-edit.php" data-transition="slide" data-direction="reverse"><button data-theme="b" class="ui-btn-hidden" data-disabled="false">Back</button></a>
    </div>
    <div class="ui-block-b">
      Seatings<br />
      2 / 5
    </div>
    <div class="ui-block-c">
      <a href="../dialog/cancel.html"  data-rel="dialog"  data-corners="true" data-theme="c" ><button data-theme="b">Cancel</button></a>
    </div>
  </fieldset>
      </div>
</div>

      <ul data-role="listview" data-inset="true">
        <li>
          <img src='./img/epicurean/items/1.jpg' class='' width="200" height="200">
          <a href='../edit-item.php' style="display:inline-block;" data-transition="slide">
            <h3>Very Fancy Chair</h3>
            <p><strong>$50.00</strong></p>
            <p>This is just a description of the item details<br /> that will be displayed here. If you wish to add this to your list, then please select</p>
            <p class='ui-li-aside'><strong>Available</strong></p>
          </a>
        </li>
        <li>
          <img src='./img/epicurean/items/2.jpg' class='' width="200" height="200">
          <a href='../edit-item.php' style="display:inline-block;">
            <h3>Very Fancy Chair</h3>
            <p><strong>$40.00</strong></p>
            <p>This is just a description of the item details<br /> that will be displayed here. If you wish to add this to your list, then please select</p>
            <p class='ui-li-aside'><strong>Available</strong></p>
          </a>
        </li>
        <li>
          <img src='./img/epicurean/items/3.jpg' class='' width="200" height="200">
          <a href='../edit-item.php' style="display:inline-block;">
            <h3>Very Fancy Chair</h3>
            <p><strong>$50.00</strong></p>
            <p>This is just a description of the item details<br /> that will be displayed here. If you wish to add this to your list, then please select</p>
            <p class='ui-li-aside'><strong>Available</strong></p>
          </a>
        </li>
        <li>
          <img src='./img/epicurean/items/4.jpg' class='' width="200" height="200">
          <a href='../edit-item.php' style="display:inline-block;">
            <h3>Very Fancy Chair</h3>
            <p><strong>$50.00</strong></p>
            <p>This is just a description of the item details<br /> that will be displayed here. If you wish to add this to your list, then please select</p>
            <p class='ui-li-aside'><strong>Available</strong></p>
          </a>
        </li>
        <li>
          <img src='./img/epicurean/items/5.jpg' class='' width="200" height="200">
          <a href='../edit-item.php' style="display:inline-block;">
            <h3>Very Fancy Chair</h3>
            <p><strong>$50.00</strong></p>
            <p>This is just a description of the item details<br /> that will be displayed here. If you wish to add this to your list, then please select</p>
            <p class='ui-li-aside'><strong>Available</strong></p>
          </a>
        </li>
          <?php

          // for ($i=1; $i<=5; $i++)
          //   {
          //   echo "<li><a href='../edit-item.php'><img src='http://placehold.it/120x120&text=Item' class='ui-li-thumb ui-corner-tl'><h3>Item</h3><p><strong>$50.00</strong></p><p>This is just a description of the item details that will be displayed here. If you wish to add this to your list, then please select</p><p class='ui-li-aside'><strong>Available</strong></p></a></li>";
          //   }

          ?>
      </ul>

    </div>
  </div>
<?php include "include/footer.php" ?>