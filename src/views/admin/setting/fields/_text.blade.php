@if(is_array($field['label']))
    @foreach($field['label'] as $lang=>$label)
        <div class="form-group @if($lang == 'ar') rtl text-right @endif  @if(isset($fields['row'])) {{ $field['col'] ?? 'col' }} @endif {{ $errors->has($field['name']) ? ' has-error' : '' }}">

            @php $name = $field['name'] . '['.$lang.']'  @endphp

            <label for="{{ $name }}">{{ $label  }}</label>
            <input type="{{ $field['type'] }}"
                   name="{{ $name }}"
                   value="{{ old($field['name'].'.'.$lang, \setting($field['name'],$lang)) }}"
                   class="form-control @if($lang == 'ar') rtl text-right @endif {{ Arr::get( $field, 'class') }}"
                   id="{{ $name }}"
                   placeholder="{{ $label }}">

            @if ($errors->has($name)) <small class="help-block">{{ $errors->first($name) }}</small> @endif
        </div>
    @endforeach
@else
    <div class="form-group  @if(isset($fields['row'])) {{ $field['col'] ?? 'col' }} @endif {{ $errors->has($field['name']) ? ' has-error' : '' }}">

        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
        <input type="{{ $field['type'] }}"
               name="{{ $field['name'] }}"
               value="{{ old($field['name'], \setting($field['name'])) }}"
               class="form-control {{ Arr::get( $field, 'class') }}"
               id="{{ $field['name'] }}"
               placeholder="{{ $field['label'] }}">

        @if ($errors->has($field['name'])) <small class="help-block">{{ $errors->first($field['name']) }}</small> @endif
    </div>
@endif


