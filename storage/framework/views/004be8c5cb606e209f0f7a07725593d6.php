
<?php $__env->startSection('content'); ?>

    <div class="col-12">

      <?php if(Session::has('message')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo e(Session::get('message')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif; ?>
      
        <div class="card">
          <div class="card-header">
            <h3 class="card-title float-start px-2">Confirmed Licenses</h3>
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
                  <th>License Number</th>
                  <th>Business Type</th>
                  <th>Issued By</th>
                  <th>Status</th>
                  <th>Expire</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $counter = 1;    

                ?>
                
                <?php if($license !== ""): ?>
                <?php $__currentLoopData = $license; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $licenses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                  <td>
                    <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                  </td>
                  <td>
                    <span class="text-muted">
                     <?php echo e($counter++); ?> <?php echo e($listings->dater); ?>

                    </span>
                  </td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1"><?php echo e($listings->name); ?></a></td>
                  <td>
                    <?php echo e($licenses->license_number); ?>

                  </td>
                  <td>
                    <?php echo e($listings->type); ?>

                  </td>
                  <td>
                    <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                  </td>
                  <td>
                    <?php

                      $time = date('d-m-Y');
                    ?>

                    <?php if(strtotime($time) > strtotime($licenses->expire)): ?>
                        <span class="badge bg-red-lt text-danger rounded-pill bg-warning">Expired</span>
                    <?php else: ?>
                        <span class="badge bg-green-lt rounded-pill bg-success">Active</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php echo e($licenses->expire); ?>

                  </td>
                  <td>
                    <?php if(strtotime($time) > strtotime($licenses->expire)): ?>
                    
                    <a href="#" class="btn btn-blue">Renew</a>
                    <?php else: ?>
                    <a href="/generate-pdf" class="btn btn-blue">Download</a>
                    <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                  <tr>No License yet</tr>
                <?php endif; ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawad Charles\Desktop\Assing\lisabrela\resources\views/applicant/license.blade.php ENDPATH**/ ?>