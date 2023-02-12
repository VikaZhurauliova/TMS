<?php
 require_once "PizzaInterface.php";
 require_once "PizzaBuilder.php";
 require_once "Pizza.php";

 $builder = new PizzaBuilder();
 $pizza = $builder
     ->setSize(30)
     ->setDough('сырное')
     ->setSauce('сырный')
     ->setMushrooms(true)
     ->setTomatoes(true)
     ->setOlives(true)
     ->setPineapples(true)
     ->setCheese(true, 2);

 $pizzaClone = clone $pizza;
 print_r($pizzaClone);
