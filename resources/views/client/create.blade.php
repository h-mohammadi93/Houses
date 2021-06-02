<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Müşteri Bilgilerini Giriniz</h2>
  
  <form method="POST" action="/client/store" class="was-validated">
  @csrf
    <div class="form-group">
      <label >Ad:</label>
      <input type="text" class="form-control"  placeholder="Adınızı Giriniz" name="name" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Soyad:</label>
      <input type="text" class="form-control"  placeholder="Soyadınızı Giriniz" name="surname" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Yaş:</label>
      <input type="text" class="form-control"  placeholder="Yaşınızı Giriniz" name="age" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label>Doğum Yeri</label>
  <select name="birth_place">
    <option >Ankara</option>
    <option >Antalya</option>
    <option >Bursa</option>
    <option >İzmir</option>
    <option >Kayseri</option>
    <option >Samsun</option>
    <option >Diyarbakır</option>
    <option >Hatay</option>
  </select>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Doğum Tarihi</label>
      <input type="text" class="form-control"  placeholder="Doğum Tarihinizi Giriniz" name="birthday" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
      <div class="form-group">
      <label >Meslek:</label>
      <input type="text" class="form-control"  placeholder="Mesleğinizi Giriniz" name="profession" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alan boş bırakılamaz.</div>
      <label >Mezuniyet Okulu:</label>
      <input type="text" class="form-control"  placeholder="Mezun Olduğunuz Okulu Giriniz" name="graduted_school" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alan boş bırakılamaz.</div>
    </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
