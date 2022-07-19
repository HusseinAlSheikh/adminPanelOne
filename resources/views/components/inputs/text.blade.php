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
            'label_size'  => 'col-lg-2',
            'input_size'  => 'col-lg-10',
            'disabled'    => false,
            'readonly'    => false,
            'errors'      => $errors->has($options['name']),
            'showErrors'  => true,
            'icon'        => '',
        ], $options);
    @endphp
{{-----------------------------------}}
    <div class="form-group {{($param['view'] == 'INLINE')?'row':''}}">
        @if($param['view'] == 'INLINE')
            <label
                    for="{{$param['id']}}"
                    class="col-form-label {{$param['label_size']}}">
                {{$param['label']}}
            </label>
            <div class="{{$param['input_size']}}">
                <input
                        name="{{$param['name']}}"
                        id="{{$param['id']}}"
                        type="{{$param['type']}}"
                        class="form-control
                        {{ $param['errors'] ? 'is-invalid' : ''  }}
                        {{ ($param['type']=='file') ? 'border-0' : ''  }}
                        {{$param['input_size']}}  {{$param['class']}}"
                        placeholder="{{$param['placeholder']}}"
                        value="{{$param['value']}}"
                        {{$param['attr']}}
                >
            </div>
        @else
            <label
                    for="{{$param['id']}}"
                    class=" {{$param['label_size']}}">
                {{$param['label']}}
            </label>
            <input
                    name="{{$param['name']}}"
                    id="{{$param['id']}}"
                    type="{{$param['type']}}"
                    class="
                    form-control
                    {{ $param['errors'] ? 'is-invalid' : ''  }}
                    {{ ($param['type']=='file') ? 'border-0' : ''  }}
                    {{$param['input_size']}}  {{$param['class']}}"
                    placeholder="{{$param['placeholder']}}"
                    value="{{$param['value']}}"
                    {{$param['attr']}}
            >
        @endif
{{-------------------------}}
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