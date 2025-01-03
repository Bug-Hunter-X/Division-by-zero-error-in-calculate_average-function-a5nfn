```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //this will produce division by zero error if zero is present in the array
```