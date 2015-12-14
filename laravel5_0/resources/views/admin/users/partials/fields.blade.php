						<div class="form-group">
						{!! Form::label('email', 'Correo electronico') !!}
					    <!--<label for="exampleInputEmail1">Email address</label>-->
					    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introduzca su e-mail']) !!}
					    <!--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">-->
					  </div>
					  <div class="form-group">
					  	{!! Form::label('pasword', 'Contraseña') !!}
					    <!--<label for="exampleInputPassword1">Password</label>-->
					    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Introduzca su contraseña']) !!}
					    <!--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
					  </div>
					  <div class="form-group">
						{!! Form::label('first_name', 'Nombre') !!}
					    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca su nombre']) !!}
					  </div>
					   <div class="form-group">
						{!! Form::label('last_name', 'Apellido') !!}
					    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca su Apellido']) !!}
					  </div>
					  <div class="form-group">
						{!! Form::label('type', 'Tipo de usuario') !!}
					    {!! Form::select('type', ['' => 'Selecciona tipo', 'user' => 'Usuario', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
					  </div>
					  
					 