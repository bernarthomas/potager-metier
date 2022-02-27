<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class ActionAjouteCulture
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
