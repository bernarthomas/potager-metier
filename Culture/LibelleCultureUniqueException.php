<?php

namespace Bt\Culture;

use Bt\PotagerException;

/**
 * Le libellé d'une culture doit être unique
 */
class LibelleCultureUniqueException extends PotagerException
{
    /**
     * Exception métier personnalisée
     */
    public function __construct()
    {
        parent::__construct('Le libellé d\'une culture doit être unique.');
    }
}
