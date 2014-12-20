<?php ?>
<html>
<head>
  <title><?=$this->e($title)?></title>
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
    <?=$this->section('content')?>
  </div>
</body>
</html>
