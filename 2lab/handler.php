<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <a href="index.php">1 страница</a>
        <textarea name="" id="" cols="30" rows="10">
            <?php
                print_r(get_headers($url='https://httpbin.org'))
                // $url = 'https://httpbin.org/post';
                // $headers = print_r($_POST);
            ?>
        </textarea>
    </main>
</body>
</html>