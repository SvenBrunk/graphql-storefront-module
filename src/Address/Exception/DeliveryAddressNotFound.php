<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\GraphQL\Storefront\Address\Exception;

use OxidEsales\GraphQL\Base\Exception\NotFound;

use function sprintf;

final class DeliveryAddressNotFound extends NotFound
{
    public function __construct(string $id)
    {
        parent::__construct(sprintf('Delivery address was not found by id: %s', $id));
    }
}
