@extends('layouts.app')

@section('content')
<div class="container">
        <!-- Start Form from here for add contact -->
            <form method="post" action="{{url('/submitScore')}}">
                    {{ csrf_field() }}
                  <div class="panel panel-default">
                      <div class="panel-heading">
                            <h1>Insert Student Score</h1>
                      </div>

                      <div class="panel-body">
                          <table class="table table-bordered table-condensed table-hover">
                               <tr>
                                   <td>Student Id</td>
                                   <td name="st_id">
                                      <select>
                                      <option>Select Student Id </option>
                                      @foreach($students as $key => $st_id)
                                        <option>{{$st_id->id}}</option> 
                                       @endforeach  
                                      </select>
                                   </td>
                               </tr> 
                               <tr>
                                   <td>Subject ID</td>
                                    <td name="sub_id">
                                      <select>
                                        <option>Select Subject Id </option>
                                          @foreach($subjects as $sub_id)
                                            <option>{{$sub_id->id}}</option> 
                                           @endforeach  
                                      </select>
                                   </td>
                               </tr> 
                               <tr>
                                   <td>Subject Score</td>
                                   <td><input type="text" name="s_score"></td>
                               </tr> 
                          </table>
                          <tr>
                              <td><button class="btn btn-primary" type="submit" name="submit" value="Submit">Submit</button></td>
                          </tr>
                      </div>
                  </div>
            </form>     
            <!-- End Form code -->
</div>
@endsection