
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Messages Table</h2>

<table>
  <tr>
    <th>id </th>
    <th>name </th>
    <th>surname</th>
    <th>content</th>
    <th>email</th>
    <th>tel_no</th>
  </tr>
  @foreach ($messages as $message)
   <tr>
    <td>{{$message->id}}</td>
    <td>{{$message->name}}</td>
    <td>{{$message->surname}}</td>
    <td>{{$message->content}}</td>
    <td>{{$message->email}}</td>
    <td>{{$message->tel_no}}</td>
  </tr>
@endforeach
  

</table>

</body>
</html>
