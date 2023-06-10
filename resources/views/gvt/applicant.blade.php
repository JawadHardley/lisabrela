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
                    <a class="list-group-item list-group-item-action d-flex align-items-center active">Application</a>
                  </div>

                  @if ($app->taxed == 1 && $app->gvt == 1)
                  <div class="list-group list-group-transparent">
                    <a href="./settings.html" class="list-group-item list-group-item-action d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal-team">Set Price</a>
                  </div>
                  @endif

                  @if ($pay !== "")
                    @if ($pay->paid == 1 && $app->paid != 1)
                    <div class="list-group list-group-transparent bg-green">
                      <a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-white" data-bs-toggle="modal" data-bs-target="#modal-leseni">License </a>
                      {{-- <span class="fa fa-user"></span> --}}
                    </div>
                    @endif
                  @endif
                </div>
              </div>
              <div class="col d-flex flex-column">
                <div class="card-body">
                  <h2 class="mb-4">
                    Applicant's Account  
                  </h2>
                  <h3 class="card-title">Profile Details</h3>
                  <div class="row align-items-center">
                    <div class="col-2">
                        <span class="avatar {{$bg}} avatar-xl" style="background-image: url(./static/avatars/000m.jpg)">
                            <i class="fa fa-user"></i>
                        </span>
                        @if ($app->gvt == 1)
                        <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                        </div>
                        @elseif ($app->gvt === 0)
                        <div class="ribbon ribbon-top ribbon-bookmark bg-red">
                          <i class="fa fa-minus-circle"></i>
                        </div>
                        @endif
                    </div>
                    <div class="col-10">

                        @if ($app->paid === 1)
                        <div class="col-auto card-title my-0">
                          <i class="fa fa-certificate text-blue"></i>
                          <span class="small">Licensed</span>
                        </div>
                        @endif

                        <div class="col-auto card-title my-0">
                            {{ $user->firstname }}
                            {{ $user->lastname }}
                        </div>
                        <div class="col-auto card-title my-0">
                            {{ $user->gender }}
                        </div>
                        <div class="col-auto card-title my-0">
                            @php

                              $age = \Carbon\Carbon::parse($user->dob)->age;

                            @endphp
                            {{$age}} 
                        </div>
                        <div class="col-auto card-title my-0">
                          @if ($app->gvt == 1)
                          <i class="fa fa-check text-green"></i>
                          <span class="small">(Approved)</span>
                          @elseif ($app->gvt === 0)
                          <i class="fa fa-minus-circle bg-red text-white p-1 rounded-circle"></i>
                          <span class="small">Rejected</span>
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
                                        @if ($pay->paid === 1 || $pay->paid === 3)
                                          <a href="{{ asset('storage/' . $pay->file) }}"> (Click here to view receipt)</a>
                                        @endif
                                        @if ($pay->paid === 2)
                                          <span class="badge badge-outline text-red">Invalid</span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="col-2">
                                      <button class="btn float-end dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                      <div class="dropdown-menu dropdown-menu-end">
                                        <form class="" method="POST" action="/gvt/payment/cancel/{{$pay->id}}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="dropdown-item">
                                            Delete
                                          </button>
                                        </form>
                                        <form class="" method="POST" action="/gvt/payment/deny/{{$pay->id}}">
                                          @csrf
                                          @method('PUT')
                                          <button type="submit" class="dropdown-item">
                                            Deny
                                          </button>
                                        </form>
                                        <form class="" method="POST" action="/gvt/payment/approve/{{$pay->id}}">
                                          @csrf
                                          @method('PUT')
                                          <button type="submit" class="dropdown-item">
                                            Approve
                                          </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <hr> --}}
                  @endif


                  <h3 class="card-title mt-4">Business Profile</h3>
                  {{-- <div class="row g-3">
                    <div class="col-md">
                      <div class="form-label">Business Name</div>
                      <input type="text" class="form-control" value="{{$app->name}}" disabled>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Phonenumber</div>
                      <input type="text" class="form-control" value="{{$app->phone}}" disabled>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Location</div>
                      <input type="text" class="form-control" value="{{$app->district}}" disabled>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Bussiness Email</h3>
                  <div>
                    <div class="row g-2">
                      <div class="col-auto">
                        <input type="text" class="form-control w-auto" value="{{$app->email}}" disabled>
                      </div>
                    </div>
                  </div> --}}

                  <div class="row mb-4">
                    <div class="col-md">
                      <div class="form-label">Entity Type</div>
                      {{-- <input type="text" class="form-control" value="{{$app->name}}" {{$disabled}}> --}}
                      <select class="form-control form-select invalid" name="entity" required disabled>
                        <option selected value="{{$app->entity}}">{{$app->entity}}</option>
                        <option value="individual">Individual</option>
                        <option value="limited company">Limited Company</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Sector</div>
                      {{-- <input type="text" class="form-control" value="{{$app->phone}}" {{$disabled}}> --}}
                      <select class="form-control form-select" name="sector" required disabled>
                        <option selected value="{{$app->sector}}">{{$app->sector}}</option>
                        <option value="civil">Civil</option>
                        <option value="technology">Technology</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Category</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select class="form-control form-select" name="category" required disabled>
                        <option selected value="{{$app->category}}">{{$app->category}}</option>
                        <option value="phone">Phone</option>
                        <option value="contractor">Contractor</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Type</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select class="form-control form-select" name="type" required disabled>
                        <option selected value="{{$app->type}}">{{$app->type}}</option>
                        <option value="contraction">Contraction</option>
                        <option value="computers">Computers</option>
                      </select>
                    </div>
                  </div>

                  <div class="row g-3">
                    <div class="col-md">
                      <div class="form-label">Business Name</div>
                      <input type="text" name="name" class="form-control" value="{{$app->name}}" disabled required>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Phonenumber</div>
                      <input type="text" name="phone" class="form-control" value="{{$app->phone}}" disabled required>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Region</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select id="region" class="form-control form-select" name="region" disabled required>
                        <option selected value="{{$app->region}}">{{$app->region}}</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">District</div>
                      {{-- <input type="text" class="form-control" value="{{$app->district}}" {{$disabled}}> --}}
                      <select id="district" class="form-control form-select" name="district" disabled required>
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
                        <input type="email" name="email" class="form-control w-100" value="{{$app->email}}" disabled required>
                      </div>
                    </div>
                  </div>


                  <h3 class="card-title mt-4">Documents</h3>
                  <div class="row">
                    
                    <a href="{{ asset('storage/' . $app->tin_doc) }}" target="_blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
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
                              <div class="text-muted small">
                                (Accessible)
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
                              <div class="text-muted small">
                                (Accessible)
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="{{ asset('storage/' . $app->citizen_doc) }}" target="blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
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
                                Citizen Docs
                              </div>
                              <div class="text-muted small">
                                (Accessoble)
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

                    @if ($app->gvt === NULL)

                    <form method="POST" action="/gvt/comments">
                      @csrf
                      @method('PUT')
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-danger1">
                        Reject
                      </button>
  
                      <div class="modal modal-blur fade" id="modal-danger1" tabindex="-1" style="display: blok;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Send a comment saying why</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div>
                                    <label class="form-label">Comment</label>
                                    <textarea class="form-control" name="comment" rows="3" required></textarea>
                                    <input type="hidden" name="user_id" value="{{$app->user_id}}" required>
                                    <input type="hidden" name="app_id" value="{{$app->id}}" required>
                                    {{-- <input type="hidden" name="com_id" value="{{$app->user_id}}" required> --}}
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                Cancel
                              </a>
                              <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                                Comment
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>

                    <form class="float-end" method="POST" action="/gvt/applicant/approve/{{$app->id}}">
                        @csrf
                        @method('PUT')

                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-success">Approve</button>
                      {{-- <input type="hidden" name="verified" value={{ $val }}>
                      
                      <!-- Modal -->
                      {{-- this is the reject modal --}}
                      <div class="modal modal-blur fade" id="modal-success" tabindex="-1" style="display: blck;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-status bg-success"></div>
                            <div class="modal-body text-center py-4">
                              <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
                              <h3>Confirmation</h3>
                              <div class="text-muted">Are you sure that you want to approve this application ?</div>
                            </div>
                            <div class="modal-footer">
                              <div class="w-100">
                                <div class="row">
                                  <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                      Cancel
                                    </a></div>
                                  <div class="col">
                                    <button type="submit" class="btn btn-success w-100" data-bs-dismiss="modal">
                                      Yes, Approve
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>

                    @elseif ($app->gvt === 1 || $app->gvt === 0)

                    <form class="float-end" method="POST" action="/gvt/applicant/approve/{{$app->id}}">
                        @csrf
                        @method('PUT')

                      <button type="button" class="btn btn-ghost-warning" data-bs-toggle="modal" data-bs-target="#modal-success">Revoke</button>
                      {{-- <input type="hidden" name="verified" value={{ $val }}>
                      
                      <!-- Modal -->
                      {{-- this is the reject modal --}}
                      <div class="modal modal-blur fade" id="modal-success" tabindex="-1" style="display: blck;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-status bg-warning"></div>
                            <div class="modal-body text-center py-4">
                              <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
                              <h3>Confirmation</h3> --}}
                              <h3>
                                <i class="p-4 rounded-circle bg-warning-lt fa fa-exclamation-triangle"></i>
                              </h3>
                              <div class="text-muted">Are you sure that you want to revoke this application ?</div>
                            </div>
                            <div class="modal-footer">
                              <div class="w-100">
                                <div class="row">
                                  <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                      Cancel
                                    </a></div>
                                  <div class="col">
                                    <button type="submit" class="btn btn-warning w-100" data-bs-dismiss="modal">
                                      Yes, Revoke
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>

                    @endif

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>



<div class="modal modal-blur fade" id="modal-team" tabindex="-1" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form  method="POST" action="/gvt/paycode/send" class="w-100">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Set License Price</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3 align-items-end">
            <div class="col">
              <label class="form-label">Amount (Tsh /=)</label>
              <input type="text" name="amount" class="form-control">
              <input type="hidden" name="user_id" class="form-control" value="{{ $user->id }}">
              <input type="hidden" name="app_id" class="form-control" value="{{ $app->id }}">
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


<form class="float-end" method="POST" action="/gvt/applicant/license/{{ $app->id }}">
  @csrf
  @method('PUT')
{{-- <input type="hidden" name="verified" value={{ $val }}>

<!-- Modal -->
{{-- this is the reject modal --}}
<div class="modal modal-blur fade" id="modal-leseni" tabindex="-1" style="display: blck;" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <div class="m-2">
          <span class="avatar avatar-xl rounded" style="background-image: url(./tabler/svg/validation.gif)"></span>
        </div>
        <h3>Confirmation</h3>
        <div class="text-muted">You are about to Create a license for this user</div>
        <input type="hidden" name="app_id" value="{{ $app->id }}">
        <input type="hidden" name="user_id" value="{{ $user->id }}">
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                Cancel
              </a></div>
            <div class="col">
              <button type="submit" class="btn btn-success w-100" data-bs-dismiss="modal">
                Yes, Create
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>



@endsection