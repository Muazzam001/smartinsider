<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white  sectors">

    <div class="row mt-2 mb-3">
        <div class="col mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Sectors</span>
                </h3>
            </div>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col">
                <div class="mb-2">
                    <span class="heading_legend "> Smart Insider uses ICB (Industrial Classification Benchmark) sectors which is a global classification system applied to companies in all markets. ICB is a detailed and comprehensive structure for sector and industry analysis, facilitating the comparison of companies across four levels of classification and national boundaries. The system allocates companies to the Subsector whose definition most closely describes the nature of its business. </span>
                </div>
                <div class="table-responsive mb-2">
                    <table class="icb sector-table">
                        <thead>
                        <tr>
                            <th>Industry</th>
                            <th>Supersector</th>
                            <th>Sector</th>
                            <th>Subsector</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="8" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=10"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>10
                                Technology
                            </td>
                            <td rowspan="8" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=1010"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>1010
                                Technology
                            </td>
                            <td rowspan="3" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=101010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>101010
                                Software &amp; Computer Services
                            </td>
                            <td class="sectorodd">10101010 Computer Services</td>
                        </tr>
                        <tr>
                            <td>10101015 Software</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">10101020 Consumer Digital Services</td>
                        </tr>
                        <tr>
                            <td rowspan="5"><a href="https://dev3.smartinsider.com/app/members/filter?icb=101020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>101020
                                Technology Hardware &amp; Equipment
                            </td>
                            <td>10102010 Semiconductors</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">10102015 Electronic Components</td>
                        </tr>
                        <tr>
                            <td>10102020 Production Technology Equipment</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">10102030 Computer Hardware</td>
                        </tr>
                        <tr>
                            <td>10102035 Electronic Office Equipment</td>
                        </tr>

                        <tr>
                            <td rowspan="3" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=15"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>15
                                Telecommunications
                            </td>
                            <td rowspan="3"><a href="https://dev3.smartinsider.com/app/members/filter?icb=1510"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>1510
                                Telecommunications
                            </td>
                            <td rowspan="1" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=151010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>151010
                                Telecommunications Equipment
                            </td>
                            <td class="sectorodd">15101010 Telecommunications Equipment</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><a href="https://dev3.smartinsider.com/app/members/filter?icb=151020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>151020
                                Telecommunications Service Providers
                            </td>
                            <td>15102010 Cable Television Services</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">15102015 Telecommunications Services</td>
                        </tr>

                        <tr>
                            <td rowspan="9" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=20"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>20
                                Health Care
                            </td>
                            <td rowspan="9" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=2010"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>2010
                                Health Care
                            </td>
                            <td rowspan="4" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=201010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>201010
                                Health Care Providers
                            </td>
                            <td>20101010 Health Care Facilities</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">20101020 Health Care Management Services</td>
                        </tr>
                        <tr>
                            <td>20101025 Health Care Services</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">20101030 Health Care: Misc.</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><a href="https://dev3.smartinsider.com/app/members/filter?icb=201020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>201020
                                Medical Equipment &amp; Services
                            </td>
                            <td>20102010 Medical Equipment</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">20102015 Medical Supplies</td>
                        </tr>
                        <tr>
                            <td>20102020 Medical Services</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=201030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>201030
                                Pharmaceuticals &amp; Biotechnology
                            </td>
                            <td class="sectorodd">20103010 Biotechnology</td>
                        </tr>
                        <tr>
                            <td>20103015 Pharmaceuticals</td>
                        </tr>

                        <tr>
                            <td rowspan="17" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=30"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>30
                                Financials
                            </td>
                            <td rowspan="1"><a href="https://dev3.smartinsider.com/app/members/filter?icb=3010"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>3010
                                Banks
                            </td>
                            <td rowspan="1"><a href="https://dev3.smartinsider.com/app/members/filter?icb=301010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>301010
                                Banks
                            </td>
                            <td class="sectorodd">30101010 Banks</td>
                        </tr>
                        <tr>
                            <td rowspan="11" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=3020"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>3020
                                Financial Services
                            </td>
                            <td rowspan="3" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=302010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>302010
                                Finance &amp; Credit Services
                            </td>
                            <td>30201020 Consumer Lending</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">30201025 Mortgage Finance</td>
                        </tr>
                        <tr>
                            <td>30201030 Financial Data &amp; Systems</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><a href="https://dev3.smartinsider.com/app/members/filter?icb=302020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>302020
                                Investment Banking &amp; Brokerage Services
                            </td>
                            <td class="sectorodd">30202000 Diversified Financial Services</td>
                        </tr>
                        <tr>
                            <td>30202010 Asset Managers &amp; Custodians</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">30202015 Investment Services</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=302030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>302030
                                Mortgage Real Estate Investment Trusts
                            </td>
                            <td>30203000 Mortgage REITs: Diversified</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">30203010 Mortgage REITs: Commercial</td>
                        </tr>
                        <tr>
                            <td>30203020 Mortgage REITs: Residential</td>
                        </tr>
                        <tr>
                            <td rowspan="1"><a href="https://dev3.smartinsider.com/app/members/filter?icb=302040"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>302040
                                Equity Investment Instruments
                            </td>
                            <td class="sectorodd">30204000 Equity Investment Instruments</td>
                        </tr>
                        <tr>
                            <td rowspan="1" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=302050"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>302050
                                Nonequity Investment Instruments
                            </td>
                            <td>30205000 Nonequity Investment Instruments</td>
                        </tr>
                        <tr>
                            <td rowspan="5"><a href="https://dev3.smartinsider.com/app/members/filter?icb=3030"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>3030
                                Insurance
                            </td>
                            <td rowspan="1"><a href="https://dev3.smartinsider.com/app/members/filter?icb=303010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>303010
                                Life Insurance
                            </td>
                            <td class="sectorodd">30301010 Life Insurance</td>
                        </tr>
                        <tr>
                            <td rowspan="4" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=303020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>303020
                                Non-life Insurance
                            </td>
                            <td>30302010 Full Line Insurance</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">30302015 Insurance Brokers</td>
                        </tr>
                        <tr>
                            <td>30302020 Reinsurance</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">30302025 Property &amp; Casualty Insurance</td>
                        </tr>

                        <tr>
                            <td rowspan="13" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=35"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>35
                                Real Estate
                            </td>
                            <td rowspan="13" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=3510"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>3510
                                Real Estate
                            </td>
                            <td rowspan="2"><a href="https://dev3.smartinsider.com/app/members/filter?icb=351010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>351010
                                Real Estate Investment &amp; Services
                            </td>
                            <td>35101010 Real Estate Holding and Development</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">35101015 Real Estate Services</td>
                        </tr>
                        <tr>
                            <td rowspan="11" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=351020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>351020
                                Real Estate Investment Trusts
                            </td>
                            <td>35102000 Diversified REITs</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">35102010 Health Care REITs</td>
                        </tr>
                        <tr>
                            <td>35102015 Hotel &amp; Lodging REITs</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">35102020 Industrial REITs</td>
                        </tr>
                        <tr>
                            <td>35102025 Infrastructure REITs</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">35102030 Office REITs</td>
                        </tr>
                        <tr>
                            <td>35102040 Residential REITs</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">35102045 Retail REITs</td>
                        </tr>
                        <tr>
                            <td>35102050 Storage REITs</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">35102060 Timber REITs</td>
                        </tr>
                        <tr>
                            <td>35102070 Other Specialty REITs</td>
                        </tr>

                        <tr>
                            <td rowspan="39" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=40"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>40
                                Consumer Discretionary
                            </td>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=4010"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4010
                                Automobiles &amp; Parts
                            </td>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=401010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>401010
                                Automobiles &amp; Parts
                            </td>
                            <td class="sectorodd">40101010 Auto Services</td>
                        </tr>
                        <tr>
                            <td>40101015 Tires</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40101020 Automobiles</td>
                        </tr>
                        <tr>
                            <td>40101025 Auto Parts</td>
                        </tr>
                        <tr>
                            <td rowspan="21" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=4020"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4020
                                Consumer Products &amp; Services
                            </td>
                            <td rowspan="7" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=402010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>402010
                                Consumer Services
                            </td>
                            <td class="sectorodd">40201010 Education Services</td>
                        </tr>
                        <tr>
                            <td>40201020 Funeral Parlors &amp; Cemetery</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40201030 Printing and Copying Services</td>
                        </tr>
                        <tr>
                            <td>40201040 Rental &amp; Leasing Services: Consumer</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40201050 Storage Facilities</td>
                        </tr>
                        <tr>
                            <td>40201060 Vending &amp; Catering Service</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40201070 Consumer Services: Misc.</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=402020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>402020
                                Household Goods &amp; Home Construction
                            </td>
                            <td class="sectorodd">40202010 Home Construction</td>
                        </tr>
                        <tr>
                            <td>40202015 Household Furnishings</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40202020 Household Appliance</td>
                        </tr>
                        <tr>
                            <td>40202025 Household Equipment &amp; Products</td>
                        </tr>
                        <tr>
                            <td rowspan="6" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=402030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>402030
                                Leisure Goods
                            </td>
                            <td class="sectorodd">40203010 Consumer Electronics</td>
                        </tr>
                        <tr>
                            <td>40203040 Electronic Entertainment</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40203045 Toys</td>
                        </tr>
                        <tr>
                            <td>40203050 Recreational Products</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40203055 Recreational Vehicles &amp; Boats</td>
                        </tr>
                        <tr>
                            <td>40203060 Photography</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=402040"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>402040
                                Personal Goods
                            </td>
                            <td class="sectorodd">40204020 Clothing &amp; Accessories</td>
                        </tr>
                        <tr>
                            <td>40204025 Footwear</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40204030 Luxury Items</td>
                        </tr>
                        <tr>
                            <td>40204035 Cosmetics</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=4030"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4030
                                Media
                            </td>
                            <td rowspan="4" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=403010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>403010
                                Media
                            </td>
                            <td class="sectorodd">40301010 Entertainment</td>
                        </tr>
                        <tr>
                            <td>40301020 Media Agencies</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40301030 Publishing</td>
                        </tr>
                        <tr>
                            <td>40301035 Radio &amp; TV Broadcasters</td>
                        </tr>
                        <tr>
                            <td rowspan="4" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=4040"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4040
                                Retail
                            </td>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=404010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>404010
                                Retailers
                            </td>
                            <td class="sectorodd">40401010 Diversified Retailers</td>
                        </tr>
                        <tr>
                            <td>40401020 Apparel Retailers</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40401025 Home Improvement Retailers</td>
                        </tr>
                        <tr>
                            <td>40401030 Specialty Retailers</td>
                        </tr>
                        <tr>
                            <td rowspan="6"><a href="https://dev3.smartinsider.com/app/members/filter?icb=4050"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4050
                                Travel &amp; Leisure
                            </td>
                            <td rowspan="6" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=405010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>405010
                                Travel &amp; Leisure
                            </td>
                            <td class="sectorodd">40501010 Airlines</td>
                        </tr>
                        <tr>
                            <td>40501015 Travel &amp; Tourism</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40501020 Casinos &amp; Gambling</td>
                        </tr>
                        <tr>
                            <td>40501025 Hotels &amp; Motels</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">40501030 Recreational Services</td>
                        </tr>
                        <tr>
                            <td>40501040 Restaurants &amp; Bars</td>
                        </tr>

                        <tr>
                            <td rowspan="13" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=45"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>45
                                Consumer Staples
                            </td>
                            <td rowspan="8" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=4510"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4510
                                Food, Beverage &amp; Tobacco
                            </td>
                            <td rowspan="3"><a href="https://dev3.smartinsider.com/app/members/filter?icb=451010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>451010
                                Beverages
                            </td>
                            <td class="sectorodd">45101010 Brewers</td>
                        </tr>
                        <tr>
                            <td>45101015 Distillers &amp; Vintners</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">45101020 Soft Drinks</td>
                        </tr>
                        <tr>
                            <td rowspan="4" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=451020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>451020
                                Food Producers
                            </td>
                            <td>45102010 Farming, Fishing, Ranching &amp; Plantations</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">45102020 Food Products</td>
                        </tr>
                        <tr>
                            <td>45102030 Fruit &amp; Grain Processing</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">45102035 Sugar</td>
                        </tr>
                        <tr>
                            <td rowspan="1"><a href="https://dev3.smartinsider.com/app/members/filter?icb=451030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>451030
                                Tobacco
                            </td>
                            <td>45103010 Tobacco</td>
                        </tr>
                        <tr>
                            <td rowspan="5"><a href="https://dev3.smartinsider.com/app/members/filter?icb=4520"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>4520
                                Personal Care, Drug &amp; Grocery Stores
                            </td>
                            <td rowspan="5" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=452010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>452010
                                Personal Care, Drug &amp; Grocery Stores
                            </td>
                            <td class="sectorodd">45201010 Food Retailers &amp; Wholesalers</td>
                        </tr>
                        <tr>
                            <td>45201015 Drug Retailers</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">45201020 Personal Products</td>
                        </tr>
                        <tr>
                            <td>45201030 Nondurable Household Products</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">45201040 Miscellaneous Consumer Staple Goods</td>
                        </tr>

                        <tr>
                            <td rowspan="37" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=50"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>50
                                Industrials
                            </td>
                            <td rowspan="6" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=5010"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>5010
                                Construction &amp; Materials
                            </td>
                            <td rowspan="6"><a href="https://dev3.smartinsider.com/app/members/filter?icb=501010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>501010
                                Construction &amp; Materials
                            </td>
                            <td>50101010 Construction</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50101015 Engineering &amp; Contracting Services</td>
                        </tr>
                        <tr>
                            <td>50101020 Building, Roofing/Wallboard &amp; Plumbing</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50101025 Building: Climate Control</td>
                        </tr>
                        <tr>
                            <td>50101030 Cement</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50101035 Building Materials: Other</td>
                        </tr>
                        <tr>
                            <td rowspan="31"><a href="https://dev3.smartinsider.com/app/members/filter?icb=5020"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>5020
                                Industrial Goods &amp; Services
                            </td>
                            <td rowspan="2" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=502010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>502010
                                Aerospace &amp; Defense
                            </td>
                            <td>50201010 Aerospace</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50201020 Defense</td>
                        </tr>
                        <tr>
                            <td rowspan="5"><a href="https://dev3.smartinsider.com/app/members/filter?icb=502020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>502020
                                Electronic &amp; Electrical Equipment
                            </td>
                            <td>50202010 Electrical Components</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50202020 Electronic Equipment: Control &amp; Filter</td>
                        </tr>
                        <tr>
                            <td>50202025 Electronic Equipment: Gauges &amp; Meters</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50202030 Electronic Equipment: Pollution Control</td>
                        </tr>
                        <tr>
                            <td>50202040 Electronic Equipment: Other</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=502030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>502030
                                General Industrials
                            </td>
                            <td class="sectorodd">50203000 Diversified Industrials</td>
                        </tr>
                        <tr>
                            <td>50203010 Paints &amp; Coatings</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50203015 Plastics</td>
                        </tr>
                        <tr>
                            <td>50203020 Glass</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50203030 Containers &amp; Packaging</td>
                        </tr>
                        <tr>
                            <td rowspan="6"><a href="https://dev3.smartinsider.com/app/members/filter?icb=502040"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>502040
                                Industrial Engineering
                            </td>
                            <td>50204000 Machinery: Industrial</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50204010 Machinery: Agricultural</td>
                        </tr>
                        <tr>
                            <td>50204020 Machinery: Construction &amp; Handling</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50204030 Machinery: Engines</td>
                        </tr>
                        <tr>
                            <td>50204040 Machinery: Tools</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50204050 Machinery: Specialty</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=502050"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>502050
                                Industrial Support Services
                            </td>
                            <td>50205010 Industrial Suppliers</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50205020 Back Office Support, HR &amp; Consulting</td>
                        </tr>
                        <tr>
                            <td>50205025 Business Training &amp; Employment Agencies</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50205030 Forms &amp; Bulk Printing Services</td>
                        </tr>
                        <tr>
                            <td>50205040 Security Services</td>
                        </tr>
                        <tr>
                            <td rowspan="8"><a href="https://dev3.smartinsider.com/app/members/filter?icb=502060"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>502060
                                Industrial Transportation
                            </td>
                            <td class="sectorodd">50206010 Trucking</td>
                        </tr>
                        <tr>
                            <td>50206015 Commercial Vehicles &amp; Parts</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50206020 Railroads</td>
                        </tr>
                        <tr>
                            <td>50206025 Railroad Equipment</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50206030 Marine Transportation</td>
                        </tr>
                        <tr>
                            <td>50206040 Delivery Services</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">50206050 Commercial Vehicle-Equipment Leasing</td>
                        </tr>
                        <tr>
                            <td>50206060 Transportation Services</td>
                        </tr>


                        <tr>
                            <td rowspan="17" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=55"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>55
                                Basic Materials
                            </td>
                            <td rowspan="13" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=5510"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>5510
                                Basic Resources
                            </td>
                            <td rowspan="4" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=551010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>551010
                                Industrial Materials
                            </td>
                            <td class="sectorodd">55101000 Diversified Materials</td>
                        </tr>
                        <tr>
                            <td>55101010 Forestry</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">55101015 Paper</td>
                        </tr>
                        <tr>
                            <td>55101020 Textile Products</td>
                        </tr>
                        <tr>
                            <td rowspan="6"><a href="https://dev3.smartinsider.com/app/members/filter?icb=551020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>551020
                                Industrial Metals &amp; Mining
                            </td>
                            <td class="sectorodd">55102000 General Mining</td>
                        </tr>
                        <tr>
                            <td>55102010 Iron &amp; Steel</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">55102015 Metal Fabricating</td>
                        </tr>
                        <tr>
                            <td>55102035 Aluminum</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">55102040 Copper</td>
                        </tr>
                        <tr>
                            <td>55102050 Nonferrous Metals</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=551030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>551030
                                Precious Metals &amp; Mining
                            </td>
                            <td class="sectorodd">55103020 Diamonds &amp; Gemstones</td>
                        </tr>
                        <tr>
                            <td>55103025 Gold Mining</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">55103030 Platinum &amp; Precious Metals</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=5520"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>5520
                                Chemicals
                            </td>
                            <td rowspan="4"><a href="https://dev3.smartinsider.com/app/members/filter?icb=552010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>552010
                                Chemicals
                            </td>
                            <td>55201000 Chemicals: Diversified</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">55201010 Chemicals &amp; Synthetic Fibers</td>
                        </tr>
                        <tr>
                            <td>55201015 Fertilizers</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">55201020 Specialty Chemicals</td>
                        </tr>


                        <tr>
                            <td rowspan="9" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=60"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>60
                                Energy
                            </td>
                            <td rowspan="9" class="supersectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=6010"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>6010
                                Energy
                            </td>
                            <td rowspan="7" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=601010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>601010
                                Non-Renewable Energy
                            </td>
                            <td>60101000 Integrated Oil &amp; Gas</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">60101010 Oil: Crude Producers</td>
                        </tr>
                        <tr>
                            <td>60101015 Offshore Drilling &amp; Other Services</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">60101020 Oil Refining and Marketing</td>
                        </tr>
                        <tr>
                            <td>60101030 Oil Equipment &amp; Services</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">60101035 Pipelines</td>
                        </tr>
                        <tr>
                            <td>60101040 Coal</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><a href="https://dev3.smartinsider.com/app/members/filter?icb=601020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>601020
                                Renewable Energy
                            </td>
                            <td class="sectorodd">60102010 Alternative Fuels</td>
                        </tr>
                        <tr>
                            <td>60102020 Renewable Energy Equipment</td>
                        </tr>

                        <tr>
                            <td rowspan="6" class="industry"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=65"><span
                                            title="See trades for this Industry" class="far fa-list-alt"></span></a>65
                                Utilities
                            </td>
                            <td rowspan="6"><a href="https://dev3.smartinsider.com/app/members/filter?icb=6510"><span
                                            title="See trades for this Supersector" class="far fa-list-alt"></span></a>6510
                                Utilities
                            </td>
                            <td rowspan="2" class="sectorodd"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=651010"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>651010
                                Electricity
                            </td>
                            <td class="sectorodd">65101010 Alternative Electricity</td>
                        </tr>
                        <tr>
                            <td>65101015 Conventional Electricity</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><a href="https://dev3.smartinsider.com/app/members/filter?icb=651020"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>651020
                                Gas, Water &amp; Multi-utilities
                            </td>
                            <td class="sectorodd">65102000 Multi-Utilities</td>
                        </tr>
                        <tr>
                            <td>65102020 Gas Distribution</td>
                        </tr>
                        <tr>
                            <td class="sectorodd">65102030 Water</td>
                        </tr>
                        <tr>
                            <td rowspan="1" class="sectoreven"><a
                                        href="https://dev3.smartinsider.com/app/members/filter?icb=651030"><span
                                            title="See trades for this Sector" class="far fa-list-alt"></span></a>651030
                                Waste &amp; Disposal Services
                            </td>
                            <td>65103035 Waste &amp; Disposal Services</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
