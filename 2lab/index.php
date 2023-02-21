<!DOCTYPE html>
<html>
<head>
    <title>2 lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
                echo "<img src='2023-02-16_17-04-27.png'>";
            ?>
        <h1>
            <?php
                echo "4.1. Домашняя работа: Feedback Form.";
            ?>
        </h1>
    </header>
    <main>      
        <form action="https://httpbin.org/post" method="POST">
            <fieldset class="fieldset">
                <input type="text" placeholder="Имя" name="Name" required>
                <input type="email" placeholder="mail@mail.ru" name="Email" required>
                <select name="Type" id="">
                    <option value="report">жалоба</option>
                    <option value="offer">предложение</option>
                    <option value="gratitude">благодарность</option>
                </select>
                <textarea name="Comment" id="" cols="30" rows="10"></textarea>
                <p>Удобный способ связи:</p>
                <p><input type="checkbox" name="connect" value="sms"><label for="connect">смс</label></p>
                <p><input type="checkbox" name="connect" value="e-mail"><label for="connect">e-mail</label></p>
            </fieldset>
            <button type="submit">Отправить</button>
        </form>

        <a href="handler.php">2 страница</a>
        <?php
            $headers = print_r($_POST);
        
        ?>
    </main>
    <footer>
        <p>
        <?php
                echo "Скитяев Арсений группа 221-321";
            ?>
        </p>
    </footer>