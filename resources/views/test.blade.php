<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing connection</title>
</head>

<body>
    <div>
        <?php
        use Illuminate\Support\Facades\DB;
        
        // Test database connection
        try {
            DB::connection()->getPdo();
            echo 'berhasil';
        } catch (\Exception $e) {
            die('Could not connect to the database.  Please check your configuration. error:' . $e);
        }
        
        ?>
    </div>
</body>

</html>
