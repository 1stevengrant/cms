<?php

namespace Statamic\Contracts\Imaging;

use Statamic\Contracts\Assets\Asset;

interface Manipulator
{
    /**
     * Sets the source image to be manipulated.
     */
    public function setSource(string|Asset $source): self;

    /**
     * Defines the manipulations to be performed.
     */
    public function setParams(array $params): self;

    /**
     * Gets the available manipulation parameters.
     */
    public function getAvailableParams(): array;

    /**
     * Gets the URL of the manipulated image.
     */
    public function getUrl(): string;

    /**
     * Reads the manipulated image and returns it as a data URL.
     */
    public function getDataUrl(): string;

    /**
     * Get attributes about the image (e.g. width, height)
     */
    public function getAttributes(): array;
}
