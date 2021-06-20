@extends('layouts.contentLayoutMaster')

@section('title', __('messages.menu.settings'))

@section('content')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="card-alert card gradient-45deg-red-pink">
                <div class="card-content white-text">
                    <p>
                        <i class="material-icons">error</i> <div class="alert alert-danger">{{ $error }}</div></p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endforeach
    @endif
    @if (session('status'))
        <div class="card-alert card gradient-45deg-green-teal">
            <div class="card-content white-text">
                <p>
                    <i class="material-icons">check</i>  {!!  session('status') !!}</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <!--Basic Card-->
    <form  method="post" action="{{ route('admin.settings.store') }}" class="form-horizontal "
           role="form">
        @csrf
        @if(count(config('setting_fields', [])) )
            @foreach(config('setting_fields') as $section => $fields)
                <div class="card">
                    <div class="card-content">

                        <h4 class="card-title"><i class="material-icons small">{{ array_get($fields, 'icon', 'drag_handle') }}</i> {{ $fields['title'] }}</h4>
                        <p>{{ $fields['desc'] }}</p>
                        <div class="row">
                            @if(isset($fields['row']))
                                <div class="row"> @endif
                                    <div class="col m12">
                                        <div class="card gradient-shadow">
                                            <div class="card-content">
                                                @foreach($fields['elements'] as $field)
                                                    @includeIf('dashboard.setting.fields.' . $field['type'] )
                                                @endforeach
                                            </div>

                                            <div class="card-action">
                                                <button  class="waves-effect waves-light btn gradient-45deg-red-pink"> Save Settings</button>
                                            </div>
                                        </div>
                                    </div>
                                @if(isset($fields['row'])) </div> @endif
                        </div>
                    </div>
                </div>
                <div class="divider mt-2"></div>
            @endforeach
        @endif
    </form>

@endsection
@section('page-script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        Dropzone.autoDiscover = false;
        var $logoPath = "{{ assetV2('uploads/logo/') }}/";
        $("div.logo").each(function (index, el) {
            let _el = el
            $(el).dropzone({
                url: "/file/logo/" + $(_el).data('name'),
                renameFilename: function (filename) {
                    return $(_el).data('filename') + '_' + filename;
                },
                init: function () {
                    this.on('addedfile', function (file) {
                        if (this.files.length > 1) {
                            this.removeFile(this.files[0]);
                        }
                    });
                    this.on("complete", function (file) {
                        $('input[name="' + $(_el).data('name') + '"]').val($logoPath + file.upload.filename);
                    });
                },
            });
        })


        {{--var $sliderPath = "{{ assetV2('uploads/slider/') }}/";--}}
        {{--var slideArray = [];--}}
        {{--slideArray.push($('input[name="'+$('div.slider').data('name')+'"]').val());--}}
        {{--$("div.slider").dropzone({--}}
        {{--    url: "/file/slider/" + $('div.slider').data('name'),--}}
        {{--    renameFilename: function (filename) {--}}
        {{--        return $('div.slider').data('filename') + '_' + filename;--}}
        {{--    },--}}
        {{--    init: function () {--}}
        {{--        this.on('addedfile', function (file) {--}}
        {{--            slideArray.push($sliderPath+file.upload.filename);--}}
        {{--        });--}}
        {{--        this.on("complete", function (file) {--}}
        {{--            var filtered = slideArray.filter(function (el) {--}}
        {{--                return el;--}}
        {{--            });--}}
        {{--            $('input[name="'+$('div.slider').data('name')+'"]').val(filtered);--}}
        {{--        });--}}
        {{--    },--}}
        {{--});--}}
        $(document).ready(function () {
            $('textarea').summernote();
            // $('textarea[name="app_map"]').summernote('codeview.toggle');
        });
    </script>
@endsection
@section('page-style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
