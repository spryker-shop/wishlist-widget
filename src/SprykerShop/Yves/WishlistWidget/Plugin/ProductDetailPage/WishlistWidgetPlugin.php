<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\WishlistWidget\Plugin\ProductDetailPage;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductDetailPage\Dependency\Plugin\WishlistWidget\WishlistWidgetPluginInterface;

/**
 * @deprecated Use molecule('wishlist-selector', 'WishlistWidget') instead.
 */
class WishlistWidgetPlugin extends AbstractWidgetPlugin implements WishlistWidgetPluginInterface
{
    public function initialize(ProductViewTransfer $productViewTransfer): void
    {
        $this->addParameter('product', $productViewTransfer);
    }

    public static function getName(): string
    {
        return static::NAME;
    }

    public static function getTemplate(): string
    {
        return '@WishlistWidget/views/pdp-wishlist-selector/pdp-wishlist-selector.twig';
    }
}
