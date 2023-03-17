<?php

declare(strict_types=1);

namespace MichelCetina\PsalmSubIssue;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;

class TestProcessor implements ProcessorInterface
{
    /**
     * @param array<string, string> $uriVariables
     * @param array<string, mixed> $context
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): array
    {
        return [];
    }
}
