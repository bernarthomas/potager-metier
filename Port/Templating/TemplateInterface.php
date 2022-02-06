<?php

namespace Bt\Port\Templating;

/**
 * Contrat moteur de templates
 */
interface TemplateInterface
{
    /**
     * @param string $nomFichier
     * @param ViewModelInterface|null $parametres
     * @return string
     */
    public function render(string $nomFichier, ViewModelInterface $parametres = null): string;
}