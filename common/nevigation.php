<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">大数据医疗</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#collapse_patient"><i class="fa fa-fw fa-bar-chart-o"></i> 病人 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="collapse_patient" class="collapse">
                    <li>
                        <a href="patient_visited_info.php">就诊情况</a>
                    </li>  
                    <li>
                        <a href="patient_disease.php">患病统计</a>
                    </li>  
                    <li>
                        <a href="patient_cost.php">费用统计</a>
                    </li>
                    <li>
                        <a href="patient_timeline.php">就诊时间轴</a>
                    </li>
                    <li>
                        <a href="patient_chemicaltest.php">化验单</a>
                    </li>
                </ul>
            </li>
           <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#collapse_doctor"><i class="fa fa-fw fa-bar-chart-o"></i> 医生 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="collapse_doctor" class="collapse">
                    <li>
                        <a href="doctor_patient.php">接诊病人统计</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#collapse_hospital"><i class="fa fa-fw fa-bar-chart-o"></i> 医院 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="collapse_hospital" class="collapse">
                    <li>
                        <a href="hospital_department.php">科室统计</a>
                    </li>
                    <li>
                        <a href="hospital_flow.php">流量统计</a>
                    </li>
                    <li>
                        <a href="hospital_flow.php">住院统计</a>
                    </li>
                </ul>
            </li>           
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#collapse_bureau"><i class="fa fa-fw fa-bar-chart-o"></i> 卫生局 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="collapse_bureau" class="collapse">
                    <li>
                        <a href="bureau_hospital.php">医院统计</a>
                    </li>
                    <li>
                        <a href="bureau_cost.php">医疗经费</a>
                    </li>          
                    <li>
                        <a href="bureau_disease.php">疾病监控</a>
                    </li>                                            
                </ul>
            </li>  
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#collapse_disease"><i class="fa fa-fw fa-bar-chart-o"></i> 疾病 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="collapse_disease" class="collapse">
                    <li>
                        <a href="common_disease.php">常见疾病</a>
                    </li>
                    <li>
                        <a href="disease_relation.php">疾病关系</a>
                    </li>                     
                    <li>
                        <a href="disease.php">疾病分类</a>
                    </li>                                      
                </ul>
            </li>             
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>