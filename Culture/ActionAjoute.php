<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class ActionAjoute
{
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
     */
    public function __construct(Culture $culture)
    {
        $this->culture = $culture;
    }

    /**
     * Ajoute une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function execute(): bool
    {
        return $this->culture
            ->getGestionnaire()
            ->setLibelle($this->culture->getLibelle())
            ->ajoute();
    }
}
