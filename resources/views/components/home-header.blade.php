<div class="header-wrapper d-flex shadow-sm">
    <div class="logo-box p-3 d-flex align-items-center">
        <h3 class="mb-0"><a href="/">EPISTLE</a></h3>
    </div>
    <div class="header-btns flex-grow-1 d-flex justify-content-end">
        <div class="p-3">
            <button class="button-35 mr-3 prompt" target-module="teamModule"><i class="fa-solid fa-plus mr-2"></i> Team</button>
            <button class="button-35 mr-3 prompt" target-module="projectModule"><i class="fa-solid fa-plus mr-2"></i> Project</button>
            <button class="button-35 mr-3 prompt" target-module="bookletModule"><i class="fa-solid fa-plus mr-2"></i> Booklet</button>
            <button class="mr-3 button-29"><i class="fa-solid fa-hashtag"></i> Explorer</button>
            <a href="profile" class="button-71"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</div>
<div class="search-bar-wrapper mt-2">
    <div class="pt-3">
        <div class="search-bar-row d-flex justify-content-center p-2">
            <form class="search-bar-form d-flex justify-content-center">
                <input type="text" class="search-input" placeholder="Search here..">
                <button class="sbtn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</div>


<!-- ======================= MODULES  ============================= -->
<div class="popup-dark-bg hideme">
    <!-- Project module -->
    <div id="projectModule" class="hideme animate__animated">
        <div class="module mt-4 shadow border position-relative">
            <a class="closeme"><i class="fa-solid fa-xmark"></i></a>
            <form action="add_module" method="post">
                <div class="form-group">
                    <h5>Create Project</h5>
                </div>
                <div class="form-group">
                    <label for="proj_name">Project topic</label>
                    <input type="text" class="form-control" name="proj_name">
                </div>
                <div class="form-group">
                    <label for="proj_name">Description</label>
                    <textarea name="des" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="proj_name">Technologies</label>
                    <input type="text" class="form-control" name="proj_name">
                </div>
                <div class="form-group">
                    <input type="submit" class="button-47" value="Create">
                </div>
            </form>
        </div>
    </div>

    <div id="bookletModule" class="hideme animate__animated">
        <div class="module mt-4 shadow border position-relative">
            <a class="closeme"><i class="fa-solid fa-xmark"></i></a>
            <form id="bookletForm" action="add_booklet" method="post">
                @csrf
                <div class="form-group">
                    <h5>Create Booklet</h5>
                </div>
                <div class="form-group">
                    <label for="proj_name">Booklet topic</label>
                    <input type="text" class="form-control" name="topic">
                </div>
                <div class="form-group">
                    <label for="proj_name">Programming language</label>
                    <input type="text" class="form-control" name="language">
                </div>
                <div class="form-group">
                    <label for="proj_name">Keywords (Seperate each keyword with a comma)</label>
                    <textarea name="keywords" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="button-47" value="Create">
                </div>
            </form>
        </div>
    </div>

    <div id="teamModule" class="hideme animate__animated">
        <div class="module mt-4 shadow border position-relative">
            <a class="closeme"><i class="fa-solid fa-xmark"></i></a>
            <form action="add_module" method="post">
                <div class="form-group">
                    <h5>Create Team</h5>
                </div>
                <div class="form-group">
                    <label for="proj_name">Team name</label>
                    <input type="text" class="form-control" name="proj_name">
                </div>
                <div class="form-group">
                    <label for="proj_name">Select project</label>
                    <input type="text" class="form-control" name="proj_name">
                </div>
                <div class="form-group">
                    <label for="proj_name">Description</label>
                    <textarea name="des" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="button-47" value="Create">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(".prompt").click(function(){
        $(".popup-dark-bg").removeClass("hideme");
        var moduleId = "#"+$(this).attr('target-module');
        $(moduleId).removeClass("hideme").addClass("animate__zoomIn").addClass("display");
    })
    $(".closeme").click(function(){
        $(this).parent("div").parent("div").addClass("hideme").removeClass("display").parent('div').addClass("hideme");
    })
</script>