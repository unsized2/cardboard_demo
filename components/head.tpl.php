<!DOCTYPE html>
    <html lang="en">
      <head>
        <title><?= nav_title() ?></title>

        <?= ($gf->is_authenticated) ? '<meta http-equiv="refresh" content="900;url='.BASE_URL.'/logout">' : '' ; ?>

        <?= (isset($data['head']['refresh'])) ? '<meta http-equiv="refresh" content="'.$data['head']['refresh'].'" />': '' ; ?>
      <style><?= $css->output() ?></style>
    </head>
  <body>
