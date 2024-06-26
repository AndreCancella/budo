<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{URL::asset('css/login.css')}}" rel="stylesheet">
    @if(session('success'))
    <script>
        alert('Cadastro efetuado com sucesso!');
    </script>
    @endif
    <link rel="icon" type="image/png" href="{{URL::asset('images/kimono.png')}}">
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="{{URL::asset('images/kimono.png')}}" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form id="login-form" class="form" action="{{route('login.store')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="user" class="form-control input_user" value="" placeholder="usuário">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="senha">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn login_btn">Login</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Não possui uma conta? <a href="#" class="ml-2" data-toggle="modal" data-target="#modalUser" class="collapsed"> Cadastre</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Corpo do modal -->
                <div class="container-modal">
                    <form class="form" action="{{route('user.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="user" name="user" placeholder="Usuário" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Senha" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" placeholder="Email" required>
                        </div>
                        <button type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>