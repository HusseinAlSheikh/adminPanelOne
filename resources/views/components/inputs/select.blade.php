@if(isset($options))
    @php
        $param = array_merge([
            'id'          => null,
            'name'        => null,
            'data'        => [],
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

        <label for="{{$param['id']}}" class="{{$param['label_size']}}" >{{$param['label']}}</label>

        <select
                name="{{$param['name']}}"
                id="{{$param['id']}}"
                class="form-control custom-select   {{ $param['errors'] ? 'is-invalid' : ''  }}  {{$param['input_size']}}   {{$param['class']}} "
                {{$param['attr']}}
        >
            <option value=""></option>
            @foreach($param['data'] as $optionId  => $optionValue )
                <option value="{{$optionId}}"  {{(($optionId==$param['value'])?"selected=\"selected\"":'') }} > {{$optionValue}}</option>
            @endforeach
        </select>
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