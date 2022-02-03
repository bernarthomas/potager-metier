<?php

namespace Bt\Port\Templating;

/**
 * Contrat moteur de templates
 */
interface TemplateInterface
{
    /**
     * @param string $nomFichier
     * @param array $parametres
     * @return string
     */
    public function render(string $nomFichier, array $parametres = []): string;
}