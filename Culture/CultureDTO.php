<?php

namespace Bt\Culture;

/**
 * Objet Culture id, libelle
 */
class CultureDTO
{
    /**
     * Identifiant unique
     *
     * @var int
     */
    private int $id;

    /**
     * Nom de la culture
     *
     * @var string
     */
    private string $libelle;

    /**
     * Accesseur identifiant
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Mutateur modification de l'identifiant
     *
     * @param int $id
     * @return CultureDTO
     */
    public function setId(int $id): CultureDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Accesseur nom de la culture
     *
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Mutateur modification du nom de la culture
     *
     * @param string $libelle
     * @return CultureDTO
     */
    public function setLibelle(string $libelle): CultureDTO
    {
        $this->libelle = $libelle;
        return $this;
    }
}
