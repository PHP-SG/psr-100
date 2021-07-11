==== This is not a FIG PSR and has not undergone the rigorous process to become one ====

# PSR 100
In the interest of standardizing code, particularly standardizing access to PSR 15 factories, PSR 7 interfaces have been appended to have both the factory methods, and the assumed-subject methods (`create`, `createFromFile`, `createFromResource`).

Since these interfaces extend PSR 7 and PSR 15 interfaces, implementation objects can be used where such is expected.

I've numbered this PSR 1XX under the premise FIG will not get to 1XX in a long time, or will never get to it, and so, my PSR's will not conflict for a very long time, and if they ever conflict, and my standards are not accepted, they can just be ignored at that time.



## Use
See implementation based on https://github.com/php-sg/psr100-implementation

Middleware example
```php
class Middleware implements \Psr\Http\Server\MiddlewareInterface{
	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface {
		# because getBody() returns a PSR 100 stream, and the stream now has the `create` method, it is unnecessary to use an outside factory dependency
		$newBody = $request->getBody()->create('New Body')
		# as such, the middleware is self-contained
		$request->withBody($newBody)

		#...

	}
}
```