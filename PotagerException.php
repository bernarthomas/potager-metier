<?php

namespace Bt;

use Exception;

/**
 * Exception générique métier Potager
 */
class PotagerException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message ?? 'Une erreur s\'est produite.');
    }
}
