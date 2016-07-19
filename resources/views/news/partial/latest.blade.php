<li>
    <a href="{!!  URL::to('news/' . $n->slug) !!}" title="{{ $n->name }}" class="post-image">
        <img src="http://www.rmnt.ru/pub/uploads/201304/2370011618561033.jpg" height="90px" width="90px" alt="">
    </a>
    <div class="post-content">
        <a href="{!!  URL::to('news/' . $n->slug) !!}" title="{{ $n->name }}">{{ $n->name }}</a>
        <ul class="post-details">
            <li class="date">@include('partials.date2',['date'=>$n->created_at])</li>
        </ul>
    </div>
</li>