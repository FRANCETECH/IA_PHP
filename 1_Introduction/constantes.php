<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les constantes</title>
</head>
<body>

    <?php


        //EXPLE 1:

        define("CONSTANT", "Hello Jehann.");
        echo CONSTANT;

        //EXPLE 2:
        echo "<br>";

        define('LANGAGES', array(  // ['PHP', 'JAVA', 'JAVASCRIPT',  'HTML', 'CSS']
            'PHP',
            'JAVA',
            'JAVASCRIPT',
            'HTML',
            'CSS'
        ));

        echo LANGAGES[3];

        var_dump(LANGAGES);




        /// REPRISE:  14h10
        

    ?>
    
</body>
</html>