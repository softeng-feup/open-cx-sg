<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLp6y1i3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLp6y1i3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLp6y1i3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLp6y1i3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLp6y1i3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Lp6y1i3',
    'container.build_id' => 'cc9b6e16',
    'container.build_time' => 1573113013,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLp6y1i3');
