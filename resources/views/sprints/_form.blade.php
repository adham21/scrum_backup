<div class="form-group{{ $errors->has('tanggal_mulai') ? ' has-error' : '' }}"> 
  {!! Form::label('tanggal_mulai', 'Tanggal Mulai', ['class'=>'col-md-2 control-label']) !!} 
  <div class="col-md-4"> 
    {!! Form::text('tanggal_mulai', null, ['class'=>'form-control']) !!} 
    {!! $errors->first('tanggal_mulai', '<p class="help-block">:message</p>') !!} 
  </div> 
</div> 
 
<div class="form-group{{ $errors->has('durasi') ? ' has-error' : '' }}"> 
  {!! Form::label('durasi', 'Durasi', ['class'=>'col-md-2 control-label']) !!} 
  <div class="col-md-4"> 
    {!! Form::select('durasi',  ['1 Minggu' => '1 Minggu', '2 Minggu'=>'2 Minggu', '3 Minggu'=>'3 Minggu'] ,  null, ['class'=>'js-selectize' ]) !!} 
    {!! $errors->first('durasi', '<p class="help-block">:message</p>') !!} 
  </div> 
</div> 
 
<div class="form-group{{ $errors->has('waktu_mulai') ? ' has-error' : '' }}"> 
  {!! Form::label('waktu_mulai', 'Waktu Mulai', ['class'=>'col-md-2 control-label']) !!} 
  <div class="col-md-4"> 
    {!! Form::text('waktu_mulai', null, ['class'=>'form-control']) !!} 
    {!! $errors->first('waktu_mulai', '<p class="help-block">:message</p>') !!} 
  </div> 
</div> 
 
<div class="form-group{{ $errors->has('team') ? ' has-error' : '' }}"> 
  {!! Form::label('team', 'Team', ['class'=>'col-md-2 control-label' ]) !!} 
  <div class="col-md-4"> 
    {!! Form::text('team', null, ['class'=>'form-control', 'placeholder' => 'masukkan team']) !!} 
    {!! $errors->first('team', '<p class="help-block">:message</p>') !!} 
  </div> 
</div> 
 
<div class="form-group{{ $errors->has('kode_sprint') ? ' has-error' : '' }}"> 
  {!! Form::label('kode_sprint', 'Kode Sprint', ['class'=>'col-md-2 control-label']) !!} 
  <div class="col-md-4"> 
    {!! Form::text('kode_sprint', null, ['class'=>'form-control']) !!} 
    {!! $errors->first('kode_sprint', '<p class="help-block">:message</p>') !!} 
  </div> 
</div> 
 
<div class="form-group{{ $errors->has('nama_sprint') ? ' has-error' : '' }}"> 
  {!! Form::label('nama_sprint', 'Nama Sprint', ['class'=>'col-md-2 control-label']) !!} 
  <div class="col-md-4"> 
    {!! Form::number('nama_sprint', null, ['class'=>'form-control']) !!} 
    {!! $errors->first('nama_sprint', '<p class="help-block">:message</p>') !!} 
  </div> 
</div> 
 
 
<div class="form-group"> 
  <div class="col-md-4 col-md-offset-2"> 
    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!} 
  </div> 
</div>