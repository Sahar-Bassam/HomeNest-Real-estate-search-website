@props(['highlight' => false])
<div @class(['highlight' =>$highlight, 'card'])>
        <img src="/images/estate.jpg" alt="" class="card-img">

    {{$slot}} 
    <a {{$attributes}} class="btn">View Details</a>
</div>