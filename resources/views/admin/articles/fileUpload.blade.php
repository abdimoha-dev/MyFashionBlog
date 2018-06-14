{{ Form::open(['url'=>'upload', 'role' =>'form'])  }}
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="file" name="profile_picture">
    <input type="submit">
{!! Form::close() !!}