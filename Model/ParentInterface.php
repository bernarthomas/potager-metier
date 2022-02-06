<?php

namespace bt\Model;

/**
 *
 */
interface ParentInterface
{
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
}