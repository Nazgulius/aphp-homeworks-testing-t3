<?php

class RedheadDuckStrategy implements DisplayInterface, DuackInterface, FlyInterface
{
  public function fly()
  {
    print_r("Утка от стратегии Redhead летает \n");
  } 

  public function quack()
  {
    print_r("Утка от стратегии Redhead крякает \n");
  }

  public function display()
  {
    print_r("Утка от стратегии Redhead существует \n");
  }
}