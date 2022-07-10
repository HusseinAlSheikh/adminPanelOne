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
        <label for="exampleInputEmail1">Email address</label>
        <input
                name="{{$param['name']}}"
                id="{{$param['id']}}"
                type="{{$param['type']}}"
                class="input form-control {{ $param['errors'] ? 'is-invalid' : ''  }}  {{$param['class']}}"
                placeholder="{{$param['placeholder']}}"
                value="{{$param['value']}}"
                {{$param['attr']}}
        >

        @if($param['icon'])
            <span class="icon ">
                <i class="{{$param['icon']}}"></i>
            </span>
        @endif


        @if($param['errors'] && $param['showErrors'])
           
        @endif

    </div>




@endif