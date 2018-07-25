@extends('layouts.app')

@section('content')
<div class="container">

<!-- session message start -->
      <p class="alert-success" style="font-size: 20px; color: #149278;">
        <?php 
          $message = Session::get('message');
          if ($message) {
            echo $message;
            session::put('message', null);
          }
         ?>
      </p>
      <!-- sesstion message end -->

      
        <!-- Start Form from here for add contact -->
            <form method="post" action="{{url('/submit_sub')}}">
                    {{ csrf_field() }}
                  <div class="panel panel-default">
                      <div class="panel-heading">
                            <h1>Insert Student Subject</h1>
                      </div>

                      <div class="panel-body">
                          <table class="table table-bordered table-condensed table-hover">
                               <tr>
                                   <td>Subjcet Name</td>
                                   <td><input type="text" name="sub_name"></td>
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