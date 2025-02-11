The solution is to avoid using references within the loop. Instead, assign values directly or create copies.

```php
class MyClass {
    public $value = 0;
}

$objects = [];
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as $obj) {
    $obj->value = $i; // No longer using a reference 
}

foreach ($objects as $obj) {
    echo $obj->value . ' ';
}
```
Now the output will correctly be `0 1 2`.  Alternatively, you can use a `for` loop with explicit indexing for more control.