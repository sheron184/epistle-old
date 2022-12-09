
    <div class="row">
        <div class="col-12 mb-4">
            <div class="devider-header">
                <h5>Booklets</h5>
                <div class="triangle"></div>    
            </div>   
        </div> 
        @foreach($booklets as $book)
            <x-booklet :book="$book" :action="$action='view'" />  
        @endforeach 
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="devider-header">
                <h5>Projects</h5>
                <div class="triangle"></div>    
            </div>   
        </div> 
        @foreach($projects as $project)
            <x-project :project="$project" :action="$action='view'" />  
        @endforeach 
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="devider-header">
                <h5>Teams</h5>
                <div class="triangle"></div>    
            </div>   
        </div> 
        <x-team />  
        <x-team /> 
        <x-team /> 
    </div>
