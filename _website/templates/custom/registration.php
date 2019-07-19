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

                                    <form id="quick_form" class="course-search-form">
                                    <div class="load-more-btn">
                                        <a href="javascript:;">Organisation details</a>
                                    </div>
                                    <br>
                                        <input name="input" id="input" class="searchbox" placeholder="Organisation name" autocomplete="off"  title="Organisation name">
                                        <input name="input" id="input" class="searchbox" placeholder="Address" autocomplete="off"  title="Address">
                                        <input name="input" id="input" class="searchbox" placeholder="Number of Races you present" autocomplete="off"  title="Number of Races you present">
                                        <span class="label label-danger">*in case you represent an organization and not a distance race please choose option 0</span>

                                        <div id="search_advanced" class="clearfix">
                                        <input name="input" id="input" class="searchbox" placeholder="Race name" autocomplete="off"  title="Race name">
                                        <p class="search-form-item select-yes">
                                        <label class="alabel" for="International">Race membership of AIMS</label>
                                        <input value="Yes" id="International" name="International" type="checkbox">
                                        <span>Yes</span><br>
                                        <input name="input" id="input" class="searchbox" placeholder="Race City/Country" autocomplete="off"  title="Race City/Country">
                                        <span class="label label-danger">*Athens: non members of AIMS can attend the congress for an extra fee of 270EUR</span>
                                        </div>


                                    <div class="load-more-btn">
                                        <a href="javascript:;">Delegate/Participant's information</a>
                                    </div>
                                    <br>
                                        <input name="input" id="input" class="searchbox" placeholder="First Name(s)" autocomplete="off"  title="First Name(s)">
                                        <input name="input" id="input" class="searchbox" placeholder="Last Name" autocomplete="off"  title="Last Name">
                                        <input name="input" id="input" class="searchbox" placeholder="Position In Organisation" autocomplete="off"  title="Position In Organisation">

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Gender:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">F</option>
                                                <option value="Brisbane">M</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">DD:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">MM:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">YYYY:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">2019</option>
                                                <option value="Brisbane">2018</option>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="input" id="input" class="searchbox" placeholder="Phone No" autocomplete="off"  title="Phone No">
                                        <input name="input" id="input" class="searchbox" placeholder="Email" autocomplete="off"  title="Email">


                                    <div class="load-more-btn">
                                        <a href="javascript:;">Travel information</a>
                                    </div>
                                    <br>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Arrival Transport:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">Flight</option>
                                                <option value="Brisbane">Ferry</option>
                                                <option value="Brisbane">Bus</option>
                                                <option value="Brisbane">Own car</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Arrival Date DD:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Arrival Date MM:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="input" id="input" class="searchbox" placeholder="Arrival Flight" autocomplete="off"  title="Arrival Flight">
                                        <span class="label label-danger">*if you have not booked your flights yet, please fill in tbc and inform us</span>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Departure Transport:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">Flight</option>
                                                <option value="Brisbane">Ferry</option>
                                                <option value="Brisbane">Bus</option>
                                                <option value="Brisbane">Own car</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Departure Date DD:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Departure Date MM:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="input" id="input" class="searchbox" placeholder="Departure Flight" autocomplete="off"  title="Departure Flight">
                                        <span class="label label-danger">*if you have not booked your flights yet, please fill in tbc and inform us</span>


                                    <div class="load-more-btn">
                                        <a href="javascript:;">To Be Accompanied Person(s)</a>
                                    </div>
                                    <br>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Number:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">0</option>
                                                <option value="Brisbane">1</option>
                                                <option value="Brisbane">2</option>
                                                <option value="Brisbane">3</option>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="input" id="input" class="searchbox" placeholder="First Name(s)" autocomplete="off"  title="First Name(s)">
                                        <input name="input" id="input" class="searchbox" placeholder="Last Name" autocomplete="off"  title="Last Name">
                                        <input name="input" id="input" class="searchbox" placeholder="Position In Organisation" autocomplete="off"  title="Position In Organisation">

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Gender:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">F</option>
                                                <option value="Brisbane">M</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">DD:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">MM:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">1</option>
                                                <option value="Brisbane">2</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">YYYY:</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">2019</option>
                                                <option value="Brisbane">2018</option>
                                            </select>
                                            </p>
                                        </div>

                                        <input name="input" id="input" class="searchbox" placeholder="Phone No" autocomplete="off"  title="Phone No">
                                        <input name="input" id="input" class="searchbox" placeholder="Email" autocomplete="off"  title="Email">
                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Participating on race</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">NIKE RUN</option>
                                                <option value="Brisbane">10K</option>
                                                <option value="Ballarat">21,1K</option>
                                                <option value="Brisbane">42,2K</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">T-shirt size</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">S</option>
                                                <option value="Brisbane">M</option>
                                                <option value="Brisbane">L</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Accommodation location</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">OFFICIAL</option>
                                                <option value="Brisbane">OTHER</option>
                                            </select>
                                            </p>
                                        </div>

                                        <div id="search_advanced" class="clearfix">
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Additional accommodation needed</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">YES</option>
                                                <option value="Brisbane">NO</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">Room class</label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">STANDARD</option>
                                                <option value="Brisbane">SUPERIOR</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Gender">If yes, then </label>
                                            <select class="searchselect" id="Gender" name="Gender">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">SGL</option>
                                                <option value="Brisbane">DBL</option>
                                                <option value="Brisbane">TWN</option>
                                            </select>
                                            </p>
                                        </div>
                                        <input name="input" id="input" class="searchbox" placeholder="Number of Nights" autocomplete="off"  title="Number of Nights">
                                        <input name="input" id="input" class="searchbox" placeholder="Sharing room with (name)" autocomplete="off"  title="Sharing room with (name)">   <br>
                                        <input class="mainBtn" value="Submit Search" type="submit">
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