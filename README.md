# 404

404 status helper function for WordPress themes.

## Installation

You can install the package via Composer:

```bash
composer require mindkomm/theme-lib-404
```

## Functions

| Name | Summary | Type | Returns/Description |
| --- | --- | --- | --- |
| [force_404](#force_404) | Forces 404 headers on a query. |  |  |

### force\_404

<p class="summary">Forces 404 headers on a query.</p>

Use this function in a [WordPress template file](https://wphierarchy.com/).

When a template other than 404.php is loaded, the proper headers for a 404 status are not set properly.
This function can be used to set proper headers even after a template file is loaded.

What you have to do after this request is to include the 404 template and exit after it.

**PHP**

```php
if ( 'publish' !== $post->post_status ) {
    force_404();
    Timber::render( '404.twig', $context );
    exit;
}
```

---


## Support

This is a library that we use at MIND to develop WordPress themes. You’re free to use it, but currently, we don’t provide any support. 
