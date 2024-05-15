@php
    $attribute = $attribute ?? '';
    $label = $label ?? '';
@endphp
@if (request()->query('sort') == $attribute)
    <a href="{{request()->fullUrlWithQuery(['sort' => '-'.$attribute])}}" class="sort-link no-underline hover:underline text-cyan-600">{{ __($label) }}<i class='bx bx-chevron-down'></i></a>
@else
    <a href="{{request()->fullUrlWithQuery(['sort' => $attribute])}}" class="sort-link no-underline hover:underline text-cyan-600">{{ __($label) }}<i class='bx bx-chevron-up'></i></a>
@endif