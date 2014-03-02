<?php include "include/header.php" ?>
  <div data-role="page">
    <?php include "include/menu-panel.php" ?>

    <div data-role="header" data-position="fixed">
      <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
      <h1>Create Proposal</h1>
    </div>

    <div data-role="content" role="main">

    	<input type="text" placeholder="Event Name" class="ui-input-text ui-body-c">
    	<input type="text" placeholder="Event Type" class="ui-input-text ui-body-c">
    	<input type="text" placeholder="Client Name" class="ui-input-text ui-body-c">
    	<input type="text" placeholder="Client Contact" class="ui-input-text ui-body-c">
        <fieldset class="ui-grid-b">
        <div class="ui-block-a">
            <div role="heading" class="ui-controlgroup-label">Total Guests</div>
<input type="number" name="number" pattern="[0-9]*" id="number-pattern" value="" placeholder="Pattern attribute [0-9]* for a numeric keypad" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset">
        </div>
        <div class="ui-block-b">
          <div role="heading" class="ui-controlgroup-label">Start Date</div>
          <input type="date" name="date" id="date" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset">
        </div>
        <div class="ui-block-c">
          <div role="heading" class="ui-controlgroup-label">End Date</div>
          <input type="date" name="date" id="date" value="" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset">
        </div>
      </fieldset>


      <fieldset class="ui-grid-a">
        <div class="ui-block-a"><a href="../proposal-edit.php" data-transition="fade"><button data-theme="a">Save</button></a></div>
        <div class="ui-block-b"><a href="../dialog/cancel.html"  data-rel="dialog"  data-corners="true" data-theme="c" ><button data-theme="b">Cancel</button></a></div>
      </fieldset>

    </div>
  </div>
<?php include "include/footer.php" ?>