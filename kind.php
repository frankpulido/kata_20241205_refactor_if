<?php
declare(strict_types=1);

enum Kind : string {
    case REGULAR = 'REGULAR';
    case PREMIUM = 'PREMIUM';
    case VIP = 'VIP';
    case OTHER = 'OTHER';
}
?>