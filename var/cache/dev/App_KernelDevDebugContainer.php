<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXmessTg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXmessTg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXmessTg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXmessTg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXmessTg\App_KernelDevDebugContainer([
    'container.build_hash' => 'XmessTg',
    'container.build_id' => '5d842277',
    'container.build_time' => 1680590729,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXmessTg');
