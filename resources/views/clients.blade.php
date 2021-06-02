
<h1>Müşteri Sayfası<h1>
<a href="{{URL::route('client.create')}}">Müşteri Bilgilerini Giriniz</a>

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

<h2>Müşteri Tablosu</h2>

<table>
  <tr>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Yaş</th>
    <th>Doğum Yeri</th>
    <th>Doğum Tarihi</th>
    <th>Meslek</th>
    <th>Mezuniyet Okulu</th>
  </tr>
  @foreach($clients as $client)
  <tr>
    <td>{{$client->name}}</td>
    <td>{{$client->surname}}</td>
    <td>{{$client->age}}</td>
    <td>{{$client->birth_place}}</td>
    <td>{{$client->birthday}}</td>
    <td>{{$client->profession}}</td>
    <td>{{$client->graduted_school}}</td>
  </tr>
  @endforeach
  
</table>

</body>
</html>
