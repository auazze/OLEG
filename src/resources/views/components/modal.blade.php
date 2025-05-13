@props([
    'name',
    'show'     => false,
    'maxWidth' => '2xl'
])

@php
    // Соответствие размеров Bootstrap modal-dialog
    $sizeClass = match($maxWidth) {
        'sm'  => 'modal-sm',
        'md'  => '',           // по умолчанию
        'lg'  => 'modal-lg',
        'xl'  => 'modal-xl',
        '2xl' => 'modal-xl',
        default => '',
    };
@endphp

<div
    class="modal fade {{ $show ? 'show d-block' : '' }}"
    id="{{ $name }}"
    tabindex="-1"
    aria-labelledby="{{ $name }}Label"
    aria-hidden="{{ $show ? 'false' : 'true' }}"
    style="{{ $show ? 'display:block;' : '' }}"
>
    <div class="modal-dialog {{ $sizeClass }}">
        <div class="modal-content">
            {{ $slot }}
        </div>
    </div>
</div>

@if($show)
    {{-- При открытом модальном окне Bootstrap добавляет класс modal-open --}}
    <script>document.body.classList.add('modal-open');</script>
@endif
