<?php
declare(strict_types=1);
require "kind.php";

class Loyalty {
    private int $counter = 0;
    protected int $id;
    protected Kind $kind;

    public function __construct(Kind $kind) {
        $this->counter++;
        $this->id = $this->counter;
        $this->kind = $kind;
    }

    // Getters
    public function getLoyaltyId() : int {
        return $this->id;
    }
    public function getKind() : Kind {
        return $this->kind;
    }

    /* class methods
    public function getBlackFridayDiscount() {
        //$kind = $this->kind->name;
        switch ($this->kind) {
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
    }
    */
}
?>