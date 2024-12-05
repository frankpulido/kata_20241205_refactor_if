<?php
declare(strict_types=1);
require "kind.php";

class Loyalty {
    protected static int $counter = 0;
    protected int $id;
    protected Kind $kind;

    public function __construct(Kind $kind) {
        $this->id = ++self::$counter;
        $this->kind = $kind;
    }

    // Getters
    public function getLoyaltyId() : int {
        return $this->id;
    }
    
    public function getKind() : Kind {
        return $this->kind;
    }
}
?>