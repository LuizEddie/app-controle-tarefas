<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            .titulo {
                border: 1px;
                background-color: #c2c2c2;
                width: 100%;
                text-transform: uppercase;
                text-align: center;
                font-weight: bold;
                margin-bottom: 25px;
            }

            .tabela{
                width: 100%;
            }

            .page-break{
                page-break-after: always;
            }

            table th, table td{
                text-align: left;
            }
            
        </style>
    </head>
    <body>
        <div class="titulo">Lista de tarefas</div>
        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data Limite</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $key => $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->tarefa }}</td>
                        <td>{{ date("d/m/Y", strtotime($tarefa->data_limite_conclusao))}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="page-break"></div>

        <h2>Página 2</h2>
    </body>
</html>
