<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace ! ";
    }

    public function manger()
    {
        return "Je mange ! " ;
    }

}

class Elephant extends Animal
{
    public function quiSuije()
    {
        return "Je suis un éléphant et ". $this->deplacement();
    }

    public function manger()
    {
        return "Je mange comme un éléphant ! " ;
    }
}

class Chat extends Animal
{
    public function quiSuije()
    {
        return "Je suis un chat ". $this->deplacement();
    }

    public function manger()
    {
        return "Je mange comme un chat ! " ;
    }
}

$Elephant = new Elephant;

echo $Elephant->quiSuije()."<br>";
echo $Elephant->manger()."<br>";
echo "<hr>";

$chat = new Chat;
echo $chat->quiSuije()."<br>";
echo $chat->manger()."<br>";