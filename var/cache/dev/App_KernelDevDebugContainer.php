<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSudujiz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSudujiz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSudujiz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSudujiz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSudujiz\App_KernelDevDebugContainer([
    'container.build_hash' => 'Sudujiz',
    'container.build_id' => 'e1f28f66',
    'container.build_time' => 1576487126,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSudujiz');
