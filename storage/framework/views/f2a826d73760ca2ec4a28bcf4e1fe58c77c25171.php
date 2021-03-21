<?php

use PhpParser\Node\Stmt\Foreach_;

$__env->startSection('title'); ?> <?php echo e(ucwords(__('cp.title_admin'))); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="portlet light bordered">

        <div class="portlet-body">

            <div class="table-toolbar">

                <div class="row">

                    <div class="col-sm-9">

                        <div class="btn-group">

                            <a href="<?php echo e(route('login')); ?>" style="margin-right: 5px"

                               class="btn sbold green"><?php echo e(__('cp.add')); ?>


                                <i class="fa fa-plus"></i>

                            </a>

                            <button class="btn sbold blue btn--filter"><?php echo e(__('cp.filter')); ?>


                                <i class="fa fa-search"></i>

                            </button>

                            <button class="btn sbold green event" href="#activation" role="button"  data-toggle="modal"><?php echo e(__('cp.active')); ?>

                                <i class="fa fa-check"></i>
                            </button>
                            <button class="btn sbold default event" href="#cancel_activation" role="button"  data-toggle="modal"><?php echo e(__('cp.not_active')); ?>

                                <i class="fa fa-minus"></i>
                            </button>

                        </div>

                    </div>



                </div>

                <div class="box-filter-collapse">

                    <form class="form-horizontal" method="get" >

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group row">

                                    <label class="col-md-3 control-label"><?php echo e(__('cp.email')); ?></label>

                                    <div class="col-md-9">

                                        <input type="email" class="form-control" name="email">

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="row">

                                    <div class="col-md-offset-3 col-md-9">

                                        <button type="submit" class="btn sbold blue"><?php echo e(__('cp.search')); ?>


                                            <i class="fa fa-search"></i>

                                        </button>

                                        <a href="<?php echo e(route('login')); ?>" type="submit"

                                           class="btn sbold btn-default "><?php echo e(__('cp.reset')); ?>


                                            <i class="fa fa-refresh"></i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>


                    </form>

                </div>

            </div>


            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="toolsTable">

                <thead>

                <tr>

                    <th>



                    </th>

                    <th> <?php echo e(ucwords(__('cp.full_name'))); ?></th>

                    <th> <?php echo e(ucwords(__('cp.email'))); ?></th>


                    <th> <?php echo e(ucwords(__('cp.status'))); ?></th>

                    <th> <?php echo e(ucwords(__('cp.created'))); ?></th>

                    <th> <?php echo e(ucwords(__('cp.action'))); ?></th>

                </tr>

                </thead>

                <tbody>



                    <tr class="odd gradeX" id="tr-<?php echo e($item->id); ?>">

                        <td>

                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">

                                <input type="checkbox" class="checkboxes chkBox" value="<?php echo e($item->id); ?>" name="chkBox"/>

                                <span></span>

                            </label>

                        </td>

                        <td> <?php echo e($item->name); ?></td>

                        <td><a href="mailto:<?php echo e($item->email); ?>"><?php echo e($item->email); ?></a></td>


                        <td> <span class="label label-sm <?php echo ($item->status == "active")
                                ? "label-info" : "label-danger"?>" id="label-<?php echo e($item->id); ?>">
                                <?php
                                    $status = $item->status
                                ?>

                                <?php echo e(__('cp.'.$status)); ?>

                            </span>
                        </td>

                        <td class="center"><?php echo e($item->created_at); ?></td>

                        <td>

                            <div class="btn-group btn-action">

                                <a href="<?php echo e(route('login')); ?>""

                                   class="btn btn-xs blue tooltips" data-container="body" data-placement="top"

                                   data-original-title="<?php echo e(__('cp.edit')); ?>"><i class="fa fa-edit"></i></a>



                                <a href="<?php echo e(route('login')); ?>""

                                   class="btn btn-xs blue tooltips" data-container="body" data-placement="top"

                                   data-original-title="<?php echo e(__('cp.edit_password')); ?>"><i class="fa fa-expeditedssl"></i></a>





                            </div>

                        </td>

                    </tr>



                <?php foreach ($variable as $key => $value) {
                    # code...
                }; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_0): ?>


                <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>


    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nemerabbud-pc\hexaEm\resources\views/admin/admin/home.blade.php ENDPATH**/ ?>
