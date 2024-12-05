<?php
declare(strict_types=1);
require "loyalty.php";

class SaleBlackFriday {
    protected Loyalty $client;
    protected int $sale;

    public function __construct(Loyalty $client, int $sale) {
        $this->client = $client;
        $this->sale = $sale;
    }

    // class methods
    public function getBlackFridayDiscount() {
        //$kind = $this->kind->name;
        switch ($this->client->getKind()) {
            case Kind::REGULAR :
                $discount = 0.05;
                break;
            case Kind::PREMIUM :
                $discount = 0.10;
                break;
            case Kind::VIP :
                $discount = 0.15;
                break;
            case Kind::OTHER :
                $discount = 0;
                break;
            default :
                $discount = 0;
                break;
        }
        return $discount;
    }
    
    public function calculateDiscount() {
        $final_amount = $this->sale * $this->getBlackFridayDiscount();
        return $final_amount;
    }

    public function __toString()
    {
        return "Client with Loyalty Id [" . $this->client->getLoyaltyId() . "] has status " . $this->client->getKind()->name . PHP_EOL . "The final amount to pay is " . $this->sale . " minus discount " . ($this->calculateDiscount()) . " = " . $this->sale - $this->calculateDiscount();
    }
}