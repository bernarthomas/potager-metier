<?php

namespace Bt\Culture;

/**
 * Objet métier culture
 */
final class Culture
{
    /**
     * Identifiant unique
     *
     * @var int
     */
    private int $id;

    /**
     * @var string Nom de la culture
     */
    private string $libelle;

    /**
     * @var array Tableau des cultures déjà existantes
     */
    private array $cultures;

    /**
     * @var GestionnaireInterface
     */
    private GestionnaireInterface $gestionnaire;

    /**
     * Les règles métiers sont implémentées dans cet objet.
     * Une violation de règle déclenche une exception métier.
     *
     * @param string $libelle
     * @param GestionnaireInterface $gestionnaire
     * @param bool $valide
     *
     * @throws ExceptionLibelleUnique
     * @throws ExceptionLibelleVide
     */
    public function __construct(string $libelle, GestionnaireInterface $gestionnaire, bool $valide = false)
    {
        $this->libelle = $libelle;
        $this->gestionnaire = $gestionnaire;
        $this->cultures = $this->gestionnaire->collecte();
        if (true === $valide) {
            $this->valide();
        }
    }

    /**
     * Génère les erreurs métier appropriées si le libellé n'est pas valide
     *
     * @return void
     *
     * @throws ExceptionLibelleUnique
     * @throws ExceptionLibelleVide
     */
    private function valide(): void
    {
        if (empty($this->libelle)) {
            throw new ExceptionLibelleVide();
        }
        if (!empty($this->cultures)) {
            foreach ($this->cultures as $culture) {
                if ($culture->getLibelle() === $this->libelle) {
                    throw new ExceptionLibelleUnique();
                }
            }
        }
        /** @todo pour suppression exception si il y a des valeurs de clés étrangères dans d'autres tables */
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

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
     *
     * @return Culture
     */
    public function setId(int $id): Culture
    {
        $this->id = $id;

        return $this;
    }
}
