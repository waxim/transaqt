
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">

        <div class='sixteen wide column'>

          <h1 class='ui header'>Manage Collections
            <div class='ui sub header'>Add and edit product collections.</div>
          </h1>
        </div>

        <div class='sixteen wide column'>
          <table class='ui very sortable celled padded table'>
              <thead>
                <tr><th colspan='7'>
                    <a href='./collection-form.php' class='ui button primary floated icon labeled right'><i class='icon add'></i> New Collection</a>
                </th></tr>
                <tr><th class='one wide'> <input type='checkbox' /> </th><th class='two wide'>Collection Id</th><th class='five wide'>Name</th><th>Level</th><th>Landing Page</th><th>Products</th><th class='three wide'>Actions</th></tr>
              </thead>
              <tbody>
                <tr><td> <input type='checkbox' /> </td><td>mens</td><td>Mens</td><td>Top</td><td>mens.html</td><td>194</td> <td><a class='ui button icon green'><i class='icon edit'></i></a> <a class='ui button icon red'><i class='icon delete'></i> </a></td></tr>
                <tr><td> <input type='checkbox' /> </td><td>womens</td><td>Womens</td><td>Top</td><td>woments.html</td><td>112</td> <td><a class='ui button icon green'><i class='icon edit'></i></a> <a class='ui button icon red'><i class='icon delete'></i> </a></td></tr>
                <tr><td> <input type='checkbox' /> </td><td>dresses</td><td>Dresses</td><td>Secondary</td><td>womens-dresses.html</td><td>14</td> <td><a class='ui button icon green'><i class='icon edit'></i></a> <a class='ui button icon red'> <i class='icon delete'> </i> </a> </td></tr>
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
