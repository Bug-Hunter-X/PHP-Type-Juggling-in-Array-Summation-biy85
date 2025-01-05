```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array case
  }

  $sum = 0;
  foreach ($arr as $value) {
    $sum += $value;
  }

  return $sum;
}

$myArray = [1, 2, 3, '4']; //Notice that '4' is a string
$result = buggyFunction($myArray);
echo $result; //The result is not 10, but 104
```