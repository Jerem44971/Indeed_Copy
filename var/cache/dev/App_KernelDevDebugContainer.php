<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFbWshpy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFbWshpy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFbWshpy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFbWshpy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFbWshpy\App_KernelDevDebugContainer([
    'container.build_hash' => 'FbWshpy',
    'container.build_id' => 'a4f772e2',
    'container.build_time' => 1625210214,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFbWshpy');