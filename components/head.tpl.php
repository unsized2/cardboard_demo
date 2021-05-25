<!DOCTYPE html>
    <html lang="en">
      <head>
        <title><?= $data['app']['head_title'] ?></title>
        <?= (isset($data['app']['head_refresh'])) ? '<meta http-equiv="refresh" content="'.$data['app']['head_refresh'].'" />': '' ; ?>
      <style><?= $css->output() ?></style>
    </head>
  <body>
