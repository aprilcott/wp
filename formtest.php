<?php
error_reporting(0);
if (isset($_GET['viewsource'])) {
  echo "<pre>\n";
  echo "---------- BEGIN SOURCE CODE ------------\n";
  foreach (file($_SERVER['SCRIPT_FILENAME']) as $i => $line)
    printf("%3u: %1s \n", $i, rtrim(htmlentities($line)));
  echo "---------- END  SOURCE  CODE ------------\n";
  echo "</pre>\n\n";
}

function pre($vP)
{
  echo "<pre>";
  print_r($vP);
  echo "</pre>";
}

function htmlentities_recursive($var)
{
  if (is_array($var)) {
    foreach ($var as &$v)
      $v = htmlentities_recursive($v);
    return $var;
  }
  return htmlentities($var);
}

$safePost = htmlentities_recursive($_POST);
$safeGet = htmlentities_recursive($_GET);


function processRequestData() {}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>WP Form Tester</title>
  <style>
    html {
      background-image: url('/~e54061/img/card-back-blue.png');
      padding: 0px;
      margin: 0px;
      font-family: monospace;
      font-size: 1.3em;
      color: #111;
      height: 100%;
    }

    body {
      background-color: #fff;
      width: 90%;
      min-height: 90%;
      min-width: 600px;
      margin: 10px auto;
      padding: 20px;
      box-shadow: 0 0 10px #000;
      border-radius: 10px;
    }

    header {
      text-align: center;
    }

    a,
    p span,
    h4 span,
    pre,
    .r {
      color: #900;
    }

    h1,
    h2,
    form {
      margin: 10px;
    }

    p,
    pre {
      margin-left: 30px;
      word-wrap: break-word;
      white-space: pre-wrap;
    }

    hr {
      margin: 30px 0px;
    }
  </style>
</head>

<body ondblclick="window.scrollTo(0,0);">
    <header>
      <h1>&star; Web Programming Form Tester &star;</h1>
      <p>This page shows you what your form has submitted via the POST and GET methods as name &amp; value pairs.</p>
    </header>
    <hr />
    <main>
      <h2>&lt;form method='post' ... &gt;</h2>
      <?php
      if (!empty($_POST))
        pre($safePost);
      else
        echo "<p><span>Nothing has been submitted using the post method.</span></p>";
      ?>
      <h2>&lt;/form&gt;</h2>
      <hr />
      <h2>&lt;form method='get' ... &gt;</h2>
      <?php
      if (!empty($_GET)) {
        pre($safeGet);
      } else
        echo "<p><span>Nothing has been submitted using the get method.</span></p>";
      ?>
      <h2>&lt;/form&gt;</h2>
    </main>
    <hr />
    <footer>
      <p>To view the PHP code in this processing script, add "?viewsource" to the end of the url in the browser address bar.</p>
    </footer>
  </body>
</html>