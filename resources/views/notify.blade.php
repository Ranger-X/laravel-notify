@section('scripts')
	@parent
	<script type="text/javascript" charset="utf-8">
        $(function ()
        {
            @if (session('notify.content'))
                $.notify({
                    message: "{!! session('notify.content') !!}",
                }, {
                    type: "{{ session('notify.type') }}",
                    //mouse_over: 'pause',
                    placement: {
                        from: "top",
                        align: "center"
                    },
                    @if (session('notify.delay'))
                        delay: {{ session('notify.delay') }},
                    @endif
                });
            @endif
        });
	</script>
@endsection
