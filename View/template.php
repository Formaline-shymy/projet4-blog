<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
    <body>
        <div id="global">
            <header>
                <a href="http://localhost/blogJF/index.php">
                <h1 id="titleBlog">Blog Jean Forteroche</h1></a>
                <p>Nouveau romans en ligne: Billet simple pour Alaska.</p>
            </header>
            
            <div id="content">
                <?= $content ?>
            </div> 
            <footer id="footBlog">
                Blog de Jean Forteroche
            </footer>
        </div> <!-- #global -->
    </body>
</html>
