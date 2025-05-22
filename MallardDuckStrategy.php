<?php

class MallardDuckStrategy implements DisplayInterface, DuackInterface, FlyInterface
{
    public function fly()
    {
      print_r("Утка от стратегии Mallar летает \n");
    } 

    public function quack()
    {
      print_r("Утка от стратегии Mallar крякает \n");
    }

    public function display()
    {
      print_r("Утка от стратегии Mallar существует \n");
    }
}