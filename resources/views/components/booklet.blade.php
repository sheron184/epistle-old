@php 
if($action == "edit"){
    $method = "editview";
}else if($action=="view"){
    $method = "bookview";
}
@endphp 
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 pt-3">
    <div class="p-3 booklet position-relative">
        <div class="book-header">
            <h5 class="topic">{{$book->topic}}</h5>
        </div>
        <a href="{{$method}}/{{$book->uniq_id}}" class="book-view-btn position-absolute">View</a>
    </div>
</div> 