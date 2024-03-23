@php
$isSort = $attributes->get('is_sort');
$attribute = $attr ?? '';
$sortType = '';
if($isSort && request()->query('sort') == $attribute) {
    $sortType = 'sorting_asc';
}
if($isSort && request()->query('sort') == '-'.$attribute) {
    $sortType = 'sorting_desc';
}
$sortClass = $isSort == true ? "sorting" : "";
@endphp
<th {{ $attributes->merge(['class' => $sortClass.' '.$sortType]) }}>
    {{ $slot }}
</th>