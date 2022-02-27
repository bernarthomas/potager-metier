<?php

namespace Bt\Culture;

/**
 * Cas utilisateur ajout d'une culture
 */
class ActionSupprime
{
    /**
     * L'objet métier
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
     * Supprime une culture en utilisant les objets injectés et conformes
     *
     * @return bool
     */
    public function execute(): bool
    {
        return $this->culture
            ->getGestionnaire()
            ->setId($this->culture->getId())
            ->supprime();
    }
}
