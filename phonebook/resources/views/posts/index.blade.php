@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><b>Phonebook</b></div>

                <div class="panel-body">
                    <div class="build">
						<table border = 0>
							<tr>
								<td width=75><a href="{{route('posts.create')}}">Create</a></td>
							</tr>
						</table>
						</br>
						
						<table border=2 width=800 align="center">
							<tr>
								<th width=200>Name</th>
								<th width=200>Phone</th>
								<th width=200>Email</th>
								<th width=200>Kategori</th>
							</tr>
							@foreach($posts as $post)
								<tr>
									<td><a href="{{route('posts.edit', $post->id)}}">{{$post->name}}</a></td>
									<td>{{$post->phone}}</td>
									<td>{{$post->email}}</td>
									<td>{{$post->kategori}}</td>
								</tr>
							@endforeach
						</table>
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection
