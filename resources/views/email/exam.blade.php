@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Examination</div>
        <div class="panel-body">
            <hr>

            <!-- table 1  -->
            <table>
            	<tr>
            		<th>StudentID</th>
            		<td>{{ $student->id }}</td>
            	</tr>

            	<tr>
            		<th>Name</th>
            		<td>{{ $student->name }}</td>
            	</tr>

            	<tr>
            		<th>Sex</th>
            		<td>{{ $student->sex }}</td>
            	</tr>

            	<tr>
            		<th>Phoen</th>
            		<td>{{ $student->phone }}</td>
            	</tr>

            	<tr>
            		<th>Email</th>
            		<td>{{ $student->email }}</td>
            	</tr>


            	<!-- table 2 -->
            	<table>

            		<thead>
            			<tr>
            				<th>Subject Id</th>
            				<th>Subject</th>
            				<th>Score</th>
            			</tr>
            		</thead>

            		<tbody>
            			@foreach($exams as $key => $exam)
            				<tr>
            					<td>{{ $exam->sub_id }}</td>
            					<td>{{ $exam->subject }}</td>
            					<td>{{ $exam->score }}</td>
            				</tr>
            			@endforeach
            		</tbody>
            	</table>
            </table>
        </div>
    </div>
</div>
@endsection
