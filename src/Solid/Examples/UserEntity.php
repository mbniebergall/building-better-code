<?php

declare(strict_types=1);

namespace Solid\Examples;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class UserEntity implements HydratorInterface, ToArrayInterface
{
    protected int $id;
    protected string $username;
    protected bool $isActive;

    public function hydrate(array $data)
    {
        $this->setId($data['id']);
        $this->setUsername($data['username']);
        $this->setIsActive($data['is_active']);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'username' => $this->getUsername(),
            'is_active' => $this->getIsActive(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }
}
