<?php

class MallardDuck extends Duck implements ActionDuck
{
  private $strategy;

  public function __construct(MallardDuckStrategy $strategy) {
    $this->strategy = $strategy;
  }

  public function startAction()
  {
    $this->strategy->display();
    $this->strategy->fly();
    $this->strategy->quack();
  }
}