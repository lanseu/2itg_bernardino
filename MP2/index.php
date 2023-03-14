<?php
class aceOfHearts {
    private $cards;
    private $hearts;
    private $deck;
    
    public function setCards($value){
        $this->cards = $value;
    }
    
    public function getCards(){
        return $this->cards;
    }
    
    public function setHearts($value){
        $this->hearts = $value;
    }
    
    public function getHearts(){
        return $this->hearts;
    }

    public function setDeck($value) {
        $this->deck = $value;
    }

    public function getDeck() {
        return $this->deck;
    }

    public function displayInfo() {
        echo "Private variable: " . $this->cards . "<br>";
        echo "String variable: " . $this->hearts . "<br>";
        echo "Int variable: " . $this->deck . "<br>";
    }

    public function overrideDisplayInfo() {
        echo "Ace of Hearts Display Info: <br>";
        $this->displayInfo();
    }
}

class aceOfDias extends aceOfHearts {
    private $spade;

    public function __construct($spade) {
        $this->spade = $spade;
    }

    public function getSpade() {
        return $this->spade;
    }

    public function printInfo() {
        echo "Spade: " . $this->spade . "<br>"; 
    }

    public function overloadPrintInfo($value) {
        echo "Spade Overload: " . $value . "<br>";
    }

    public function overrideDisplayInfo() {
        echo "Ace of Dias Display Info: <br>";
        parent::displayInfo();
        $this->printInfo();
    }
}

class aceOfClubs extends aceOfHearts {
    private $clubs;

    public function __construct() {
        $this->clubs = "";
    }

    public function setClubVar($value) {
        $this->clubs = $value;
    }

    public function getClubVar() {
        return $this->clubs;
    }

    public function overrideDisplayInfo() {
        echo "Ace of Clubs Display Info<br>";
        parent::displayInfo();
        echo "Clubs: " . $this->clubs . "<br>";
    }
}

// Instantiate objects and call methods
$heart = new aceOfHearts();
$heart->setHearts("Hello, Hearts");
$heart->setDeck(52);
$heart->displayInfo();
$heart->overrideDisplayInfo();

$dias = new aceOfDias("Diamonds");
$dias->setHearts("Ace of Dias");
$dias->setDeck(13);
$dias->displayInfo();
$dias->overrideDisplayInfo();
$dias->printInfo();
$dias->overloadPrintInfo("Universe");

$club = new aceOfClubs();
$club->setHearts("Ace of Clubs");
$club->setDeck(26);
$club->setClubVar("Diamonds");
$club->displayInfo();
$club->overrideDisplayInfo();

?>
