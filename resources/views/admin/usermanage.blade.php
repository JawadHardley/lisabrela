@extends('layouts.dashboard')
@section('content')

    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Invoices</h3>
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
                  <th>Full name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date in</th>
                  <th>status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @php
                $counter = 1;    

                @endphp

                @foreach($listings as $listing)
                @if ($listing->role == 'admin') 
                    @continue
                @endif
                <tr>
                  <td>
                    <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                  </td>
                  <td>
                    <span class="text-muted">
                     {{ $counter++; }}
                    </span>
                  </td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">{{ $listing->firstname }} {{ $listing->lastname }}</a></td>
                  <td>
                    @if($listing->role == 'applicant')
                      {{ 'Applicant' }}
                    @endif
                     
                    @if($listing->role == 'admin')
                      {{ 'Admin' }}
                    @endif
                    
                    @if($listing->role == 'gvt') 
                      {{ 'Government Official' }}
                    @endif 
                    
                    @if($listing->role == 'tax')       
                      {{ 'Tax Officer' }}
                    @endif
                  </td>
                  <td>
                    {{ $listing->email }}
                  </td>
                  <td>
                    {{ $listing->phone }}
                  </td>
                  <td>
                    {{ $listing->created_at }}
                  </td>
                  <td>
                    @if ($listing->verified == 0)
                        <span class="badge rounded-pill bg-danger">Disabled</span>
                    @else
                        <span class="badge rounded-pill bg-success">Active</span>
                    @endif
                  </td>
                  <td class="text-end">
                    <form class="float-end" method="POST" action="/root/{{$listing->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-md btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $counter }}"><i class="fa-solid fa-trash"></i> Delete</button>
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $counter }}">
                            Launch demo modal
                        </button> --}}
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $counter }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Warning !</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Are you sure you want to delete this user "{{ $listing->firstname }}"
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    <a href="#" class="btn btn-md btn-primary">Disable</a>
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