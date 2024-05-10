<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Budo</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{URL::asset('images/kimono.png')}}">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="{{URL::asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    @if(session('success'))
    <script>
        alert('Cadastro efetuado com sucesso!');
    </script>
    @endif
    @if(session('deleted'))
    <script>
        alert('Aluno deletado com sucesso!');
    </script>
    @endif
</head>
<div class="nav-side-menu">
    <div class="brand">
        <img src="{{URL::asset('images/kimono.png')}}" class="brand_logo" alt="Logo">
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <a href="{{route('panel')}}" style="text-decoration: none;">
                <li>
                    <i class="fa fa-solid fa-users fa-lg"></i> Lista de Alunos

                </li>
            </a>
            <li data-toggle="modal" data-target="#modalStudent" class="collapsed">
                <a>
                    <i class="fa fa-solid fa-user fa-lg"></i> Cadastrar Alunos
                </a>
            </li>

            <li data-toggle="modal" data-target="#modalDojo" class="collapsed">
                <a><i class="fa fa-solid fa-pencil fa-lg"></i> Cadastrar Dojo</span></a>
            </li>
            <li>
                <a data-toggle="modal" data-target="#modalBelt" class="collapsed">
                    <i class="fa fa-solid fa-gear fa-lg"></i> Cadastro de faixas
                </a>
            </li>
            <a href="{{route('events')}}" style="text-decoration: none;">

                <li>
                    <i class="fa fa-solid fa-calendar fa-lg"></i> Calendário de eventos

                </li>
            </a>
            <a href="{{route('login.destroy')}}">
                <li>
                    <i class="fa fa-solid fa-arrow-left"></i> Sair
                </li>
            </a>
        </ul>
    </div>
</div>
<div class="modal fade" id="modalDojo">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Cabeçalho do modal -->
            <div class="modal-header">
                <h2 class="modal-title">Cadastro de Dojo</h2>
            </div>

            <!-- Corpo do modal -->
            <div class="container">
                <form class="form" action="{{route('dojo.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="address" name="address" placeholder="Endereço" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="city" name="city" placeholder="Cidade" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="state" name="state" placeholder="Estado" required>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBelt">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Cabeçalho do modal -->
            <div class="modal-header">
                <h2 class="modal-title">Cadastro de Cores de Faixa</h2>
            </div>

            <!-- Corpo do modal -->
            <div class="container">
                <form class="form" action="{{route('belt.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" id="color" name="color" placeholder="Cor" required>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalStudent">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Cabeçalho do modal -->
            <div class="modal-header">
                <h2 class="modal-title">Cadastro de Aluno</h2>
            </div>

            <!-- Corpo do modal -->
            <div class="container">
                <form class="form" action="{{route('students.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="cpf" name="cpf" placeholder="CPF" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="address" name="address" placeholder="Endereço" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="city" name="city" placeholder="Cidade" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="state" name="state" placeholder="Estado" required>
                    </div>
                    <div class="form-group">
                        <select name="belt" id="belt" required>
                            @foreach ($belts as $belt)
                            <option value="{{ $belt }}">{{ $belt }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" id="birth_date" name="birth_date" required>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>