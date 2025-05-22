<?php

class RubberDuck extends Duck implements ActionDuck
{
  private $strategy;

  public function __construct(RubberDuckStrategy $strategy) {
    $this->strategy = $strategy;
  }

  public function startAction()
  {
    $this->strategy->display();
    $this->strategy->quack();
  }
}