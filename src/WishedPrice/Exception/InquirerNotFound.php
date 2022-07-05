<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\GraphQL\Storefront\WishedPrice\Exception;

use OxidEsales\GraphQL\Base\Exception\NotFound;

use function sprintf;

final class InquirerNotFound extends NotFound
{
    public function __construct(string $id)
    {
        parent::__construct(sprintf('Inquirer was not found by id: %s', $id));
    }
}
