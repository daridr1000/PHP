@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/11380798_481418035348822_653598641_a.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_ohc=-to-2j8-QVgAX-Jg8KR&oh=3cdf0a487a2ff6a7d0179395ed2454ae&oe=5FBB24E0" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>12</strong> posts</div>
                <div class="pr-5"><strong>231</strong> followers</div>
                <div class="pr-5"><strong>414</strong> following </div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/84300551_185727389344837_8881371797782360447_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_cat=101&_nc_ohc=rs66zOmqgQ0AX_1Lxge&_nc_tp=24&oh=8e2c5aa16d6b306de3394d217b38522a&oe=5FB9C0E6" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/75572971_519670281921098_3492591072703896196_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_cat=102&_nc_ohc=rCWUNh3qGg4AX8rMGaR&_nc_tp=24&oh=2e9c9093781a17c07193312be6e4734d&oe=5FBD2373" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/20582757_327068084386863_7888040372083884032_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_cat=103&_nc_ohc=7Ql7XEJqvD4AX8YE3l8&_nc_tp=24&oh=c243b9369c422b691e7228582f8d7575&oe=5FBC744D" class="w-100">
        </div>
    </div>
</div>
@endsection
