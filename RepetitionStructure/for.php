<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <h2>FOR</h2>

        <h3>For Positivo</h3>
        <?php
            for($i = 0; $i < 10; $i++)
            {
                echo "$i <br>";
            }
        ?>

        <hr>
        
        <h3>For negativo</h3>
        <?php
            for($i = 10; $i > 0; $i--)
            {
                echo "$i <br>";
            }
        ?>

        <hr>
        
        <h3>Arrays</h3>

        <?php
            $batman = ['batman', 'bruce', 'alfred'];

            for($i = 0; $i < count($batman); $i++)
            {
                echo $batman[$i]. "<br>";
            }
        ?>

    </div>

</body>
</html>