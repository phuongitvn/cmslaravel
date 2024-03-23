<div {!! $attributes->merge(['class' => 'd-flex flex-wrap justify-content-between mb-4']) !!}>
    <h3 class="d-flex justify-content-md-start m-0">{{ $title ?? '' }}</h3>
    <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
        {{ $slot }}
    </div>
</div>