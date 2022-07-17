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



            <label>Minimal</label>
            <select class="form-control select2bs4" style="width: 100%;">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
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