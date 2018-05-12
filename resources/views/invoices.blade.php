@extends('layouts.app4')

@section('content1')
	<div class="main-bar">
                                <h3>
              <i class="fa fa-money"></i>&nbsp;
           Invoice List
          </h3>
</div>
@endsection

@section('content2')
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="box">
				<div class="col-lg-12">
        <div class="box">
            <div id="defaultTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                        <tr>
                            <th>Invoice No.</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Due Date</th>
                            <th>Debtor</th>
                            <th>Subject</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $invoice as $invo)
                        <tr>
                            <td>{{ $invo -> invoice_id}}-INV</td>
                            <td><span class="label label-danger">{{ $invo -> status}}</span></td>
                            <td>{{ $invo -> start_date}}</td>
                            <td>{{ $invo -> due_date}}</td>   
                            <td>{{ $invo -> debtor}}</td>
                            <td>{{ $invo -> subject}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>                </table>
            </div>
        </div>
    </div>

			</div>
		</div>
	</div>
</div>	
@endsection