<?php

namespace Bt\Exception;

/**
 * Exception générique immutabilité
 */
class ImmutableException extends PotagerException
{
    /**
     * @param string $message Message immutabilité
     */
    public function __construct(string $message = 'Le constructeur a déjà été appelé.')
    {
        parent::__construct($message);
    }
}