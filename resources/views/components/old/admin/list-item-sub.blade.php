@props([
    'menuTitle','subLink'
])
<li>
    <a class="dropdown">
        <span class="icon"><i class="mdi mdi-view-list"></i></span>
        <span class="menu-item-label">{{$menuTitle}}</span>
        <span class="icon"><i class="mdi mdi-plus"></i></span>
    </a>
    <ul>
        @foreach($subLink as $item )
            <li>
                <a href="#void">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span>{{$item['title']}}</span>
                </a>
            </li>
        @endforeach
    </ul>
</li>