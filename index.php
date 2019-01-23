<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="responsive.css">

    <style type="text/css">
    body{
      font-family: sans-serif;
      padding-top: 50px;
    }
    .center{
      max-width: 1024px;
      margin: 0 auto;
    }
    .blocker{
      height: 20px;
      background: #eeeeee;
    }
    .wrapper{
      height: 20px;
      background: #cccccc;
    }
    .grid{
      margin-bottom: 10px;
    }

    table {
    empty-cells: show;
    border: 1px solid #cbcbcb;
}
.pure-table, table {
    border-collapse: collapse;
    border-spacing: 0;
}

    thead {
    background-color: #e0e0e0;
    color: #000;
    text-align: left;
    vertical-align: bottom;
}
th {
    border-left: 1px solid #cbcbcb;
    border-width: 0 0 0 1px;
    font-size: inherit;
    margin: 0;
    overflow: visible;
    padding: .5em 1em;
}
th.highlight {
    background-color: rgb(255, 234, 133);
}
td {
    padding: 0.5em 1em;
}
td.highlight {
    background-color: rgb(255, 250, 229);
}

td:first-child, th:first-child {
    border-left-width: 0;
}
.pure-table-bordered td {
    border-bottom: 1px solid #cbcbcb;
}

td,th {
    border-left: 1px solid #cbcbcb;
    border-width: 0 0 0 1px;
    font-size: inherit;
    margin: 0;
    overflow: visible;
    padding: .5em 1em;
}
    </style>
</head>

<body class="main">
  <div class="center">
    <?php
        function makeGrid($cols){
          echo '<h1>'.$cols.' units</h1>';
          for($i=0;$i<$cols;$i++){
            echo '
            <div class="grid">
              <div class="col-2-24 col">'.($i+1).'-'.$cols.'</div>
              <div class="col-22-24 col blocker"><div class="col-'.($i+1).'-'.$cols.' wrapper"></div></div>
            </div>
            ';
          }
        }
        makeGrid(24);
        makeGrid(16);
        makeGrid(12);
    ?>
    <br />
    <h1>Responsive</h1>
    <table class="mq-table pure-table-bordered pure-table">
      <thead>
          <tr>
              <th class="highlight">Key</th>
              <th class="highlight">CSS Media Query</th>
              <th>Applies</th>
              <th>Classname</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td class="highlight"><i>None</i></td>
              <td class="highlight"><i>None</i></td>
              <td><i>Always</i></td>
              <td><code>.col-*</code></td>
          </tr>

          <tr>
              <td class="highlight"><b><code>xx</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (max-width : 321px)</code></td>
              <td> <b>≤321px</b></td>
              <td><code>.col-<b>xx</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>xs</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 322px) and (max-width : 480px)</code></td>
              <td><b>≥322px</b> and <b>≤480px</b></td>
              <td><code>.pure-<b>xs</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>sm</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 481px) and (max-width : 600px)</code></td>
              <td><b>≥481px</b> and <b>≤600px</b></td>
              <td><code>.col-<b>sm</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>tb</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 601px) and (max-width : 768px) </code></td>
              <td><b>≥601px</b> and <b>≤768px</b></td>
              <td><code>.col-<b>tb</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>md</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 769px) and (max-width : 900px)</code></td>
              <td><b>≥769px</b> and <b>≤900px</b></td>
              <td><code>.col-<b>md</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>lg</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 901px) and (max-width : 1024px)</code></td>
              <td><b>≥901px</b> and <b>≤1024px</b></td>
              <td><code>.col-<b>lg</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>xl</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 1025px) and (max-width : 1200px)</code></td>
              <td><b>≥1025px</b> and <b>≤1200px</b></td>
              <td><code>.col-<b>xl</b>-*</code></td>
          </tr>
          <tr>
              <td class="highlight"><b><code>xxl</code></b></td>
              <td class="mq-table-mq highlight"><code>@media only screen and (min-width : 1201px)</code></td>
              <td><b>≥1201px</b></td>
              <td><code>.col-<b>xxl</b>-*</code></td>
          </tr>
      </tbody>
  </table>
  </div>
  <br /><br /><br />
  <div class="grid">
    <div class=" col blocker">
      <div class="col-24 col-xxl-24 col-xl-20-24 col-lg-15-24 col-md-12-24 col-tb-10-24 col-sm-8-24 col-xs-5-24 col-xx-2-24 wrapper"></div>
    </div>
  </div>
  <div class="col-xx-show col-hide"><code>XX -> @media only screen and (max-width : 321px)</code></div>
  <div class="col-xs-show col-hide"><code>XS -> @media only screen and (min-width : 322px) and (max-width : 480px)</code></div>
  <div class="col-sm-show col-hide"><code>SM -> @media only screen and (min-width : 481px) and (max-width : 600px)</code></div>
  <div class="col-tb-show col-hide"><code>TB -> @media only screen and (min-width : 601px) and (max-width : 768px) </code></div>
  <div class="col-md-show col-hide"><code>MD -> @media only screen and (min-width : 769px) and (max-width : 900px)</code></div>
  <div class="col-lg-show col-hide"><code>LG -> @media only screen and (min-width : 901px) and (max-width : 1024px)</code></div>
  <div class="col-xl-show col-hide"><code>XL -> @media only screen and (min-width : 1025px) and (max-width : 1200px)</code></div>
  <div class="col-xxl-show col-hide"><code>XXL -> @media only screen and (min-width : 1201px)</code></div>
  <br /><br /><br />
</body>
</html>
