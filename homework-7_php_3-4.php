<?php
echo "<p style='background-color: #b3d4fc'>Слайд 19 задание 2.<br>Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3.
Числа, одновременно кратные 3 и 5, сделать жирным. Каждое число должно быть с новой строки.</p>";
foreach (range(1, 50) as $v){
  if ($v % 3 === 0 && $v % 5 === 0) {
    echo "<b><i>$v</i></b>\n<br>";
  }
  elseif ($v % 3 === 0) {
    echo "<i>$v</i>\n<br>";
  }
}

echo "<p style='background-color: #b3d4fc'>Слайд 19 задание 4.<br>Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ...
Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10?</p>";
$a = 1;
$b = 1;
$result = 1;
//1+2+2,3+2,5+... должна превысить 10
do{
  $result +=(($a+=3)/++$b);
}
while($result<10);
echo "минимальное количество элементов последовательности " . $b . "<br>";

echo "<p style='background-color: #b3d4fc'>Слайд 20 задание 1.<br>Дано произвольное целое положительное число K (). Найти сумму всех четных цифр этого числа.
Процедуры и  функции  работы  со строками не использовать.</p>";
$k = 29282906;
$result = 0;
while ($k !=0){
  $sum = $k % 10;
  if (($sum % 2)==0){
    $result += $sum;
  }
  $k = (int)($k/10);
}
echo "Сумма всех четных цифр = $result";

echo "<p style='background-color: #b3d4fc'>Слайд 21 задание 1.<br>Выведите столбец чисел от 5 до 13</p>";
$i=5;
while ($i<=13){
  echo $i . "<br>";
  $i++;
}

echo "<p style='background-color: #b3d4fc'>Слайд 21 задание 2.<br>Дано число num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).
Решите задачу сначала через цикл while, а потом через цикл for.</p>";
$num = 1000;
$result=0;
while($num>50){
  $num = $num / 2;
  $result++;
}
echo "Количество итераций через цикл while " . $result . "<br>";
$num = 1000;
for ($result=0; $num>50; $result++){
  $num = $num / 2;
}
echo "Количество итераций через цикл for " . $result;

echo "<p style='background-color: #b3d4fc'>Слайд 21 задание 3.<br>Необходимо создать переменную i и передавать в нее значение.
Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10».
Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9».
Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8».
Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</p>";
$i = 10;
if ($i == 0){
  echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10";
}
if ($i == 1){
  echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9";
}
if ($i == 2){
  echo "0, 1, 2, 3, 4, 5, 6, 7, 8";
}
if ($i == 3){
  echo "0, 1, 2, 3, 4, 5, 6, 7";
}
if ($i == 4){
  echo "0, 1, 2, 3, 4, 5, 6";
}
if ($i == 10){
  echo "0";
}
