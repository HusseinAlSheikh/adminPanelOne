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


    <div class="file-upload-wrapper">
        <input type="file" id="input-file-now" class="file-upload" />
    </div>
    
    <div class="form-group">
        <label for="{{$param['id']}}" class="{{$param['label_size']}}">{{$param['label']}}</label>
        <div class="form-group">
            <div class="custom-file">
                <input
                       type="file"
                       class="custom-file-input  {{ $param['errors'] ? 'is-invalid' : ''  }}  {{$param['input_size']}} {{$param['class']}} "
                       id="{{$param['id']}}"
                >
                <label
                        class="custom-file-label"
                        for="{{$param['id']}}">
                    {{$param['label']}}
                </label>
            </div>
        </div>


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


