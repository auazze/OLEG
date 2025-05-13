@props([
    'align'         => 'right',
    'width'         => '48',
    'contentClasses'=> ''
])

<div {{ $attributes->merge(['class' => $align === 'top' ? 'dropup' : 'dropdown']) }}>
    {{-- Триггер --}}
    <div
        class="dropdown-toggle"
        role="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        {{ $trigger }}
    </div>

    {{-- Меню --}}
    <div
        class="dropdown-menu{{ $align === 'right' ? ' dropdown-menu-end' : '' }} {{ $contentClasses }}"
        style="{{ $width === '48' ? 'width:12rem;' : '' }}"
    >
        {{ $content }}
    </div>
</div>
