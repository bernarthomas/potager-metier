<?php

namespace Bt\Culture;

/**
 * Contrat pour l'objet de transfert de données CRUD
 */
interface GestionnaireInterface
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
    public function supprime(): bool;

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

    /**
     * Accesseur identifiant unique Culture
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Mutateur identifiant unique Culture
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id): self;

    /**
     * Accesseur libellé Culture
     *
     * @return string
     */
    public function getLibelle(): string;

    /**
     * Mutateur libellé Culture
     *
     * @param string $libelle
     *
     * @return $this
     */
    public function setLibelle(string $libelle): self;
}
