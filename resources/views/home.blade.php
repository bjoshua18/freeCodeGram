@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-mad1-1.cdninstagram.com/vp/5feceb6197376d63190654bb83824432/5E038B38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com" alt="fcc-image" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-mad1-1.cdninstagram.com/vp/e30fed6fc0683dc74e15e92aea5ee68d/5E124344/t51.2885-15/e35/c2.0.745.745a/s320x320/67980021_2202052933427189_6407359992029428126_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-mad1-1.cdninstagram.com/vp/601b9cc2f00f8dd86bdb21eb8259d698/5E063FF2/t51.2885-15/e35/c3.0.743.743a/s480x480/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-mad1-1.cdninstagram.com/vp/4b2a4e74e088ae96270ecb93dd5ad2a2/5DF04874/t51.2885-15/e35/c94.0.561.561a/s320x320/67888008_733296147101399_5156895999074572136_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com" class="w-100">
        </div>
    </div>
</div>
@endsection
