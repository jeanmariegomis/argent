<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCjn6Ruk\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCjn6Ruk/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCjn6Ruk.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCjn6Ruk\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCjn6Ruk\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Cjn6Ruk',
    'container.build_id' => 'b07e30dd',
    'container.build_time' => 1565967390,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCjn6Ruk');
