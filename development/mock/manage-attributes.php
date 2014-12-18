
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">

        <div class='sixteen wide column'>

          <div class="ui icon warning message">
            <i class="close icon"></i>
            <i class="cubes icon"></i>
            <div class="content">
              <div class="header">Stock Warning</div>
              <p>The product <strong>Widgets #1</strong> has just hit its stock warning level.</p>
            </div>
          </div>

          <h1 class='ui header'>Manage Attributes
            <div class='ui sub header'>Add and edit product attributes.</div>
          </h1>
        </div>

        <div class='sixteen wide column'>
          <table class='ui very sortable celled padded table'>
              <thead>
                <tr><th colspan='7'>
                    <a href='./attribute-form.php' class='ui button primary floated icon labeled right'><i class='icon add'></i> New Attribute</a>
                </th></tr>
                <tr><th class='one wide'> <input type='checkbox' /> </th><th class='two wide'>Attribute Id</th><th class='five wide'>Name</th><th>Type</th><th>Default Value</th><th>Required?</th><th class='three wide'>Actions</th></tr>
              </thead>
              <tbody>
                <tr><td> <input type='checkbox' /> </td><td>colour</td><td>Colour</td><td>Dropdown Menu</td><td>None</td><td>No</td> <td><a class='ui button icon green'><i class='icon edit'></i></a> <a class='ui button icon red'><i class='icon delete'></i> </a></td></tr>
                <tr><td> <input type='checkbox' /> </td><td>weight</td><td>Weight (Kg)</td><td>Text Field</td><td>0</td><td>Yes</td> <td><a class='ui button icon green'><i class='icon edit'></i></a> <a class='ui button icon red'><i class='icon delete'></i> </a></td></tr>
                <tr><td> <input type='checkbox' /> </td><td>brand</td><td>Brand</td><td>Dropdown Menu</td><td>None</td><td>No</td> <td><a class='ui button icon green'><i class='icon edit'></i></a> <a class='ui button icon red'> <i class='icon delete'> </i> </a> </td></tr>
              </tbody>
          </table>

          <div class="ui floated right buttons">
            <div class="ui labeled icon button">
              <i class="left chevron icon"></i>
              Previous
            </div>
            <div class="ui button">1</div>
            <div class="ui button">2</div>
            <div class="ui right labeled icon button">
              Next
              <i class="right chevron icon"></i>
            </div>
          </div>
        </div>

      </div>
    </div>

    <script>
      $('.message .close').on('click', function() {
          $(this).closest('.message').fadeOut();
      });
    </script>

  <?php include "./inc/footer.php"; ?>
