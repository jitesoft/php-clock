# Clock

Implementation of the [PSR-20](https://www.php-fig.org/psr/psr-20/) interface for Clock in php.

## Why

When working with time in php, it's common to either create a new DateTime (or preferably DateTimeImmutable) object
or to use the `time()` function.  
This makes testing a bit hard, seeing you would have to mock the `time` global function (which can be a pain) or do some
black magick to fake the DateTimeImmutable class.

## What more?

In the first implementation of this package, the only thing implemented is the `now` function, which returns
a `DateTimeImmutable` object.  
In the future, more functionality might be added.
 
## License

MIT
