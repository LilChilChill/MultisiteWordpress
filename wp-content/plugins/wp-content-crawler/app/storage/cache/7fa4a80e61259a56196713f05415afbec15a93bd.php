

<?php
    $isRecrawl = false;
    $isRecrawl = isset($type) && $type && $type != 'crawl' ? true : false;
    $now = strtotime(current_time('mysql'));
?>


<table class="section-table <?php echo e(isset($tableClass) && $tableClass ? $tableClass : ''); ?>" <?php if(isset($id) && $id): ?> id="<?php echo e($id); ?>" <?php endif; ?>>

    
    <thead>
        <tr>
            <th><?php echo e(_wpcc("Post")); ?></th>
            <th><?php echo e($isRecrawl ? _wpcc("Recrawled") : _wpcc("Saved")); ?></th>
            <?php if($isRecrawl): ?>
                <th class="col-update-count"><?php echo e(_wpcc("Update Count")); ?></th>
            <?php endif; ?>
        </tr>
    </thead>

    
    <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!isset($post->wpcc) || !isset($post->wpcc->site)): ?> <?php continue; ?> <?php endif; ?>
            <tr>
                
                <td class="col-post">
                    
                    <div class="post-title">
                        <a href="<?php echo get_permalink($post->ID); ?>" target="_blank">
                            <?php echo e($post->post_title); ?>

                        </a>

                        
                        <span class="edit-link">
                            - <a href="<?php echo get_edit_post_link($post->ID); ?>" target="_blank">
                                <?php echo e(_wpcc("Edit")); ?>

                            </a>
                        </span>
                    </div>

                    
                    <div class="post-details">
                        
                        <?php echo $__env->make('dashboard.partials.site-link', ['site' => $post->wpcc->site], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        
                        <span class="post-type">
                            (<?php echo e($post->post_type); ?>)
                        </span>

                        
                        <span class="id">
                            <?php echo e(_wpcc("ID")); ?>: <?php echo e($post->ID); ?>

                        </span> -

                        
                        <span class="target-url">
                            <a href="<?php echo $post->wpcc->url; ?>" target="_blank">
                                <?php echo mb_strlen($post->wpcc->url) > 255 ? mb_substr($post->wpcc->url, 0, 255) . "..." : $post->wpcc->url; ?>

                            </a>
                        </span>
                    </div>

                </td>

                
                <td class="col-date">
                    
                    <span class="diff-for-humans">
                        <?php
                            $timestamp = strtotime($isRecrawl ? $post->wpcc->recrawled_at : $post->wpcc->saved_at);
                        ?>
                        <?php echo e(\WPCCrawler\Utils::getDiffForHumans($timestamp)); ?>

                        <?php echo e($timestamp > $now ? _wpcc("later") : _wpcc("ago")); ?>

                    </span>

                    <span class="date">
                        (<?php echo e(\WPCCrawler\Utils::getDateFormatted($isRecrawl ? $post->wpcc->recrawled_at : $post->wpcc->saved_at)); ?>)
                    </span>
                </td>

                
                <?php if($isRecrawl): ?>
                    <td class="col-update-count">
                        <?php echo e($post->wpcc->update_count); ?>

                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>
<?php /**PATH /home/hypebeas/public_html/wp-content/plugins/wp-content-crawler/app/views/dashboard/partials/table-posts.blade.php ENDPATH**/ ?>