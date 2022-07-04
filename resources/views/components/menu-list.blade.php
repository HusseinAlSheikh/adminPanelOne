@props(['menuListTitle' ,'subMenuArr' ,'withSub'])

<p class="menu-label">{{$menuListTitle}}</p>
<ul class="menu-list">

    @foreach($subMenuArr as $subMenu)
        @if($withSub == 'Y')
            <x-list-item-sub
                    :menuTitle="$subMenu['title']"
                    :subLink="$subMenu['links']"
            />
        @endif
    @endforeach

</ul>