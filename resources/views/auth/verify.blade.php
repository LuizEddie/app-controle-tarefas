@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora!</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            O email foi reenviado para você, por favor olhe a sua caixa de entrada para validar a sua conta!<br>
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação, por favor valide seu email por meio do link de verificação que encaminhamos para você!
                    Se você não recebeu o email,
                    <br>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
