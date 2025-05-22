<?php

class RubberDuckStrategy implements DisplayInterface, DuackInterface
{
  public function quack()
  {
    print_r("Утка от стратегии Rubber крякает \n");
  }

  public function display()
  {
    print_r("Утка от стратегии Rubber существует \n");
  }
}