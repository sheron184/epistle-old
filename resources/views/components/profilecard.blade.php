<div class="profile-card mt-4">
    <div class="p-3 border border-radius-2 pt-4 pb-4">
        <div class="propic d-flex justify-content-center">
            <img class="pp" src="{{url('imgs/pngs/profile.png')}}" alt="">
        </div>
        <div class="userinfo mt-3">
            <h4 class="text-center">{{$user->first_name}} {{$user->last_name}}</h4>
            <p class="text-center border mb-0">{{$user->email}}</p>
        </div>
    </div>
</div>