@extends('master_index')
@section('content')
<div class="content-login">
    <div class="page-content">
        <div id="Paris" class="tabcontent" style="margin-top: 20px !important; margin-bottom: 20px !important; ">
                                    <p style="margin-top: 30px;">
                                        <label for="">First Name</label>
                                        <input style=" margin-bottom: 20px !important; " class="input-tab" type="text">
                                    </p>
                                    <p>
                                        <label for="">Last Name</label>
                                        <input  style=" margin-bottom: 20px !important; " class="input-tab" type="text">
                                    </p>
                                    <p>
                                        <label for="">Email Address</label>
                                        <input style=" margin-bottom: 20px !important; " class="input-tab" type="text">
                                    </p>
                                    <p>
                                        <label for="">Phone</label>
                                        <input style=" margin-bottom: 20px !important; " class="input-tab" type="text">
                                    </p>
                                    <p>
                                        <label for="">Address</label>
                                        <input style=" margin-bottom: 20px !important; " class="input-tab" type="text">
                                    </p>
                                    <p>
                                        <label for="">Password</label>
                                        <input style=" margin-bottom: 20px !important; " class="input-tab" type="text">
                                    </p>
                                    <p>
                                        <label for="">Sex</label>
                                        <input  type="radio" name="gender" value="male" checked> Male
                                        <input type="radio" name="gender" value="female"> Female<br>
                                    </p>
                                    <p>
                                        
                                        <form action="/action_page.php">
                                            
                                        <label for="">Birthday</label> 
                                            <input class="day" type="date" name="bday">
                                        </form>
                                    </p>
                                    <p style="margin: 50px; margin-left: 220px !important">
                                    <a id="create-acc" href="#">Create Account</a></p>
        </div>
    </div>
</div>
@stop