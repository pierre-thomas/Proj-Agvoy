<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKxAySax\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKxAySax/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKxAySax.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKxAySax\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKxAySax\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KxAySax',
    'container.build_id' => '8be2745c',
    'container.build_time' => 1574373845,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKxAySax');
