<div class="container-fluid bg-colored">
    <div class="row h-100">
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 h-100 pl-0">
            <div class="row-image-1">

            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 h-100">
            <div class="row-content p-4">
                <h2 class="h2">What is Epistle?</h2>
                <p class="p">This application provides a smart work space for developers who try to learn new technologies that 
                    are related to Information Technology. This application provides a smart work space for IT students, 
                    developers or anyone who would like to get into the IT industry. The main purpose of the system is to 
                    provide a unique learning experience for self-learning developers. The applica-tion especially intends to 
                    make a competitive but enjoyable environment for developers to manage their studies in tech. 
                </p>
                <p class="p">
                    The system also provides a step by step guide for the technology subject that user need to learn.
                    System is included with features such as checking the progress of the study, sharing the work user has done, smart 
                    suggestions for their future studies and create small groups with develop-ers who are learning the same technology concepts. 
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid joinus">
    <div class="row h-100">
        <div class="col-12 pl-0 pr-0 h-100 joinus-col d-flex align-items-center justify-content-center">
            <div class="darker">
                <div class="d-flex justify-content-center darker-inner">
                    <div class="p-4">
                        <h2 class="joinus-text">Start your journey today!</h2>
                        <div class="d-flex justify-content-center">
                            @if(!session("logged_in"))
                                <button onclick="openpanel()" class="w-fit-content button-30">Join Us</button>
                            @else
                                <a class="button-63" href="home">Get Started</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-colored">
    <div class="row h-100">
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 h-100">
            <div class="row-content p-3">
                <h2 class="h2">What do you get?</h2>
                <div class="mt-4">
                    <div class="feature">
                        <h6 class="mb-0">Create, download and share booklets</h6>
                    </div>
                    <div class="feature">
                        <h6 class="mb-0">View other's booklets</h6>
                    </div>
                    <div class="feature">
                        <h6 class="mb-0">Create projects</h6>
                    </div>
                    <div class="feature">
                        <h6 class="mb-0">Create teams</h6>
                    </div>
                    <div class="feature">
                        <h6 class="mb-0">Tag information</h6>
                    </div>
                    <div class="feature">
                        <h6 class="mb-0">Live code compiler</h6>
                    </div>
                    <div class="feature">
                        <h6 class="mb-0">Follow others</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 h-100 pr-0">
            <div class="row-image-2"></div>
        </div>
    </div>
</div>
<script>
    function openpanel(){
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $(".userareaModule").removeClass("hideme").addClass("animate__slideInRight").removeClass("animate__slideOutLeft");
        $(".splide_slider").addClass("hideme").addClass("animate__slideOutLeft").removeClass("animate__slideInRight");
    }
</script>