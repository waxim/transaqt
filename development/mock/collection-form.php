
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">
        <div class='sixteen wide column'>
          <div class="ui breadcrumb">
            <a href='./manage-collectionss.php' class="section">Collections</a>
            <i class="right chevron icon divider"></i>
            <a class="active section">Add Collection</a>
          </div>
        </div>
        <div class="eight wide column">
          <h2 class='ui header'>
              Add A Collection
              <div class="sub header">Use the forms below to add your collection.</div>
          </h2>
        </div>
        <div class='eight wide column'></div>

        <div class='sixteen wide column'>
            <form id='add-product' method='?'>
            <div class="ui top attached tabular menu">
              <a class="item active" data-tab="first"><i class='icon pencil'></i> Basic</a>
              <a class="item" data-tab="second"><i class='icon camera'></i> Meida</a>
              <a class="item" data-tab="third"><i class='icon content'></i> Products</a>
            </div>

            <div data-tab="first" class="active ui bottom attached tab segment">
              <div class="ui form">
                <h3 class='ui header'>
                  Basic Information
                  <div class="sub header">Enter the basics of the collection below.</div>
                </h3>

                <div class="field">
                  <label>Collection Id</label>
                  <p>This is used to identify the collection, it should be unique.</p>
                  <input id='name' name='name' type="text">
                </div>

                <div class="field">
                  <label>Collection Name</label>
                  <p>This is the publically displayed name of this collection</p>
                  <input id='name' name='name' type="text">
                </div>

                <div class="field">
                  <label>Collection Type</label>
                  <p>What type of attribute is this? </p>
                  <div class="ui dropdown selection">
                    <input type="hidden" name="gender">
                    <div class="default text">Product Collection</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                      <div class="item" data-value="tf">Master Collection</div>
                      <div class="item" data-value="tf">Collection of Products</div>
                      <div class="item" data-value="ta">Collection of Collections</div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>URL Key</label>
                  <p>This is the path to the collection example.com/<strong>widget-one</strong></p>
                  <div class="ui labeled input">
                    <div class="ui label">
                      http://www.example.com/
                    </div>
                    <input type="text" placeholder="widget-one">
                  </div>
                </div>

                <div class="field">
                  <label>Collection Description</label>
                  <p>This section will be used to display information about the collection.</p>
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
                  <label>Enabled</label>
                  <p>Is this category enabled or not?</p>
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

            <div data-tab="second" class="ui bottom attached tab segment form">

                <h3 class='ui header'>
                  Collection Media
                  <div class="sub header">Add media files to your collection.</div>
                </h3>

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
                            <div class="item">Slideshow</div>
                          </div>
                        </div>
                      </td>
                      <td><div class="field"><input type="text"></div></td>
                      <td><a class='ui button icon red'><i class='icon delete'></i></a></td>
                    </tr>
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
                            <div class="item">Slideshow</div>
                          </div>
                        </div>
                      </td>
                      <td><div class="field"><input type="text"></div></td>
                      <td><a class='ui button icon red'><i class='icon delete'></i></a></td>
                    </tr>
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
                            <div class="item">Slideshow</div>
                          </div>
                        </div>
                      </td>
                      <td><div class="field"><input type="text"></div></td>
                      <td><a class='ui button icon red'><i class='icon delete'></i></a></td>
                    </tr>
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
                            <div class="item">Slideshow</div>
                          </div>
                        </div>
                      </td>
                      <td><div class="field"><input type="text"></div></td>
                      <td><a class='ui button icon red'><i class='icon delete'></i></a></td>
                    </tr>
                  </tbody>
                </table>

                <div class="ui center aligned segment drag drop">Drag and drop files here to add them to this collection.</div>

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
                        <div onclick='show_dropbox()' class="item">Dropbox</div>
                        <div class="item">SkyDrive</div>
                        <div class="item">Google Drive</div>
                        <div class="item">Amazon S3</div>
                        <div class="item">Import From URL</div>
                      </div>
                    </div>

                </div>
                <p>&nbsp;</p>

            </div>

            <p>&nbsp;</p>
            <button type='submit' id='dim' class='ui button labeled icon green floated right'><i class='icon save'></i> Save Collection</button>
            <a class='ui button labeled icon orange floated right'><i class='icon copy'></i> Save &amp; Duplicate</a>
          </form>
        </div>

      </div>
    </div>

  </div>

  <div class="ui dropbox modal">
    <i class="close icon"></i>
    <div class="header">
      Import From Dropbox
    </div>
    <div class="content">
      <div class="description">
        <div class="ui header">Select the files below you would like to import.</div>

        <div class="ui cards">

          <div class="ui four column grid">

              <div class="column">
                <div class="fluid card">
                  <div class="image small"><img src="http://placehold.it/75x75"></div>
                  <div class="content">
                    <div class="header">My Image One</div>
                    <div class="meta"><a class="group">File Type: jpeg</a></div>
                  </div>
                </div>
              </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="fluid card">
                <div class="image"><img src="http://placehold.it/75x75"></div>
                <div class="content">
                  <div class="header">My Image One</div>
                  <div class="meta"><a class="group">File Type: jpeg</a></div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
    <div class="actions">
      <div class="ui negative button">
        Cancel
      </div>
      <div class="ui positive right labeled icon button">
        Import Selected
        <i class="checkmark icon"></i>
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

    function show_dropbox(){
      $('.ui.modal.dropbox').modal('show');
    }

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
