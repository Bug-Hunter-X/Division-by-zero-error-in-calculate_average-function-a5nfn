```php
function calculate_average(array $numbers): float {
  if (empty($numbers) || array_sum($numbers) == 0) {
    return 0.0; // Handle empty array or all zeros case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculate_average($numbers);
echo "Average: " . $average;

$numbers2 = [0,0,0];
$average2 = calculate_average($numbers2);
echo "\nAverage 2: " . $average2;

$numbers3 = [];
$average3 = calculate_average($numbers3);
echo "\nAverage 3: " . $average3;
```