@extends('layouts.app')

@section('title', 'Kategori')
@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="{{ route('category.index') }}"> kategori</a></li>
<li class="breadcrumb-item active">tambah</li>
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">

        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <x-card>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control border-0 @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" required autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <x-slot name="footer">
                    <button type="reset" class="btn btn-dark btn-flat"><i class="fas fa-redo-alt"></i>
                        &nbsp;Reset</button>
                    <button type="submit" class="btn bg-cyan btn-flat"><i class="fas fa-save"></i>
                        &nbsp;Simpan</button>
                </x-slot>
            </x-card>
        </form>

    </div>
</div>

@endsection

@push('scripts')
@endpush