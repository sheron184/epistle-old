@extends('project/project')

@section('header')
    <input type="hidden" value="{{$project->content}}" id="projectContent">
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
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="p-2 d-flex justify-content-end">
                <div class="d-flex align-items-center">
                    <a class="item-action heart f-30 ml-3" href="#"><i class="fa-regular fa-heart"></i></a>
                    <a class="item-action save f-30 ml-3" href="#"><i class="fa-regular fa-bookmark"></i></a>
                    <a class="item-action share f-30 ml-3" href="#"><i class="fa-solid fa-share"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-4">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 100vh mt-4">
            <div class="book-container-wrapper vh100">
                <iframe title="description" id="projectContainer"></iframe>    
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
        let iframe = document.getElementById("projectContainer");
        var parser = new DOMParser();
        var content = $("#projectContent").val();
        var html = parser.parseFromString(content,"text/html");
        var body = $("#projectContainer").contents().find("body");
        body.append(html.body.innerHTML);
        //iframe.contentWindow.document.open();
        //iframe.contentWindow.document.write(html);
        //iframe.body.innerHTML = html.body.innerHTML;
        //console.log(html.body.innerHTML)
        //$(".bookContainer").html(html.body.innerHTML);
    })
</script>
@endsection