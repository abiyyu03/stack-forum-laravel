@extends('layouts.app')

@section('content')
    <h1>Buat pertanyaan baru</h1>
    <div class="">
        <form action="/question" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul pertanyaan</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="content">Isi pertanyaan</label>
                <textarea id="content" class="form-control tinymce-editor" name="content" id="content" rows="10">
                </textarea>
            </div>
            
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" name="tags" id="tags">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-dark bg-primary border-0 shadow" value="Simpan">
            </div>
        </form>
    </div>
@endsection


@push('additional_scripts')
    @include('layouts.scripts.tinymce')
@endpush
