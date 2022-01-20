<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title></title>
</head>

<body>
    <?php
    echo '<hr>', '<strong style="color: green">1 Zadacha</strong>', '<br/>';
    $a = 10;
    $b = 20;
    echo '<br/>', 'a+b=', $a + $b, '<br/>';
    echo '<br/>', 'a-b=', $a - $b, '<br/>';
    echo '<br/>', 'a/b=', $a / $b, '<br/>';
    //
    echo '<hr>', '<strong style="color: green">2 Zadacha</strong>', '<br/>';
    $x = 2;
    $y = 6;
    $z = 9;
    $c = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
    echo '<br/>', '(x+1)4-2(z-2x*2+y*2)=', $c, '<br/>';
    //
    echo '<hr>', '<strong style="color: green">3 Zadacha</strong>', '<br/>';
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo '<br/>', $result, '<br/>';
    //
    echo '<hr>', '<strong style="color: green">4 Zadacha</strong>', '<br/>';
    $text1 = 'Привет';
    $text2 = 'Мир!';
    echo '<br/>', $text1 . ' ' . $text2;
    //
    echo '<hr>', '<strong style="color: green">5 Zadacha</strong>', '<br/>';
    $name = 'Сергей';
    echo '<br/>', 'Привет, '  . $name . '!';
    //
    echo '<hr>', '<strong style="color: green">6 Zadacha</strong>', '<br/>';
    $num = '12345';
    $sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
    echo '<br/>' . 'Сумма чисел 12345 = ' . $sum;
    ?>

    <?php
    echo '<hr>', '<strong style="color: green">7 Zadacha</strong>', '<br/>';
    echo '<strong>Форма перевода в секунды</strong>';
    ?>

    <form name="v_seconds" method="GET">
        <label>Ведите год: <input type="text" name="year"><br /></label>
        <label>Введите месяц: <input type="text" name="month"><br /></label>
        <label>Введите неделю: <input type="text" name="week"><br /></label>
        <label>Введите сутки: <input type="text" name="day"><br /></label>
        <label>Введите часы: <input type="text" name="hour"><br /></label>
        <label>Введите минуты: <input type="text" name="minute"><br /></label>

        <input type="submit" name="send" value="Отправить">
    </form>

    <?php
    echo 'Перевод в секунды: ';

    if (isset($_GET)) {   // получаем в переменные значения из input методом get
        $year = ($_GET['year']);
        $month = ($_GET['month']);
        $week = ($_GET['week']);
        $day = ($_GET['day']);
        $hour = ($_GET['hour']);
        $minute = ($_GET['minute']);
    }

    define('YEAR', 31536000);         // установил константы дат в секундах
    define('MONTH', 2592000);
    define('WEEK', 604800);
    define('DAY', 86400);
    define('HOUR', 3600);
    define('MINUTE', 60);

    if (is_numeric($_GET['year'])) {       // условие если в input числовое значение то выводим значение умноженное на константу в секундах
        print $_GET['year'] * YEAR . 'секунд';
    };
    if (is_numeric($_GET['month'])) {
        print $_GET['month'] * MONTH . 'секунд';
    };
    if (is_numeric($_GET['week'])) {
        print $_GET['week'] * WEEK . 'секунд';
    };
    if (is_numeric($_GET['day'])) {
        print $_GET['day'] * DAY . 'секунд';
    };
    if (is_numeric($_GET['hour'])) {
        print $_GET['hour'] * HOUR . 'секунд';
    };
    if (is_numeric($_GET['minute'])) {
        print $_GET['minute'] * MINUTE . 'секунд';
    };

    date_default_timezone_set('GMT+3');       // устанавливает часовой пояс

    $n = (date("Y") - 2000) * 31536000;       //присваиваю переменным значения текущей даты минус значения даты 2000-01-01 00:00:00, в секундах
    $nn = (date("m") - 1) * 2592000;
    $nnn = (date("d") - 1) * 86400;
    $nnnn = date("H") * 3600;
    $nnnnn = date("i") * 60;
    $nnnnnn = date("s") * 1;

    $result = $n + $nn + $nnn + $nnnn + $nnnnn + $nnnnnn;
    print '<br/>' . '<span style="color: #b86a06">И кстати, с текущей даты</span> ' . date("Y-m-d H:i:s") . '<br/>' . 'прошло ' . $result . 'секунд';
    ?>

    <?php
    //
    echo '<hr>', '<strong style="color: green">8 Zadacha</strong>', '<br/>';
//1 Вариант задачи
    echo 'Текущая дата в формате час:минута:секунда ' . '<br/>' . date('h:i:s');

//2 Вариант задачи
/*  $t_h = date('h');
    $t_m = date('i');
    $t_s = date('s');
    echo 'Текущая дата в формате час:минута:секунда ' . '<br/>' . $t_h .':'. $t_m .':'.$t_s;
*/
    //
    echo '<hr>', '<strong style="color: green">9 Zadacha</strong>', '<br/>';
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo round($var, 2);
    //
    echo '<hr>', '<strong style="color: green">10 Zadacha</strong>', '<br/>';
    define('SURNAME', 'Долгий');
    define('NAME', 'Сергей');
    define('PATRONYMIC', 'Юрьевич');
    define('AGE', '29');

    $f = substr(NAME, 0, 2);         // взял символ с 0 индекса длинной 2 символа
    $j = substr(PATRONYMIC, 0, 2);   // взял символ с 0 индекса длинной 2 символа

    if (
        defined('SURNAME') == true &&
        defined('NAME') == true &&
        defined('PATRONYMIC') == true &&
        defined('AGE') == true
    ) {
        echo  'Меня зовут ' . SURNAME . ' ' . $f . '. ' . $j . '. ' . '<br/>' . 'Мне ' . AGE . ' лет.';
    }
    ?>
</body>

</html>
