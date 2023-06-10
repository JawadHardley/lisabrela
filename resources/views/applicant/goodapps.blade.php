@extends('layouts.dashboard')
@section('content')

    <div class="col-12">

      @if (Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('message') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      
        <div class="card">
          <div class="card-header">
            <h3 class="card-title float-start px-2">Confirmed Applications</h3>
          </div>
          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="ms-auto text-muted">
                Search:
                <div class="ms-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
              <thead>
                <tr>
                  <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                  <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                  </th>
                  <th>Business name</th>
                  <th>Entity</th>
                  <th>Business Type</th>
                  <th>Status</th>
                  <th>Payment</th>
                  <th>Date in</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @php
                $counter = 1;    

                @endphp

                @foreach($listings as $listing)

                <tr>
                  <td>
                    <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                  </td>
                  <td>
                    <span class="text-muted">
                     {{ $counter++; }} {{ $listing->dater }}
                    </span>
                  </td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">{{ $listing->name }}</a></td>
                  <td>
                    {{ $listing->entity }}
                  </td>
                  <td>
                    {{ $listing->type }}
                  </td>
                  <td>
                    @if ($listing->taxed == 1 && $listing->gvt == 1)
                        <span class="badge bg-green-lt rounded-pill bg-success">Accepted</span>
                    @elseif ($listing->taxed === 0 || $listing->gvt === 0) 
                        <span class="badge bg-red-lt text-danger rounded-pill bg-warning">Rejected</span>
                    @else 
                        <span class="badge bg-yellow-lt text-warning rounded-pill bg-warning">Pending</span>
                    @endif
                  </td>
                  <td>
                    @if ($pay !== "")
                        @if ($pay->paid == 1)
                            <span class="badge bg-green-lt rounded-pill bg-success">Confirmed</span>
                        @elseif ($pay->paid == 2) 
                            <span class="badge bg-red-lt text-danger rounded-pill bg-warning">Rejected</span>
                        @else 
                            <span class="badge bg-yellow-lt text-warning rounded-pill bg-warning">Pending</span>
                        @endif
                    @else 
                        <span class="badge bg-yellow-lt text-warning rounded-pill bg-warning">Not set</span>
                    @endif
                  </td>
                  <td>
                    {{-- {{ $listing->dater }} --}}
                    NULL
                  </td>
                  <td>
                    {{-- <button class="btn btn-danger">Delete</button> --}}
                    <a href="applicant/myapp/{{$listing->id}}" class="btn btn-success">view</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            {{-- <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p> --}}
            <ul class="pagination m-0 ms-auto">
              <li class="page-item disabled">
                <p class="small">
                    {{-- {{$listings->links()}} --}}
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>

@endsection