<?php

namespace Bt\Culture;

/**
 * Contrat objet métier Culture
 */
interface CultureInterface
{
    /**
     * @return string
     */
    public function getLibelle(): string;

    /**
     * @return array
     */
    public function getOccurences(): array;
}
