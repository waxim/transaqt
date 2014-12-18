<div class="ui form">
  <h3 class='ui header'>
    Product Attributes
    <div class="sub header">The individual attributes of this product.</div>
  </h3>

  <div class="field">
    <label>Weight</label>
    <p>Products weight in KG</p>
    <input type="text">
  </div>

  <div class="field">
    <label>Colour</label>
    <p>This colour of this product, if you wish to have muliple colours you should use variations.</p>
    <div class="ui dropdown selection">
      <input type="hidden" name="gender">
      <div class="default text">Blue</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="male"><i class='icon circle' style='color: blue;'></i> Blue</div>
        <div class="item" data-value="female"><i class='icon circle' style='color: pink;'></i> Pink</div>
        <div class="item" data-value="female"><i class='icon circle' style='color: red;'></i> Red</div>
        <div class="item" data-value="female"><i class='icon circle' style='color: brown;'></i> Brown</div>
      </div>
    </div>
  </div>

  <p>&nbsp;</p>
  <h4 class="ui divider"></h4>

  <div class='ui bay'>
      <a class='ui primary labeled icon button'><i class='icon add'></i> Add Attribute</a>
  </div>
  <p>&nbsp;</p>

</div>
