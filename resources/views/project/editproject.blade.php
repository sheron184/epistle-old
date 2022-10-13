@extends('project/project')

@section('header')
    <div class="container-fluid shadow-sm">
        <div class="row">
            <div class="col-12">
                <div class="p-2 d-flex">
                    <a href="/home" class="f-20"><i class="fa-solid fa-circle-left"></i></a>
                    <h4 class="ml-3">{{"Project Topic"}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12 pl-0 border pt-2">
            <div class="elements-bar p-2 h-100vh">
                <div class="bar-heading mb-3">
                    <h4 align="center">Elements</h4>
                </div>
                <x-elements />
            </div>
        </div>
        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-12 col-12 pt-3">
            <div id="dropboxContainer" class="canvas-wrapper p-2 d-flex justify-content-center">
                <div id="dropbox" class="canvas"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="pt-3 pb-3">
                <form action="/pdf" method="post" class="p-2 d-flex justify-content-end">
                    @csrf
                    <input id="html_content" type="hidden" name="html" class="form-control">
                    <input type="submit" value="IMG" class="btn btn-sm btn-dark mr-3">
                    <input type="submit" value="DOCX" class="btn btn-sm btn-info mr-3">
                    <input type="submit" value="PDF" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection