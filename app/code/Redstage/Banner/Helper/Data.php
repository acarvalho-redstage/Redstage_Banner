<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Redstage\Banner\Helper;

/**
 * Class Data
 * 
 * @package Redstage\Banner\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @const string
     */
    const XML_PATH_PROMO_ENABLED = 'redstage_banner/promo/enabled';
    const XML_PATH_PROMO_CONTENT = 'redstage_banner/promo/content';

    /**
     * @param null|string $store
     * @return boolean
     */
    public function isPromoEnabled($store = null)
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_PROMO_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    /**
     * @param null|string $store
     * @return string
     */
    public function getPromoContent($store = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_PROMO_CONTENT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}
