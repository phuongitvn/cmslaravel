<table {{ $attributes->merge(['class' => 'table border-top dataTable no-footer dtr-column']) }}>
    <thead>
        {{ $head }}
    </thead>

    <tbody>
        {{ $body }}
    </tbody>
</table>