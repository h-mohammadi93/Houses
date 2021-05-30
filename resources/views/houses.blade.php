<h1>Evler Sayfası<h1>
<a href="{{URL::route('house.create')}}">Ev Bilgilerini Giriniz</a>

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

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Adress</th>
    <th>Numara</th>
    <th>Oda Sayısı</th>
    <th>Banyo Sayısı</th>
    <th>Satılık Mı?</th>
    <th>Açıklama</th>
  </tr>
  @foreach($houses as $house)
  <tr>
    <td>{{$house->adress}}</td>
    <td>{{$house->no}}</td>
    <td>{{$house->oda_sayisi}}</td>
    <td>{{$house->banyo_sayisi}}</td>
    <td>{{$house->satilik_mi}}</td>
    <td>{{$house->aciklama}}</td>
  </tr>
  @endforeach
  
</table>

</body>
</html>
