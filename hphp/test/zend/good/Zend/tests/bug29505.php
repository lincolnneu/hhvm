<?hh

class Test {
    public $empty = varray[];
    public $three = array(1, "b"=>"c", 3=>varray[]);
}
<<__EntryPoint>> function main(): void {
var_dump(get_class_vars('Test'));

echo "===DONE===\n";
}
