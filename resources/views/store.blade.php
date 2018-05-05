<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table, th, td {
  border: 1px solid black;
}
    </style>
  </head>
  <body>

    <table style="width:100%">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email<th>
      </tr>
      @foreach ($q as $rec)
        <tr>
          <td>{{ $rec->id }}</td>
          <td>{{ $rec->name }}</td>
          <td>{{ $rec->email }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
