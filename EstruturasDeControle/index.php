<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllers</title>
</head>
<body>
    
    <div>
        <h1>IF</h1>

        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            
            $hour = date('H:i');

            echo $hour . '<br>';

            if ($hour > '06:00' && $hour < '12:00')
            {
                echo "Good Morning";
            }
            elseif ($hour > '12:00' && $hour < '18:00')
            {
                echo "Good Afternoon";
            }
            else
            {
                echo "Good Night";
            }

        ?> 
        Gabriel!
    </div>

    <div style="margin-top: 50px">
            <h1>MATCH</h1>
            
            <div>
                <?php

                    $number = rand(0, 3);

                    $numbers = match($number)
                    {
                        0,1 => "Number $number",
                        3   => 'Number 3',
                        default => 'Numero maior que 1 e menor que 3'
                    };

                    echo $numbers

                ?>
            </div>
    </div>

</body>
</html>