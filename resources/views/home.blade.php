@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/Seraphine.jpg" alt="" class="img-fluid rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url ?? '#' }}">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fhan5-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/118691890_342247030309643_514432405304383413_n.jpg?_nc_ht=instagram.fhan5-2.fna.fbcdn.net&_nc_cat=1&_nc_ohc=hNzbr0eOy0QAX-FKzhp&oh=0d4d1fd8e90666fa991dc9aebc0ac72f&oe=5F7D5965"
                 class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fhan5-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.13.1440.1440a/s640x640/118545521_781976122579532_4326167986421902292_n.jpg?_nc_ht=instagram.fhan5-2.fna.fbcdn.net&_nc_cat=1&_nc_ohc=Lh61imlzPq0AX_zoJMi&oh=b6a97126c2090d1c806b31c44c74bd35&oe=5F7FDE7A"
                 class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fhan5-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c240.0.960.960a/s640x640/118467658_152939473106166_3587222243144913280_n.jpg?_nc_ht=instagram.fhan5-2.fna.fbcdn.net&_nc_cat=1&_nc_ohc=mP5bIzhWHCAAX82xK-U&oh=5b6da27bbaeb70ec129a404da81c88e6&oe=5F7F3706"
                 class="w-100" alt="">
        </div>
    </div>
</div>
@endsection

