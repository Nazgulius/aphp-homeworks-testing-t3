<?php

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

$dd = new DecoyDuck(new DecoyDuckStrategy());
$dd->swim(); 
$dd->startAction();
$dm = new MallardDuck(strategy: new MallardDuckStrategy());
$dm->swim(); 
$dm->startAction();
$dr = new RedheadDuck(new RedheadDuckStrategy());
$dr->swim(); 
$dr->startAction();
$dr2 = new RubberDuck(new RubberDuckStrategy());
$dr2->swim(); 
$dr2->startAction();