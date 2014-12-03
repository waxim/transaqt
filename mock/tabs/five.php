<div class="ui form">
  <h3 class='ui header'>
    Product Stock
    <div class="sub header">Stock settings</div>
  </h3>

  <div class="field">
    <label>Minimum Stock</label>
    <p>This is the minimum stock level to be considered 'Out of stock'</p>
    <input type="text">
  </div>

  <div class="field">
    <label>Allow Backorders</label>
    <p>If set to yes products will be saleable while 'Out of stock'</p>
    <div class="ui dropdown selection">
      <input type="hidden" name="gender">
      <div class="default text">Yes</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="male">Yes</div>
        <div class="item" data-value="female">No</div>
      </div>
    </div>
  </div>

  <div class="field">
    <label>Backorder Message</label>
    <p>This message will be displayed on the product along with the 'Out of stock' alert.</p>
    <textarea class='small'></textarea>
  </div>

  <h4 class="ui horizontal header divider"><i class="cube chart icon"></i>Stock Adjustments</h4>

  <div class="field">
    <label>Direction</label>
    <p>Are you adding or removing stock?</p>
    <div class="ui dropdown selection">
      <input type="hidden" name="gender">
      <div class="default text">Adding Stock</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="male">Adding Stock</div>
        <div class="item" data-value="female">Removing Stock</div>
      </div>
    </div>
  </div>

  <div class="field">
    <label>Quantity</label>
    <p>The number to add or remove. (there is no need to use a negative)</p>
    <input type="text">
  </div>

  <div class="field">
    <label>Location</label>
    <p>Where is this stock stored?</p>
    <input type="text">
  </div>

  <div class="field">
    <label>Note</label>
    <p>Add a note about this stock movement. This is helpful for audit trails.</p>
    <textarea class='small'></textarea>
  </div>

  <h4 class="ui horizontal header divider"><i class="history icon"></i>Stock History</h4>

  <p>Current Stock Level: <strong>94</strong></p>
  <table class="ui compact celled definition table">
    <thead class="full-width">
      <tr><th>Date/Time</th><th>Qty</th><th>Note</th><th>Location</th><th>By</th><th>Actions</th></tr>
    </thead>
    <tbody>
      <tr>
        <td>12/12/12 11:30pm</td>
        <td>+112</td>
        <td>Delivery Note: JT12AST</td>
        <td>Wearhouse #1</td>
        <td>Alan Cole</td>
        <td><a class='ui button icon red'><i class='icon delete'></i></a></td>
      </tr>
    </tbody>
  </table>

  <div class='ui bay'>
      <a class='ui primary labeled icon button'><i class='icon add'></i> Add Adjustment</a>
  </div>
  <p>&nbsp;</p>

</div>
