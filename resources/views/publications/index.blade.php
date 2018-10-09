@extends('master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">
                    New publication
                </button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <filters></filters>
                    <publications></publications>
                </div>
            </div>
        </div>
        <div class="modal">
            <publications-form></publications-form>
        </div>
    </div>
@endsection