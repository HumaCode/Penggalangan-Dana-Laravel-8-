{{-- ketika ada session success --}}
@if (session()->has('success'))
    <script>
        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Berhasil',
            body: '{{ session('message') }}'
        })

        setTimeout(() => {
            $('.toasts-top-right').remove();
        }, 3000);
    </script>
@elseif (session()->has('errors'))
    <script>
        $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Gagal',
            body: '{{ session('message') }}'
        })

        setTimeout(() => {
            $('.toasts-top-right').remove();
        }, 3000);
    </script>
@endif
