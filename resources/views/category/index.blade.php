@extends('layouts.app')

@section('title', 'Kategori')
@section('breadcrumb')
@parent
<li class="breadcrumb-item active">kategori</li>
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline card-cyan">
            <div class="card-header">
                <h3 class="card-title">Kategori</h3>

                <div class="card-tools">
                    <a href="{{ route('category.create') }}" class="btn  btn-outline-primary btn-xs btn-flat"><i
                            class="fas fa-plus-circle"></i> &nbsp;Tambah</a>
                </div>
            </div>

            <div class="card-body">

                <form action="" class="d-flex justify-content-between">
                    <x-dropdown-table />
                    <x-filter-table />
                </form>

                <table class="table table-striped">
                    <thead class="text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th width="25%">Jumlah Projek</th>
                            <th width="15%"><i class="fas fa-certificate"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categories as $key => $item)
                        <tr>
                            <td>
                                <x-number-table :key="$key" :model="$categories" />
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>0</td>
                            <td>
                                <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')


                                    <a href="{{ route('category.edit', $item->id) }}"
                                        class="btn btn-outline-success btn-xs btn-flat"><i class="fa fa-pencil-alt"></i>
                                        &nbsp;Edit</a>
                                    <button class="btn btn-outline-danger btn-xs btn-flat"
                                        onclick="return confirm('Apakah yakin akan menghapus data ini..?')"><i
                                            class="fas fa-trash"></i>
                                        &nbsp;Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="float-right mt-2">
                    {{ $categories->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')
{{-- memanggil component toast --}}
<x-toast />
@endpush