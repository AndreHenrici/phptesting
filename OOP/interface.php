<?php   

    interface Bootmanager{
        public function starten();
    }
    interface Formater{
        public function formatieren($laufwerk);
    }

    class Computer implements Bootmanager, Formater{
        public function starten(){
            return "computer ist gestartet";
        }
        public function formatieren($laufwerk){
            return "Laufwerk $laufwerk ist formatiert";
        }
    }
    
    class Auto implements Bootmanager{
        public function starten(){
            return "Auto ist gestartet";
        }
    } 

$MeinComputer = new Computer();
echo $MeinComputer->starten() . "<br>";
echo $MeinComputer->formatieren("C") . "<br>";
$MeinAuto = new Auto();
echo $MeinAuto->starten();