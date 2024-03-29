@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="col-12 row justify-content-center">
            <div class="col-sm-8 mt-5">

                <form method="post" enctype="multipart/form-data" action="/admin/rolego">
                    @csrf
                    <h3 class="mb-5">Role</h3>

                    <span class="">Title :</span>
                    <input type="text" class="form-control mb-2" id="title" name="title">

                    <div class="mt-3 row float-right pr-3">
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <button href="/home" class="btn btn-danger">Batal</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
