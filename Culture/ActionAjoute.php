<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class ActionAjoute
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
     * @param Culture $culture
     * @param GestionnaireInterface $gestionnaireCulture
     */
    public function __construct(Culture $culture, GestionnaireInterface $gestionnaireCulture)
    {
        $this->gestionnaireCulture = $gestionnaireCulture;
        $this->culture = $culture;
    }

    /**
     * Ajoute une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function execute(): bool
    {
        return $this->gestionnaireCulture
            ->setLibelle($this->culture->getLibelle())
            ->ajoute();
    }
}
