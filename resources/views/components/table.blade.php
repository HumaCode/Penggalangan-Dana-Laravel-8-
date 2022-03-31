<table {{ $attributes->merge(['class' => 'table table-striped mt-3']) }}>

    @isset($thead)
    <thead class="text-center">
        {{ $thead }}
    </thead>
    @endisset

    <tbody>
        {{ $slot }}
    </tbody>

    @isset($tfoot)
    <thead class="text-center">
        {{ $tfoot }}
    </thead>
    @endisset
</table>