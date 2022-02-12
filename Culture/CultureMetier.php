<?php

namespace Bt\Culture;

use Bt\Exception\ImmutableException;

/**
 * Objet métier culture
 */
final class CultureMetier
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
     * @var bool Permet d'empàécher une nouvelle instanciation
     */
    private bool $dejaIntanciee = false;

    /**
     * Les règles métiers sont implémentées dans cet objet.
     * Une violation de règle déclenche une exception métier.
     * Cet objet est immutable
     *
     * @param string $libelle
     * @param array $occurences
     *
     * @throws LibelleCultureUniqueException
     * @throws LibelleCultureVideException
     */
    public function __construct(string $libelle, array $occurences)
    {
        if (true === $this->dejaIntanciee) {
            throw new ImmutableException();
        }
        $this->libelle = $libelle;
        $this->occurences = $occurences;
        $this->dejaIntanciee = true;
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
     * @return array
     */
    public function getOccurences(): array
    {
        return $this->occurences;
    }
}
