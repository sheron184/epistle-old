<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 pt-3">
    <div class="p-3 booklet position-relative">
        <div class="book-header">
            <h5 class="topic">{{$project->topic}}</h5>
        </div>
        @if($action == "edit")
            <a href="editp/{{$project->uniq_id}}" class="book-view-btn edit position-absolute">Edit</a>
        @else 
            <a href="viewp/{{$project->uniq_id}}" class="book-view-btn view position-absolute">View</a>
        @endif
    </div>
</div> 