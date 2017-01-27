<?php

class myclass {
    // constructor
    function myclass(){}

    // method 1
    function myfunc1(){}

    // method 2
    function myfunc2(){}
}

class C
{
    private function privateMethod(){}
    public function publicMethod(){}
    public function __construct()
    {
        print_r(in_array('privateMethod', get_class_methods('C')));
		print_r(method_exists($this, 'privateMethod'));
    }
}

print_r(in_array('myclass', get_class_methods('myclass')));
print_r(in_array('myfunc2', get_class_methods(new myclass)));
print_r(in_array('privateMethod', get_class_methods(new C)));
print_r(method_exists('C', 'privateMethod'));