<?php

namespace Bt\Culture;

/**
 * Cas utilisateur liste les cultures
 */
class ActionListeCultures
{
    /**
     * L'objet responsable des transferts de données
     *
     * @var GestionnaireCultureInterface
     */
    private GestionnaireCultureInterface $gestionnaireCulture;

    /**
     * @param GestionnaireCultureInterface $gestionnaireCulture
     */
    public function __construct(GestionnaireCultureInterface $gestionnaireCulture)
    {
        $this->gestionnaireCulture = $gestionnaireCulture;
    }

    /**
     * Retourne la liste des cultures
     *
     * @return array
     */
    public function excecute(): array
    {
        return $this->gestionnaireCulture->collecte();
    }
}
