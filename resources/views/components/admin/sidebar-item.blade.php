@props(['isOpen' , 'isMulti' ,'mainLabel','mainRouteName','mainIcon','mainIconSubClass','mainIconSubLabel' , 'subItems'])
<li class="nav-item {{$isOpen?'menu-open':''}}">
    <a href="{{$mainRouteName?route($mainRouteName):''}}" class="nav-link {{$isOpen?'active':''}}">
        <i class="nav-icon {{$mainIcon}}"></i>
        <p>
            {{$mainLabel}}
            {!! $isMulti?'<i class="right fas fa-angle-left"></i>':'' !!}
            @if($mainIconSubLabel)
                <span class="badge right {{$mainIconSubClass}}">{{$mainIconSubLabel}}</span>
            @endif
        </p>
    </a>
    @if($isMulti)
        <ul class="nav nav-treeview">
            @foreach($subItems as $item )
                <li class="nav-item">
                    <a href="{{route($item['routeName'])}}" class="nav-link {{$item['active']?'active':''}}">
                        <i class="nav-icon {{$item['icon']}}"></i>
                        <p>{{$item['itemLabel']}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>