<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace AktiveMerchant\Billing\Gateways;

use AktiveMerchant\Billing\Response;

/**
 * Description of CentinelResponse
 *
 * @package Aktive-Merchant
 * @author  Andreas Kollaros
 * @license http://www.opensource.org/licenses/mit-license.php
 */
class CentinelResponse extends Response
{

    public function message()
    {
        if ($this->enrolled == 'N')
            return 'Cardholder not enrolled! ';
        return $this->error_no . ": " . $this->message;
    }

}

?>
