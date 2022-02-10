<?php

namespace Bt\Culture;

/**
 * Contrat pour l'objet de transfert de données CRUD
 */
interface CultureDTOInterface
{
    /**
     * Fait l'équivalent d'un INSERT
     *
     * @return bool
     */
    public function ajoute(): bool;

    /**
     * Fait l'équivalent d'un DELETE
     *
     * @return bool
     */
    public function enleve(): bool;

    /**
     * Fait l'équivalent d'un UPDATE
     *
     * @return bool
     */
    public function modifie(): bool;

    /**
     * Fait l'équivalent d'un SELECT
     *
     * @return array
     */
    public function collecte(): array;

//    /**
//     * Passe les valeurs adaptées
//     *
//     * @return bool
//     */
//    public function hydrate(): bool;
}
