# Mi PuliMetadataFileLocatorBundle

[![Latest Stable Version](https://poser.pugx.org/mi/puli-metadata-file-locator-bundle/v/stable)](https://packagist.org/packages/mi/puli-metadata-file-locator-bundle)
[![Latest Unstable Version](https://poser.pugx.org/mi/puli-metadata-file-locator-bundle/v/unstable)](https://packagist.org/packages/mi/puli-metadata-file-locator-bundle)
[![Total Downloads](https://poser.pugx.org/mi/puli-metadata-file-locator-bundle/downloads)](https://packagist.org/packages/mi/puli-metadata-file-locator-bundle)
[![License](https://poser.pugx.org/mi/puli-metadata-file-locator-bundle/license)](https://packagist.org/packages/mi/puli-metadata-file-locator-bundle)
[![StyleCI](https://styleci.io/repos/42353685/shield)](https://styleci.io/repos/42353685)

## Overview

...

## Installation

1. Add this bundle to your project as a composer dependency:

  ```bash
  composer require mi/puli-metadata-file-locator-bundle
  ```

2. Add this bundle in your application kernel:

    ```php
    // app/AppKernel.php
    public function registerBundles()
    {
        // ...
        $bundles[] = new \Mi\Bundle\PuliMetadataFileLocatorBundle\MiPuliMetadataFileLocatorBundle();

        return $bundles;
    }
    ```

## Usage

...

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

# License

This library is under the [MIT license](https://github.com/MovingImage24/MiPuliMetadataFileLocatorBundle/blob/master/LICENSE).
