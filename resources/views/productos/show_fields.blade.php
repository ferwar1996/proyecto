<!-- Id-Producto Field -->
<div class="form-group">
    {!! Form::label('id-producto', 'Id-Producto:') !!}
    <p>{{ $productos->id-producto }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $productos->descripcion }}</p>
</div>

<!-- Precio Field -->
<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $productos->precio }}</p>
</div>

