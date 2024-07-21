
<?php $__env->startSection('content'); ?>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Pending Applications</h3>
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
                      
                      <a href="/gvt/applicant/<?php echo e($listing->id); ?>" class="btn btn-primary">view</a>
                    </td>
                  </tr> 
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawad Charles\Desktop\Assing\lisabrela\resources\views/gvt/ready.blade.php ENDPATH**/ ?>