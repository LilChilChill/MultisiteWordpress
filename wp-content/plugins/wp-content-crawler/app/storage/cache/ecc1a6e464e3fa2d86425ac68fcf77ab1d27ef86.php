


<table class="section-table <?php echo e(isset($tableClass) && $tableClass ? $tableClass : ''); ?>" <?php if(isset($id) && $id): ?> id="<?php echo $id; ?>" <?php endif; ?>>

    
    <thead>
        <tr>
            <th><?php echo e(_wpcc("URL")); ?></th>
            <th><?php echo e($dateColumnName); ?></th>
        </tr>
    </thead>

    
    <tbody>
        <?php $__currentLoopData = $urls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td class="col-post">
                    
                    <div class="post-title">
                        <a href="<?php echo $url->url; ?>" target="_blank">
                            <?php echo mb_strlen($url->url) > 255 ? mb_substr($url->url, 0, 255) . "..." : $url->url; ?>

                        </a>
                    </div>

                    
                    <div class="post-details">
                        
                        <?php if(isset($url->site)): ?>
                            <?php echo $__env->make('dashboard.partials.site-link', ['site' => $url->site], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        
                        <span class="id">
                            <?php echo e(_wpcc("ID")); ?>: <?php echo e($url->id); ?>

                        </span>
                    </div>

                </td>

                
                <td class="col-date">
                    
                    <span class="diff-for-humans">
                        <?php echo e(isset($url->{$fieldName}) ? \WPCCrawler\Utils::getDiffForHumans(strtotime($url->{$fieldName})) : "-"); ?>

                        <?php echo e(_wpcc("ago")); ?>

                    </span>

                    <span class="date">
                        (<?php echo e(isset($url->{$fieldName}) ? \WPCCrawler\Utils::getDateFormatted($url->{$fieldName}) : "-"); ?>)
                    </span>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>
<?php /**PATH /home/hypebeas/public_html/wp-content/plugins/wp-content-crawler/app/views/dashboard/partials/table-urls.blade.php ENDPATH**/ ?>