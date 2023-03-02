<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Калькулятор</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
        <h1>
            <?php
                echo "2.2. Домашняя работа: Calculator.";
            ?>
        </h1>
    </header>
    <main>

        <div>
        <input type="text" id="input"
        value="<?php
        if(isset($_GET['result'])) {
            echo $_GET['result'];
        }
        ?>" 
        disabled>
        </div>
        <div>
        <button onclick="addToInput('(')"> ( </button>
        <button onclick="addToInput(')')"> ) </button>
        <button onclick="addToInput('/')"> / </button>
        <button onclick="addToInput('*')"> * </button>
        </div>
        <div>
        <button onclick="addToInput('7')"> 7 </button>
        <button onclick="addToInput('8')"> 8 </button>
        <button onclick="addToInput('9')"> 9 </button>
        <button onclick="addToInput('-')"> - </button>
        </div>
        <div>
        <button onclick="addToInput('4')"> 4 </button>
        <button onclick="addToInput('5')"> 5 </button>
        <button onclick="addToInput('6')"> 6 </button>
        <button onclick="addToInput('+')"> + </button>
        </div>
        <div>
        <button onclick="addToInput('1')"> 1 </button>
        <button onclick="addToInput('2')"> 2 </button>
        <button onclick="addToInput('3')"> 3 </button>
        <button onclick="calculate()"> = </button>
        </div>
        <div>
        <button onclick="addToInput('0')"> 0 </button>
        <button onclick="reset()"> C </button>
        </div>  
    </main>
    <footer>
        <p>
        <?php
                echo "Скитяев Арсений группа 221-321";
            ?>
        </p>
    </footer>
        <script src="main.js"></script>      
    </body>