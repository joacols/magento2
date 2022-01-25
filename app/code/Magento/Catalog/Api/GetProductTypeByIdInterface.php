<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Catalog\Api;

/**
 * Get product type id by product ID.
 *
 * @api
 */
interface GetProductTypeByIdInterface
{
    /**
     * @param int $productId
     * @return string
     */
    public function execute(int $productId);
}
