<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Departamentos</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>
      @foreach ($departamentos as $departamento)
        <tr>
          <td>{{$departamento->id}}</td>
          <td>{{$departamento->nombre}}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
