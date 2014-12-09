
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">

        <div class='sixteen wide column'>
          <h1 class='ui header'>Manage Products
            <div class='ui sub header'>Add and edit products.</div>
          </h1>
        </div>

        <div class='sixteen wide column'>
          <table class='ui very sortable celled padded table'>
              <thead>
                <tr><th colspan='6'>
                    <div class="ui action input half floated left">
                      <input type="text" placeholder="Search by name, id or description...">
                      <div class="ui icon button"><i class="search icon"></i></div>
                    </div>
                    <a href='./product-form.php' class='ui button primary floated icon labeled right'><i class='icon add'></i> New Product</a>
                    <a class='ui button orange dropdown floated icon right'><i class='icon filter'></i>
                      <div class='menu'>
                        <div class='item'>Enabled Products</div>
                        <div class='item'>Disabled Products</div>
                        <div class='item'>Out Of Stock Products</div>
                        <div class='item'>Almost Out Of Stock Products</div>
                      </div>
                    </a>
                </th></tr>
                <tr><th class='one wide'> <div class='ui checkbox'><input type='checkbox' /></div> </th><th class='two wide'>Product Id</th><th class='five wide'>Name</th><th>Type</th><th>Price</th><th>Stock</th><th class='three wide'>Actions</th></tr>
              </thead>
              <tbody>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Aroduct #1</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Broduct #2</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Croduct #3</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Droduct #4</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Eroduct #5</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Froduct #6</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Groduct #7</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Hroduct #8</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Iroduct #9</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #10</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #11</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #12</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #13</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #14</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #15</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #16</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #17</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #18</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
                <tr><td> <div class='ui checkbox'><input type='checkbox' /></div> </td><td>SKU-12ID</td><td>Product #19</td><td>Default</td><td>&pound;12.99</td><td>112</td><td><a class='ui button icon green'><i class='icon edit'></i></a><a class='ui button icon primary'><i class='icon cube'></i></a> <a class='ui button icon red'><i class='icon delete'></i></a></td></tr>
              </tbody>
          </table>

          <div class="ui floated right buttons">
            <div class="ui labeled icon button">
              <i class="left chevron icon"></i>
              Previous
            </div>
            <div class="ui button">1</div>
            <div class="ui button">2</div>
            <div class="ui button">3</div>
            <div class="ui button">4</div>
            <div class="ui button">5</div>
            <div class="ui button">6</div>
            <div class="ui right labeled icon button">
              Next
              <i class="right chevron icon"></i>
            </div>
          </div>
        </div>

      </div>
    </div>

  <?php include "./inc/footer.php"; ?>
