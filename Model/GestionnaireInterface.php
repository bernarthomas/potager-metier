<?php

namespace Bt\Model;

/**
 *
 */
interface GestionnaireInterface extends ParentInterface
{
    /**
     * @param GestionnaireInterface $gestionnaire
     * @return GestionnaireInterface
     */
    public function setGestionnaire(GestionnaireInterface $gestionnaire): GestionnaireInterface;
}