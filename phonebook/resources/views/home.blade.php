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
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
