In PHP, a common yet subtle error arises when dealing with references and object properties within loops.  Consider this scenario: 
```php
class MyClass {
    public $value = 0;
}

$objects = [];
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as &$obj) {
    $obj->value = $i;
}

foreach ($objects as $obj) {
    echo $obj->value . ' ';
}
```
You might expect the output to be `0 1 2`, but it will actually be `2 2 2`. This happens because the `&$obj` in the first loop creates a reference, and the loop updates the *same* object repeatedly, leaving all objects with the final value of `$i`.

This is different from the behavior if `&$obj` was not used (it will print 0 1 2).