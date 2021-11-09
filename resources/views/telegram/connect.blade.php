@extends(env('THEME').'.layouts.site')
@section('content')

    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
      <div class="container">

        <h1 class="text-center">Register</h1>

      </div>
    </div>
    <!-- Page Breadcrumbs End -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card free-quote-form " style="margin: 100px 0 100px 0;">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('message') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="message" type="text" class="form-control @error('name') is-invalid @enderror" name="message" required autocomplete="message" autofocus>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(auth()->user()->telegram_chat_id)
    connected!
@else
    <script 
        async 
        type="application/javascript"
        src="https://telegram.org/js/telegram-widget.js?7"
        data-telegram-login="{{ config('services.telegram-bot-api.name') }}" 
        data-size="large" 
        data-auth-url="{{ route('telegram.connect') }}" 
        data-request-access="write"
    ></script>
  @endif  
@endsection
