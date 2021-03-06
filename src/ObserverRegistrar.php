<?php

namespace Thomascombe\ObserverAttributes;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;
use Thomascombe\ObserverAttributes\Attributes\Observer;

class ObserverRegistrar
{
    protected string $basePath;
    protected ?string $baseNamespace = null;

    public function __construct()
    {
        $this->basePath = app()->path();
    }

    public function setBaseNamespace(string $baseNamespace): self
    {
        $this->baseNamespace = $baseNamespace;
        return $this;
    }

    public function setBasePath(string $basePath): self
    {
        $this->basePath = $basePath;
        return $this;
    }

    protected function getBaseNamespace(): string
    {
        return rtrim($this->baseNamespace ?? app()->getNamespace(), '\\') . '\\';
    }

    public function registerDirectory(string|array $directories): void
    {
        $directories = Arr::wrap($directories);

        $filesInDirectories = (new Finder())->files()->name('*.php')->in($directories);
        collect($filesInDirectories)->each(fn(\SplFileInfo $fileInfo) => $this->registerFile($fileInfo));
    }

    protected function registerFile(string|\SplFileInfo $fileInfo): void
    {
        $fileInfo = is_string($fileInfo) ? new \SplFileInfo($fileInfo) : $fileInfo;

        $this->processAttributes($this->fullQualifiedClassNameFromFile($fileInfo));
    }

    protected function fullQualifiedClassNameFromFile(\SplFileInfo $file): string
    {
        $class = trim(Str::replaceFirst($this->basePath, '', $file->getRealPath()), DIRECTORY_SEPARATOR);

        $class = str_replace(
            [DIRECTORY_SEPARATOR, 'App\\'],
            ['\\', $this->getBaseNamespace()],
            ucfirst(Str::replaceLast('.php', '', $class))
        );

        return $this->getBaseNamespace(). $class;
    }

    protected function processAttributes(string $className): void
    {
        if (!class_exists($className)) {
            return;
        }

        try {
            $class = new \ReflectionClass($className);
        } catch (\ReflectionException $e) {
            Log::error("Error on processAttributes", ['error' => $e]);
        }

        $attributes = $class->getAttributes(Observer::class, \ReflectionAttribute::IS_INSTANCEOF);

        foreach ($attributes as $attribute) {
            try {
                $attributeClass = $attribute->newInstance();
            } catch (\Throwable) {
                continue;
            }
        }
        $className::observe($attributeClass->observers);
    }
}
