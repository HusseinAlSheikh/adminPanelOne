@if(isset($options))
    @php
        $X = array_merge([
            'type'        => 'default',
            'icon'        => 'flaticon-questions-circular-button',
            'dismissable' => true,
            'description' => null,
        ], $options);
    @endphp
    <div class="alert alert-outline-{{ $X['type'] }}" role="alert">
        @if(!empty($X['icon']))
            <div class="alert-icon">
                <i class="{!! $X['icon'] !!}"></i>
            </div>
        @endif
        <div class="alert-text">
            @if($X['title'] || $X['description'])
                @if (!empty($X['title']))
                    <strong>{{ $X['title'] }}</strong><br>
                @endif
                {!! $X['description'] !!}
            @elseif(isset($slot))
                {!! $slot !!}
            @else

            @endif
        </div>
        @if($X['dismissable'])
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="la la-close"></i></span>
                </button>
            </div>
        @endif
    </div>
@endif
