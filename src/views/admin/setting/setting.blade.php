@extends('admin.default')

@section('page-header')
    {{ ucfirst('settings') }} <small>{{ trans('app.manage') }}</small>
@stop

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="full-height">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('admin.settings.store') }}" class="form-horizontal "
                          role="form">
                        {!! csrf_field() !!}
                        @if(count(config('setting_fields', [])) )

                            @foreach(config('setting_fields') as $section => $fields)
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <i class="{{ Arr::get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>
                                        {{ $fields['title'] }}
                                        <p class="text-black-50">{{ $fields['desc'] }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if(isset($fields['row']))
                                                    <div class="row"> @endif
                                                        @foreach($fields['elements'] as $field)
                                                            @includeIf('MIEsetting::admin.setting.fields.' . $field['type'] )
                                                        @endforeach
                                                        @if(isset($fields['row'])) </div>  @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- end panel for {{ $fields['title'] }} -->
                            @endforeach

                        @endif

                        <div class="row m-b-md">
                            <div class="col-md-12">
                                <button class="btn-primary btn">
                                    Save Settings
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

    <script>
        var $logoPath = "{{ asset('storage/logo') }}/";
        $("div.app_logo_drop").dropzone({
            url: "/file/logo/" + $('div.app_logo_drop').data('name'),
            renameFilename: function (filename) {
                return $('div.app_logo_drop').data('filename') + '_' + filename;
            },
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            init: function () {
                this.on('addedfile', function (file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
                this.on("complete", function (file) {
                    $('input[name="' + $('div.app_logo_drop').data('name') + '"]').val($logoPath + file.upload.filename);
                });
            },
        });

        var $sliderPath = "{{ asset('storage/slider/') }}/";
        var slideArray = [];
        slideArray.push($('input[name="' + $('div.slider').data('name') + '"]').val());
        $("div.slider").dropzone({
            url: "/file/slider/" + $('div.slider').data('name'),
            renameFilename: function (filename) {
                return $('div.slider').data('filename') + '_' + filename;
            },
            init: function () {
                this.on('addedfile', function (file) {
                    slideArray.push($sliderPath + file.upload.filename);
                });
                this.on("complete", function (file) {
                    var filtered = slideArray.filter(function (el) {
                        return el;
                    });
                    $('input[name="' + $('div.slider').data('name') + '"]').val(filtered);
                });
            },
        });
        $(document).ready(function () {
            $('textarea:not([name="app_map"])').summernote();
            $('textarea[name="app_map"]').summernote('codeview.toggle');
        });
    </script>
@endpush
@push('css')
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
@endpush
