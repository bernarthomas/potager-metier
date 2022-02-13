<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class AjouteCultureAction
{
    /**
     * L'objet responsable des transferts de données
     *
     * @var CultureDTOInterface
     */
    private CultureDTOInterface $cultureDTO;

    /**
     * L'objet métier immutable et garant de sa validité
     *
     * @var Culture
     */
    private Culture $culture;

    /**
     * Constructeur
     *
     * @param CultureDTOInterface $cultureDTO
     * @param Culture $culture
     */
    public function __construct(CultureDTOInterface $cultureDTO, Culture $culture)
    {
        $this->cultureDTO = $cultureDTO;
        $this->culture = $culture;
    }

    /**
     * Ajoute une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function enregistre()
    {
        return $this->cultureDTO
            ->setLibelle($this->culture->getLibelle())
            ->ajoute();
    }
}
