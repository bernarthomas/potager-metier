<?php

namespace Bt\Culture;

use Bt\PotagerException;
use Exception;

/**
 * Le libellé d'une culture doit être renseigné.
 */
class LibelleCultureVideException extends PotagerException
{
    /**
     * Exception métier personnalisée
     */
    public function __construct()
    {
        parent::__construct('Le libellé d\'une culture doit être renseigné.');
    }
}
