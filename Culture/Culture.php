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
     * @var int|null
     */
    private ?int $id;

    /**
     * Nom de la culture
     *
     * @var string
     */
    private string $libelle;

    /**
     * Tableau des cultures déjà existantes
     *
     * @var array
     */
    private array $cultures;

    /**
     * Classe chargée des traitements ajoute, supprime ...
     *
     * @var GestionnaireInterface
     */
    private GestionnaireInterface $gestionnaire;

    /**
     * Les règles métiers sont implémentées dans cet objet.
     * Si valide est à true, une violation de règle déclenche une exception métier.
     *
     * @param int|null $id
     * @param string $libelle
     * @param GestionnaireInterface $gestionnaire
     * @param bool $valide
     *
     * @throws ExceptionLibelleUnique
     * @throws ExceptionLibelleVide
     */
    public function __construct(?int $id, string $libelle, GestionnaireInterface $gestionnaire, bool $valide = false)
    {
        $this->id = $id;
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
     * Accesseur libellé
     *
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Mutateur libellé
     *
     * @param string $libelle
     *
     * @return Culture
     */
    public function setLibelle(string $libelle): Culture
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Accesseur identifiant
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Mutateur de l'identifiant
     *
     * @param int|null $id
     *
     * @return Culture
     */
    public function setId(?int $id): Culture
    {
        $this->id = $id;

        return $this;
    }
}
