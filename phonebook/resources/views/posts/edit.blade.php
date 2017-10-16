@extends('layouts.app')

@section('content')
	<h1 align="center"> Edit Data </h1>
	<form action="/posts/{{$post->id}}" method="post">
		<input type="hidden" name="_method" value="PUT" />
		<table border=0 align="center">
			<tr>
				<td width="70" height=50>Name</td>
				<td><input type="text" name="name" value="{{$post->name}}" /></td>
			</tr>
			<tr>
				<td width="70" height=50>Phone</td>
				<td><input type="text" name="phone" value="{{$post->phone}}" /></td>
			</tr>
			<tr>
				<td width="70" height=50>Email</td>
				<td><input type="text" name="email" value="{{$post->email}}" /></td>
			</tr>
			<tr>
				<td width="70" height=50>kategory</td>
				<td><input type="text" name="kategori" value="{{$post->kategori}}" /></td>
			</tr>
			{{csrf_field()}}
			<tr>
				<td height=50 colspan=2 align="center"><input type="submit" name="submit" value="Create" /></td>
			</tr>
			<tr>
				<td colspan=2 align="center">
					<form action="/posts/{{$post->id}}" method="post">
						<input type="hidden" name="_method" value="DELETE" />
						{{csrf_field()}}
						<input type="submit" name="submit" value="Delete" />
					</form>
				</td>
			</tr>
		</table>
	</form>
@endsection



		

		