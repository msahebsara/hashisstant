# hashisstant
A PHP password hashing and verification wrapper.

## Creating a Hash
```
HashHelper::create('password');
```
You may optionally pass in a cost for the second argument (default is 10):
```
HashHelper::create('password', 12);
```


## Verify a Hash
```
$hash = HashHelper::create('password');
HashHelper::check('password', $hash)
```

