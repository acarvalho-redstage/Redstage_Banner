<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Redstage\Banner\Block;

/**
 * Class Promo
 *
 * @package Redstage\Banner\Block
 */
class Promo extends \Redstage\Banner\Block\AbstractBlock
{
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->helper->getPromoContent($this->getStore()->getCode());
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return [
            'storage_key' => strtolower($this->getModuleName()) . '_promo',
            'content'     => $this->getContent()
        ];
    }

    /**
     * @return bool|string
     */
    public function getSerializedConfig()
    {
        return $this->serializer->serialize($this->getConfig());
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->helper->isPromoEnabled()
            || empty($this->getContent())) {
            return '';
        }

        return parent::_toHtml();
    }
}
