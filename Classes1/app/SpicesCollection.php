<?php

namespace app;

class SpicesCollection
{
    private array $spices = [];

    public function add(Spice $spice): void
    {
        $this->spices[] = $spice;
    }

    public function all(): array
    {
        return $this->spices;
    }
}