<?php

declare(strict_types=1);

namespace App\Entity\Store\international;

use App\Entity\Account as AccountEntity;

class Account extends AccountEntity
{
    public function getWarehouseCity(): string
    {
        return $this->warehouseCity . '|' . $this->getWarehouseCity2();
    }
}