<?php

namespace Bt\Culture;

/**
 * Cas utilisateur liste les cultures
 */
class ActionListe
{
    /**
     * L'objet responsable des transferts de données
     *
     * @var GestionnaireInterface
     */
    private GestionnaireInterface $gestionnaireCulture;

    /**
     * @param GestionnaireInterface $gestionnaireCulture
     */
    public function __construct(GestionnaireInterface $gestionnaireCulture)
    {
        $this->gestionnaireCulture = $gestionnaireCulture;
    }

    /**
     * Retourne la liste des cultures
     *
     * @return array
     */
    public function execute(): array
    {
        return $this->gestionnaireCulture->collecte();
    }
}
