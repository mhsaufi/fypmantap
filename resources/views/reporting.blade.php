@extends('layouts.app4')

@section('content1')
	<div class="main-bar">
                                <h3>
              <i class="fa fa-bar-chart"></i>&nbsp;
           Reporting
          </h3>
</div>
@endsection

@section('content2')
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="box">
				<div class="text-center">
    <ul class="stats_box">
    <li>
        <div class="sparkline bar_week"></div>
        <div class="stat_text">
        <strong>2.345</strong>Weekly Visit
        <span class="percent down"> <i class="fa fa-caret-down"></i> -16%</span>
        </div>
    </li>
    <li>
        <div class="sparkline line_day"></div>
        <div class="stat_text">
        <strong>165</strong>Daily Visit
        <span class="percent up"> <i class="fa fa-caret-up"></i> +23%</span>
        </div>
    </li>
    <li>
        <div class="sparkline pie_week"></div>
        <div class="stat_text">
        <strong>$2 345.00</strong>Weekly Sale
        <span class="percent"> 0%</span>
        </div>
    </li>
    <li>
        <div class="sparkline stacked_month"></div>
        <div class="stat_text">
        <strong>$678.00</strong>Monthly Sale
        <span class="percent down"> <i class="fa fa-caret-down"></i> -10%</span>
        </div>
    </li>
    </ul>
</div>
<hr>
<div class="text-center">

    <a class="quick-btn" href="#">
    <i class="fa fa-bolt fa-2x"></i>
    <span>default</span>
    <span class="label label-default">2</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-check fa-2x"></i>
    <span>danger</span>
    <span class="label label-danger">2</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-building-o fa-2x"></i>
    <span>No Label</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-envelope fa-2x"></i>
    <span>success</span>
    <span class="label label-success">-456</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-signal fa-2x"></i>
    <span>warning</span>
    <span class="label label-warning">+25</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-external-link fa-2x"></i>
    <span>π</span>
    <span class="label btn-metis-2">3.14159265</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-lemon-o fa-2x"></i>
    <span>é</span>
    <span class="label btn-metis-4">2.71828</span>
    </a>
    <a class="quick-btn" href="#">
    <i class="fa fa-glass fa-2x"></i>
    <span>φ</span>
    <span class="label btn-metis-3">1.618</span>
    </a>

</div>
<hr>
<div class="row">
    <div class="col-lg-8">
    <div class="box">
        <header>
        <h5>Financial Standing</h5>
        </header>
        <div class="body" id="trigo" style="height: 250px;"></div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="box">
        <div class="body">
        <table class="table table-condensed table-hovered sortableTable">
            <thead>
            <tr>
                <th>Setlist <i class="fa sort"></i></th>
                <th>No. Played <i class="fa sort"></i></th>
            </tr>
            </thead>
            <tbody>
            <tr class="active">
                <td>Rock</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Traditional</td>
                <td>2</td>
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
</div>	
@endsection