<?php
/**
 * Internal payment method (only for admin orders)
 * Copyright (C) 2016 Trezo <contato@trezo.com.br>
 *
 * This file is part of Trezo/InternalPayment.
 *
 * Trezo/InternalPayment is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Trezo\InternalPayment\Model\Payment;

class InternalPayment extends \Magento\Payment\Model\Method\AbstractMethod
{

    const CODE                  = 'internalpayment';
    protected $_code            = self::CODE;
    protected $_isOffline       = true;
    protected $_canUseCheckout  = false;
    protected $_canUseInternal  = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
