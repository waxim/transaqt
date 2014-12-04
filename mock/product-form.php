
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">
        <div class='sixteen wide column'>
          <div class="ui breadcrumb">
            <a class="section">Products</a>
            <i class="right chevron icon divider"></i>
            <a class="active section">Add Product</a>
          </div>
        </div>
        <div class="eight wide column">
          <h2 class='ui header'>
              Add A Product
              <div class="sub header">Use the forms below to add your product.</div>
          </h2>
        </div>
        <div class='eight wide column'></div>

        <div class='four wide column'>
          <div class="ui vertical menu">
            <div class="header item">
              <i class="barcode icon"></i>Product Managment
            </div>
            <div class="item">Basics <i class='icon write'></i>
              <div class="menu">
                <a class="item">Basic Information</a>
                <a class="item">Media</a>
                <a class="item">Settings</a>
              </div>
            </div>
            <div class="item">Variations <i class='icon grid layout'></i>
                <div class="menu">
                  <a class="item">Add Product Variation</a>
                  <a class="item">Edit Variations</a>
                </div>
            </div>
            <div class="item">Custom Options <i class='icon configure'></i>
              <div class="menu">
                <a class="item">Add Custom Option</a>
                <a class="item">Edit Options</a>
              </div>
            </div>
            <div class="item">SEO &amp; Social <i class='icon google'></i>
              <div class="menu">
                <a class="item">Meta Tags</a>
                <a class="item">Open Graph</a>
                <a class="item">Sharing Options</a>
              </div>
            </div>
            <div class="item">Related &amp; Upsells <i class='icon shop'></i>
              <div class="menu">
                <a class="item">Add Related Products</a>
                <a class="item">Edit Related Products</a>
              </div>
            </div>
          </div>
        </div>
        <div class='twelve wide column'>
            <form id='add-product' method='?'>
            <div class="ui top attached tabular menu">
              <a class="item active" data-tab="first"><i class='icon pencil'></i> Basic</a>
              <a class="item" data-tab="six"><i class='icon list'></i> Attributes</a>
              <a class="item" data-tab="second"><i class='icon camera'></i> Media</a>
              <a class="item" data-tab="five"><i class='icon cubes'></i> Stock</a>
              <a class="item" data-tab="third"><i class='icon settings'></i> Settings</a>
            </div>

            <div data-tab="first" class="active ui bottom attached tab segment">
              <?php include "./tabs/one.php"; ?>
            </div>

            <div data-tab="second" class="ui bottom attached tab segment">
              <?php include "./tabs/two.php"; ?>
            </div>

            <div data-tab="third" class="ui bottom attached tab segment">
              <?php include "./tabs/three.php"; ?>
            </div>

            <div data-tab="five" class="ui bottom attached tab segment">
              <?php include "./tabs/five.php"; ?>
            </div>

            <div data-tab="six" class="ui bottom attached tab segment">
              <?php include "./tabs/six.php"; ?>
            </div>

            <p>&nbsp;</p>
            <button type='submit' class='ui button labeled icon green floated right'><i class='icon save'></i> Save Product</button>
            <a class='ui button labeled icon orange floated right'><i class='icon copy'></i> Save &amp; Duplicate</a>
          </form>
        </div>

      </div>
    </div>

  </div>
  <script>
    $('.menu .item').tab();

    $('#add-product').form({
      name: { identifier : 'name', rules: [ { type   : 'empty', prompt : 'The product name field can not be blank.' } ] },
      outline: { identifier : 'outline', rules: [ { type   : 'empty', prompt : 'The product outline field can not be blank.' } ] },
      description: { identifier : 'description', rules: [ { type   : 'empty', prompt : 'The product description field can not be blank.' } ] }
    });

  </script>

  <?php include "./inc/footer.php"; ?>
