<!DOCTYPE html>
<html lang="en">
<head>
    @include('2019.adminDashboard.head')

</head>


<body class="animsition">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
@include('2019.adminDashboard.sidepanel_layout')

<!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content" style="padding-top: 0px">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <button id="btnExport" onclick="javascript:xport.toCSV('Untitled');"> Export to CSV</button>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-40">
                                <table id="Untitled" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th class="th-sm">Category</th>
                                        <th class="th-sm">Team ID</th>
                                        <th class="th-sm">Team Name</th>
                                        <th class="th-sm">Country</th>
                                        <th class="th-sm">College</th>
                                        <th class="th-sm">Pincode</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Number</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Number</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Number</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Number</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Number</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Email</th>
                                        <th class="th-sm">Number</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($big_data as $i)
                                        <?php
                                        $a = 190000;
                                        $b = $i->id;
                                        $team_id = $a + $b;
                                        ?>
                                        <tr>
                                            <td class="th-sm">{{$i->category}}</td>
                                            <td class="th-sm">RW-{{$team_id}}</td>
                                            <td class="th-sm">{{$i->team_name}}</td>
                                            <td class="th-sm">{{$i->country}}</td>
                                            <td class="th-sm">{{$i->college}}</td>
                                            <td class="th-sm">{{$i->pincode}}</td>
                                            <td class="th-sm">{{$i->name_0}}</td>
                                            <td class="th-sm">{{$i->email_0}}</td>
                                            <td class="th-sm">{{$i->number_0}}</td>
                                            <td class="th-sm">{{$i->name_1}}</td>
                                            <td class="th-sm">{{$i->email_1}}</td>
                                            <td class="th-sm">{{$i->number_1}}</td>
                                            <td class="th-sm">{{$i->name_2}}</td>
                                            <td class="th-sm">{{$i->email_2}}</td>
                                            <td class="th-sm">{{$i->number_2}}</td>
                                            <td class="th-sm">{{$i->name_3}}</td>
                                            <td class="th-sm">{{$i->email_3}}</td>
                                            <td class="th-sm">{{$i->number_3}}</td>
                                            <td class="th-sm">{{$i->name_4}}</td>
                                            <td class="th-sm">{{$i->email_4}}</td>
                                            <td class="th-sm">{{$i->number_4}}</td>
                                            <td class="th-sm">{{$i->name_5}}</td>
                                            <td class="th-sm">{{$i->email_5}}</td>
                                            <td class="th-sm">{{$i->number_5}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

@include('2019.adminDashboard.foot')

</body>
</html>
<!-- end document-->