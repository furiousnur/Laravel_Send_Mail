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
            <form method="post" action="{{url('/submit_info')}}">
                    {{ csrf_field() }}
                  <div class="panel panel-default">
                      <div class="panel-heading">
                            <h1>Insert Student Information</h1>
                      </div>

                      <div class="panel-body">
                          <table class="table table-bordered table-condensed table-hover">
                               <tr>
                                   <td>Student Name</td>
                                   <td><input type="text" name="s_name"></td>
                               </tr> 
                               <tr>
                                   <td>Student Sex</td>
                                   <td><input type="text" name="s_sex"></td>
                               </tr> 
                               <tr>
                                   <td>Student Phone</td>
                                   <td><input type="text" name="s_phone"></td>
                               </tr> 
                               <tr>
                                   <td>Student Email</td>
                                   <td><input type="text" name="s_email"></td>
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