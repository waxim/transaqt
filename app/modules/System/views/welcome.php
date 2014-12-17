<html>
  <head>
    <title>Transaqt.io</title>
    <link href='//fonts.googleapis.com/css?family=Lato:100,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <style>
      html, body { padding: 0px; margin: 0px; font-family: 'Lato', sans-serif; }
      body { background-color: #f2f2f2; }
      .container { width: 800px; margin: auto; margin-top: 50px; padding: 40px; background-color: #fff; border-radius: 5px; border-top: 5px solid #3b83c0; }
      table { width: 100%; }
      table tr td { padding-top: 10px; padding-bottom: 10px; }
      table tr:nth-child(even) { background: #f2f2f2; }
      .planned { color: #ccc !important; }
      .email { width: 100%; line-height: 20px; font-size: 11px; text-align: right; }
    </style>
  </head>
  <body>
    <div class='container'>
      <h1>Transaqt.io</h1>
      <p>I'm building something, It might take a while. Currently while the module system is being built everything is routing here.</p>
      <table>
        <tr><td>Mock Interface</td><td>Active Development</td><td>10%</td></tr>
        <tr><td>Build Core</td><td>Active Development</td><td>5%</td></tr>
        <tr><td>100% Test Coverage</td><td>Active Development</td><td>1%</td></tr>
        <tr class='planned'><td>Module System</td><td>Planned</td><td>0%</td></tr>
        <tr class='planned'><td>Core Modules</td><td>Planned</td><td>0%</td></tr>
        <tr class='planned'><td>Intergrations</td><td>Planned</td><td>0%</td></tr>
      </table>
      <h4>Debug</h4>
      <pre>
        {{ #debug_info }}
      </pre>

      <div class='email'>Built by <a href='mailto:me@alancole.io'>Alan Cole</a></div>
    </div>
  </body>
</html>
