<?

abstract class Person {

    private $firstName = "";
    private $lastName = "";

   public function setName( $firstName, $lastName )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName() {
        return "$this->firstName $this->lastName";
    }

    abstract public function showWelcomeMessage();
}



class Member extends Person {

public function showWelcomeMessage() {
echo "Hi " . $this->getName() . ", welcome to the forums!<br>";
    }

public function newTopic( $subject ) {
echo "Creating new topic: $subject<br>";
    }
}

class Shopper extends Person {

public function showWelcomeMessage()
    {

echo "Hi " . $this->getName() . ", welcome to our online store!<br>";

    }

public function addToCart( $item )
    {

echo "Adding $item to cart<br>";

    }


}

class PageHeader {

    public function render(Person $user)
    {
        return $user->showWelcomeMessage();
    }


}

$member = new Member();
