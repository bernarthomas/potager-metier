<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class AjouteCultureCase
{
    /**
     * L'objet responsable des transferts de données
     *
     * @var CultureDTOInterface
     */
    private CultureDTOInterface $cultureDTO;

    /**
     * L'objet métier garant de sa validité
     *
     * @var CultureMetier
     */
    private CultureMetier $cultureMetier;

    /**
     * Constructeur
     *
     * @param CultureDTOInterface $cultureDTO
     * @param CultureMetier $cultureMetier
     */
    public function __construct(CultureDTOInterface $cultureDTO, CultureMetier $cultureMetier)
    {
        $this->cultureDTO = $cultureDTO;
        $this->cultureMetier = $cultureMetier;
    }

    /**
     * Ajoute une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function ajoute()
    {
        return $this->cultureDTO
            ->setLibelle($this->cultureMetier->getLibelle())
            ->ajoute();
    }
}
