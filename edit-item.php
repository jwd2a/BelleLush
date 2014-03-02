<?php include "include/header.php" ?>
  <div data-role="page">
    <?php include "include/menu-panel.php" ?>
    <div data-role="header" data-position="fixed">
      <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
      <h1>Edit Item</h1>
      
    </div>

    <div data-role="content" role="main" class="edit-select-page">
<div class="select-options-menu">
      <div class="ui-body ui-body-a">
    <fieldset class="ui-grid-b">
        <div class="ui-block-a">
          <a href="../edit-select.php" data-transition="slide" data-direction="reverse"><button data-theme="b" class="ui-btn-hidden" data-disabled="false">Save</button></a>
        </div>
        <div class="ui-block-b">
          Seating<br />
          2 / 5
        </div>
        <div class="ui-block-c">
          <a href="../dialog/cancel.html"  data-rel="dialog"  data-corners="true" data-theme="c" ><button data-theme="b">Cancel</button></a>
        </div>
      </fieldset>
    </div>
  </div>
 <div style="text-align:center;">
        <img src='./img/epicurean/items/1.jpg' class='' width="300" height="300" style="text-align:center;">
 </div>
      <ul data-role="listview" data-inset="true">
        <li>
          <!-- <a href='../edit-item.php' style="display:inline-block;"> -->
            <h2>Very Fancy Chair</h2>
            <h4>$50.00</h4>
            <br />
            <p>This is just a description of the item details that will be displayed here. If you wish to add this to your list, then please select</p>
            <p class='ui-li-aside'><strong>Available</strong></p>
            <br >
<div class="select-options">
  <!-- ../dialog/item-added.html" -->
  <a href="../dialog/item-added.html" data-rel="dialog" class="button select-add" ><button data-theme="b" class="ui-btn-hidden" data-disabled="false"> Add </button></a>
  <a href="#" class="button select-share"><button data-theme="b" class="ui-btn-hidden" data-disabled="false"> Share</button></a>
</div>
          <!-- </a> -->
        </li>
       </ul>
        <div class="overview-list">

    <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke ui-table ui-table-reflow">
      <thead>
        <tr>
          <th data-priority="1">Size</th>
          <th data-priority="persist">Capacity</th>
          <th data-priority="2">Available</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><b class="ui-table-cell-label">Rank</b>42"</th>
          <td><b class="ui-table-cell-label">Movie Title</b><a href="#" data-rel="external" class="ui-link">seats 8</a></td>
          <td><b class="ui-table-cell-label">Year</b>Yes</td>
        </tr>
        <tr>
          <th><b class="ui-table-cell-label">Rank</b>72"</th>
          <td><b class="ui-table-cell-label">Movie Title</b><a href="#" data-rel="external" class="ui-link">seats 12</a></td>
          <td><b class="ui-table-cell-label">Year</b>No</td>
        </tr>
      </tbody>
    </table>
    <div class="notes-panel">
      <h3>Notes</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, iste eos ducimus quae doloremque tenetur cumque laboriosam dolores omnis eaque quia quas aspernatur iusto unde similique deserunt temporibus praesentium perspiciatis.
      </p>
    </div>
    
  </div>

    </div>
  </div>
<?php include "include/footer.php" ?>