<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        try {
            DB::connection()->getPdo();
            echo "Successfully connected to the database bangsat";
        } catch (\Exception $e) {
            echo "Failed to connect to the database: " . $e->getMessage();
        }
        ?>
    </div>
    
    
</body>
</html>