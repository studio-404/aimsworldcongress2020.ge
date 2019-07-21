<?php defined('DIR') OR exit ?>
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                	<?php echo location();?>
                </div>
            </div>
        </div>
    </div>


    <div class="container"> 
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-inner">
                                <div class="course-search">
                                    <h3><?php echo $title;?></h3>

                                    <form action="?" method="post" id="quick_form" class="course-search-form">
                                    <?php 
                                    $_SESSION["token"] = md5(time());
                                    ?>
                                    <input type="hidden" title="token" name="token" value="<?=$_SESSION["token"]?>">
                                    <div class="load-more-btn">
                                        <a href="javascript:;">Organisation details</a>
                                    </div>
                                    <br>
                                        <input class="searchbox" name="g_organisation_name" placeholder="Organisation name" autocomplete="off" title="Organisation name">
                                        <input class="searchbox" name="g_address" placeholder="Address" autocomplete="off"  title="Address">
                                        <input class="searchbox" name="g_number_of_races" placeholder="Number of Races you present" autocomplete="off"  title="Number of Races you present">
                                        <span class="label label-danger">*in case you represent an organization and not a distance race please choose option 0</span>

                                        <div  class="clearfix">
                                        <input class="searchbox" name="g_race_name" placeholder="Race name" autocomplete="off"  title="Race name">
                                        <p class="search-form-item select-yes">
                                        <label class="alabel" for="International">Race membership of AIMS</label>
                                        <input value="Yes" id="International" type="checkbox" name="g_member_aims" title="Race membership of AIMS (yes or no)" />
                                        <span>Yes</span><br>
                                        <input name="g_race_city" class="searchbox" placeholder="Race City/Country" autocomplete="off"  title="Race City/Country">
                                        <span class="label label-danger">*Athens: non members of AIMS can attend the congress for an extra fee of 270EUR</span>
                                        </div>


                                    <div class="load-more-btn">
                                        <a href="javascript:;">Delegate/Participant's information</a>
                                    </div>
                                    <br>
                                        <input name="g_first_name" class="searchbox" placeholder="First Name(s)" autocomplete="off"  title="First Name(s)">
                                        <input name="g_last_name" class="searchbox" placeholder="Last Name" autocomplete="off"  title="Last Name">
                                        <input name="g_position_organisation" class="searchbox" placeholder="Position In Organisation" autocomplete="off"  title="Position In Organisation">

                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Gender:</label>
                                            <select class="searchselect" name="g_gender" title="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="female">F</option>
                                                <option value="male">M</option>
                                            </select>
                                            </p>
                                        </div>

                                       
                                        <div  class="clearfix">
                                            <strong style="width: 100%;clear:both; margin: 40px 0 0 0; display: block;">Date of birth</strong>
                                            <p class="search-form-item">
                                            <label class="alabel">DD:</label>
                                            <select class="searchselect" name="g_db_day" title="Date of birth (day)">
                                                <option value="-1">-- select --</option>
                                                <?php for($x=1; $x<=31;$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">MM:</label>
                                            <select class="searchselect" name="g_db_month" title="Date of birth (month)">
                                                <option value="-1">-- select --</option>
                                                <?php 
                                                $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                                for($x=0; $x<=11;$x++):?>
                                                <option value="<?=$x?>"><?=$month[$x]?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">YYYY:</label>
                                            <select class="searchselect" name="g_db_day" title="Date of birth (year)">
                                                <option value="-1">-- select --</option>
                                                <?php for($x=(date("Y")-100); $x<=date("Y");$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="g_phone" class="searchbox" placeholder="Phone No" autocomplete="off"  title="Phone No">
                                        <input name="g_email" class="searchbox" placeholder="Email" autocomplete="off"  title="Email">


                                    <div class="load-more-btn">
                                        <a href="javascript:;">Travel information</a>
                                    </div>
                                    <br>

                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Arrival Transport:</label>
                                            <select class="searchselect" name="g_arrival_transport" title="Arrival Transport">
                                                <option value="-1">-- select --</option>
                                                <option value="Flight">Flight</option>
                                                <option value="Ferry">Ferry</option>
                                                <option value="Bus">Bus</option>
                                                <option value="Own car">Own car</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Arrival Date DD:</label>
                                            <select class="searchselect" name="g_arrival_day" title="Arrival Date DD">
                                                <option value="-1">-- select --</option>
                                                <?php for($x=1; $x<=31;$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Arrival Date MM:</label>
                                            <select class="searchselect" name="g_arrival_month" title="Arrival Date MM">
                                                <?php 
                                                $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                                for($x=0; $x<=11;$x++):?>
                                                <option value="<?=$month[$x]?>"><?=$month[$x]?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="g_arrival_flight" class="searchbox" placeholder="Arrival Flight" autocomplete="off"  title="Arrival Flight">
                                        <span class="label label-danger">*if you have not booked your flights yet, please fill in tbc and inform us</span>

                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Departure Transport:</label>
                                            <select class="searchselect" name="g_departure_transport" title="Departure Transport">
                                                <option value="-1">-- select --</option>
                                                <option value="Flight">Flight</option>
                                                <option value="Ferry">Ferry</option>
                                                <option value="Bus">Bus</option>
                                                <option value="Own car">Own car</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Departure Date DD:</label>
                                            <select class="searchselect" name="g_departure_day" title="Departure Date DD">
                                                <option value="-1">-- select --</option>
                                                <?php for($x=1; $x<=31;$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Departure Date MM:</label>
                                            <select class="searchselect" name="g_departure_month" title="Departure Date MM">
                                                <option value="-1">-- select --</option>
                                                <?php 
                                                $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                                for($x=0; $x<=11;$x++):?>
                                                <option value="<?=$month[$x]?>"><?=$month[$x]?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                        </div>

                                        <input type="text" name="g_departure_flight" class="searchbox" placeholder="Departure Flight" autocomplete="off"  title="Departure Flight">
                                        <span class="label label-danger">*if you have not booked your flights yet, please fill in tbc and inform us</span>


                                    <div class="load-more-btn">
                                        <a href="javascript:;">To Be Accompanied Person(s)</a>
                                    </div>
                                    <br>

                                        <div class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Number:</label>
                                            <select class="searchselect" name="g_accompained_persons" title="Number">
                                                <option value="-1">-- select --</option>
                                                <?php 
                                                for($x=1; $x<=10;$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="g_accompained_first_name" class="searchbox" placeholder="First Name(s)" autocomplete="off"  title="First Name(s)">
                                        <input name="g_accompained_last_name" class="searchbox" placeholder="Last Name" autocomplete="off"  title="Last Name">
                                        <input name="g_accompained_position_inorg" class="searchbox" placeholder="Position In Organisation" autocomplete="off"  title="Position In Organisation">

                                        <div class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Gender:</label>
                                            <select class="searchselect" name="g_accompained_gender" title="Accompanied Person(s) Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="female">F</option>
                                                <option value="male">M</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div  class="clearfix">
                                            <strong style="width: 100%;clear:both; margin: 40px 0 0 0; display: block;">Date of birth</strong>
                                            <p class="search-form-item">
                                            <label class="alabel">DD:</label>
                                            <select class="searchselect" name="g_accompained_day" title="Date of birth (day)">
                                                <option value="-1">-- select --</option>
                                                <?php for($x=1; $x<=31;$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel">MM:</label>
                                            <select class="searchselect" name="g_accompained_month" title="Date of birth (month)">
                                                <option value="-1">-- select --</option>
                                                <?php 
                                                $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                                for($x=0; $x<=11;$x++):?>
                                                <option value="<?=$x?>"><?=$month[$x]?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">YYYY:</label>
                                            <select class="searchselect" name="g_accompained_year" title="Date of birth (year)">
                                                <option value="-1">-- select --</option>
                                                <?php for($x=(date("Y")-100); $x<=date("Y");$x++):?>
                                                <option value="<?=$x?>"><?=$x?></option>
                                                <?php endfor;?>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="g_accompained_phone" class="searchbox" placeholder="Phone No" autocomplete="off"  title="Phone No">
                                        <input name="g_accompained_email" class="searchbox" placeholder="Email" autocomplete="off"  title="Email">
                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Participating on race</label>
                                            <select class="searchselect" name="g_accompained_participating" title="Participating on race">
                                                <option value="-1">-- select --</option>
                                                <option value="NIKE RUN">NIKE RUN</option>
                                                <option value="10K">10K</option>
                                                <option value="21,1K">21,1K</option>
                                                <option value="42,2K">42,2K</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">T-shirt size</label>
                                            <select class="searchselect" name="g_accompained_tshirt_size" title="T-shirt size">
                                                <option value="-1">-- select --</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel">Accommodation location</label>
                                            <select class="searchselect" name="g_accompained_location" title="Accommodation location">
                                                <option value="-1">-- select --</option>
                                                <option value="OFFICIAL">OFFICIAL</option>
                                                <option value="OTHER">OTHER</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div  class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel">Additional accommodation needed</label>
                                            <select class="searchselect" name="g_accompained_accommodation_needed" title="Additional accommodation needed">
                                                <option value="-1">-- select --</option>
                                                <option value="yes">YES</option>
                                                <option value="no">NO</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Room class</label>
                                            <select class="searchselect" name="g_accompained_room_class" title="Room class">
                                                <option value="-1">-- select --</option>
                                                <option value="STANDARD">STANDARD</option>
                                                <option value="SUPERIOR">SUPERIOR</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">If yes, then </label>
                                            <select class="searchselect" name="g_accompained_ifthen" title="If yes, then">
                                                <option value="-1">-- select --</option>
                                                <option value="SGL">SGL</option>
                                                <option value="DBL">DBL</option>
                                                <option value="TWN">TWN</option>
                                            </select>
                                            </p>
                                        </div>
                                        <input name="g_number_of_nights" class="searchbox" placeholder="Number of Nights" autocomplete="off"  title="Number of Nights">
                                        <input name="g_sharing_room_with" class="searchbox" placeholder="Sharing room with (name)" autocomplete="off"  title="Sharing room with (name)">   <br>
                                        <input class="mainBtn" value="Submit" type="button" style="color: #000" />
                                    </form>

                                </div>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title"><?php echo l('video');?></h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
						<iframe width="340" height="200" src="https://www.youtube.com/embed/<?php echo s('video.id');?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->