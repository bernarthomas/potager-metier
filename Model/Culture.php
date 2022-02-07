<?php

namespace Bt\Model;

/**
 *
 */
class Culture implements DTOInterface, ParentInterface, GestionnaireInterface
{
    /**
     * @var string
     */
    public string $libelle;

    /**
     * @var
     */
    private $gestionnaire;

    /**
     * @return bool
     */
    public function ajoute(): bool
    {
        return $this->gestionnaire->ajoute();
    }

    /**
     * @return bool
     */
    public function enleve(): bool
    {
        return $this->gestionnaire->enleve();
    }

    /**
     * @return array
     */
    public function collecte(): array
    {
        return $this->gestionnaire->collecte();
    }

    /**
     * @return bool
     */
    public function valide(): bool
    {
        return !empty($libelle);
    }

    /**
     * @param GestionnaireInterface $gestionnaire
     * @return GestionnaireInterface
     */
    public function setGestionnaire(GestionnaireInterface $gestionnaire): GestionnaireInterface
    {
        $this->gestionnaire = $gestionnaire;
    }
}