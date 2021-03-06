<?hh
/* Prototype  : array array_intersect_uassoc(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays with additional index check, compares indexes by a callback function
 * Source code: ext/standard/array.c
 */

// define some class with method
class MyClass
{
    static function static_compare_func($a, $b) {
        return strcasecmp((string)$a, (string)$b);
    }

    public function class_compare_func($a, $b) {
        return strcasecmp((string)$a, (string)$b);
    }
}

<<__EntryPoint>> function main(): void {
echo "*** Testing array_intersect_uassoc() : usage variation ***\n";

//Initialize variables
$array1 = array("a" => "green", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

echo "\n-- Testing array_intersect_uassoc() function using class with static method as callback --\n";
var_dump( array_intersect_uassoc($array1, $array2, varray['MyClass','static_compare_func']) );
var_dump( array_intersect_uassoc($array1, $array2, 'MyClass::static_compare_func'));

echo "\n-- Testing array_intersect_uassoc() function using class with regular method as callback --\n";
$obj = new MyClass();
var_dump( array_intersect_uassoc($array1, $array2, varray[$obj,'class_compare_func']) );
echo "===DONE===\n";
}
