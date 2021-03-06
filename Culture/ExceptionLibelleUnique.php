<?php

namespace Bt\Culture;

use Bt\Exception\PotagerException;

/**
 * Le libellé d'une culture doit être unique
 */
class ExceptionLibelleUnique extends PotagerException
{
    /**
     * Exception métier personnalisée
     */
    public function __construct()
    {
        parent::__construct('Une culture doit être unique.');
    }
}
