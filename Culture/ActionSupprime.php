<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class ActionSupprime
{
    /**
     * L'objet responsable des transferts de données
     *
     * @var GestionnaireInterface
     */
    private GestionnaireInterface $gestionnaireCulture;

    /**
     * L'objet métier immutable et garant de sa validité
     *
     * @var Culture
     */
    private Culture $culture;

    /**
     * Constructeur
     *
     * @param GestionnaireInterface $gestionnaireCulture
     * @param Culture $culture
     */
    public function __construct(GestionnaireInterface $gestionnaireCulture, Culture $culture)
    {
        $this->gestionnaireCulture = $gestionnaireCulture;
        $this->culture = $culture;
    }

    /**
     * Supprime une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function execute(): bool
    {
        return $this->gestionnaireCulture
            ->setId($this->culture->getId())
            ->enleve();
    }
}
