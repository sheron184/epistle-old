@extends('project/project')
@section('header')
    <input type="hidden" id="bookletHtml" value="{{$project->content}}">
    <div class="container-fluid shadow-sm">
        <div class="row">
            <div class="col-12 bg-green text-white">
                <div class="top-bar d-flex align-items-center">
                    <a href="/home" class="text-white f-20"><i class="fa-solid fa-circle-left"></i></a>
                    <h4 class="book-name mb-0 ml-3">{{$project->topic}}</h4>
                    <div class="ml-3">
                        <button class="button-70" bookid="{{$project->uniq_id}}" id="savebook">Save</button>
                    </div>
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
                <x-ProjectElements />
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 pt-3">
            <div id="dropboxContainer" class="canvas-wrapper p-2 d-flex justify-content-center">
                <div id="dropbox" class="canvas"></div>
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12 border-left props-main-wrapper">
            <div class="props-wrapper">
                <div class="pt-3 fm-ubuntu">
                    <h6>Properties</h6>
                </div>
                <div class="props p-2">
                    <div class="">
                        <div>
                            <p align="center" for="">Bg color</p>
                            <input id="component-bg-color" type="color" class="form-control" disabled>
                            <div class="pt-2">
                                <p align="center">Rotate</p>
                                <input type="number" id="rotateX" class="form-control" placeholder="deg">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button onclick="delComp()" class="btn btn-sm border shadow-sm bg-del button-15 disabled text-white" id="delcomp" disabled>Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="pt-3 pb-3">
                <form action="/pdf" method="post" class="p-2 d-flex justify-content-end">
                    @csrf
                    <input id="html_content" type="hidden" name="html" class="form-control">
                    <input type="submit" value="IMG" class="btn btn-sm btn-dark mr-3">
                    <input type="submit" value="PDF" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{url('/js/interact.js')}}"></script>
<script src="{{url('/js/zombie.js')}}?{{uniqid()}}"></script>
<script>
    //Save Project
    saveBtn.addEventListener('click',(event)=>{
        var sendhtml = $("#html_content").val();
        var id = $(event.target).attr("bookid");
        token = document.querySelector('meta[name="csrf-token"]').content;
        const xhttp = new XMLHttpRequest();
        xhttp.open("POST","http://localhost:8000/saveproject",true);
        xhttp.setRequestHeader("X-CSRF-TOKEN", token); 
        xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhttp.onload = ()=>{
            if(xhttp.response){
            alert("Saved successfully!");
            }else{
            alert("Error occured!");
            }
        }
        xhttp.send(`id=${id}&html=${sendhtml}`);
    })
</script>
@endsection