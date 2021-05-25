<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $data['app']['head_title'] ?></title>
      <?= (isset($data['app']['head_refresh'])) ? '<meta http-equiv="refresh" content="'.$data['app']['head_refresh'].'" />': '' ; ?>
    <style>
.demo {
float: left;
min-width: 430px;
}

.docs {
  float: left;
  display: inline-block;
  background: lightgrey;
  min-width:384px;
  max-width: 550px;
  margin: 60px;
  padding: 2rem;
}

.docs > h1, .docs > h6,  {
  text-align: center;
}

  /* The device with borders */
  .smartphone {
    position: relative;
    width: 360px;
    height: 640px;
    margin: 4px auto;
    border: 16px black solid;
    border-top-width: 55px;
    border-bottom-width: 32px;
    border-radius: 36px;
  }

  /* The horizontal line on the top of the device */
  .smartphone:before {
    content: '';
    display: block;
    width: 60px;
    height: 5px;
    position: absolute;
    top: -25px;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #333;
    border-radius: 10px;
  }

  /* The circle on the bottom of the device
  .smartphone:after {
    content: '';
    display: block;
    width: 35px;
    height: 35px;
    position: absolute;
    left: 50%;
    bottom: -65px;
    transform: translate(-50%, -50%);
    background: #333;
    border-radius: 50%;
  }
  */
  /* The screen (or content) of the device */
  .smartphone .canvas {
    width: 360px;
    height: 640px;
    background: white;
  }

  /* Include the web app performance footnote  */
  .smartphone .footnote {
    width: 360px;
    position: absolute;
    top: 671px;
    left: 50%;
    transform: translate(-50%, -50%);
    color: grey;
    text-align: center;
    font-size: 14px;
  }

  .smartphone > .canvas > .content {
    position: absolute;
    height:100%;
    width:100%;
  }
    <?= $css->output() ?>
  </style>
    <link rel="stylesheet" href="/css/demo.css">
  </head>
  <body>
    <div class='demo'>
      <div class="smartphone">
        <div class="canvas">
          <iframe  src="<?= $data['app']['frame url'] ?>"
            style="border: 0; width:360px; height:640px;">
          </iframe>
        </div>
        <div class='footnote'>
          <span> <b><?= $data['app']['page_size'] ?></b> <small>rendered in</small> <b><?= $data['app']['total_execution_time'] ?>s</b>
          </span><br><br>
          <span>Mem: <?= $data['app']['memory'] ?> Kib &nbsp;|&nbsp; CSS : <?= $data['app']['css_size'] ?></span>
        </div>
      </div>

    </div>
    <?= $data['app']['docs']; ?>
  </body>
</html>
