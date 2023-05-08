
@extends('backend.layouts.master')
@section('content')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">University</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>University Income</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="university_income" class="chartist text-center"></div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Students</h2>
                                </div>
                                <div class="body">
                                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgba(3, 116, 192, 0.7)"
                                        data-offset="90" data-width="100%" data-height="70" data-line-Width="1" data-line-Color="#b089ff"
                                        data-fill-Color="#ebe1ff">1,8,2,5,6,7,3,4,1,9,3,7,2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="header">
                                    <h2>University Expanse</h2>
                                </div>
                                <div class="body">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="70" data-bar-Width="10" data-bar-Spacing="10" data-bar-Color="#02b5b2">2,8,3,4,6,2,3,8,7,6,5,2,1,8</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Exam Toppers</h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Charts</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dean Otto</td>
                                                    <td>
                                                        <span class="sparkbar">5,8,6,3,-5,9,2</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>K. Thornton</td>
                                                    <td>
                                                    <span class="sparkbar">10,-8,-9,3,5,8,5</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kane D.</td>
                                                    <td>
                                                        <span class="sparkbar">7,5,9,3,5,2,5</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jack Bird</td>
                                                    <td>
                                                        <span class="sparkbar">10,8,1,-3,-3,-8,7</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hughe L.</td>
                                                    <td>
                                                        <span class="sparkbar">2,8,9,8,5,1,5</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jack Bird</td>
                                                    <td>
                                                        <span class="sparkbar">1,8,2,3,9,8,5</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hughe L.</td>
                                                    <td>
                                                        <span class="sparkbar">10,8,-1,-3,2,8,-5</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="header">
                                    <h2>Feeds <small>Description text here...</small></h2>
                                </div>
                                <div class="body">                            
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>University Stats</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="sparkline-pie">6,4,8,1</div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">Staff</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">Boys</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                                <span class="progress-value">36%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">Girls</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                                <span class="progress-value">23%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-container m-b-10">
                                        <span class="progress-badge">Management</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                <span class="progress-value">5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-info"><i class="fa fa-user"></i> </div>
                                    <div class="content">
                                        <div class="text">Total Student</div>
                                        <h5 class="number">530</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-warning"><i class="fa fa-user-circle"></i> </div>
                                    <div class="content">
                                        <div class="text">Total Teacher</div>
                                        <h5 class="number">14</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-warning"><i class="fa fa-tags"></i> </div>
                                    <div class="content">
                                        <div class="text">Department</div>
                                        <h5 class="number">7</h5>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="fa fa-graduation-cap"></i> </div>
                                    <div class="content">
                                        <div class="text">Courses</div>
                                        <h5 class="number">35</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-danger"><i class="fa fa-credit-card"></i> </div>
                                    <div class="content">
                                        <div class="text">Expense</div>
                                        <h5 class="number">$3205</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-success"><i class="fa fa-university"></i> </div>
                                    <div class="content">
                                        <div class="text">Income</div>
                                        <h5 class="number">$35,325</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="fa fa-map-pin"></i> </div>
                                    <div class="content">
                                        <div class="text">Our Center</div>
                                        <h5 class="number">28</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-success"><i class="fa fa-smile-o"></i> </div>
                                    <div class="content">
                                        <div class="text">Happy Clients</div>
                                        <h5 class="number">528</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Visit By Traffic Types <small>8% High then last month</small></h2>
                        </div>
                        <div class="body text-center">                            
                            <div class="sparkline-pie2">6,4,8</div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <small>Page Views</small>
                                                <h5 class="m-b-0">32,211,536</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">2,3,5,6,9,8,7,8,7,4,6,5</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Site Visitors</small>
                                                <h5 class="m-b-0">23,516</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">8,5,3,2,2,3,5,6,4,5,7,5</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Total Clicks</small>
                                                <h5 class="m-b-0">4,536</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">6,5,4,6,5,5,2,3,1,8,4,2</div>
                                            </td>
                                        </tr>                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2>Our Location</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">                            
                            <div class="row location_list text-center">
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-turquoise">
                                        <i class="fa fa-map-marker"></i>
                                        <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                        <span>America</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-khaki">
                                        <i class="fa fa-map-marker"></i>
                                        <h4 class="number count-to" data-from="0" data-to="24" data-speed="2500" data-fresh-interval="700">24</h4>
                                        <span>Australia</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-parpl">
                                        <i class="fa fa-map-marker"></i>
                                        <h4 class="number count-to" data-from="0" data-to="15" data-speed="2500" data-fresh-interval="700">15</h4>
                                        <span>Canada</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="body xl-salmon">
                                        <i class="fa fa-map-marker"></i>
                                        <h4 class="number count-to" data-from="0" data-to="33" data-speed="2500" data-fresh-interval="700">33</h4>
                                        <span>India</span>
                                    </div>
                                </div>
                            </div>
                            <div id="world-map-markers2" style="height: 300px;" class="jvector-map m-t-20"></div>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Admission List</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">                          
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Number</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-name">OU 00456</span></td>
                                            <td>Joseph</td>
                                            <td>25</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                            <td><span class="badge badge-primary">MCA</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">KU 00789</span></td>
                                            <td>Cameron</td>
                                            <td>27</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-4569</td>
                                            <td><span class="badge badge-warning">Medical</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">KU 00987</span></td>
                                            <td>Alex</td>
                                            <td>23</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-7412</td>
                                            <td><span class="badge badge-info">M.COM</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">OU 00951</span></td>
                                            <td>James</td>
                                            <td>23</td>
                                            <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>404-447-2589</td>
                                            <td><span class="badge badge-default">MBA</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">OU 00456</span></td>
                                            <td>Joseph</td>
                                            <td>25</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                            <td><span class="badge badge-primary">MCA</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">OU 00953</span></td>
                                            <td>charlie</td>
                                            <td>21</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-9632</td>										
                                            <td><span class="badge badge-success">BBA</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    


@endsection
