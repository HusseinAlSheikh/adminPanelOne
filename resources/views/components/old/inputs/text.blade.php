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
            'errors'      => $errors,
            'showErrors'  => true,
        ], $options);
    @endphp

    <div class="field">
        <label class="label">{{ $param['label'] }}</label>
        <div class="field-body">
            <div class="field">
                <div class="control icons-left">
                    <input
                            name="{{$param['name']}}"
                            id="{{$param['id']}}"
                            type="{{$param['type']}}"
                            class="input form-control {{ $param['errors'] ? 'is-invalid' : ''  }}  {{$param['class']}}"
                            placeholder="{{$param['placeholder']}}"
                            value="{{$param['value']}}"
                            {{$param['attr']}}
                    >
                    <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
            </div>
        </div>
    </div>




@endif