<?php

class DecoyDuckStrategy implements DisplayInterface
{
  public function display()
  {
    print_r("Утка от стратегии Decoy существует \n");
  }
}