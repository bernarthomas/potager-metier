<?php

namespace Bt;

use Exception;

/**
 * Exception générique métier Potager
 */
class PotagerException extends Exception
{
    public function __construct()
    {
        parent::__construct('Une erreur s\'est produite.');
    }
}
