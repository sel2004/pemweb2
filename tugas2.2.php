<?php 
if(isset($_POST['submit'])){
 $nama_siswa = $_POST['nama']; 
 $mata_kuliah = $_POST['matkul'];
 $nilai_uts = $_POST['uts'];
 $nilai_uas = $_POST['uas'];
 $nilai_tugas = $_POST['tugas'];

 $nilai_total = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;

 if($nilai_total >= 85 && $nilai_total <= 100){
    $grade = 'A';
 } elseif($nilai_total >= 70 && $nilai_total <=84){
    $grade = 'B';
 } elseif($nilai_total >= 56 && $nilai_total <=69){
    $grade = 'C';
 } elseif($nilai_total >= 36 && $nilai_total <=55){
    $grade = 'D';
 } elseif($nilai_total >= 35 && $nilai_total <=0){
    $grade = 'E';
 } else{ $grade = 'I';}
}

switch($grade){
    case 'A' :
        $predikat = 'Sangat Memuaskan';
        break;
    case 'B' :
        $predikat = 'Memuaskan';
        break;
    case 'C' :
        $predikat = 'Cukup';
        break;
    case 'D' :
        $predikat = 'Kurang';
        break;
    case 'E' :
        $predikat = 'Sangat Kurang';
        break;
    default :
        $predikat = 'Tidak ada';
}


$nama_siswa = '';
$mata_kuliah = '';
$nilai_uts = '';
$nilai_uas = '';
$nilai_tugas = '';
$nilai_total = '';
$grade = '';
$predikat = '';

echo '<br/>Nama : '. $nama_siswa;
echo '<br/>Mata Kuliah : '. $mata_kuliah;
echo '<br/>Nilai UTS : '. $nilai_uts;
echo '<br/>Nilai UAS : '. $nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '. $nilai_tugas;
echo '<br>Nilai Total : ' . $nilai_total;
echo '<br>Grade : ' . $grade;
echo '<br>Predikat :' . $predikat;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2.2</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">DDP</option>
        <option value="pemweb">Pemograman Web</option>
        <option value="basdat">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas/praktium" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="tugas/praktium" name="tugas/praktium" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</html>