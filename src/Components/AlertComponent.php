<?php

namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('alert')]
class AlertComponent
{
    public string $text;

    public string $title = '';

    public string $variant = 'info';

    public function getBackgroundClass(): string
    {
        return match ($this->variant) {
            'info' => 'bg-blue-50',
            'success' => 'bg-green-50',
            'warning' => 'bg-yellow-50',
            'danger' => 'bg-red-50',
        };
    }

    public function getIconName(): string
    {
        return match ($this->variant) {
            'info' => 'information-circle',
            'success' => 'check-circle',
            'warning' => 'exclamation-triangle',
            'danger' => 'x-circle',
        };
    }

    public function getIconClass(): string
    {
        return match ($this->variant) {
            'info' => 'text-blue-400',
            'success' => 'text-green-400',
            'warning' => 'text-yellow-400',
            'danger' => 'text-red-400',
        };
    }

    public function getTitleClass(): string
    {
        return match ($this->variant) {
            'info' => 'text-blue-800',
            'success' => 'text-green-800',
            'warning' => 'text-yellow-800',
            'danger' => 'text-red-800',
        };
    }

    public function getTextClass(): string
    {
        return match ($this->variant) {
            'info' => 'text-blue-700',
            'success' => 'text-green-700',
            'warning' => 'text-yellow-700',
            'danger' => 'text-red-700',
        };
    }
}
