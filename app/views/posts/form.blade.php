

{{ Form:: label('title', 'Post Title') }}
		<br>
	
	{{ Form:: text('title', Input::old('title'),  array('class' => 'form-control')) }}
		<br>
	
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}

		<br>

{{ Form:: label('body', 'Post Body') }}
		<br>
	
	{{ Form:: textarea('body', Input::old('body'), array('class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '4')) }}
	
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}

		<br>
