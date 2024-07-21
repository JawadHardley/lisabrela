
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
            <h3 class="card-title float-start px-2">Rejected Applications</h3>
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
                  <th>Date in</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $counter = 1;    

                ?>

                <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($listing->user_id == Auth::user()->id && ($listing->gvt != 1 && !isset($listing->dater))): ?>
                    <?php if($listing->taxed === 0 || $listing->gvt === 0): ?>

                <tr>
                  <td>
                    <input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                  </td>
                  <td>
                    <span class="text-muted">
                     <?php echo e($counter++); ?>

                    </span>
                  </td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1"><?php echo e($listing->name); ?></a></td>
                  <td>
                    <?php echo e($listing->entity); ?>

                  </td>
                  <td>
                    <?php echo e($listing->type); ?>

                  </td>
                  <td>
                    <?php if($listing->taxed == 1 && $listing->gvt == 1): ?>
                        <span class="badge bg-green-lt rounded-pill bg-success">Accepted</span>
                    <?php elseif($listing->taxed === 0 || $listing->gvt === 0): ?> 
                        <span class="badge bg-red-lt text-danger rounded-pill bg-warning">Rejected</span>
                    <?php else: ?> 
                        <span class="badge bg-yellow-lt text-warning rounded-pill bg-warning">Pending</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    
                    NULL
                  </td>
                  <td>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteapp">Delete</button>

                    
                    <form class="float-end" method="POST" action="/applicant/delete/<?php echo e($listing->id); ?>">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      
                      <!-- Modal -->
                      <div class="modal modal-blur fade" id="deleteapp" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div class="modal-title">Are you sure?</div>
                              <div>Are you sure you want to delete this Application</div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>


                    <a href="applicant/myapp/<?php echo e($listing->id); ?>" class="btn btn-success">view</a>
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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\mrwrong\Applications\Web Files\Assing\lisabrela\resources\views/applicant/rejectapps.blade.php ENDPATH**/ ?>