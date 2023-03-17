<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gerenciador de Cadastro</title>

        <!-- Styles -->
        @vite([
                'resources/js/app.js', 
                'resources/css/app.css',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
            
            <style>
            body{
                background-color: #ffffff;
            }
            </style>

        </head>
        <body>
            <div class="container" style="background-color: white; padding: 0;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                           <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                             <li class="nav-item active">
                                <a class="nav-link" href="">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Consultar</a>
                            </li> 
                            </ul>
                        </div>
                </div>
            </nav>
            <div class="container-fluid" style="padding: 30px;">

                <h4>Cadastrar - Agendamento de Potencias Clientes</h4>
                Sistema utilizado para agendamento de servicos<br><br>

                <form>
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="Nome">
                    </div>

                    <div class="mb-3">
                        <label for="Telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="Telefone" placeholder="(XX)XXXXX-XXXX">
                    </div>

                    <div class="mb-3">
                        <label for="Origem" class="form-label">Origem:</label>
                        <select id="Origem" class="form-select">
                            <option value="Origem1"> Celular </option>
                            <option value="Origem2"> Telefone Residencial </option>
                            <option value="Origem3"> Telefone Comercial </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="DataDoContato" class="form-label">Data do Contato:</label>
                        <input type="date" class="form-control" id="DataDoContato">
                    </div>

                    <div class="mb-3">
                        <label for="Observacao" class="form-label">Observação:</label>
                        <textarea class="form-control" id="Observacao"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </form>

                </div>
</div>

            </div>
        </div>
    </body>
</html>