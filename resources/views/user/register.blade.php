{{ Html::style('css/bootstrap.min.css') }}
<h1>sasa register here</h1>
<div class="row">
    <div class="col-lg-4">
        @include('welcome')

    </div >
    <div class="col-lg-4">
        {{ Form::open (array ('action' => 'projectController@returnView')) }}

        {{Form::text('name', null,array('placeholder'=>'name'))}}<br>
        {{Form::text('name')}}<br>
        {{Form::text('name')}}<br>
        {{Form::text('name')}}<br>
        {{ Form::close() }}
    </div>
</div>