@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
            <form id="regForm" method="POST" action="/applicant/submit" enctype="multipart/form-data">
                @csrf
                <h1 id="register">Application Form</h1>
                <p id="pgraph" class="small text-muted text-center">
                    Request a new license for your business
                </p>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="fa fa-briefcase"></i></span>
                  <span class="step"><i class="fa fa-shopping-bag"></i></span>
                </div>

                <div class="tab">
                    <div class="row row-cards">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Entity Type</label>
                            <select class="form-control form-select invalid" name="entity" required>
                              <option disabled selected value=""> -- select an option -- </option>
                              <option value="individual">Individual</option>
                              <option value="limited company">Limited Company</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Sector</label>
                              <select class="form-control form-select" name="sector" required>
                                <option disabled selected value=""> -- select an option -- </option>
                                <option value="civil">Civil</option>
                                <option value="technology">Technology</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control form-select invalid" name="category" required>
                              <option disabled selected value=""> -- select an option -- </option>
                              <option value="phone">Phone</option>
                              <option value="contractor">Contractor</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Business Type</label>
                              <select class="form-control form-select" name="type" required>
                                <option disabled selected value=""> -- select an option -- </option>
                                <option value="contraction">Contraction</option>
                                <option value="computers">Computers</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="form-label">Nationality</div>
                                <div>
                                  <label class="form-check">
                                    <input class="form-check-input" type="radio" name="nationality" value="citizen" checked="">
                                    <span class="form-check-label">Citizen</span>
                                  </label>
                                  <label class="form-check">
                                    <input class="form-check-input" type="radio" name="nationality" value="foreigner">
                                    <span class="form-check-label">Foreigner</span>
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>                 
                </div>

                <div class="tab">
                    <div class="row row-cards">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                              <label class="form-label">Business Name</label>
                              <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Business Email</label>
                              <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Business Phone</label>
                              <input type="text" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Region</label>
                            <select class="form-control form-select invalid" name="region" required>
                              <option disabled selected value=""> -- select an option -- </option>
                              <option value="Dar es salaam">Dar es salaam</option>
                              <option value="Dodoma">Dodoma</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label class="form-label">District</label>
                              <select class="form-control form-select" name="district" required>
                                <option disabled selected value=""> -- select an option -- </option>
                                <option value="Kinondoni">Kinondoni</option>
                                <option value="Chamwino">Chamwino</option>
                              </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab">
                    <div class="row row-cards">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="form-label">Proof of Citizenship/Residence Permits</div>
                                <input type="file" name="citizen_doc" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-label">Memorandum of Articles</div>
                                <input type="file" name="memo_doc" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-label">Tax Identification Number (TIN)</div>
                                <input type="file" name="tin_doc" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="thanks-message text-center" id="text-message"> <img src="./tabler/svg/complete.gif" width="100" class="mb-4">
                    <h3>Registration Complete</h3> 
                    <p class="small">
                        <span>Thanks for your time, click the finish button submit you license application </span>
                    </p>
                    <button type="submit" class="btn btn-outline-success">
                        <i class="fa fa-check-circle px-1"></i> Submit
                    </button>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" class="btn btn-success rounded" id="prevBtn" onclick="nextPrev(-1)">
                        Prev
                      </button> 
                      <button type="button" class="btn btn-success rounded" id="nextBtn" onclick="nextPrev(1)">
                        Next
                      </button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection