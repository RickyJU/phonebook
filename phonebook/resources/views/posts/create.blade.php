@extends('layouts.app')

@section('content')

	<h1 align="center"> Create Data </h1>
	</br>
	<form action="/posts" method="post">
		<table align="center" border=0>
			<tr>
				<td width= 70 height=50>Name</td>
				<td><input type="text" name="name" height=50>{{csrf_field()}}</td>
			</tr>
			<tr>
				<td width= 70 height=50>Phone</td>
				<td><input type="text" name="phone" height=50>{{csrf_field()}}</td>
			</tr>
			<tr>
				<td width= 70 height=50>Email</td>
				<td><input type="text" name="email" height=50>{{csrf_field()}}</td>
			</tr>
			<tr>
				<td width= 70 height=50>Kategori</td>
				<td><input type="text" name="kategori" height=50>{{csrf_field()}}</td>
			</tr>
			<tr >
				<td colspan=2 align="center"><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
	</form>
@stop

@section('footer')


@stop
