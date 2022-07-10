@if(isset($options))

    @php
        $opt = array_merge([
            'home_link' => route('admin::index'),
            'title'     => 'Dashboard',
            'icon_type' => 'fa',
            'icon'      => null,
            'items'     => [
                // [
                //     'label' => 'Breadcrump Label',
                //     'link'  => 'javascript:;',
                // ]
            ],
        ], $options)
    @endphp

    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                @if($opt['icon'])
                    @if($opt['icon_type'] == 'fa')
                        <i class="{!! $opt['icon'] !!}"></i>
                    @elseif($opt['icon_type'] == 'svg')
                        {!! $opt['icon'] !!}
                    @endif
                @endif
                {{ $opt['title'] }}
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

            <div class="kt-subheader__breadcrumbs">
                <a href="{{ $opt['home_link'] }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                @if(!empty($opt['items']))
                    
                    @foreach( $opt['items'] as $k => $v )
                        @if(isset($v['link']) && isset($v['label']))
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            @if( request()->url() == $v['link'] )
                                {{-- <span class="kt-subheader__desc k-subheader__breadcrumbs-link--active">{{ $v['label'] }}</span> --}}
                                <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">{{ $v['label'] }}</span>
                            @else
                                {{-- <span class="kt-subheader__desc k-subheader__breadcrumbs-link--active">
                                    <a href="{{ $v['link'] }}" class="k-subheader__breadcrumbs-link">
                                        {{ $v['label'] }}
                                    </a>
                                </span> --}}
                                <a href="{{ $v['link'] }}" class="kt-subheader__breadcrumbs-link">
                                    {{ $v['label'] }}
                                </a>
                            @endif
                        @endif
                    @endforeach
                @endif
            </div>

            {!! $slot !!}

            {{-- <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                Add New
            </a>

            <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                    <span>
                        <i class="flaticon2-search-1"></i>
                    </span>
                </span>
            </div> --}}
        </div>
        
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                @if(isset($toolbar))
                    {!! $toolbar !!}
                @endif
            </div>
        </div>
    </div>

@endif