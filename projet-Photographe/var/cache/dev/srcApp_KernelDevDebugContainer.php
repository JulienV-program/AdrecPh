<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM0atl4J\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM0atl4J/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM0atl4J.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM0atl4J\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerM0atl4J\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'M0atl4J',
    'container.build_id' => '3c948d44',
    'container.build_time' => 1545898957,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerM0atl4J');
