<?php

namespace Bt\Culture;

use Exception;

/**
 * Le libellé d'une culture doit être renseigné.
 */
class LibelleCultureVideException extends Exception
{
    /**
     * Exception métier personnalisée
     */
    public function __construct()
    {
        parent::__construct('Le libellé d\'une culture doit être renseigné.');
    }
}
