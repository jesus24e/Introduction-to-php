<?php
trait myUtilities
{
	function sayMyName()
	{
        if(!($this->name)){
            Logger::log(
                "error. debe tener nombre. error en el archivo "
                .__FILE__
                .", en la linea " . __LINE__
                .", en la clase " . __CLASS__
                .", en el metodo " . __METHOD__
                . ", en el trait " . __TRAIT__
            );
            throw new Exception("no tiene nombre");
        }
		echo "Mi nombre es " . $this->name . "\n";
	}
}

class Logger
{
	public static function log($text)
	{
		$prefix = date('d-m-Y- h:i:s ::: ');
		file_put_contents('log.txt', $prefix . $text . "\n", FILE_APPEND);
	}
}

abstract class Animal
{

	abstract public function makeSound();

	public function run()
	{
		echo "Corriendo\n";
	}
}

class Dog extends Animal
{
	use myUtilities;
	public $name = "Kanito";
	public function makeSound()
	{
		echo "Guau\n";
	}
}

class Cat extends Animal
{
	use myUtilities;
	//public $name = "Godofredo";
	public function makeSound()
	{
		echo "Miau\n";
	}
}

$instDog = new Dog;
$instCat = new Cat;

$instDog->sayMyName();
$instCat->sayMyName();
$instCat->run();
