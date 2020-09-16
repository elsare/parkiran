@extends('layouts.app')

@section('content')
{{csrf_field()}}
<div class="page-content-wrapper">
  <div class="page-content">
  <h1 class="page-title"></h1>
    <div class="row">
      <div class="col-sm-12 col-xs-8">
        <div class="portlet light form-fit bordered">
          <form action="/transaksi/create" method="POST">
          {{csrf_field()}}
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kendaraan</label>
              <div class="col-sm-4">
                <select class="form-control" id="kendaraan">
                  <option></option>
                  <option>Mobil</option>
                  <option>Motor</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Plat No</label>
              <div class="col-sm-4">
                <select class="form-control" id="plat" multiple="multiple">
                {!! $result !!}
                <!-- <option></option>
                <option>B1208UHY</option>
                <option>B5403RGS</option>
                <option>D6027AGS</option>
                <option>B2064TYH</option> -->
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
              <div class="col-sm-4">
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Waktu Masuk</label>
              <div class="col-sm-4">
                <input type="time" name="masuk" class="form-control" id="masuk">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Waktu Keluar</label>
              <div class="col-sm-4">
                <input type="time" name="keluar" class="form-control" id="keluar">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Biaya</label>
              <div class="col-sm-4">
                <input id="biaya" type="text" class="form-control biaya">
              </div>
            </div>
            <button id="tombol" class="btn btn-primary tombol">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('js/select2.full.min.js') }}"></script>
<script type="text/javascript">
    $('#keluar').on('change', function() {
       var masuk = $('#masuk').val()
       var keluar = $('#keluar').val()
       hours = keluar.split(':')[0] - masuk.split(':')[0],
          minutes = keluar.split(':')[1] - masuk.split(':')[1];

      if (masuk <= "12:00:00" && keluar >= "13:00:00"){
        a = 1;
      } else {
        a = 0;
      }
      minutes = minutes.toString().length<2?'0'+minutes:minutes;
      if(minutes<0){ 
          hours--;
          minutes = 60 + minutes;
      }
      hours = hours.toString().length<2?'0'+hours:hours;

      var biaya = $('#biaya').val(2000* hours-a+  + minutes);
    });
   
    $('#kendaraan').select2({
      placeholder: '-- Select --',
      width: '100%'
    });

    $('#plat').select2({
      placeholder: 'Input Plat Number',
      width: '100%'
    });

</script>
@endsection