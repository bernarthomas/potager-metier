<?php

namespace Bt\Model;

/**
 *
 */
interface CultureInterface
{
    /**
     * @param GestionnaireInterface $gestionnairePDO
     *
     * @return $this
     */
    public function setGestionnaireDTO(GestionnaireInterface $gestionnairePDO): self;

    /**
     * @return bool
     */
    public function ajoute(): bool;

    /**
     * @return bool
     */
    public function enleve(): bool;

    /**
     * @return array
     */
    public function collecte(): array;

    /**
     * @return bool
     */
    public function valide(): bool;
    /**
     * @return bool
     */
    public function hydrate(): bool;
}