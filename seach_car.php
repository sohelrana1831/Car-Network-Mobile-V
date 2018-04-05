<?php include 'header.php'; ?>


<div class="right-search">
    <form action="#">
        <div class="right-search-title">
            <p>Search Cars</p>
            <a onclick="goBack()"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
        </div>
        <ul class="right-search-multi">
            <li>
                <select name="type" id=""  class="search-select">
                    <option value="0" selected="selected">Body Type:</option>
                    <option value="sedan">Sedan</option>
                    <option value="coupe">Coupe</option>
                    <option value="hatchback">Hatchback</option>
                    <option value="station-wagon">Station Wagon</option>
                    <option value="suv">SUV</option>
                    <option value="pick-up">Pick up</option>
                    <option value="bus">Bus</option>
                    <option value="truck">Truck</option>
                    <option value="motorcycle">Motorcycle</option>
                    <option value="heavy-equipment">Heavy Equipment</option>
                    <option value="agricultural-equipment">Agricultural Equipment </option>
                    <option value="mini-van">Mini Van</option>
                    <option value="van">Van</option>
                    <option value="wagon">Wagon</option>
                    <option value="convertible">Convertible</option>
                    <option value="other">Other</option>
                </select>            
            </li>
            <li id="MakePart">
                <select name="make" id="" class="search-select">
                    <option value="">Make:</option>
                    <option value="toyota">Toyota - 8015</option>
                    <option value="mercedes">Mercedes - 3531</option>
                    <option value="nissan">Nissan - 2335</option>
                    <option value="bmw">Bmw - 1327</option>
                    <option value="other">Other - 562</option>
                </select>
            </li>
            <li id="">
                <select name="model" id="" class="search-select">
                    <option value="" selected="selected">Car Name:</option>
                </select>
            </li>
            <li>
                <select name="steering" class="search-select" id="">
                    <option value="all">RHD/LHD:</option>
                    <option value="right-hand-drive">Right Hand Drive</option>
                    <option value="left-hand-drive">Left Hand Drive</option>
                </select>
            </li>
            <li>
                <select name="year_f" id="year_f" class="year">
                    <option value="">Year:</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
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
                </select>

                <span class="to">To</span>

                <select name="year_t" id="year_t" class="year">
                    <option value="">Year:</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
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
                </select>
            </li>
            <li>
                <input name="keyword" id="" placeholder="Stock Id or Keywords" class="search-select" type="text">
            </li>
            <li>
                <input class="sale" type="submit" value="Search Cars">
            </li>
        </ul>
    </form>
</div> <!-- end right-searc-->

<?php include 'footer.php'; ?>