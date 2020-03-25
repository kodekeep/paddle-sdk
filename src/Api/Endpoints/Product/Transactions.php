<?php

declare(strict_types=1);

/*
 * This file is part of Paddle SDK.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Paddle\Api\Endpoints\Product;

use KodeKeep\Paddle\Api\Endpoints\Endpoint;

class Transactions extends Endpoint
{
    /**
     * @see https://developer.paddle.com/api-reference/product-api/transactions/listtransactions
     */
    public function all(string $entity, int $id, array $data = []): array
    {
        return $this->post("/2.0/{$entity}/{$id}/transactions", $data);
    }
}
