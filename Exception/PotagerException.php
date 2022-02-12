<?php

namespace Bt\Exception;

use Exception;

/**
 * Exception générique métier Potager
 */
class PotagerException extends Exception
{
    /**
     * @param string $message Message générique
     */
    public function __construct(string $message = 'Une erreur s\'est produite.')
    {
        parent::__construct($message);
    }
}
