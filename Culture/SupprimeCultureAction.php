<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class SupprimeCultureAction
{
    /**
     * L'objet responsable des transferts de données
     *
     * @var GestionnaireCultureInterface
     */
    private GestionnaireCultureInterface $gestionnaireCulture;

    /**
     * L'objet métier immutable et garant de sa validité
     *
     * @var Culture
     */
    private Culture $culture;

    /**
     * Constructeur
     *
     * @param GestionnaireCultureInterface $gestionnaireCulture
     * @param Culture $culture
     */
    public function __construct(GestionnaireCultureInterface $gestionnaireCulture, Culture $culture)
    {
        $this->gestionnaireCulture = $gestionnaireCulture;
        $this->culture = $culture;
    }

    /**
     * Supprime une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function enregistre()
    {
        return $this->gestionnaireCulture
            ->setId($this->culture->getId())
            ->enleve();
    }
}
