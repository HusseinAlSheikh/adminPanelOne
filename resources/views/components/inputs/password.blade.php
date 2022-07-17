@if(isset($options))
    @php
        $param = array_merge([
            'id'          => null,
            'name'        => null,
            'type'        => 'text',
            'label'       => null,
            'placeholder' => null,
            'help'        => null,
            'class'       => null,
            'container_attributes' => null,
            'attr'        => null,
            'value'       => null,
            'view'        => 'DEFAULT', //INLINE | DEFAULT
            'label_size'  => 'col-lg-3',
            'input_size'  => 'col-lg-8',
            'disabled'    => false,
            'readonly'    => false,
            'errors'      => $errors->has($options['name']),
            'showErrors'  => true,
            'icon'        => '',
        ], $options);
    @endphp

    <div class="form-group">
        <label for="{{$param['id']}}" class="{{$param['label_size']}}">{{$param['label']}}</label>
        <input
                type="password"
                class="form-control {{ $param['errors'] ? 'is-invalid' : ''  }}  {{$param['input_size']}}  {{$param['class']}}"
                id="{{$param['id']}}"
                name="{{$param['name']}}"
                placeholder="{{$param['placeholder']}}"
        >

    @if($param['icon'])
            <span class="icon ">
                <i class="{{$param['icon']}}"></i>
            </span>
        @endif

        @if($param['errors'] && $param['showErrors'])
            <x-inputs.input-error :inputName="$param['name']"/>
        @endif

    </div>


@endif