<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Bonjour/Bonsoir!</div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    <p>Message envoyè par Clindoeil du Faso</p>
                   <img src="{{asset('assets/images/logo.jpeg')}}" style="width: 100px; position:center;">
                    Nouveau mots de passe:{{$password}}
                </div>
            </div>
        </div>
    </div>
</div>