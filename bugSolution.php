```php
function fixedFunction($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array case
  }

  $sum = 0;
  foreach ($arr as $value) {
    $sum += (int)$value; //Type casting to integer
  }

  return $sum;
}

$myArray = [1, 2, 3, '4'];
$result = fixedFunction($myArray);
echo $result; // Output: 10
```