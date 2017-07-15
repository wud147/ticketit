@if($editor_enabled)

<script src="{!! elixir('panel/editor.js') !!}"></script>
@if($editor_locale)
  <script src="{!! elixir('panel/summernote/summernote-'.$editor_locale.'.js') !!}"></script>
@endif
<script>


    $(function() {

        var options = $.extend(true, {lang: '{{$editor_locale}}' {!! $codemirror_enabled ? ", codemirror: {theme: '{$codemirror_theme}', mode: 'text/html', htmlMode: true, lineWrapping: true}" : ''  !!} } , {!! $editor_options !!});

        $("textarea.summernote-editor").summernote(options);

        $("label[for=content]").click(function () {
            $("#content").summernote("focus");
        });
    });


</script>
@endif
