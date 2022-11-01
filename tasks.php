<?php
echo "<p style='background-color: #b3d4fc'>tasks. 1<br>Необходимо создать массив с названием arr1, заполнить его случайными числами.
Вывести элементы массива на экран с новой строки.</p>";
function array_fill_rand($limit, $min=false, $max=false){
  $limit=(int)$limit;
  $arr1=[];
  if ($min!==false && $max !== false){
    $min=(int)$min;
    $max=(int)$max;
    for ($i=0; $i<$limit; $i++){
      $arr1[$i]=rand($min, $max);
    }
  }
  else{
    for ($i=0; $i<$limit; $i++){
      $arr1[$i]=rand();
    }
  }
  return $arr1;
}
echo '<pre>';
$rand_array = array_fill_rand(10, 1, 15);
print_r($rand_array);
echo '</pre>';

echo "<p style='background-color: #b3d4fc'>tasks. 2<br>Необходимо создать массив размером в 50 элементов с названием arr2,
заполнить его случайными числами. Посчитать сколько раз в массиве встречаются числа 5 и 10.
На экран вывести количество повторения числа 5 и количество повторений числа 10.</p>";
$arr2=range(0, 100);                 //создаёт массив, содержащий диапазон (тут 0-100) элементов
shuffle($arr2);                         //перемешивает элементы массива в случайном порядке
$arr2=array_slice($arr2, 0, 50);  //возвращает последовательность элементов массива (количество элементов)
print_r($arr2);                               //показать сформированный массив
$num5 = 0;
$num10 = 0;
foreach ($arr2 as $v){
  if ($v == 5){
    $num5++;
  }
  if ($v == 10){
    $num10++;
  }
}
echo "<br> количество повторения числа 5 = " . $num5;
$key = array_search(5, $arr2);
echo "<br>число 5 в элементе " . $key;
echo "<br>количество повторения числа 10 = " . $num10;
$key = array_search(10, $arr2);
echo "<br>число 10 в элементе " . $key;

echo "<p style='background-color: #b3d4fc'>tasks. 3<br>Необходимо создать массив размером в 50 элементов с названием arr3,
заполнить его случайными числами. Каждый четный элемент массива (индекс должен быть четным)
нужно окрасить в красный, а нечетный – в зеленый.</p>";
$arr3=range(0, 100);                 //создаёт массив, содержащий диапазон элементов
shuffle($arr3);                         //перемешивает элементы массива в случайном порядке
$arr3=array_slice($arr3, 0, 50);  //возвращает последовательность элементов массива
print_r($arr3);                               //показать сформированный массив
foreach ($arr3 as $key => $v){
  if (($key) % 2==0){
    echo "<p style='color: red'>$v</p>"; //как вывести в одну строку цветные элементы?
  }
}
foreach ($arr3 as $key => $v){
  if (($key) % 2!=0){
    echo "<p style='color: green'>$v</p>";  //как вывести в одну строку цветные элементы?
  }
}

echo "<p style='background-color: #b3d4fc'>tasks. 4<br>Дан одномерный массив из 100 элементов, состоящий из случайных целых чисел
в диапазоне от 0 до 50. Найти сумму элементов массива, с начала массива, до первого элемента равного нулю.</p>";
$rand_array = array_fill_rand(100, 0, 50); //создаёт массив с количеством элементов limit и диапазоном их значений min,max
print_r($rand_array);
$res = 0;
foreach ($rand_array as $v){
  if ($v != 0)
    $res += $v; //комбинированное присвоение. например res=0 v=2 => 0 += 2 => 0 = 0 + 2 = 2 next res=2 v=5 => 2 = 2 + 5 = 7 next res = 7 ...
  if ($v == 0)
    break;      //братан тормози ноль на пути
}
echo "<br>сумма элементов до первого нуля " . $res;
$key = array_search(0, $rand_array);
echo "<br>ноль в элементе " . $key;

echo "<p style='background-color: #b3d4fc'>tasks. 5<br>Дано произвольное целое положительное число K ().
Найти сумму всех четных цифр этого числа.</p>";
$k = 89127984009;
$result = 0;
while ($k !=0){
  $sum = $k % 10;
  if (($sum % 2)==0){
    $result += $sum;
  }
  $k = (int)($k/10);
}
echo "Сумма всех четных цифр = $result";
