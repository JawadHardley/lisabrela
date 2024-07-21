
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
                    <a href="./settings.html" class="list-group-item list-group-item-action d-flex align-items-center active">Application</a>
                  </div>
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
                        <span class="avatar <?php echo e($bg); ?> avatar-xl" style="background-image: url(./static/avatars/000m.jpg)">
                            <i class="fa fa-user"></i>
                        </span>
                        <?php if($app->taxed == 1): ?>
                        <div class="ribbon ribbon-top ribbon-bookmark bg-green">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                        </div>
                        <?php elseif($app->taxed === 0): ?>
                        <div class="ribbon ribbon-top ribbon-bookmark bg-red">
                          <i class="fa fa-minus-circle"></i>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-10">
                        <div class="col-auto card-title my-0">
                            <?php echo e($user->firstname); ?>

                            <?php echo e($user->lastname); ?>

                        </div>
                        <div class="col-auto card-title my-0">
                            <?php echo e($user->gender); ?>

                        </div>
                        <div class="col-auto card-title my-0">
                            <?php

                              $age = \Carbon\Carbon::parse($user->dob)->age;

                            ?>
                            <?php echo e($age); ?> 
                        </div>
                        <div class="col-auto card-title my-0">
                          <?php if($app->taxed == 1): ?>
                          <i class="fa fa-check bg-green text-white p-1 rounded-circle"></i>
                          <span class="small">(Approved)</span>
                          <?php elseif($app->taxed === 0): ?>
                          <i class="fa fa-minus-circle bg-red text-white p-1 rounded-circle"></i>
                          <span class="smal">Rejected</span>
                          <?php endif; ?>
                        </div>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Business Profile</h3>
                  <div class="row g-3">
                    <div class="col-md">
                      <div class="form-label">Business Name</div>
                      <input type="text" class="form-control" value="<?php echo e($app->name); ?>" disabled>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Business Phonenumber</div>
                      <input type="text" class="form-control" value="<?php echo e($app->phone); ?>" disabled>
                    </div>
                    <div class="col-md">
                      <div class="form-label">Location</div>
                      <input type="text" class="form-control" value="<?php echo e($app->district); ?>" disabled>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Bussiness Email</h3>
                  
                  <div>
                    <div class="row g-2">
                      <div class="col-auto">
                        <input type="text" class="form-control w-auto" value="<?php echo e($app->email); ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Profile Status</h3>
                  <p class="card-subtitle">Disable user incase of any violation</p>
                  <div>
                    <label class="form-check form-switch form-switch-lg">
                      <input class="form-check-input" type="checkbox" checked disabled>
                      <span class="form-check-label form-check-label-on">You're currently Enabled</span>
                      <span class="form-check-label form-check-label-off">
                        Enabled
                      </span>
                    </label>
                  </div>
                  <h3 class="card-title mt-4">Documents</h3>
                  <div class="row">
                    
                    <a href="<?php echo e(asset('storage/' . $app->tin_doc)); ?>" target="_blank" class="text-decoration-none mx-1 p-0 col-md-6 col-xl-3" disabled>
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

                    <a href="#" target="blank" class="text-decoration-none mx-1 p-0 col-md-6 col-xl-3" disabled>
                      <div class="card card-sm">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="bg-red-lt avatar">
                                <i class="fa fa-file"></i>
                              </span>
                            </div>
                            <div class="col">
                              <div class="small">
                                Memo Articles
                              </div>
                              <div class="text-muted small">
                                (Blocked)
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="#" target="blank" class="text-decoration-none mx-1 p-0 col-md-6 col-xl-3" disabled>
                      <div class="card card-sm">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <span class="bg-red-lt avatar">
                                <i class="fa fa-file"></i>
                              </span>
                            </div>
                            <div class="col">
                              <div class="small">
                                Citizen Docs
                              </div>
                              <div class="text-muted small">
                                (Blocked)
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

                    <?php if($app->taxed === NULL): ?>

                    <form method="POST" action="/tax/comments">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PUT'); ?>
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
                                    <input type="hidden" name="user_id" value="<?php echo e($app->user_id); ?>" required>
                                    <input type="hidden" name="app_id" value="<?php echo e($app->id); ?>" required>
                                    
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

                    <form class="float-end" method="POST" action="/tax/applicant/approve/<?php echo e($app->id); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-success">Approve</button>
                      
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

                    <?php elseif($app->taxed === 1 || $app->taxed === 0): ?>

                    <form class="float-end" method="POST" action="/tax/applicant/approve/<?php echo e($app->id); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                      <button type="button" class="btn btn-ghost-warning" data-bs-toggle="modal" data-bs-target="#modal-success">Revoke</button>
                      
                      <div class="modal modal-blur fade" id="modal-success" tabindex="-1" style="display: blck;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-status bg-warning"></div>
                            <div class="modal-body text-center py-4">
                              <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                              
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

                    <?php endif; ?>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>












<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\mrwrong\Applications\Web Files\Assing\lisabrela\resources\views/tax/applicant.blade.php ENDPATH**/ ?>