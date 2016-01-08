{{ Html::style('css/bootstrap.min.css') }}
<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="vertical-align: middle;">
        <h3 style="align: center;"> Log in here </h3>
        {{ Form::open(array('url' => 'login')) }}

        <!-- if there are login errors, show them here -->
        <p>

        </p>

        <p>

            {{ Form::email('email', null, array('placeholder' => 'email', 'class'=>'form-control')) }}
        </p>

        <p>

            {{ Form::password('password', array('placeholder'=>'password','class'=>'form-control')) }}
        </p>

        <p>{{ Form::submit('Submit!' ,array('class'=>'btn btn-block btn-primary')) }}</p>
        {{ Form::close() }}
    </div>
    <div class="col-md-4">

    </div>
</div>