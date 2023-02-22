<!DOCTYPE html>
<html>
<head>
    <title>1 lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            <?php
                echo "1.2. Домашняя работа: Solve the equation.";
            ?>
        </h1>
    </header>
    <main>      
            <?php
                try {
                    $equation = '22*X=220';
                    $oper = array('+','-','/','*');
                    for ($i=0; $i < strlen($equation);$i++){
                        if ($equation[$i] == 'X') {
                            $i_X = $i;
                        };
                        if (in_array($equation[$i],$oper)) {
                            $i_o = $i;
                            $op = $equation[$i];
                        };
                    };
                    $equa = explode('=',$equation);
                    $equ = $equa[0];
                    $answer = $equa[1];
                    if (str_contains($equ,'/')){
                        $numbers = preg_split('#/#',$equ);
                    }
                    else {
                        $numbers = preg_split('/[*+-]/u',$equ);
                    }

                    if ($i_X < $i_o) {
                        $number = $numbers[1];
                        if ($op == '+') {
                            $result = (int)$answer - (int)$number;
                        };
                        if ($op == '-') {
                            $result = (int)$answer + (int)$number;
                        };
                        if ($op == '*') {
                            $result = (int)$answer / (int)$number;
                        };
                        if ($op == '/') {
                            $result = (int)$answer * (int)$number;
                        };
                    }
                    else{
                        $number = $numbers[0];
                        if ($op == '+') {
                            $result = (int)$answer - (int)$number;
                        };
                        if ($op == '-') {
                            $result = (int)$number - (int)$answer;
                        };
                        if ($op == '*') {
                            $result = (int)$answer / (int)$number;
                        };
                        if ($op == '/') {
                            $result = (int)$number / (int)$answer;
                        };
                    };
                }
                catch(ex) {
                    $oper = 'ошибка в записи уравнения';
                    $result = 'ошибка в записи уравнения';
                };

            ?>
        <div>
            Уравнение (изначально вариант 5):  
            <?php
                echo $equation
                ?>
        </div>
        <div>
            Оператор:
            <?php
                echo $op
            ?>
        </div>
        <div>
            Индекс переменной:
            <?php
                echo $i_X
            ?>
        </div>
        <div>
            Ответ: 
            <?php
                echo $result
            ?>
        </div>
    </main>
    <footer>
        <p>
        <?php
                echo "Скитяев Арсений группа 221-321";
            ?>
        </p>
    </footer>

</body>
</html>