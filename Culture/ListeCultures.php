<?php

namespace Bt\Culture;

use Bt\Exception\ImmutableException;

/**
 *
 */
final class ListeCultures implements ListeCulturesInterface
{
    /**
     * @var bool Permet d'empécher une nouvelle instanciation
     */
    private bool $dejaIntanciee = false;

    /**
     * @var array Tableau des cultures
     */
    private array $occurences;

    /**
     * @param array $occurences
     * @throws ImmutableException
     */
    public function __construct(array $occurences)
    {
        if (true === $this->dejaIntanciee) {
            throw new ImmutableException();
        }
        $this->occurences = $occurences;
    }

    /**
     * @return array
     */
    public function getOccurences(): array
    {
        return $this->occurences;
    }
}
