@csrf
@include('dashboard.partials.validation-error')

<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="rut" class="form-label">Rut* </label>
            <input class="form-control" type="number" name="rut" id="rut" value="{{ old('rut', $doctor->rut) }}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="doctor_names" class="form-label">Nombres* </label>
            <input class="form-control" type="text" name="doctor_names" id="doctor_names" value="{{ old('doctor_names', $doctor->doctor_names) }}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="doctor_lastnames" class="form-label">Apellidos* </label>
            <input class="form-control" type="text" name="doctor_lastnames" id="doctor_lastnames" value="{{ old('doctor_lastnames', $doctor->doctor_lastnames) }}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="email" class="form-label">Email </label>
            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $doctor->email) }}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="direccion" class="form-label">Direccion </label>
            <input class="form-control" type="text" name="direccion" id="direccion" value="{{ old('direccion', $doctor->direccion) }}">
        </div>
    </div>
</div>

<div class="mb-3">
    <label for="especialidad" class="form-label">Especialidad </label>
    <select id="especialidad" name="especialidad">
        <option selected>cardiologia</option>
        <option >dermatologia</option>
        <option >hematologia</option>
    </select>
</div>



<div class="mb-3">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Registrar</button>
        <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Regresar</a>

    </div>
</div>