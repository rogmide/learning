<?php

// Single line Comment

# Single line Comment

/*
    Multiple Line Comment
*/

/**
 * Docblock
 * Can be user to build docs  
 * @param  
 * @return
 */

namespace App\store_object;

/**
 * Bla bla Bla
 * 
 * @property string $name
 * @property int $amount_timeout
 */
class Transaction
{
    // private $customer;
    // private $amount;

    /**
     * Well doc function
     *
     * @param string $customer
     * @param float $amount
     * @return bool
     * 
     * @throws \RuntimeException
     * 
     */
    public function process($customer, $amount)
    {
        return true;
    }
}
