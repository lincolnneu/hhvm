<?hh
/* Prototype  : int printf  ( string $format  [, mixed $args  [, mixed $...  ]] )
 * Description: Produces output according to format .
 * Source code: ext/standard/formatted_print.c
 */
<<__EntryPoint>> function main(): void {
echo "*** Testing printf() : basic functionality - using string format ***\n";

// Initialise all required variables
$format = "format";
$format1 = "%s";
$format2 = "%s %s";
$format3 = "%s %s %s";
$arg1 = "arg1 argument";
$arg2 = "arg2 argument";
$arg3 = "arg3 argument";

echo "\n-- Calling printf() with no arguments --\n";
$result = printf($format);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with one arguments --\n";
$result = printf($format1, $arg1);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with two arguments --\n";
$result = printf($format2, $arg1, $arg2);
echo "\n";
var_dump($result);


echo "\n-- Calling printf() with string three arguments --\n";
$result = printf($format3, $arg1, $arg2, $arg3);
echo "\n";
var_dump($result);

echo "===DONE===\n";
}
