
<?php $__env->startSection('content'); ?>


<?php

  $data = 0;
  foreach($listings as $listing) {
    if ($listing->district == Auth::user()->district) {
        $data++;
    }
  }

  $datar = 0;
  foreach($listings as $listing) {
    if ($listing->district == Auth::user()->district && ($listing->gvt != 1 && !isset($listing->dater))) {
      if ($listing->taxed === 0) {
        $datar++;
      }
    }
  }

  $datap = 0;
  foreach($listings as $listing) {
    if ($listing->district == Auth::user()->district && ($listing->gvt != 1 && !isset($listing->dater))) {
      if ($listing->taxed !== 0 & $listing->taxed != 1) {
        $datap++;
      }
    }
  }

  $datav = 0;
  foreach($listings as $listing) {
    if ($listing->district == Auth::user()->district && ($listing->gvt != 1 && !isset($listing->dater))) {
      if ($listing->taxed == 1) {
        $datav++;
      }
    }
  }

?>

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body text-center">
                <div class="mb-3">
                  <p class="small text-muted m-0">Applicants</p>
                  <span class="avatar avatar-xl rounded"><?php echo e($data); ?></span>
                </div>
                <div class="card-title mb-1"><?php echo e(Auth::user()->region); ?></div>
                <div class="text-muted"><?php echo e(Auth::user()->district); ?></div>
              </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-9">
            <div class="col-12">
                <div class="card">
                  
                  <div class="list-group list-group-flush list-group-hoverable my-1">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        
                        <div class="col-auto">
                          <a href="#">
                            <span class="avatar bg-green-lt">
                                <i class="fa fa-check"></i>
                            </span>
                          </a>
                        </div>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block">Verified</a>
                          <div class="d-block text-muted text-truncate mt-n1"><?php echo e($datav); ?> Applicants confirmed for further license processes</div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        
                        <div class="col-auto">
                          <a href="#">
                            <span class="avatar bg-red-lt">
                                <i class="fa fa-minus-circle"></i>
                            </span>
                          </a>
                        </div>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block">Rejected</a>
                          <div class="d-block text-muted text-truncate mt-n1"><?php echo e($datar); ?> Applicants rejected along with comments</div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        
                        <div class="col-auto">
                          <a href="#">
                            <span class="avatar bg-yellow-lt">
                                <i class="fa fa-exclamation-triangle"></i>
                            </span>
                          </a>
                        </div>
                        <div class="col text-truncate">
                          <a href="#" class="text-reset d-block">Pending</a>
                          <div class="d-block text-muted text-truncate mt-n1"><?php echo e($datap); ?> Applicants who need to be vetted for license registration</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Applications</h3>
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
                        <th>Applicant</th>
                        <th>Business name</th>
                        <th>Entity</th>
                        <th>Business Type</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $counter = 1;    
      
                      ?>
      
                      <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($listing->district == Auth::user()->district && !isset($listing->dater)): ?>
                            <?php if($listing->gvt != 1 && $listing->gvt !== 0): ?>

                      <tr>
                        <td>
                          <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                        </td>
                        <td>
                          <span class="text-muted">
                           <?php echo e($counter++); ?>

                          </span>
                        </td>
                        <td>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($listing->user_id == $user->id): ?>
                                    <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1"><?php echo e($listing->name); ?></a></td>
                        <td>
                          <?php echo e($listing->entity); ?>

                        </td>
                        <td>
                          <?php echo e($listing->type); ?>

                        </td>
                        <td>
                          <?php if($listing->taxed == 1): ?>
                              <span class="badge bg-green-lt rounded-pill bg-success">Accepted</span>
                          <?php elseif($listing->taxed === 0 || $listing->gvt === 0): ?> 
                              <span class="badge bg-red-lt text-danger rounded-pill bg-warning">Rejected</span>
                          <?php else: ?> 
                              <span class="badge bg-yellow-lt text-warning rounded-pill bg-warning">Pending</span>
                          <?php endif; ?>
                        </td>
                        <td>
                          
                          <a href="/tax/applicant/<?php echo e($listing->id); ?>" class="btn btn-primary">view</a>
                        </td>
                      </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                  
                  <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                      <p class="small">
                          
                      </p>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\mrwrong\Applications\Web Files\Assing\lisabrela\resources\views/tax/home.blade.php ENDPATH**/ ?>