    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foreach</title>
    </head>
    <body>
        
        <h3>Foreach simples</h3>

        <?php
        $users = [
            ['name' => 'User1', 'email' => 'User1@gmail.com'],
            ['name' => 'User2', 'email' => 'User2@gmail.com']
        ];

        foreach($users as $user)
        {
            echo $user['nome'] . ' - ' . $user['email']. '<br>';
        }

        ?>

    </body>
    </html>