@if(isset($options))
    @php
        $param = array_merge([
            'id'          => null,
            'name'        => null,
            'checked'     => false,
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
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input
                        name="{{$param['name']}}"
                        id="{{$param['id']}}"
                        class="form-control-input "
                        type="checkbox"
                        {{$param['checked']?'checked':''}}
                >
                <label
                        for="{{$param['id']}}"
                       class="form-check-label">{{$param['label']}}</label>
            </div>

            @if($param['icon'])
                <span class="icon ">
                <i class="{{$param['icon']}}"></i>
            </span>
            @endif
            @if($param['showErrors'])
                <x-inputs.input-error :inputName="$param['name']"/>
            @endif
    </div>
@endif


