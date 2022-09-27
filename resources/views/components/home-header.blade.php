<div class="popup-dark-bg hideme"></div>
<div class="header-wrapper d-flex">
    <div class="logo-box p-3">
        <h3><a href="/">EPISTLE</a></h3>
    </div>
    <div class="header-btns flex-grow-1 d-flex justify-content-end">
        <div class="p-3">
            <button class="button-61 mr-3 get-module"><i class="fa-solid fa-plus mr-2"></i> Team</button>
            <button class="button-61 mr-3 get-module"><i class="fa-solid fa-plus mr-2"></i> Project</button>
            <button class="button-61 mr-3 get-module"><i class="fa-solid fa-plus mr-2"></i> Booklet</button>
            <button class="mr-3 button-29"><i class="fa-solid fa-hashtag"></i> Explorer</button>
            <a href="profile" class="button-71"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</div>
<div class="search-bar-wrapper">
    <div class="search-bar">
        <div>
            <form action="">
                <input type="text" class="form-control" placeholder="Search here..">
            </form>
        </div>
    </div>
</div>

<div id="projectModule" class="hideme">
    <div class="module">
        <form action="add_module" method="post">
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
                <input type="text" class="button-61" value="Create">
            </div>
        </form>
    </div>
</div>
<script>
    $(".get-module").click(function(){
        $(".popup-dark-bg").removeClass("hideme");

    })
</script>