<div class="profile-card mt-4">
    <div class="p-3 border border-radius-2 pt-4 pb-4">
        <div class="propic d-flex justify-content-center">
            <img class="pp" src="{{url('imgs/pngs/profile.png')}}" alt="">
        </div>
        <div class="userinfo mt-3">
            <h4 class="text-center">{{$user->first_name}} {{$user->last_name}}</h4>
            <p class="text-center border mb-0">{{$user->email}}</p>
        </div>
        @if($user->github_username == null)
            <div class="github-sec mt-3">
                <div class="d-flex justify-content-center">
                    <a href="gitlog" class="pt-2 pl-3 pr-3 btn con-git-btn shadow">Connect Your Github</a>
                </div>
            </div>
        @else
            <div class="github-sec mt-3">
                <div class="d-flex justify-content-center">
                    <div class="p-2">
                        <div class="border d-flex align-items-center pl-3 pr-3 pt-2 pb-2 border-radius-2 bg-dark">
                            <h5 class="mb-0 text-white">{{$user->github_username}} <i class="fa-brands fa-github ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>