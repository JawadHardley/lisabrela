
<?php $__env->startSection('content'); ?>


<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('message')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
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
                  <?php if($pay !== ""): ?>
                    <?php if($pay->paid == 1 && $app->paid == 1): ?>
                    <div class="list-group list-group-transparent bg-green">
                      <a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-white" data-bs-toggle="modal" data-bs-target="#">License </a>
                      
                    </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col d-flex flex-column">
                <div class="card-body">
                  <h2 class="mb-4">
                    Application Status 
                  </h2>
                  <div class="row align-items-center">
                    <div class="col-2">
                        <span class="avatar avatar-xl rounded-circle text-center <?php echo e($status); ?>" style="background-image: url(./static/avatars/000m.jpg)">
                            <?php if($app->taxed == 1 && $app->gvt ==1): ?>
                            <i class="fa fa-check"></i>
                            <?php elseif($app->taxed === 0 || $app->gvt === 0): ?>
                            <i class="fa fa-minus-circle"></i>
                            <?php else: ?>
                            <i class="fa fa-exclamation-triangle"></i>
                            <?php endif; ?>
                        </span>
                        <?php if($app->taxed == 1 && $app->gvt == 1): ?>
                        <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                        </div>
                        <?php elseif($app->taxed === 0 || $app->gvt === 0): ?>
                        <div class="ribbon ribbon-top ribbon-bookmark bg-red">
                          <i class="fa fa-minus-circle"></i>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-10">
                        <div class="col-auto card-tite">
                            <?php if($app->taxed === 0 || $app->gvt === 0): ?>
                            <span class="badge bg-red-lt rounded-pill">Application Rejected</span>
                            <p class="p-2">
                                
                                    <?php echo e($comments->comment); ?>

                                
                            </p>
                            <?php elseif($app->paid != 1): ?>
                            <div class="card-body">
                                <ul class="steps steps-counter steps-vertical">
                                  
                                  <?php if($app->taxed == 0 && $app->gvt == 0): ?> 
                                  <li class="step-item active">Application</li>
                                  <?php else: ?>
                                  <li class="step-item">Application</li>
                                  <?php endif; ?>

                                  <?php if($app->taxed == 1 && $app->gvt == 0 || ($app->taxed == 1 && $app->gvt === 0)): ?> 
                                  <li class="step-item active">Tax Clearance Officer</li>
                                  <?php else: ?>
                                  <li class="step-item">Tax Clearance Officer</li>
                                  <?php endif; ?>

                                  <?php if($pay !== ""): ?> 
                                    <?php if(($app->taxed == 1 && $app->gvt == 1) && $pay->paid !== 1): ?> 
                                    <li class="step-item active">Government Offical</li>
                                    <li class="step-item">Payment</li>
                                    <?php else: ?>
                                    <li class="step-item">Government Offical</li>
                                    <li class="step-item active">Payment</li>
                                    <?php endif; ?>
                                  <?php else: ?>
                                    <?php if($app->taxed == 1 && $app->gvt == 1): ?> 
                                    <li class="step-item active">Government Offical</li>
                                    <li class="step-item">Payment</li>
                                    <?php else: ?>
                                    <li class="step-item">Government Offical</li>
                                    <li class="step-item">Payment</li>
                                    <?php endif; ?>
                                  <?php endif; ?>
                                </ul>
                            </div>
                            <?php elseif($app->paid == 1): ?>
                            <span class="badge bg-green-lt rounded-pill">Application Approved</span>
                            <p class="p-2">
                                Payment done, you can now download your license <a href="#">here</a>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                  </div>
                  <?php if($pay !== "" && ($app->gvt == 1 && $app->taxed == 1)): ?>
                    
                    <div class="row my-4">
                        <h3>Payment</h3>
                        <div class="col">
                            <div class="card card-sm">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-1">
                                      <span class="<?php echo e($bgpay); ?> text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                                      </span>
                                    </div>
                                    <div class="col-9">
                                      <div class="font-weight-medium">
                                        <?php echo e($pay->amount); ?> /=
                                      </div>
                                      <div class="text-muted">
                                        <?php echo e($userpay); ?>

                                        <?php if($pay->paid === 1): ?>
                                          <a href="<?php echo e(asset('storage/' . $pay->file)); ?>"> (Click here to view receipt)</a>
                                        <?php endif; ?>
                                        <?php if($pay->paid === 2): ?>
                                          <span class="badge badge-outline text-red">Invalid</span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <?php if($pay->paid !== 1): ?>
                                    <div class="col-2">
                                      <button class="btn float-end dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                      <div class="dropdown-menu dropdown-menu-end">
                                        <form class="" method="POST" action="/gvt/payment/cancel/<?php echo e($pay->id); ?>">
                                          <?php echo csrf_field(); ?>
                                          <?php echo method_field('DELETE'); ?>
                                          
                                        </form>
                                        
                                          <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-team">
                                            Upload Receipt
                                          </a>
                                      </div>
                                    </div>
                                    <?php endif; ?>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  <?php endif; ?>
                  <form method="POST" action="/applicant/edit/<?php echo e($app->id); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                  <div class="row mb-4">
                    <div class="col-md">
                      <div class="form-label">Entity Type</div>
                      
                      <select class="form-control form-select invalid" name="entity" required <?php echo e($disabled); ?>>
                        <option selected value="<?php echo e($app->entity); ?>"><?php echo e($app->entity); ?></option>
                        <option value="individual">Individual</option>
                        <option value="limited company">Limited Company</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Sector</div>
                      
                      <select class="form-control form-select" name="sector" required <?php echo e($disabled); ?>>
                        <option selected value="<?php echo e($app->sector); ?>"><?php echo e($app->sector); ?></option>
                        <option value="civil">Civil</option>
                        <option value="technology">Technology</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Category</div>
                      
                      <select class="form-control form-select" name="category" required <?php echo e($disabled); ?>>
                        <option selected value="<?php echo e($app->category); ?>"><?php echo e($app->category); ?></option>
                        <option value="phone">Phone</option>
                        <option value="contractor">Contractor</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Type</div>
                      
                      <select class="form-control form-select" name="type" required <?php echo e($disabled); ?>>
                        <option selected value="<?php echo e($app->type); ?>"><?php echo e($app->type); ?></option>
                        <option value="contraction">Contraction</option>
                        <option value="computers">Computers</option>
                      </select>
                    </div>
                  </div>

                  <div class="row g-3">
                    <div class="col-md">
                      <div class="form-label">Business Name</div>
                      <input type="text" name="name" class="form-control" value="<?php echo e($app->name); ?>" <?php echo e($disabled); ?> required>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Phonenumber</div>
                      <input type="text" name="phone" class="form-control" value="<?php echo e($app->phone); ?>" <?php echo e($disabled); ?> required>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Region</div>
                      
                      <select id="region" class="form-control form-select" name="region" <?php echo e($disabled); ?> required>
                        <option selected value="<?php echo e($app->region); ?>"><?php echo e($app->region); ?></option>
                      </select>
                    </div>
                    <div class="col-md">
                      <div class="form-label">District</div>
                      
                      <select id="district" class="form-control form-select" name="district" <?php echo e($disabled); ?> required>
                        <option selected value="<?php echo e($app->district); ?>"><?php echo e($app->district); ?></option>
                      </select>
                      <select id="districtSel" class="form-control d-none form-select" required>
                        <option selected value="0"> -- select an option -- </option>
                      </select>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Bussiness Email</h3>
                  
                  <div>
                    <div class="row g-2">
                      <div class="col-12">
                        <input type="email" name="email" class="form-control w-100" value="<?php echo e($app->email); ?>" <?php echo e($disabled); ?> required>
                      </div>
                    </div>
                  </div>

                  <?php if($app->taxed == 1 || $app->gvt == 1): ?>
                  
                  <?php else: ?>

                  <h3 class="card-title mt-4">New Attachments</h3>
                  
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
                  <?php endif; ?>

                  <h3 class="card-title mt-4">Documents</h3>
                  <div class="row">
                    
                    <a href="<?php echo e(asset('storage/' . $app->citizen_doc)); ?>" target="_blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
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

                    <a href="<?php echo e(asset('storage/' . $app->memo_doc)); ?>" target="blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
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

                    <a href="<?php echo e(asset('storage/' . $app->tin_doc)); ?>" target="blank" class="text-decoration-none col-md-6 col-xl-4" disabled>
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
                    <?php if($app->taxed == 0): ?>
                    <button type="submit" class="btn btn-ghost-primary">Edit</button>
                    <?php endif; ?>
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<?php if($pay !== "" && ($app->gvt == 1 && $app->taxed == 1)): ?>
<div class="modal modal-blur fade" id="modal-team" tabindex="-1" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form  method="POST" action="/applicant/paycode/edit/<?php echo e($pay->id); ?>" class="w-100" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
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
<?php endif; ?>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\mrwrong\Applications\Web Files\Assing\lisabrela\resources\views/applicant/myapp.blade.php ENDPATH**/ ?>