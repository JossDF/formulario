@extends('layouts.app')

@section('titulo')
<b>Formulario RRHH</b>
@endsection

@section('content')
<div class="container">
    <div class="row">
        {!! BootForm::open([ "route" => "formulario.store","files" => true ]) !!}            
        <div class="col-md-8 col-md-offset-2">
            <div style="text-align:center">
                <h3><b>Employment Record -  Employment Details</b></h3>
                <h4>To be completed and retained for each employee</h4>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><b>Employer details</b></div>
                <div class="panel-body">
                    {!! BootForm::select('registered', 'Registered:', $empresas) !!}
                    {!! BootForm::text("trading_name","Trading name:") !!}
                    {!! BootForm::text("abn","ABN:") !!}
                </div>
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Employee details</b></div>
                <div class="panel-body">
                    {!! BootForm::text("name","Full name:") !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date">Date of birth</label>
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker" name="date_birth" required>
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {!! BootForm::text("phone","Phone number(s):") !!}
                        </div>
                    </div>
                    {!! BootForm::text("address","Address:") !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! BootForm::text("tax","Tax file:") !!}
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date">Date employment</label>
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker" name="date_employment">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! BootForm::radios("employment_status", "Employment status:", $status, null, true)!!} 
                    {!! BootForm::number("hour_work","Ordinay hours of work (for part-time or full-time employee):") !!}
                    {!! BootForm::text("pay_method","Agreed/required method of pay:") !!}
                    {!! BootForm::text("pay_period","Agreed/required pay period:") !!}
                    {!! BootForm::text("pay_day","Agreed/required pay day:") !!}
                    {!! BootForm::text("apprenticeship","Apprenticeship/Traineeship:") !!}
                    {!! BootForm::text("award_name","Name of Award or Agreement that:") !!}
                    {!! BootForm::text("job_title","Classification/job title under the:") !!}
                    {!! BootForm::submit('Enviar') !!}
                </div>
            </div>
        </div>
        {!! BootForm::close() !!}
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>
@endsection