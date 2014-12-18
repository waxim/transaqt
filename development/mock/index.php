
  <?php include "./inc/header.php"; ?>

    <div class='main container'>
      <div class="ui grid">
        <div class='sixteen wide column'>
          <h1 class='ui header'>Dashboard
            <div class='ui sub header'>All the facts and figures of your store.</div>
          </h1>
        </div>

        <div class='four wide column'>
          <div class='center aligned basic segment'>
            <div class="ui statistic">
              <div class="value">900</div>
              <div class="label">Sales</div>
            </div>
          </div>
        </div>

        <div class='four wide column'>
          <div class='center aligned basic segment'>
            <div class="ui statistic">
              <div class="value">£12k</div>
              <div class="label">Revenue</div>
            </div>
          </div>
        </div>

        <div class='four wide column'>
          <div class='center aligned basic segment'>
            <div class="ui statistic">
              <div class="value">5</div>
              <div class="label">Open Cases</div>
            </div>
          </div>
        </div>

        <div class='four wide column'>
          <div class='center aligned basic segment'>
            <div class="ui statistic">
              <div class="value">12</div>
              <div class="label">Pending Orders</div>
            </div>
          </div>
        </div>


        <div class='sixteen wide column'><p>&nbsp;</p></div>

        <div class='sixteen wide column'>
          <h3 class='ui header'>Last 30 Days
            <div class='ui sub header'>Sales for the last 30 days.</div>
          </h3>
          <canvas id="myChart" width='1000' height='400'></canvas>
        </div>

        <script>
          var data = {
              labels: ["1", "2", "3", "4", "5", "6", "7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30"],
              datasets: [
                  {
                      label: "Orders",
                      fillColor: "rgba(220,220,220,0.2)",
                      strokeColor: "rgba(220,220,220,1)",
                      pointColor: "rgba(220,220,220,1)",
                      pointStrokeColor: "#fff",
                      pointHighlightFill: "#fff",
                      pointHighlightStroke: "rgba(220,220,220,1)",
                      data: ["10", "20", "30", "40", "35", "26", "47","58","79","110","11","12","33","64","25","36","47","18","19","20","21","22","23","24","25","26","27","28","29","30"]
                  }
              ]
          }
          var ctx = $("#myChart").get(0).getContext("2d");
          var myLineChart = new Chart(ctx).Line(data);
        </script>

        <div class='sixteen wide column'><p>&nbsp;</p></div>

        <div class='eight wide column'>
          <h3 class='ui header'>Last 5 Orders
            <div class='ui sub header'>The last 5 orders received by the site</div>
          </h3>

          <table class='ui table'>
            <tr><td>#10101</td><td>Alan Cole</td><td>&pound;129.99</td><td><a class="ui blue label">Pending</a></td></tr>
            <tr><td>#10101</td><td>Alan Cole</td><td>&pound;129.99</td><td><a class="ui blue label">Pending</a></td></tr>
            <tr><td>#10101</td><td>Alan Cole</td><td>&pound;129.99</td><td><a class="ui blue label">Pending</a></td></tr>
            <tr><td>#10101</td><td>Alan Cole</td><td>&pound;129.99</td><td><a class="ui blue label">Pending</a></td></tr>
            <tr><td>#10101</td><td>Alan Cole</td><td>&pound;129.99</td><td><a class="ui blue label">Pending</a></td></tr>
          </table>
        </div>

        <div class='eight wide column'>
          <h3 class='ui header'>Open Tickets
            <div class='ui sub header'>Customer tickets waiting to be processed.</div>
          </h3>

          <div class="ui list">

            <div class="item">
              <div class="right floated compact ui button">View Ticket</div>
              <img class="ui avatar image" src="http://placehold.it/50x50">
              <div class="content">
                <a class="header">Alan Cole</a>
                <div class="description">My order of widgets was missing the blue widget.</div>
              </div>
            </div>

            <div class="item">
              <div class="right floated compact ui button">View Ticket</div>
              <img class="ui avatar image" src="http://placehold.it/50x50">
              <div class="content">
                <a class="header">Alan Cole</a>
                <div class="description">My order of widgets was missing the blue widget.</div>
              </div>
            </div>

            <div class="item">
              <div class="right floated compact ui button">View Ticket</div>
              <img class="ui avatar image" src="http://placehold.it/50x50">
              <div class="content">
                <a class="header">Alan Cole</a>
                <div class="description">My order of widgets was missing the blue widget.</div>
              </div>
            </div>

            <div class="item">
              <div class="right floated compact ui button">View Ticket</div>
              <img class="ui avatar image" src="http://placehold.it/50x50">
              <div class="content">
                <a class="header">Alan Cole</a>
                <div class="description">My order of widgets was missing the blue widget.</div>
              </div>
            </div>

            <div class="item">
              <div class="right floated compact ui button">View Ticket</div>
              <img class="ui avatar image" src="http://placehold.it/50x50">
              <div class="content">
                <a class="header">Alan Cole</a>
                <div class="description">My order of widgets was missing the blue widget.</div>
              </div>
            </div>

          </div>

          <div class='sixteen wide column'><p>&nbsp;</p></div>


      </div>
    </div>

  <?php include "./inc/footer.php"; ?>
