@include('inc.pheader')        
        <!--  BEGIN CONTENT AREA  -->
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>All Transactions</h3>
                </div>
            </div>

                <div class="row invoice layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>
                        <div class="doc-container">
                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="search">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="invoice-00001" data-invoice-id="00001">
                                                    <div class="f-m-body">
                                                        
                                                        <div class="f-body">
                                                            <p class="invoice-number">{{ $user = Auth::user()->number}}</p>
                                                            <p class="invoice-customer-name"><span>To:</span> {{ $user = Auth::user()->name}}</p>
                                                            <p class="invoice-generated-date">{{ $user = Auth::user()->created_at}}</p>
                                                            <form action="transaction" class="form-box" method="get" data-email="">                                
                                                            <input type='hidden' value='{{ $user = Auth::user()->number}}' name='number' readonly>
                                                            <br><input type="submit" class="btn btn-success xs" name="submit" value="Request Account Summary">
                                                            </form>  
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-container">
                                <div class="invoice-inbox">
                                    <div class="inv-not-selected">
                                        <p>Open an invoice from the list.</p>
                                    </div>

                                    <div class="invoice-header-section">
                                        <h4 class="inv-number"></h4>
                                        <div class="invoice-action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Reply"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                        </div>
                                    </div>
                                    
                                    
                                    <div id="ct" class="">
                                        
                                        <div class="invoice-00001">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">

                                                <div class="row inv--head-section">

                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">RECEIPT</h3>
                                                    </div>
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="row inv--detail-section">

                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">Invoice To</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">From : iTechQueen</p>
                                                    </div>
                                                    
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">{{ $user = Auth::user()->name}}</p>
                                                        <p class="inv-street-addr">{{ $user = Auth::user()->address}}</p>
                                                        <p class="inv-email-address">{{ $user = Auth::user()->email}}</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Receipt Number : </span> <span class="inv-number">{{ $user = Auth::user()->id}}</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Receipt Date : </span> <span class="inv-date">{{ $user = Auth::user()->created_at}}</span></p>
                                                    </div>
                                                </div>

                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">Request ID</th>
                                                                        <th scope="col">Category</th>
                                                                        <th scope="col">Fault</th>
                                                                        <th class="text-right" scope="col">Bill</th>
                                                                        <th class="text-left" scope="col">Paid To</th>
                                                                        <th class="text-right" scope="col">Amount Paid</th>
                                                                        <th class="text-right" scope="col">Balance</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($transaction as $user)    
                                                                    <tr>
                                                                        <td >{{ $user->id }}</td>
                                                                        <td >{{ $user->category }}</td>
                                                                        <td >{{ $user->fault }}</td>
                                                                        <td class="text-right" scope="col">{{ $user->bill }}</td>
                                                                        <td class="text-left" scope="col">{{ $user->repairer }}</td>
                                                                        <td class="text-right" scope="col">{{ $user->amount_paid }}</td>
                                                                        <td class="text-right">{{$balance = $user->bill - $user->amount_paid }}</td>
                                                                                                                
                                                                    </tr>
                                                                @endforeach                                                                   
                                                                

                                                                </tbody>
                                                            </table>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Payment Info:</h6>
                                                                </div>
                                                                <div class="col-sm-4 col-12">
                                                                    <p class=" inv-subtitle">Paid To: </p>
                                                                </div>
                                                                <div class="col-sm-8 col-12">
                                                                    <p class="">iTechQueen</p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">                                                               
                                                                  <p class="">{{ $sum }}</p> 
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Uncleared Balance: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">{{ $balance }}</p>
                                                                </div>                                                                
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Paid Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">{{ $grand = $sum - $balance }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                

                                <div class="inv--thankYou">
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <p class="">Thank you for doing Business with us.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>


            </div>

            </div>
@include('inc.pfooter')