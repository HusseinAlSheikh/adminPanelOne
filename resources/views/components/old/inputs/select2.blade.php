@if ( isset( $options ) )
    @php
        $opt = array_merge([
            'id'                => null,
            'class'             => null,
            'nullable'          => false,
            'searchable'        => true,
            'name'              => 'select',
            'data'              => [],
            'selected'          => null,
            'option_disabled'   => function($data, $selected, $key, $value){ return false; },
            'help'              => null,
            'label'             => null,
            'placeholder'       => null,
            'value'             => function($data, $key, $value){ return null; },
            'text'              => function($data, $key, $value){ return null; },
            'image'             => function($data, $key, $value){ return null; },
            'sub_text'          => function($data, $key, $value){ return null; },
            'description_text'  => function($data, $key, $value){ return null; },
            'select'            => function($data, $selected, $key, $value){ return false; },
            'max_options'       => false,
            'actions_box'       => true,
            'disabled'          => false,
            'multiple'          => false,
            'required'          => false,
            'error_bag'         => null,
            /**
             * Format: 3:9. The number before ':' represents the number of columns the label will take, while the number after represents
             * the number of columns the input field will take.
             */
            'inline'            => false
        ], $options);

        if( ! $opt['id'] ) $opt['id'] = $opt['name'];

        $errorName = str_replace('][', '.', $opt['name']);
        $errorName = str_replace('[', '.', $errorName);
        $errorName = str_replace(']', '', $errorName);

        $opt['error_bag'] = (! $opt['error_bag']) ? $errors : $errors->{$opt['error_bag']};
    @endphp
    <div class="form-group kt-form__group {{ $opt['inline'] ? 'row' : '' }} {{ $opt['error_bag']->has( $opt['name'] ) ? 'has-danger' : '' }}">

        @if($opt['label'])
            <label for="{{ $opt['id'] }}" class="{{ $opt['inline'] ? 'col-form-label col-lg-'.Str::before($opt['inline'], ':') : '' }}">
                <strong class="text-focus">{!! $opt['label'] . ($opt['required'] ? ' <span class="text-danger">*</span>' : '') !!}</strong>
            </label>
        @endif

        <div class="{{ $opt['inline'] ? 'col-lg-'.Str::after($opt['inline'], ':') : '' }}">
            <div class="input-group ">
                <select class="form-control kt-bootstrap-select m_selectpicker {{ $opt['class'] }}" id="{{ $opt['id'] }}" data-live-search="{{ ($opt['searchable']) ? 'true' : 'false' }}" name="{{ $opt['name'] }}" {!! ($opt['disabled']) ? ' disabled=""' : '' !!} {!! ($opt['multiple']) ? ' multiple=""' : '' !!}
                    data-live-search="true"
                    data-none-results-text="لا يوجد نتائج مطابقة"
                    data-none-selected-text="--"
                    data-select-all-text="تحديد الكل"
                    data-deselect-all-text="إلغاء التحديد"
                    data-count-selected-text="{0} عنصر محدد"
                    data-actions-box="{{ $opt['actions_box'] }}"
                    data-selected-text-format="count > 4"
                    data-max-options="{{ $opt['max_options'] }}"
                    data-max-options-text="لا يتمكن تحديد أكثر من {{ $opt['max_options'] }} عناصر"
                    >
                    @if($opt['nullable'] && !$opt['multiple'])
                        <option value="" selected=""> -- </option>
                    @endif
                    @foreach ($opt['data'] as $key => $value)
                        <option
                            {!! ( !is_null( $sub = $opt['sub_text']($opt['data'], $key, $value) ) ) ? 'data-subtext="'. e($sub) .'" ' : '' !!}
                            {!! ( !is_null( $description = $opt['description_text']($opt['data'], $key, $value) ) ) ? 'description-text="'. e($description) .'" ' : '' !!}
                            {!! ( !is_null( $sub = $opt['image']($opt['data'], $key, $value) ) ) ? 'data-image="'. e($sub) .'" ' : '' !!}
                            value="{{ $opt['value']($opt['data'], $key, $value) }}"
                            {!! $opt['select']($opt['data'], $opt['selected'], $key, $value) ? ' selected=""' : '' !!}
                            {!! $opt['option_disabled']($opt['data'],$opt['selected'], $key, $value) ? ' disabled=""' : '' !!}>
                            {!! $opt['text']($opt['data'], $key, $value) !!}
                        </option>

                    @endforeach
                </select>

                @if($opt['disabled'])
                    @foreach ($opt['data'] as $key => $value)
                        @if( $selected = $opt['select']($opt['data'], $opt['selected'], $key, $value) )
                            <input type="hidden" value="{{ $opt['value']($opt['data'], $key, $value) }}">
                        @endif
                    @endforeach
                @endif
            </div>

            @if($opt['error_bag']->has($errorName))
                <div class="form-control-feedback">
                    {{ $opt['error_bag']->first( $errorName ) }}
                </div>
            @endif

            @if($opt['help'])
                <span class="form-text text-muted">{{ $opt['help'] }}</span>
            @endif
        </div>
    </div>

@endif
