
<div class="form-group">
    <label for="">Name <span class="text-danger">*</span></label>
    {!! Form::text("name", $test['name'] ?? null, ["class"=>"form-control form-control-line"]) !!}
</div>
<div class="form-group">
    <label for="">number <span class="text-danger">*</span></label>
    {!! Form::text("number", $test['number'] ?? null, ["class"=>"form-control form-control-line"]) !!}
</div>
<div class="form-group">
    <label for="">email</label>
    {!! Form::email("email", $test['email'] ?? null, ["class"=>"form-control form-control-line"]) !!}
</div>
<div class="form-group">
    <label>Status <span class="text-danger">*</span></label>
    <div class="form-check">
        <label class="radio-inline"></label>
        @if( isset($test))
        {!! Form::radio("status",1, $test['status']==1 ? true : false) !!}
        {!! Form::label("active",'Active') !!}
        {!! Form::radio("status",2,$test['status']==2 ? true : false)!!}
        {!! Form::label("inactive",'Inactive') !!}
        @else
        {!! Form::radio("status",1 ) !!}
        {!! Form::label("active",'Active') !!}
        {!! Form::radio("status",2)!!}
        {!! Form::label("inactive",'Inactive') !!}
        @endif
    </div >
</div>
