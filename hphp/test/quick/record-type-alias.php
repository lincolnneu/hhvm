<?hh

HH\autoload_set_paths(
  array(
    'type' => array('bar' => 'record-alias.inc', 'baz' => 'record-alias2.inc'),
    'class' => array('foo' => 'record_decl.1.inc'),
  ),
  __DIR__.'/'
);

function foo(Bar $r): Bar {
  $r['x'] = $r['x'] + 1;
  return $r;
}

$f = Foo['x' => 10];
$z = foo($f);
var_dump($z['x']);
