@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/profilePic.png" class="w-100 rounded-circle">
        </div>
        <div class="col-9">
            <div class="div d-flex pt-5 pb-3">
                <h1 class="pr-3">{{ Auth::user()->username }}</h1>
                <button class="btn" style="background-color: rgb(54, 191, 233); color: #fff">Follow</button>
            </div>
            <div class="div d-flex">
                <h6 class="pr-5"><strong>142 </strong>posts</h6>
                <h6 class="pr-5"><strong>89K </strong>followers</h6>
                <h6 class="pr-5"><strong>92 </strong>following</h6>
            </div>
            <br/>
            <div class="div">
                <div class="div"><h5><b>Full Stack Developer | مبرمج</b></h5></div>
                <div class="div"><p>Cloud Hosting and IT Sollutions Ex laborum ipsum pariatur dolore incididunt Anim pariatur eiusmod sit aliquip laboris Lorem incididunt ex occaecat magna aliqua aute velit reprehenderit.Voluptate in ullamco ad cupidatat ullamco.</p></div>
                <div class="div"><a href="www.elkortby.com">www.elkortby.com</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="/img/1.jpg" style="object-fit: cover" class="h-100 w-100"></div>
        <div class="col-4"><img src="/img/2.jpg" style="object-fit: cover" class="h-100 w-100"></div>
        <div class="col-4"><img src="/img/3.jpg" style="object-fit: cover" class="h-100 w-100"></div>
    </div>
</div>
@endsection