<?php

namespace Bt\Model;

/**
 *
 */
interface CultureInterface
{
    /**
     * @param array $donnees
     */
    public function __construct(array $donnees);

    /**
     * @return bool
     */
    public function ajoute(): bool;

    /**
     * @return bool
     */
    public function enleve(): bool;

    /**
     * @return array
     */
    public function collecte(): array;

    /**
     * @return bool
     */
    public function valide(): bool;
    /**
     * @return bool
     */
    public function hydrate(): bool;
}