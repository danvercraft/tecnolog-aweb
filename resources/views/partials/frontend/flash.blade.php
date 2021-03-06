<div class="text-center">
    @if(session('message'))
        <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert"
             id="alert-message">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-message">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session('resent'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-message">
            {{ __('Se envió un codigo de verificación a tu correo electrónico') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>

