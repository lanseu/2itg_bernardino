<?php

class Trading {
    private $bullMarket;
    private $bearMarket;
    private $equity;

    public function setBull($bullMarket){
        $this->bullMarket = $bullMarket;
    }

    public function getBull(){
        return $this->bullMarket;
    }

    public function setBear($bearMarket){
        $this->bearMarket = $bearMarket;
    }

    public function getBear(){
        return $this->bearMarket;
    }

    public function setEquity($equity){
        $this->equity = $equity;
    }

    public function getEquity(){
        return $this->equity;
    }

    public function displayInfo(){
        echo "Bull Market: " .$this->bullMarket. "<br>";
        echo "Bear Market: " .$this->bearMarket. "<br>";
        echo "Equity: " .$this->equity. "<br>";
    }
    
    public function overrideDisplayInfo(){
        echo "Trading Information: <br>";
        $this->displayInfo();
    }
}

class Stock extends Trading {
    private $investment;

    public function __construct($investment){
        $this->investment = $investment;
    }

    public function getInvest(){
        return $this->investment;
    }

    public function overloadPrintInfo($value){
        echo "Investment: " .$this->investment. "<br>";
        echo "Overloaded Stock: " .$value. "<br>";
    }

    public function overrideDisplayInfo(){
        echo "Trading Information: <br>";
        parent::displayInfo();
        echo "Stock Information: <br>";
        $this->overloadPrintInfo("Value of Stock");
    }    
}

class Asset extends Trading {
    private $cash;

    public function __construct($cash){
        $this->cash = $cash;
    }

    public function getCash(){
        return $this->cash;
    }

    public function printInfo(){
        echo "Cash: " .$this->cash. "<br>";
    }

    public function overrideDisplayInfo(){
        echo "Trading Information: <br>";
        parent::displayInfo();
        echo "Asset Information: <br>";
        $this->printInfo();
    }
}

$trade = new Trading();
$trade->setBull("Increasing Value");
$trade->setBear("Decreasing Value");
$trade->setEquity(10000);
$trade->displayInfo();
$trade->overrideDisplayInfo();

$stock = new Stock("Sale of Product");
$stock->setBull("Strong Bull Market");
$stock->setBear("Weak Bear Market");
$stock->setEquity(200);
$stock->overloadPrintInfo("Value of Stock"); 
$stock->overrideDisplayInfo();

$asset = new Asset("Future or Economic Value");
$asset->setBull("Mild Bull Market");
$asset->setBear("Moderate Bear Market");
$asset->setEquity(500);
$asset->printInfo();
$asset->overrideDisplayInfo();

?>
