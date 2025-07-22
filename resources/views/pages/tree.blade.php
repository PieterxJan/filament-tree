@php
    $columns = [
        'default' => 1,
    ];
@endphp
<x-filament::page class="filament-tree-page">
            {{ $this->tree }}
</x-filament::page>