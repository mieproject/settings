@if(is_array($field['label']))
    @foreach( $field['label'] as $lang=>$label)
        <div class="form-group @if($lang == 'ar') rtl text-right @endif  @if(isset($fields['row'])) {{ $field['col'] ?? 'col' }} @endif {{ $errors->has($field['name']) ? ' has-error' : '' }}">
            @php $name = $field['name'] . '['.$lang.']'  @endphp

            <label for="{{ $name }}">{{ $label }}</label>
            <textarea type="{{ $field['type'] }}"
                      name="{{ $name }}" rows="4"
                      class="form-control  @if($lang == 'ar') rtl text-right @endif {{ Arr::get( $field, 'class') }}"
                      id="{{ $name }}"
                      placeholder="{{ $label }}">{{ old($name, \setting($field['name'],$lang)) }}</textarea>

            @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
        </div>
    @endforeach
@else

    <div class="form-group  @if(isset($fields['row'])) {{ $field['col'] ?? 'col' }} @endif {{ $errors->has($field['name']) ? ' has-error' : '' }}">
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
        <textarea type="{{ $field['type'] }}"
               name="{{ $field['name'] }}" rows="4"
               class="form-control  {{ Arr::get( $field, 'class') }}"
               id="{{ $field['name'] }}"
               placeholder="{{ $field['label'] }}">{{ old($field['name'], \setting($field['name'])) }}</textarea>

        @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
    </div>

@endif
