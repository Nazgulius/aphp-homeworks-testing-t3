<?php

class DecoyDuck extends Duck implements ActionDuck
{
  private $strategy;

  public function __construct(DecoyDuckStrategy $strategy) {
    $this->strategy = $strategy;
  }

  public function startAction()
  {
    $this->strategy->display();
  }
}