<?php

namespace bt\Model;

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