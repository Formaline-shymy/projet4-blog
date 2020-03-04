<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
    <header>
    <div class ="navbar-nav ">
      <a class ="nav-item nav-link" href=view/adminAuthView.php>Administration</a>
    </div>
    </header>

        <?= $content ?>
    </body>
</html>
