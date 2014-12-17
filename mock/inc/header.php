<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Magento Admin</title>


  <link rel="stylesheet" type="text/css" class="ui" href="./assets/semantic.min.css">
  <link rel="stylesheet" type="text/css" class="ui" href="./assets/app.css">

  <script src="./assets/jquery.min.js"></script>
  <script src="./assets/semantic.min.js"></script>
  <script src="./assets/chart.js"></script>
  <script>
    function goto(location){
      window.location = location;
    }
  </script>
</head>
<body class='pushable'>

  <div class='pusher'>

    <div class='verytop container' style='display: none'>
      <div class='ui grid inner'>
        <div class="eight wide column">
            <h1 class='ui header white'>Transaqt
              <div class="sub header">Better Shopping.</div>
            </h1>
        </div>
        <div class="eight wide column"></div>
      </div>
    </div>

    <div class='top container'>
      <div class='ui inner'>
        <div class="ui tiered black inverted menu">
          <div class="menu">
            <a onclick="goto('./index.php')" class="ui dropdown item"> Dash</a>
            <a class="ui dropdown item"> Products
              <div class="menu">
                <div onclick="goto('./product-form.php')" class="item"><i class='icon add'></i> Add Product</div>
                <div onclick="goto('./manage-products.php')" class="item"><i class='icon tasks'></i> Manage Products</div>
                <div onclick="goto('./manage-attributes.php')" class="item"><i class='icon list'></i> Manage Attributes</div>
                <div onclick="goto('./manage-collections.php')" class="item"><i class='icon list'></i> Manage Collections</div>
                <div class="item"><i class='icon cube'></i> Stock Adjustment</div>
              </div>
            </a>
            <a class="ui dropdown item"> Sales
              <div class="menu">
                <div class="ui dropdown item"><i class='icon inbox'></i> Orders</div>
                <div class="item"><i class='icon money'></i> Refunds</div>
                <div class="item"><i class='icon retweet'></i> Exchanges</div>
                <div class="item"><i class='icon truck'></i> Shipments</div>
                <div class="item"><i class='icon building'></i> Fullfilment</div>
              </div>
            </a>
            <a class="ui dropdown item"> Customers
              <div class="menu">
                <div class="item"><i class='icon add'></i> Add A Customer</div>
                <div class="item"><i class='icon tasks'></i> Manage Customers</div>
              </div>
            </a>
            <a class="ui dropdown item"> Tickets
              <div class="menu">
                <div class="item"><i class='icon legal'></i> View New Tickets</div>
                <div class="item"><i class='icon reply'></i> Tickets Awating Reply</div>
                <div class="item"><i class='icon tasks'></i> All Tickets</div>
              </div>
            </a>
            <a class="ui dropdown item"> Media
              <div class="menu">
                <div class="item"><i class='icon tasks'></i> Manager Media</div>
              </div>
            </a>
            <a class="ui dropdown item"> Promotions
              <div class="menu">
                <div class="item"><i class='icon add'></i> Add A Coupon</div>
                <div class="item"><i class='icon add'></i> Add A Product Discount</div>
                <div class="item"><i class='icon add'></i> Add A Site Promotion</div>
                <div class="item"><i class='icon tasks'></i> Manage Promotions</div>
              </div>
            </a>
            <a class="ui dropdown item"> Reports
              <div class="menu">
                <div class="item"><i class='icon bar chart'></i> Sales Reports</div>
                <div class="item"><i class='icon bar chart'></i> Finance Reports</div>
                <div class="item"><i class='icon bar chart'></i> Product Reports</div>
                <div class="item"><i class='icon bar chart'></i> Customer Reports</div>
                <div class="item"><i class='icon bar chart'></i> Traffic Reports</div>
                <div class="item"><i class='icon bar chart'></i> Stock Reports</div>
                <div class="item"><i class='icon content'></i> Audit Trails</div>
                <div class="item"><i class='icon pencil'></i> Report Designer</div>
              </div>
            </a>
            <a class="ui dropdown item"> Content
              <div class="menu">
                <div class="item"><i class='icon file'></i>Pages</div>
                <div class="item"><i class='icon content'></i>Blocks</div>
                <div class="item"><i class='icon translate'></i>Strings</div>
                <div class="item"><i class='icon browser'></i>Menus</div>
              </div>
            </a>
            <a class="ui dropdown item"> Settings
              <div class="menu">
                <div class="item"><i class='icon money'></i> Tax Rates</div>
                <div class="item"><i class='icon truck'></i> Delivery Options</div>
                <div class="item"><i class='icon envelope'></i> Emails</div>
                <div class="item"><i class='icon users'></i> Users</div>
                <div class="item"><i class='icon yen'></i> Currencies</div>
                <div class="item"><i class='icon flag'></i> Languages</div>
                <div class="item"><i class='icon payment'></i> Payment Gateways</div>
                <div class="item"><i class='icon file pdf'></i> PDF Designer</div>
                <div class="item"><i class='icon building'></i> Warehouses</div>
                <div class="item"><i class='icon code'></i> Plugins</div>
                <div class="item"><i class='icon unordered list'></i> Order Statuses</div>
                <div class="item"><i class='icon settings'></i> Site Settings</div>
                <div class="item"><i class='icon settings'></i> Product Settings</div>
                <div class="item"><i class='icon settings'></i> Customer Settings</div>
                <div class="item"><i class='icon settings'></i> General Settings</div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
