@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    
    @livewireStyles
</head>
<body class="antialiased">
        @livewire('registro')
        
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>IMG</th>
                    <th>Nombre</th>
                    <th>Latin</th>
                    <th>Descripcion</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($animales as $animals)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{animals->ID}}</td>
                    <td>{{animals->IMG}}</td>
                    <td>{{animals->Nombre}}</td>
                    <td>{{animals->Latin}}</td>
                    <td>{{animals->Descripcion}}</td>    
                    <td>Editar | 

                    <form method="post" action="{{url('/'.$animales->id)}}">
                        {{}}
                        
                    </form>

                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table>

        @livewireScripts
    </body>
</html>