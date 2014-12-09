
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">
        <div class='sixteen wide column'>
          <div class="ui breadcrumb">
            <a href='./manage-attributes.php' class="section">Attributes</a>
            <i class="right chevron icon divider"></i>
            <a class="active section">Add Attribute</a>
          </div>
        </div>
        <div class="eight wide column">
          <h2 class='ui header'>
              Add An Attribute
              <div class="sub header">Use the forms below to add your attribute.</div>
          </h2>
        </div>
        <div class='eight wide column'></div>

        <div class='sixteen wide column'>
            <form id='add-product' method='?'>
            <div class="ui top attached tabular menu">
              <a class="item active" data-tab="first"><i class='icon pencil'></i> Basic</a>
              <a class="item" data-tab="second"><i class='icon pencil'></i> Additional Information</a>
            </div>

            <div data-tab="first" class="active ui bottom attached tab segment">
              <div class="ui form">
                <h3 class='ui header'>
                  Basic Information
                  <div class="sub header">Enter the basics of the attribute below.</div>
                </h3>

                <div class="field">
                  <label>Attribute Id</label>
                  <p>This is used to identify the attribute, it should be unique.</p>
                  <input id='name' name='name' type="text">
                </div>

                <div class="field">
                  <label>Attribute Name</label>
                  <p>This is the publically displayed name of this attribute</p>
                  <input id='name' name='name' type="text">
                </div>

                <div class="field">
                  <label>Attribute Type</label>
                  <p>What type of attribute is this? Some attribute types require 'Additional Information' in which case a new tab will appear above.</p>
                  <div class="ui dropdown selection">
                    <input type="hidden" name="gender">
                    <div class="default text">Text Field</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                      <div class="item" data-value="tf">Text Field</div>
                      <div class="item" data-value="ta">Text Area (Larger Text Field)</div>
                      <div class="item" data-value="dm">Dropdown Menu</div>
                      <div class="item" data-value="df">Date Field</div>
                      <div class="item" data-value="if">Image/File</div>
                      <div class="item" data-value="yn">Yes/No</div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Attribute Description</label>
                  <p>This will be used as additional information to help users adding products using this attribute. </p>
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
                  <label>Default Value</label>
                  <p>This will be used as the default prefilled value of this attribute, if this attribute requires options leave this filed blank and selected the 'default' checkbox when entering options.</p>
                  <input id='name' name='name' type="text">
                </div>

                <div class="field">
                  <label>Required?</label>
                  <p>If required is set to yes this attribute will be automatically required by every product.</p>
                  <div class="ui dropdown selection">
                    <input type="hidden" name="gender">
                    <div class="default text">No</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                      <div class="item" data-value="tf">Yes</div>
                      <div class="item" data-value="ta">No</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div data-tab="second" class="ui bottom attached tab segment">
              <h3 class='ui header'>
                Additional Information
                <div class="sub header">If this attribute requires additional information those options will be show below.</div>
              </h3>
              <div class='ui form'>
              <table id='attributes-table' class="ui compact celled definition table">
                <thead class="full-width">
                  <tr><th>Display Text</th><th>Value</th><th>Default</th><th>Sort</th><th>Actions</th></tr>
                </thead>
                <tbody>

                  <tr>
                    <td><div class="field"><input type="text" value='Red'></div></td>
                    <td><div class="field"><input type="text" value='red'></div></td>
                    <td><div class="field"><div class="ui fitted checkbox"><input name='check' type="radio" checked><label></label></div></td>
                    <td><div class="field"><input type="text" value='1'></div></td>
                    <td><a onclick='delete_row(this)' class='ui button icon red'><i class='icon delete'></i></a></td>
                  </tr>
                  <tr>
                    <td><div class="field"><input type="text" value='Yellow'></div></td>
                    <td><div class="field"><input type="text" value='yellow'></div></td>
                    <td><div class="field"><div class="ui fitted checkbox"><input name='check' type="radio"><label></label></div></td>
                    <td><div class="field"><input type="text" value='2'></div></td>
                    <td><a onclick='delete_row(this)' class='ui button icon red'><i class='icon delete'></i></a></td>
                  </tr>
                  <tr>
                    <td><div class="field"><input type="text" value='Green'></div></td>
                    <td><div class="field"><input type="text" value='green'></div></td>
                    <td><div class="field"><div class="ui fitted checkbox"><input name='check' type="radio"><label></label></div></td>
                    <td><div class="field"><input type="text" value='3'></div></td>
                    <td><a onclick='delete_row(this)' class='ui button icon red'><i class='icon delete'></i></a></td>
                  </tr>


                </tbody>
              </table>

              <button type='submit' onclick='add_row()' class='ui button labeled icon primary floated right'><i class='icon add'></i> Add Another Row</button>

              </div>

            </div>

            <p>&nbsp;</p>
            <button type='submit' id='dim' class='ui button labeled icon green floated right'><i class='icon save'></i> Save Attribute</button>
            <a class='ui button labeled icon orange floated right'><i class='icon copy'></i> Save &amp; Duplicate</a>
          </form>
        </div>

      </div>
    </div>

  </div>

  <script>
    $('.menu .item').tab();
    $(document).ready(function(){ $('.ui.fitted.checkbox').checkbox('is radio'); });

    $('#add-product').form({
      name: { identifier : 'name', rules: [ { type   : 'empty', prompt : 'The product name field can not be blank.' } ] },
      outline: { identifier : 'outline', rules: [ { type   : 'empty', prompt : 'The product outline field can not be blank.' } ] },
      description: { identifier : 'description', rules: [ { type   : 'empty', prompt : 'The product description field can not be blank.' } ] }
    });

    function add_row(){
      var row = '<tr><td><div class="field"><input type="text"></div></td><td><div class="field">'
      + '<input type="text"></div></td><td><div class="field"><div class="ui fitted checkbox"><input name="check" type="radio">'
      + '<label></label></div></td><td><div class="field"><input type="text"></div></td><td><a onclick="delete_row(this)" class="ui button icon red">'
      + '<i class="icon delete"></i></a></td></tr>';
      $('#attributes-table tbody').append(row);

      $('.ui.fitted.checkbox').checkbox('is radio');

    }

    function delete_row(ele){
      $(ele).parent().parent().remove();
    }

  </script>

  <?php include "./inc/footer.php"; ?>
