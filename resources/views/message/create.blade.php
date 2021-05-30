<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mesaj Ekle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form method="POST" action="/messages/store">

  @csrf

    <div class="form-group">
      <label >Ad:</label>
      <input type="text" class="form-control"  placeholder="Adınızı giriniz" name="name">
    </div>
    <div class="form-group">
      <label >Soyad:</label>
      <input type="text" class="form-control"  placeholder="Soyadınızı giriniz" name="surname">
      <label >İçerik:</label>
      <input type="text" class="form-control"  placeholder="Mesajınızı yazınız" name="content">
      <label >E_mail:</label>
      <input type="text" class="form-control"  placeholder="Mail adresinizi giriniz" name="email">
      <label >Telefon Numarası:</label>
      <input type="text" class="form-control"  placeholder="Telefon numarasını giriniz" name="tel_no">
      
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
