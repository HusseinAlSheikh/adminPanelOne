<?php
use Illuminate\Support\Str;
?>
@if (isset($options))
    @php
        $_X = array_merge(
            [
                'id' => null,
                'type' => 'text',
                'name' => 'text',
                'label' => 'Text Input',
                'placeholder' => null,
                'namefile' => null,
                'help' => null,
                'errors'      => $errors,
                'showErrors'  => true,
                'attr'        => null,
                'input_class' => '',
                'value' => null,
                'disabled' => false,
                'readonly' => false,
                'required' => false,
                'icon' => false,  /**
                                 * Format: 3:9. The number before ':' represents the number of columns the label will take, while the number after represents
                 * the number of columns the input field will take.
                 */
                'inline' => false,
                // If set to true and the input type is password, the password can be shown if desired.
                'showable' => false,
                'direction' => 'rtl',
            ],
            $options,
        );

        if (!$_X['id']) {
            $_X['id'] = $_X['name'];
        }
    @endphp

    <div class="form-group kt-form__group {{ $_X['inline'] ? 'row' : '' }}">

        @if ($_X['label'])
            <label for="{{ $_X['id'] }}"
                class="{{ $_X['inline'] ? 'col-form-label col-lg-' . Str::before($_X['inline'], ':') : '' }}">
                <strong class="text-focus">{!! $_X['label'] . ($_X['required'] ? ' <span class="text-danger">*</span>' : '') !!}</strong>
            </label>
        @endif

        <div class="{{ $_X['inline'] ? 'col-lg-' . Str::after($_X['inline'], ':') : '' }}">
            <div class="input-group {{ $_X['icon'] ? 'kt-input-icon kt-input-icon--right' : '' }} {{ $_X['input_class'] }}">
                    <input name="{{ $_X['name'] }}" type="file"
                        class="custom-file-input form-control kt-input text-left" dir="{{ $_X['direction'] }}"
                        placeholder="{{ $_X['placeholder'] ? $_X['placeholder'] : '' }}" {!! $_X['disabled'] ? 'disabled' : '' !!}
                        id="customFile {{ $_X['id'] }}" {!! $_X['attr'] !!}>
                    <label class="custom-file-label" for="customFile"> {{  $_X['namefile'] ? $_X['namefile'] : __('admin::strings.choose_file') }}
                    </label>
                </div>

                @if($_X['errors']->has($_X['name']) && $_X['showErrors'])
                    <div class="invalid-feedback">{!! $_X['errors']->first($_X['name']) !!}</div>
                @endif
                @if($_X['help'])
                    <span class="form-text text-muted"> {!! $_X['help'] !!} </span>
                @endif
        </div>
    </div>

@endif
