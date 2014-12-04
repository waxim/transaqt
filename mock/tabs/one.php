<div class="ui form">
  <h3 class='ui header'>
    Basic Information
    <div class="sub header">Enter the basics of the product below.</div>
  </h3>

  <div class="field">
    <label>Product Type</label>
    <p>What type of product is this? A product group is used as a container for 'Variations' and isn't actually a product at all.</p>
    <div class="ui dropdown selection">
      <input type="hidden" name="gender">
      <div class="default text">Regular</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="male">Regular Product</div>
        <div class="item" data-value="virtual">Virtual Product</div>
        <div class="item" data-value="female">Product Group</div>
      </div>
    </div>
  </div>

  <div class="field">
    <label>Product Name</label>
    <p>In general you should try and avoid long names.</p>
    <input id='name' name='name' type="text">
  </div>

  <div class="field">
    <label>Product Outline</label>
    <p>You may use markdown and limited html for product descriptions.</p>
    <div class="ui block top attached header">
      <div class="ui icon buttons">
        <div class="ui button"><i class="bold icon"></i></div>
        <div class="ui button"><i class="italic icon"></i></div>
        <div class="ui button"><i class="underline icon"></i></div>
        <div class="ui button"><i class="anchor icon"></i></div>
        <div class="ui button"><i class="camera icon"></i></div>
        <div class="ui button"><i class="table icon"></i></div>
      </div>
      <div class="ui icon buttons">
        <div class="ui button"><i class="content icon"></i>Insert Block</div>
      </div>

      <div class="ui icon buttons">
        <div class="ui button"><i class="code icon"></i>Insert Widget</div>
      </div>

    </div>
    <div class='ui bottom attached secondary segment'>
      <textarea name='outline' id='outline' class='small'></textarea>
    </div>
  </div>

  <div class="field">
    <label>Product Description</label>
    <p>You may use markdown and limited html for product descriptions.</p>
    <div class="ui block top attached header">
      <div class="ui icon buttons">
        <div class="ui button"><i class="bold icon"></i></div>
        <div class="ui button"><i class="italic icon"></i></div>
        <div class="ui button"><i class="underline icon"></i></div>
        <div class="ui button"><i class="anchor icon"></i></div>
        <div class="ui button"><i class="camera icon"></i></div>
        <div class="ui button"><i class="table icon"></i></div>
      </div>
      <div class="ui icon buttons">
        <div class="ui button"><i class="content icon"></i>Insert Block</div>
      </div>

      <div class="ui icon buttons">
        <div class="ui button"><i class="code icon"></i>Insert Widget</div>
      </div>

    </div>
    <div class='ui bottom attached secondary segment'>
      <textarea name='description' id='description'></textarea>
    </div>
  </div>

  <div class="field">
    <label>Product Identifier</label>
    <p>This is the global id for your product, normally an SKU</p>
    <input type="text">
  </div>

  <div class="field">
    <label>URL Key</label>
    <p>This is the path to the product form the url example.com/<strong>widget-one</strong></p>
    <div class="ui labeled input">
      <div class="ui label">
        http://www.example.com/
      </div>
      <input type="text" placeholder="widget-one">
    </div>
  </div>


  <div class="field">
    <label>Collections</label>
    <p>Which collections should this product belong to?</p>
    <div class="ui right labeled left icon input">
      <i class="tags icon"></i>
      <input type="text" placeholder="Enter collections">
      <div class="ui tag label">Collections</div>
    </div>
  </div>

  <h4 class="ui horizontal header divider"><i class="money chart icon"></i>Prices</h4>

  <div class="three fields">
    <p>Leave a field blank to automatically convert the currency at the set exchange rate.</p>
    <div class="field">
      <label>Normal Price (Excluding Taxes)</label>
      <div class="ui icon input">
        <input type="text" placeholder="Pound Sterling">
        <i class="gbp icon"></i>
      </div>
    </div>

    <div class="field">
      <label>&nbsp;</label>
      <div class="ui icon input">
        <input type="text" placeholder="Euros">
        <i class="eur icon"></i>
      </div>
    </div>

    <div class="field">
      <label>&nbsp;</label>
      <div class="ui icon input">
        <input type="text" placeholder="US Dollar">
        <i class="usd icon"></i>
      </div>
    </div>

  </div>

  <div class="three fields">
    <p>Setting a special price will override the current price and show the discount amount.</p>
    <div class="field">
      <label>Special Price (Excluding Taxes)</label>
      <div class="ui icon input">
        <input type="text" placeholder="Pound Sterling">
        <i class="gbp icon"></i>
      </div>
    </div>

    <div class="field">
      <label>&nbsp;</label>
      <div class="ui icon input">
        <input type="text" placeholder="Euros">
        <i class="eur icon"></i>
      </div>
    </div>

    <div class="field">
      <label>&nbsp;</label>
      <div class="ui icon input">
        <input type="text" placeholder="US Dollar">
        <i class="usd icon"></i>
      </div>
    </div>
    <p>&nbsp;</p>

  </div>
</div>
