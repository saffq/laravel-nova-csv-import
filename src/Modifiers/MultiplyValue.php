<?php

namespace SimonHamp\LaravelNovaCsvImport\Modifiers;

use SimonHamp\LaravelNovaCsvImport\Contracts\Modifier;

class MultiplyValue implements Modifier
{
    //added multiplication
    public function title(): string
    {
        return 'Multiply Value';
    }

    public function description(): string
    {
        return 'Multiply the column value by a specified number';
    }

    public function settings(): array
    {
        return [
            'multiplier' => [
                'type' => 'number',
                'title' => 'Multiplier',
            ],
        ];
    }

    public function handle($value = null, array $settings = [])
    {
        $multiplier = $settings['multiplier'] ?? 1;
        if(is_numeric($value)) {
            return $value * $multiplier;
        } else {
            return $value;
        }
    }
}
