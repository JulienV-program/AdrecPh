<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5fQBP9M\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5fQBP9M/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5fQBP9M.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5fQBP9M\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container5fQBP9M\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '5fQBP9M',
    'container.build_id' => '0127b09a',
    'container.build_time' => 1546938789,
), __DIR__.\DIRECTORY_SEPARATOR.'Container5fQBP9M');
