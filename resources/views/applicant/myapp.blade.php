@extends('layouts.dashboard')
@section('content')


@if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="row">
    <div class="col">
        <div class="card">
            <div class="row g-0">
              <div class="col-3 d-none d-md-block border-end">
                <div class="card-body">
                  <h4 class="subheader">Business Profile</h4>
                  <div class="list-group list-group-transparent">
                    <a class="list-group-item list-group-item-action d-flex align-items-center active">My Application</a>
                  </div>
                  @if ($pay !== "")
                    @if ($pay->paid == 1 && $app->paid == 1)
                    <div class="list-group list-group-transparent bg-green">
                      <a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-white" data-bs-toggle="modal" data-bs-target="#">License </a>
                      {{-- <span class="fa fa-user"></span> --}}
                    </div>
                    @endif
                  @endif
                </div>
              </div>
              <div class="col d-flex flex-column">
                <div class="card-body">
                  <h2 class="mb-4">
                    Application Status 
                  </h2>
                  <div class="row align-items-center">
                    <div class="col-2">
                        <span class="avatar avatar-xl rounded-circle text-center {{$status}}" style="background-image: url(./static/avatars/000m.jpg)">
                            @if ($app->taxed == 1 && $app->gvt ==1)
                            <i class="fa fa-check"></i>
                            @elseif ($app->taxed === 0 || $app->gvt === 0)
                            <i class="fa fa-minus-circle"></i>
                            @else
                            <i class="fa fa-exclamation-triangle"></i>
                            @endif
                        </span>
                        @if ($app->taxed == 1 && $app->gvt == 1)
                        <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                        </div>
                        @elseif ($app->taxed === 0 || $app->gvt === 0)
                        <div class="ribbon ribbon-top ribbon-bookmark bg-red">
                          <i class="fa fa-minus-circle"></i>
                        </div>
                        @endif
                    </div>
                    <div class="col-10">
                        <div class="col-auto card-tite">
                            @if ($app->taxed === 0 || $app->gvt === 0)
                            <span class="badge bg-red-lt rounded-pill">Application Rejected</span>
                            <p class="p-2">
                                {{-- @foreach ($comments as $item) --}}
                                    {{$comments->comment}}
                                {{-- @endforeach --}}
                            </p>
                            @elseif ($app->paid != 1)
                            <div class="card-body">
                                <ul class="steps steps-counter steps-vertical">
                                  {{-- <li class="step-item">Application</li> --}}
                                  @if ($app->taxed == 0 && $app->gvt == 0) 
                                  <li class="step-item active">Application</li>
                                  @else
                                  <li class="step-item">Application</li>
                                  @endif

                                  @if ($app->taxed == 1 && $app->gvt == 0 || ($app->taxed == 1 && $app->gvt === 0)) 
                                  <li class="step-item active">Tax Clearance Officer</li>
                                  @else
                                  <li class="step-item">Tax Clearance Officer</li>
                                  @endif

                                  @if ($pay !== "") 
                                    @if (($app->taxed == 1 && $app->gvt == 1) && $pay->paid !== 1) 
                                    <li class="step-item active">Government Offical</li>
                                    <li class="step-item">Payment</li>
                                    @else
                                    <li class="step-item">Government Offical</li>
                                    <li class="step-item active">Payment</li>
                                    @endif
                                  @else
                                    @if ($app->taxed == 1 && $app->gvt == 1) 
                                    <li class="step-item active">Government Offical</li>
                                    <li class="step-item">Payment</li>
                                    @else
                                    <li class="step-item">Government Offical</li>
                                    <li class="step-item">Payment</li>
                                    @endif
                                  @endif
                                </ul>
                            </div>
                            @elseif ($app->paid == 1)
                            <span class="badge bg-green-lt rounded-pill">Application Approved</span>
                            <p class="p-2">
                                Payment done, you can now download your license <a href="#">here</a>
                            </p>
                            @endif
                        </div>
                    </div>
                  </div>
                  @if ($pay !== "" && ($app->gvt == 1 && $app->taxed == 1))
                    {{-- <hr>  --}}
                    <div class="row my-4">
                        <h3>Payment</h3>
                        <div class="col">
                            <div class="card card-sm">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-1">
                                      <span class="{{$bgpay}} text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                                      </span>
                                    </div>
                                    <div class="col-9">
                                      <div class="font-weight-medium">
                                        {{ $pay->amount }} /=
                                      </div>
                                      <div class="text-muted">
                                        {{$userpay}}
                                        @if ($pay->paid === 1)
                                          <a href="{{ asset('storage/' . $pay->file) }}"> (Click here to view receipt)</a>
                                        @endif
                                        @if ($pay->paid === 2)
                                          <span class="badge badge-outline text-red">Invalid</span>
                                        @endif
                                      </div>
                                    </div>
                                    @if ($pay->paid !== 1)
                                    <div class="col-2">
                                      <button class="btn float-end dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                      <div class="dropdown-menu dropdown-menu-end">
                                        <form class="" method="POST" action="/gvt/payment/cancel/{{$pay->id}}">
                                          @csrf
                                          @method('DELETE')
                                          {{-- <button type="submit" class="dropdown-item">
                                            Delete
                                          </button> --}}
                                        </form>
                                        {{-- <form class="" method="POST" action="/gvt/payment/deny/{{$pay->id}}">
                                          @csrf
                                          @method('PUT')
                                          <button type="submit" class="dropdown-item">
                                            Deny
                                          </button>
                                        </form> --}}
                                          <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-team">
                                            Upload Receipt
                                          </a>
                                      </div>
                                    </div>
                                    @endif
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <hr> --}}
                  @endif
                  <form method="POST" action="/applicant/edit/{{$app->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                  <div class="row mb-4">
                    <div class="col-md">
                      <div class="form-label">Entity Type</div>
                      {{-- <input type="text" class="form-control" value="{{$app->name}}" {{$disabled}}> --}}
                      <select class="form-control form-select invalid" name="entity" required {{$disabled}}>
                        <option selected value="{{$app->entity}}">{{$app->entity}}</option>
                        <option value="individual">Individual</option>
                        <option value="limited company">Limited Company</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Sector</div>
                      {{-- <input type="text" class="form-control" value="{{$app->phone}}" {{$disabled}}> --}}
                      <select class="form-control form-select" name="sector" required {{$disabled}}>
                        <option selected value="{{$app->sector}}">{{$app->sector}}</option>
                        <option value="civil">Civil</option>
                        <option value="technology">Technology</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Category</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select class="form-control form-select" name="category" required {{$disabled}}>
                        <option selected value="{{$app->category}}">{{$app->category}}</option>
                        <option value="phone">Phone</option>
                        <option value="contractor">Contractor</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Type</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select class="form-control form-select" name="type" required {{$disabled}}>
                        <option selected value="{{$app->type}}">{{$app->type}}</option>
                        <option value="contraction">Contraction</option>
                        <option value="computers">Computers</option>
                      </select>
                    </div>
                  </div>

                  <div class="row g-3">
                    <div class="col-md">
                      <div class="form-label">Business Name</div>
                      <input type="text" name="name" class="form-control" value="{{$app->name}}" {{$disabled}} required>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Phonenumber</div>
                      <input type="text" name="phone" class="form-control" value="{{$app->phone}}" {{$disabled}} required>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Region</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select id="region" class="form-control form-select" name="region" {{$disabled}} required>
                        <option selected value="{{$app->region}}">{{$app->region}}</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">District</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select id="district" class="form-control form-select" name="district" {{$disabled}} required>
                        <option selected value="{{$app->district}}">{{$app->district}}</option>
                      </select>
                      <select id="districtSel" class="form-control d-none form-select" required>
                        <option selected value="0"> -- select an option -- </option>
                      </select>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Bussiness Email</h3>
                  {{-- <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p> --}}
                  <div>
                    <div class="row g-2">
                      <div class="col-12">
                        <input type="email" name="email" class="form-control w-100" value="{{$app->email}}" {{$disabled}} required>
                      </div>
                    </div>
                  </div>

                  @if ($app->taxed == 1 || $app->gvt == 1)
                  {{-- do nothing  --}}
                  @else

                  <h3 class="card-title mt-4">New Attachments</h3>
                  {{-- <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p> --}}
                  <div>
                    <div class="row g-2">
                      <div class="col-4">
                        <div class="form-label">Proof of Citizenship/Residence Permits</div>
                        <input type="file" name="citizen_doc" class="form-control">
                      </div>
                      <div class="col-4">
                        <div class="form-label">Memorandum of Articles</div>
                        <input type="file" name="memo_doc" class="form-control">
                      </div>
                      <div class="col-4">
                        <div class="form-label">Tax Identification Number (TIN)</div>
                        <input type="file" name="tin_doc" class="form-control">
                      </div>
                    </div>
                  </div>
                  @endif

                  <h3 class="card-title mt-4">Documents</h3>
                  <div class="row">
                    
                    <a href="{{ asset('storage/' . $app->citizen_doc) }}" target="_blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
                      <div class="card card-sm">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="bg-green-lt avatar">
                                <i class="fa fa-file"></i>
                              </span>
                            </div>
                            <div class="col">
                              <div class="small">
                                citizen Docs
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="{{ asset('storage/' . $app->memo_doc) }}" target="blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
                      <div class="card card-sm">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="bg-green-lt avatar">
                                <i class="fa fa-file"></i>
                              </span>
                            </div>
                            <div class="col">
                              <div class="small">
                                Memo Articles
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="{{ asset('storage/' . $app->tin_doc) }}" target="blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
                      <div class="card card-sm">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="bg-green-lt avatar">
                                <i class="fa fa-file"></i>
                              </span>
                            </div>
                            <div class="col">
                              <div class="small">
                                Tax ID Number
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>

                  </div>
                </div>
                <div class="card-footer bg-transparent mt-auto">
                  <div class="btn-list justify-content-end">
                    @if ($app->taxed == 0)
                    <button type="submit" class="btn btn-ghost-primary">Edit</button>
                    @endif
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@if ($pay !== "" && ($app->gvt == 1 && $app->taxed == 1))
<div class="modal modal-blur fade" id="modal-team" tabindex="-1" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form  method="POST" action="/applicant/paycode/edit/{{$pay->id}}" class="w-100" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Set License Price</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3 align-items-end">
            <div class="col-12 my-3">
              <label class="form-label">Payment Method</label>
              <select id="" class="form-control form-select" name="method" required>
                <option disabled selected value=""> -- select an option -- </option>
                <option value="ISP Payments">ISP Payments</option>
                <option value="Bank">Bank</option>
                <option value="Cash In">Cash In</option>
              </select>
            </div>
            <div class="col-12 my-3">
              <label class="form-label">Receipt</label>
              <input type="file" name="file" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endif







@endsection