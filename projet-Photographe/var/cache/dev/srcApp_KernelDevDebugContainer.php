<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8qfXcfN\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8qfXcfN/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8qfXcfN.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8qfXcfN\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container8qfXcfN\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '8qfXcfN',
    'container.build_id' => 'd7096c91',
    'container.build_time' => 1547727321,
), __DIR__.\DIRECTORY_SEPARATOR.'Container8qfXcfN');
