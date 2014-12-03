
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">
        <div class="eight wide column">
          <h1 class='ui header'>
              Magento Transaqt
              <div class="sub header">Ecommerce back office of the future.</div>
          </h1>
        </div>
        <div class='eight wide column'></div>

        <div class='four wide column'>
          <div class="ui vertical menu">
            <div class="header item">
              <i class="barcode icon"></i>Product Details
            </div>
            <a class="item">Basics</a>
            <a class="item">Stock</a>
            <a class="item">Collections</a>
            <a class="item">Variations</a>
            <a class="item">Custom Options</a>
            <a class="item">SEO &amp; Social</a>
            <a class="item">Related &amp; Upsells</a>
          </div>
        </div>
        <div class='twelve wide column'>

          <div class="ui basic segment">
            <div class="ui form">

              <div class="field">
                <label>Product Name</label>
                <input type="text">
              </div>

              <div class="field">
                <label>Product Outline</label>
                <p>You may use markdown and limited html for product descriptions.</p>
                <textarea class='small'></textarea>
              </div>

              <div class="field">
                <label>Product Description</label>
                <p>You may use markdown and limited html for product descriptions.</p>
                <textarea></textarea>
              </div>

              <div class="field">
                <label>Product Identifier</label>
                <p>This is the global id for your product, normally an SKU</p>
                <input type="text">
              </div>

              <div class="field">
                <label>URL Key</label>
                <p>This is the path to the product form the url example.com/<strong>widget-one</strong></p>
                <input type="text">
              </div>

              <h4 class="ui horizontal header divider"><i class="money chart icon"></i>Prices</h4>

              <div class="three fields">
                <p>Leave a field blank to automatically convert the currency at the set exchange rate.</p>
                <div class="field">
                  <label>Normal Price</label>
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
                  <label>Special Price</label>
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

              <h4 class="ui horizontal header divider"><i class="camera chart icon"></i>Media</h4>

              <table class="ui compact celled definition table">
                <thead class="full-width">
                  <tr><th></th><th>Label</th><th>Description</th><th>Usgae</th><th>Sort</th><th>Actions</th></tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img class='ui image' src='http://placehold.it/50x50' /></td>
                    <td>
                      <div class="field"><input type="text"></div>
                    </td>
                    <td>
                      <div class="field"><input type="text"></div>
                    </td>
                    <td>
                      <div class="ui floating dropdown button">
                        <span class="text">Usage</span>
                        <div class="menu">
                          <div class="item">Thumbnail</div>
                          <div class="item">Main Image</div>
                          <div class="item">Additional Image</div>
                          <div class="item">Everything</div>
                        </div>
                      </div>
                    </td>
                    <td><div class="field"><input type="text"></div></td>
                    <td><a class='ui button icon red'><i class='icon delete'></i></a></td>
                  </tr>
                </tbody>
              </table>

              <div class="ui center aligned segment drag drop">Drag and drop files here to add them to this product.</div>

              <div class='ui bay'>
                  <a class='ui red labeled icon button'><i class='icon file'></i> Select From Media Libary</a>

                  <div class="ui floating labeled icon dropdown button primary">
                    <i class="cloud download icon"></i>
                    <span class="text">Import from Cloud Hosting</span>
                    <div class="menu">
                      <div class="header">
                        <i class="cloud icon"></i>Select Provider
                      </div>
                      <div class="divider"></div>
                      <div class="item">Dropbox</div>
                      <div class="item">SkyDrive</div>
                      <div class="item">Google Drive</div>
                      <div class="item">Amazon S3</div>
                      <div class="item">Import From URL</div>
                    </div>
                  </div>

              </div>

              <h4 class="ui horizontal header divider"><i class="settings icon"></i>Settings</h4>

              <div class="field">
                <label>Enabled</label>
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
                <label>Discoverable</label>
                <p>If a product is set to 'discoverable' it will appear in search results.</p>
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
                <label>Allow Comments</label>
                <p>If set to 'yes', logged in users will be able to comment on this product.</p>
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
                <label>Allow Ratings</label>
                <p>If set to 'yes', logged in users will be able to add ratings to this product.</p>
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
                <label>Manage Stock</label>
                <p>If set to 'yes' the system will manage stock levels for this product. You'll have to load stock in the "Stock" tab.</p>
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
                <label>Tax Class</label>
                <p>Products will be taxed at your default tax rate unless told otherwise.</p>
                <div class="ui dropdown selection">
                  <input type="hidden" name="gender">
                  <div class="default text">Default</div>
                  <i class="dropdown icon"></i>
                  <div class="menu">
                    <div class="item" data-value="male">VAT</div>
                    <div class="item" data-value="female">None</div>
                  </div>
                </div>
              </div>

              <div class="ui divider bottom"></div>

              <a class='ui button labeled icon green floated right'><i class='icon save'></i> Save Product</a>
              <a class='ui button labeled icon orange floated right'><i class='icon copy'></i> Save &amp; Duplicate</a>

          </div>
        </div>

      </div>
    </div>

  </div>


  <?php include "./inc/footer.php"; ?>
