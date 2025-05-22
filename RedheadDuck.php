<?php

class RedheadDuck extends Duck implements ActionDuck
{
  private $strategy;

  public function __construct(RedheadDuckStrategy $strategy) {
    $this->strategy = $strategy;
  }

  public function startAction()
  {
    $this->strategy->display();
    $this->strategy->fly();
    $this->strategy->quack();
  }
}