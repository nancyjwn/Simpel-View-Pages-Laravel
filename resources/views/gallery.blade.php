@extends('layout.main')

@section('content')
<div class="container" id="gallery">
    <!-- <h2 id="hadua">Gallery</h2> -->
    <div class="grid-container">
        <div class="item">
            <img src="{{('images/minion1.jpeg')}}" alt="mini1" />

        </div>
        <div class="item">
            <img src="{{('images/minion2.jpeg')}}" alt="mini2" />

        </div>
        <div class="item">
            <img src="{{('images/minion3.jpeg')}}" alt="mini3" />

        </div>
        <div class="item">
            <img src="{{('images/minion4.jpeg')}}" alt="mini4" />

        </div>
        <div class="item">
            <img src="{{('images/minion6.jpeg')}}" alt="mini6" />

        </div>
        <div class="item">
            <img src="{{('images/minion7.jpeg')}}" alt="mini7" />

        </div>
    </div>
</div>
@endsection