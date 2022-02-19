<?php

namespace Bt\Culture;

/**
 * Contrat objet métier liste cultures
 */
interface ListeCulturesInterface
{
    /**
     * @return array
     */
    public function getOccurences(): array;
}