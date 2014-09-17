<?php
    include("fragments/header.php");
?>
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h3>HOW OLD WERE YOU?</h3>
            <h1>
                LAST TIME 
                <span class="off_page">
                    UW
                </span>
                <img class="dub" src="img/dub.png" alt="Washington">
                BEAT <span class="off_page">UO</span></h1>
            <img src="img/o_logo.png" class="o" alt="Oregon">
            <br>
            <button class="btn btn-primary btn-lg open_modal" data-toggle="modal" data-target="#myModal">FIND OUT NOW!</button>
        </div>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-section-a">
                        <div class="container">
                            <div class="row">
                                <form class="form-horizontal" role="form">
                                    <h4>ENTER YOUR BIRTHDAY</h4>
                                    <div class="form-group">
                                        <label for="" class="control-label">
                                            MONTH
                                        </label>
                                        <div>
                                            <select name="" id="bDay" class="form-control">
                                                <option value="1">January</option>
                                                <option value="2">Febuary</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bDay" class="control-label">
                                            DAY
                                        </label>
                                        <div>
                                            <select name="" id="bMonth" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">
                                            YEAR
                                        </label>
                                        <div>
                                            <select name="" id="bYear" class="form-control">
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1938</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary age-calc">
                                        COMPUTE!
                                    </button>
                                </form>
                                <h3 class="notBorn text-center">YOU WEREN'T EVEN BORN<br>LAST TIME UW BEAT UO!</h3>
                                    <h3 class="youWere text-center">
                                        YOU WERE <span></span>
                                        LAST TIME UW BEAT UO!
                                    </h3>
                                    <ul class="shareResult">
                                        <li>
                                            <button class="btn btn-lg btn-primary sendTweet">
                                                <i class="fa fa-lg fa-twitter"></i>&nbsp;
                                                TWEET YOUR AGE
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-lg btn-primary facebook">
                                                <i class="fa fa-lg fa-facebook"></i>&nbsp;
                                                POST YOUR AGE
                                            </button>
                                        </li>
                                    </ul>
                                    <p class="shareResult reset">
                                        <a class="shareResult tryAgain" href="">TRY AGAIN</a>
                                        <br />
                                        <a class="view_credits" href="#">CREDITS</a>

                                    </p>
                                <section id="credits">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1 text-center">
                                                <a class="hide_credits" href="#">HIDE CREDITS</a>
                                                <hr class="small">
                                                <p>
                                                    INSPIRED BY
                                                    <a href="https://twitter.com/LstTimeUWBeatUO" target="_blank">
                                                        &#64;LSTTIMEUWBEATUO
                                                    </a>
                                                </p>
                                                <p>
                                                    PRODUCED BY 
                                                    <a href="https://twitter.com/pdx">
                                                        &#64;PDXDBO
                                                    </a>
                                                </p>
                                                <p>
                                                    <i class="fa fa-envelope-o fa-fw"></i>  
                                                    <a href="mailto:name@example.com">
                                                        PDXDBO@GMAIL.COM
                                                    </a>
                                                </p>
                                                <hr class="small">
                                                <p class="text-muted">COPYRIGHT &copy; LASTTIMEUWBEATUO.COM 2014</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.content-section-a -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php
    include("fragments/footer.php")
?>   
