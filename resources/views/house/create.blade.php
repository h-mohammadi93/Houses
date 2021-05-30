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
  <h2>Ev Bilgilerini Giriniz</h2>
  
  <form method="POST" action="/house/store" class="was-validated">
  @csrf
    <div class="form-group">
      <label >Adres:</label>
      <input type="text" class="form-control"  placeholder="Adresi yazın" name="adress" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Numara:</label>
      <input type="text" class="form-control"  placeholder="No giriniz" name="no" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Oda Sayısı:</label>
      <input type="text" class="form-control"  placeholder="Oda sayısını yazınız" name="oda_sayisi" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Satılık mı?:</label>
      <input type="text" class="form-control"  placeholder="Satılık mı?" name="satilik_mi" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
    </div>
    <div class="form-group">
      <label >Banyo Sayısı:</label>
      <input type="text" class="form-control"  placeholder="Banyo sayısını giriniz" name="banyo_sayisi" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alanın doldurulması zorunludur.</div>
      <div class="form-group">
      <label >Açıklama:</label>
      <input type="text" class="form-control"  placeholder="Açıklama giriniz" name="aciklama" required>
      <div class="valid-feedback">Geçerli.</div>
      <div class="invalid-feedback">Bu alan boş bırakılamaz.</div>
    </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
