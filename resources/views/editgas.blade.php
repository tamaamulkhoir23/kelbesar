@extends('layout')

@section('title', 'Tambah Data Gas')
@section('header', 'Tambah Data Gas')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Edit Data Gas</h2>
        </div>
        <div class="card-body">
            {{-- Form untuk mengedit data gas --}}
            <form action="{{ route('gas.update', $gas->id) }}" method="post">
                @csrf
                @method('PUT')

                {{-- Input Nama Sensor --}}
                <div class="mb-3">
                    <label for="namasensor" class="form-label">Nama Sensor</label>
                    <input type="text" name="namasensor" id="namasensor" class="form-control" value="{{ $gas->namasensor }}" required>
                </div>

                {{-- Input Jenis Gas --}}
                <div class="mb-3">
                    <label for="jenisgas" class="form-label">Jenis Gas</label>
                    <input type="text" name="jenisgas" id="jenisgas" class="form-control" value="{{ $gas->jenisgas }}" required>
                </div>

                {{-- Input Nilai gas --}}
                <div class="mb-3">
                    <label for="nilaigas" class="form-label">Nilai gas</label>
                    <input type="text" name="nilaigas" id="nilaigas" class="form-control" value="{{ $gas->nilaigas }}" required>
                </div>

                {{-- Tombol Submit --}}
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('datagas') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

