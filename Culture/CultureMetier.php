<?php

namespace Bt\Culture;

/**
 * Objet métier culture
 */
class CultureMetier
{
    /**
     * @var string Nom de la culture
     */
    private string $libelle;

    /**
     * @var array Tableau des cultures déjà existantes
     */
    private array $occurences;

    /**
     * @param string $libelle
     * @param array $occurences
     *
     * @throws LibelleCultureUniqueException
     * @throws LibelleCultureVideException
     */
    public function __construct(string $libelle, array $occurences)
    {
        $this->libelle = $libelle;
        $this->occurences = $occurences;
        $this->valide();
    }

    /**
     * Génère les erreurs métier appropriées si le libellé n'est pas valide
     *
     * @return void
     *
     * @throws LibelleCultureUniqueException
     * @throws LibelleCultureVideException
     */
    private function valide(): void
    {
        if (empty($this->libelle)) {
            throw new LibelleCultureVideException();
        }
        if (!empty($this->occurences)) {
            foreach ($this->occurences as $culture) {
                if ($culture->getLibelle() === $this->libelle) {
                    throw new LibelleCultureUniqueException();
                }
            }
        }
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     * @return CultureMetier
     */
    public function setLibelle(string $libelle): CultureMetier
    {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * @return array
     */
    public function getOccurences(): array
    {
        return $this->occurences;
    }

    /**
     * @param array $occurences
     * @return CultureMetier
     */
    public function setOccurences(array $occurences): CultureMetier
    {
        $this->occurences = $occurences;
        return $this;
    }
}
