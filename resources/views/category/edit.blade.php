@extends('layouts.app')

@section('title', 'Kategori')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}"> kategori</a></li>
    <li class="breadcrumb-item active">edit</li>
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-12">

            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card card-outline card-cyan">

                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control border-0" required
                                value="{{ $category->name }}">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="reset" class="btn btn-dark btn-flat"><i class="fas fa-redo-alt"></i>
                            &nbsp;Reset</button>
                        <button type="submit" class="btn bg-cyan btn-flat"><i class="fas fa-save"></i>
                            &nbsp;Simpan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection

@push('scripts')
@endpush
