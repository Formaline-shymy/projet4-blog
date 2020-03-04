<!DOCTYPE html>
    <html>
        <head>
            <title>Cours PHP & MySQL</title>
            <meta charset="utf-8">
            <link href="public/css/style.css" rel="stylesheet" /> 
        </head>
        
        <body>
            <h1>Erreur</h1>
            <?php
                              
                set_error_handler(function($niveau, $message, $fichier, $ligne){
                    echo 'Erreur : ' .$message. '<br>';
                    echo 'Niveau de l\'erreur : ' .$niveau. '<br>';
                    echo 'Erreur dans le fichier : ' .$fichier. '<br>';
                    echo 'Emplacement de l\'erreur : ' .$ligne. '<br>';
                });
                
                                            
            ?>
           
        </body>
    </html>